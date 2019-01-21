$(document).ready(function() {

//[LOGIN SUBMIT]
  $('#loginform').submit(function(e){ 
    e.preventDefault();       
    $("#login-btn").prop("disabled", true);  
    var newURL = $(this).attr('action');    
    var newData  = {
            'Username' : $('#username').val(),  
            'Password' : $('#password').val(),
        }
    $.ajax({
        url: newURL,
        type:'POST',
        dataType: "json",     
        data: newData,
        success: function(data) {
          console.log(data);            
          if($.isEmptyObject(data.error)){ 
              $.gritter.add({title:"Success",text:"Authentication Successful. Redirecting...",class_name:"color success"})
              window.setTimeout(function(){
                window.location.href = data.url;  
              }, 1000);
            }
            else{
               $.gritter.add({title:"Error",text:data.error,class_name:"color danger"});
            }
          $("#login-btn").prop("disabled", false);           
        }
    });   
  });


//[STUDENT REGISTER]
  $('#student_reg_form').submit(function(e){ 
    e.preventDefault();       
    $("#student_reg_btn").prop("disabled", true);  
    $("#student_reg_btn").text("Processing..");  
    var newURL = $(this).attr('action');    
    var newData = new FormData(this); 
    var EditMode = 0;
    for(var pair of newData.entries()) {
       console.log(pair[0]+ ', '+ pair[1]); 
    }
    $.ajax({
        url: newURL,
        type:'POST',
        dataType: "json",   
        data: newData,
        contentType: false,
        cache: false,  
        processData:false,  
        success: function(data) {
          console.log(data);            
          if($.isEmptyObject(data.error)){ 
              $.gritter.add({title:"Success",text:"Authentication Successful. Redirecting...",class_name:"color success"});
              window.setTimeout(function(){
                window.location.href = data.redirect;  
              }, 1000);
            }
            else{
              $.each(data.responses, function(key,value) {
                var element = $('[name='+key+']');
                element.next('.parsley-errors-list').remove();
                element.removeClass('parsley-error');
                element.addClass(value.length > 0 ? 'parsley-error' : '');
                if (element.closest('.datetimepicker').length > 0) {
                  element.closest('.datetimepicker').after(value);
                }else{
                  element.after(value);
                }
                
              });
            }
        $("#student_reg_btn").prop("disabled", false);  
        $("#student_reg_btn").text("Submit");           
        }
    });   
  });



//Student Update Button
  $('#StudentUpdateSelectButton').click(function(e){ 
      var url = $(this).data('url');
      var count = 0;
      var n = '';
      $("input:checkbox[dataclass=studentids]:checked").each(function() {
         count = count + 1;
         n = $(this).data('id');

      });

      if (count == 0) {
        $.gritter.add({title:"",text:'Nothing is selected.',class_name:"color warning"});
      }
      else if(count == 1) {
        window.location.href = url + n;
      } else if (count > 1) {
        $.gritter.add({title:"",text:'Please select single student.',class_name:"color warning"});
      } else {
        $.gritter.add({title:"",text:'Something went wrong.',class_name:"color warning"});
      }

  });





});