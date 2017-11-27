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
        <link href="paper.css" rel="stylesheet" type="text/css"/>
        <title>application form</title>
    </head>
    <body>
        <div id="header">
            <h2> Request for White Paper</h2>
        </div>
        <div id="menu"><span>Please fill out the form below, If you have any question please visit</span>
            <a href="www.gmail.com">whitepaperactron.com</a>
        </div>
        <div id="line"></div>
        <div id="line2"></div>
        
        <form id="newform" action="paper.php" method="post">
            <div class="container">
                <div class="form-group">
                    <label for="name">NAME</label>    
                    <input type="text" class="form-control" placeholder="Enter Name" name="name">
                </div>
           
            <div class="form-group">
                <label for="company">COMPANY NAME</label>
                <input type="text" class="form-control" placeholder="Company Name" name="companyname">
            </div>
            <div class="form-group">
                <label for="email">E-Mail</label>
                <input type="text" class="form-control" placeholder="Enter E-mail" name="email">
            </div>
                <div class="form-group">
                    <label for="phone">PHONE</label>
                    <input type="number" class="form-control" placeholder="With Int.Code" name="phone">
                </div>
                 <div class="form-group">
                    <label for="state">STATE</label>
                    <input type="state" class="form-control" name="state">
                </div>
                 <div class="form-group">
                    <label for="country">COUNTRY</label>
                    <input type="country" class="form-control" name="country">
                </div>
                 <div class="form-group">
                    <label for="comment">COMMENT</label>
                    <input type="comment" class="form-control" name="comment">
                </div>
                <input type="submit" value="Recieve Paper" class="btn btn-info" />
             </div>
        </form>
                
        <script src="js/jquery-3.2.1.js" type="text/javascript"></script>
        <script src="js/popper.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
    </body>
</html>
