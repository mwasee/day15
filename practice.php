<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="formcss.css" rel="stylesheet" type="text/css"/>
        
    </head>
    <body>
        <form id="myform">
           
           <div class="container">    
  <div class="form-group">
    <label for="name">NAME</label>
    <input type="text" class="form-control" placeholder="Enter name" name="name">
  </div>
               
  <div class="form-group">
    <label for="class">CLASS</label>
    <input type="class" class="form-control" name="class">
  </div>
               
                   <div class="form-group">
                   <label for="city">CITY</label>
                   <input type="text" class="form-control" name="city">
               </div>
               
               <div class="form-group">
                   <label for="age">AGE</label>
                   <input type="number" class="form-control" name="age">
               </div>
               
               <div class="form-group">
                   <label for="height">HEIGHT</label>
                   <input type="text" class="form-control" name="height">
               </div>
               
  <button type="submit" class="btn btn-secondary">Check value</button>
</form>
        <div id="result"></div>
</div>
        <script src="js/jquery-3.2.1.js" type="text/javascript"></script>
        <script src="js/popper.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        
        
        <script type="text/javascript">
            
$("#myform").submit(function(event)
{
     var ajaxRequest;
   
    event.preventDefault();

        $("#result").html('');

    
    var values = $(this).serialize();
       ajaxRequest= $.ajax({
            url: "formaction.php",
            type: "post",
            data: values
        });

     ajaxRequest.done(function (response, textStatus, jqXHR){
          
          $("#result").html(response);
     });

     ajaxRequest.fail(function (){
       
       $("#result").html('There is error while submit');
     });
 });
       </script> 
    </body>
</html>
