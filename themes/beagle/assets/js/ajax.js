$(document).ready(function() {


  $('#loginform').submit(function(e){ //Input the form's ID or CLASS, use # for ID and . for CLASS
     e.preventDefault();       //This prevents the action to move to other page.
        $("#login-btn").prop("disabled", true);   //Disables the submit button after click 
        var newURL = $(this).attr('action');      //Get the form action attribute value.
        var newData  = {
                'Username' : $('#username').val(),     //List of data you want to post
                'Password' : $('#password').val(),
            }
          $.ajax({
              url: newURL,
              type:'POST',
              dataType: "json",       //Datatype shows what kind of data you are posting, in this case, purely text and no file.
              data: newData,
              success: function(data) {
                console.log(data);            //This is for testing only, it will show the result in browser console. Please remove it when deploying
                if($.isEmptyObject(data.error)){ 
                     //Checking if the data.error has value
                     $.gritter.add({title:"Success",text:"Authentication Successful. Redirecting...",class_name:"color success"})

                    window.setTimeout(function(){
                      window.location.href = data.url;  
                    }, 1000);

                  }
                  else{
                    
                     $.gritter.add({title:"Error",text:data.error,class_name:"color danger"})

                  }
                $("#login-btn").prop("disabled", false);     //Reenable the submit button after the action           
              }
          });   
  });

});