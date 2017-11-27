<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        
        <title>Demo</title>
      
    </head>
    <body>
        <form id="myform">
           NAME <input type="text" name="name" value="" /><br>
           
         SALARY  <input type="text" name="salary" value="" /><br>
         
       CITY  <input type="text" name="city" value="" />
       
       <input type="submit" value="submit" class="btn-outline-danger" />
           
        </form>
        
        <div id="result" style="height: 100px;border:2px solid red;">
            
        </div>
        <script src="js/jquery-3.2.1.js" type="text/javascript"></script>
        <script src="js/popper.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
          <script type="text/javascript">
            /* Attach a submit handler to the form */
$("#myform").submit(function(event)
{
     var ajaxRequest;
    /* Stop form from submitting normally */
    event.preventDefault();

    /* Clear result div*/
    $("#result").html('');

    /* Get from elements values */
    var values = $(this).serialize();

    /* Send the data using post and put the results in a div */
    /* I am not aborting previous request because It's an asynchronous request, meaning 
       Once it's sent it's out there. but in case you want to abort it  you can do it by  
       abort(). jQuery Ajax methods return an XMLHttpRequest object, so you can just use abort(). */
       ajaxRequest= $.ajax({
            url: "newdatabase.php",
            type: "post",
            data: values
        });

      /*  request cab be abort by ajaxRequest.abort() */

     ajaxRequest.done(function (response, textStatus, jqXHR){
          // show successfully for submit message
          //$("#result").html('Submitted successfully');
          $("#result").html(response);
     });

     /* On failure of request this function will be called  */
     ajaxRequest.fail(function (){
       // show error
       $("#result").html('There is error while submit');
     });
 });
            </script>
    </body>
</html>
