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


//Student Update Button
  $('.StudentChangeStatusSelectButton').click(function(e){ 
    e.preventDefault();  
    var ids = new Array();
    $("input:checkbox[dataclass=studentids]:checked").each(function() {
       ids.push($(this).data('id'));
    });
    console.log(ids);
    var newURL = $(this).data('action');    
    var newData  = {
            'Ids' : ids,
            'IsActive' : $(this).data('cmd'),
        }

    $.ajax({
        url: newURL,
        type:'POST',
        dataType: "json",   
        data: newData,
        success: function(data) {
          console.log(data);            
          if($.isEmptyObject(data.error)){ 
              $.gritter.add({title:"Success",text:"Record Update Successful. Redirecting...",class_name:"color success"});
              window.setTimeout(function(){
                window.location.href = data.redirect;  
              }, 1000);
            }
            else{
              $.gritter.add({title:"Error",text:data.error,class_name:"color danger"});
            }
        $("#document_reg_btn").prop("disabled", false);  
        $("#document_reg_btn").text("Submit");           
        }
    });   



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





//Document Update Button
  $('#DocumentUpdateSelectButton').click(function(e){ 
      var url = $(this).data('url');
      var count = 0;
      var n = '';
      $("input:checkbox[dataclass=documentids]:checked").each(function() {
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


//Document Delete Button
  $('#DocumentDeleteSelectButton').click(function(e){ 
      var url = $(this).data('url');
      var count = 0;
      var n = '';
      var ids = new Array();
      $("input:checkbox[dataclass=documentids]:checked").each(function() {
         count = count + 1;
         n = $(this).data('id');
         ids.push(n);
      });
      if (count == 0) {
        $.gritter.add({title:"",text:'Nothing is selected.',class_name:"color warning"});
      }
      else {
        $('#all_delete_modal').modal();
        $('input[name=Class]').val('documentids');
        $('#all_delete_form').attr('action',url);
      }

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



//Document Update Button
  $('#GenericUpdate').click(function(e){ 
      var count = 0;
      var n = '';
      var item;
      $("input:checkbox[dataclass=genericids]:checked").each(function() {
         count = count + 1;
         n = $(this).data('id');
         item = $(this);
      });

      if (count == 0) {
        $.gritter.add({title:"",text:'Nothing is selected.',class_name:"color warning"});
      }
      else if(count == 1) {
        
        $('#generic_add_edit_title').text('Edit Record');
        $('input[name=Id]').val(item.data('id'));
        $('input[name=Code]').val(item.data('code'));
        $('input[name=Name]').val(item.data('name'));
        $('textarea[name=Description]').val(item.data('desc'));
        $('#generic_reg_form').attr('action',item.data('action') + 'update');
        if (item.data('status') == '1') {
           $('#Inactive').attr('checked',false);      
           $('#Active').attr('checked',true);
        }else{
          $('#Active').attr('checked',false);
          $('#Inactive').attr('checked',true);
        }
        $('#generic_add_edit').modal();



      } else if (count > 1) {
        $.gritter.add({title:"",text:'Please select single record.',class_name:"color warning"});
      } else {
        $.gritter.add({title:"",text:'Something went wrong.',class_name:"color warning"});
      }

  });



//DEL BUTTON IN TABLE
  $('.table-generic').delegate(".generic_del_btn", "click", function() {
    $('input[name=Id]').val($(this).data('id'));
    $('span[id=itemname]').text($(this).data('name'));
    $('#generic_del').modal();
  });


//Student Update Button
  $('#GenericDelete').click(function(e){ 
      var count = 0;
      var n = '';
      var ids = new Array();
      $("input:checkbox[dataclass=genericids]:checked").each(function() {
         count = count + 1;
         n = $(this).data('id');
         ids.push(n);
      });
      if (count == 0) {
        $.gritter.add({title:"",text:'Nothing is selected.',class_name:"color warning"});
      }
      else {

        $('input[name=Id]').val(ids);
        $('#generic_del').modal();

      }


  });




//[GENERIC DELETE]
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




//[ALL DELETE]
  $('#all_delete_form').submit(function(e){ 
    e.preventDefault();       
    $("#all_delete_btn").prop("disabled", true);  
    $("#all_delete_btn").text("Processing..");  
    var ids = new Array();
    $("input:checkbox[dataclass=" + $('input[name=Class]').val() + "]:checked").each(function() {
       ids.push($(this).data('id'));
    });
    var newURL = $(this).attr('action');    
    var newData = {
        'Id' : ids,
    }
    console.log(ids);
    $.ajax({
        url: newURL,
        type:'POST',
        dataType: "json",   
        data: newData,
        success: function(data) {
          console.log(data);            
            if($.isEmptyObject(data.error)){ 
              $.gritter.add({title:"Success",text:"Record Update Successful. Redirecting...",class_name:"color success"});
              // window.setTimeout(function(){
              //   window.location.href = data.redirect;  
              // }, 1000);
            }
            else {
              $.gritter.add({title:"Error",text:data.error,class_name:"color danger"});
            }
        $("#all_delete_btn").prop("disabled", false);  
        $("#all_delete_btn").text("Proceed");           
        }
    });   
  });



//REQUEST DOCUMENT BUTTON
  $('.myapptable').delegate(".RequestDocumentBtn", "click", function() {
    // alert($(this).data('id'));
    $('.report-opts').attr('data-appid',$(this).data('id'));
    $('.report-opts').attr('data-recordid',$(this).data('recordid'));    
    $('#ReportOptions').modal();
  });


//REPORT SELECTION
  $('.report-opts').click(function(e) {
    e.preventDefault();
    var recid = '';
    var studid = $(this).data('studid');
    var docid = $(this).data('docid');
    var appid = $(this).data('appid');
    var newURL = $('#ReportOptions').data('action');    
    var newData = {
        'StudentId' : studid,
        'DocumentId' : docid,
        'ApplicationId' : appid,
    }
    console.log(newData);
    $.ajax({
        url: newURL,
        type:'POST',
        dataType: "json",   
        data: newData,
        success: function(data) {
          console.log(data);   
            if($.isEmptyObject(data.error)){ 
              var data_id = data.data[0].Id;
              var doc_content = data.report[0].Content;
              var doc_name = data.report[0].DocumentName;
              $('.report-title').text(doc_name + " (Letterhead not included)");
              $('.report-content').html(doc_content);
              $('input[name=pDocumentId]').val(docid);
              $('input[name=pApplicationId]').val(appid);
              $('input[name=pRecordId]').val(recid);

            }
            else {
              $.gritter.add({title:"Error",text:data.error,class_name:"color danger"});
            }
        // $("#all_delete_btn").prop("disabled", false);  
        // $("#all_delete_btn").text("Proceed");           
        }
    }); 
    $('#ReportOptions').modal('toggle');
    // $("#ReportOptions .close").click()
    $('#ReportSelectionPreview').modal();
  });



//PROCEED DOCUMENT REQUEST
  $('#reportproceed').submit(function(e) {
    e.preventDefault();  
    var newURL = $('#reportproceed').attr('action');    
    var newData = new FormData(this); 
    console.log(newData);
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

              $.gritter.add({title:"Success!",text:"Update Successful.",class_name:"color success"});

             $('#ReportSelectionPreview').modal('toggle');             

            }
            else {
              $.gritter.add({title:"Error",text:data.error,class_name:"color danger"});
            }
        // $("#all_delete_btn").prop("disabled", false);  
        // $("#all_delete_btn").text("Proceed");           
        }
    }); 

  });




//APPROVE / REJECT
  $('.myapptable').delegate(".approverequest", "click", function(e) {
    e.preventDefault();
    var newURL = $(this).data('action');    
    var newData = {
        'Id' : $(this).data('id'),
        'Status' : $(this).data('cmd'),
    }
    console.log(newData);

    if ($(this).data('cmd') == '1') {
        window.setTimeout(function(){
          window.open(newURL, '_blank'); 
        }, 1000);
        return false;
    }

    $.ajax({
        url: newURL,
        type:'POST',
        dataType: "json",   
        data: newData,
        success: function(data) {
          console.log(data);   
            if($.isEmptyObject(data.error)){ 
              $.gritter.add({title:"Success",text:'Update Successul. Generating Document...',class_name:"color success"});
              window.setTimeout(function(){
                window.open(data.newtab, '_blank'); 
              }, 1000);

            }
            else {
              $.gritter.add({title:"Error",text:data.error,class_name:"color danger"});
            }
        // $("#all_delete_btn").prop("disabled", false);  
        // $("#all_delete_btn").text("Proceed");           
        }
    }); 
  });




//[RECORD REGISTER]
  $('#record_reg_form').submit(function(e){ 
    e.preventDefault();       
    $("#record_reg_btn").prop("disabled", true);  
    $("#record_reg_btn").text("Processing..");  
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
        $("#record_reg_btn").prop("disabled", false);  
        $("#record_reg_btn").text("Submit");           
        }
    });   
  });


//[SEND CODE]
  $('#SendRecoveryCode').click(function(e){ 
    e.preventDefault();       
    $("#SendRecoveryCode").prop("disabled", true);  
    var newURL = $('#recoveryform').attr('action')+'sendcode';    
    var newData  = {
            'Email' : $('#Email').val(),  
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
              // window.setTimeout(function(){
              //   window.location.href = data.url;  
              // }, 1000);
            }
            else{
               $.gritter.add({title:"Error",text:data.error,class_name:"color danger"});
            }
          $("#SendRecoveryCode").prop("disabled", false);           
        }
    });   
  });



$('#companyidselect').change(function(e){
  if ($(this).val() != '') {
    $('#companynametext').val($("#companyidselect option:selected").text());
  }

});









});