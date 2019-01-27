$(document).ready(function() {

  if ($('#pre-loaded-content').length > 0 && $('.note-editable').length > 0) {
    $document_content = $('#pre-loaded-content').val();
    $('.note-editable').html($document_content);
  }



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
    // for(var pair of newData.entries()) {
    //    console.log(pair[0]+ ', '+ pair[1]); 
    // }
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
              $.gritter.add({title:"Success",text:"Record Update Successful. Redirecting...",class_name:"color success"});
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



//[DOCUMENT REGISTER]
  $('#document_reg_form').submit(function(e){ 
    e.preventDefault();       
    $("#document_reg_btn").prop("disabled", true);  
    $("#document_reg_btn").text("Processing..");  
    var newURL = $(this).attr('action');    
    var newData = new FormData(this); 
    newData.append('Content', $('.note-editable').html());
    newData.delete('files');
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
              $.gritter.add({title:"Success",text:"Record Update Successful. Redirecting...",class_name:"color success"});
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
        $("#document_reg_btn").prop("disabled", false);  
        $("#document_reg_btn").text("Submit");           
        }
    });   
  });




//[Application REGISTER]
  $('#application_reg_form').submit(function(e){ 
    e.preventDefault();       
    $("#application_reg_btn").prop("disabled", true);  
    $("#application_reg_btn").text("Processing..");  
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
              $.gritter.add({title:"Success",text:"Record Update Successful. Redirecting...",class_name:"color success"});
              window.setTimeout(function(){
                window.location.href = data.redirect;  
              }, 1000);
            }
            else {
              $c = 0;
              $.each(data.responses, function(key,value) {
                $c = $c + 1;
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
              if ($c == 0) {
                $.gritter.add({title:"Error",text:"Record Update Unsuccessful.",class_name:"color danger"});
              }
            }
        $("#application_reg_btn").prop("disabled", false);  
        $("#application_reg_btn").text("Submit");           
        }
    });   
  });



//[GENERIC REGISTER]
  $('#generic_reg_form').submit(function(e){ 
    e.preventDefault();       
    $("#generic_reg_btn").prop("disabled", true);  
    $("#generic_reg_btn").text("Processing..");  
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
              $.gritter.add({title:"Success",text:"Record Update Successful. Redirecting...",class_name:"color success"});
              window.setTimeout(function(){
                window.location.href = data.redirect;  
              }, 1000);
            }
            else {
              $c = 0;
              $.each(data.responses, function(key,value) {
                $c = $c + 1;
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
              if ($c == 0) {
                $.gritter.add({title:"Error",text:"Record Update Unsuccessful.",class_name:"color danger"});
              }
            }
        $("#generic_reg_btn").prop("disabled", false);  
        $("#generic_reg_btn").text("Submit");           
        }
    });   
  });




//EDIT BUTTON IN TABLE
  $('.table-generic').delegate(".generic_edit_btn", "click", function() {
    $('#generic_add_edit_title').text('Edit Record');
    $('input[name=Id]').val($(this).data('id'));
    $('input[name=Code]').val($(this).data('code'));
    $('input[name=Name]').val($(this).data('name'));
    $('textarea[name=Description]').val($(this).data('desc'));
    $('#generic_reg_form').attr('action',$(this).data('action'));
    if ($(this).data('status') == '1') {
       $('#Inactive').attr('checked',false);      
       $('#Active').attr('checked',true);
    }else{
      $('#Active').attr('checked',false);
      $('#Inactive').attr('checked',true);
    }
    $('#generic_add_edit').modal();
  });

//DEL BUTTON IN TABLE
  $('.table-generic').delegate(".generic_del_btn", "click", function() {
    $('input[name=Id]').val($(this).data('id'));
    $('span[id=itemname]').text($(this).data('name'));
    $('#generic_del').modal();
  });



//[GENERIC REGISTER]
  $('#generic_del_form').submit(function(e){ 
    e.preventDefault();       
    $("#generic_del_btn").prop("disabled", true);  
    $("#generic_del_btn").text("Processing..");  
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
              $.gritter.add({title:"Success",text:"Record Update Successful. Redirecting...",class_name:"color success"});
              window.setTimeout(function(){
                window.location.href = data.redirect;  
              }, 1000);
              // var Id = data.id;
              // var table = $('#table3').DataTable();
              // table.row($('#row'+data.id))
              // .remove()
              // .draw();
            }
            else {
              $c = 0;
              $.each(data.responses, function(key,value) {
                $c = $c + 1;
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
              if ($c == 0) {
                $.gritter.add({title:"Error",text:"Record Update Unsuccessful.",class_name:"color danger"});
              }
            }
        $("#generic_del_btn").prop("disabled", false);  
        $("#generic_del_btn").text("Yes");           
        }
    });   
  });













});