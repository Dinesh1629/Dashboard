
<?php
function navbar(){
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Example of Bootstrap 3 Static Navbar Extended</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
    #text2{
        font-size:30px;
        padding-top:7%;
        margin-left:300px;
        font-family:Verdana, Geneva;
    
            }
    #nav{
        margin-top:-1%;
        background-color: #9999e6;
        color:white;
        text-shadow:0px 0px 2px black;
        }

    
</style>
</head> 
<body id="body">
<div class="bs-example">
    <nav class="navbar navbar" id="nav">
  <div class="container-fluid" >
    <div class="navbar-header">
      <button type="button " class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <div>
      <a class="navbar-brand" id="img"> <img src="img\logo.png" id="img1" height="100px" width="80px"></a>
    </div>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active">
          <div class="text">
          <h1 id="text2">Sasurie College Of Engineering</h1>
        </div>
      </li>
      </div>  
</nav>
</div>
</body>
</html>                            
<?php
}
?>