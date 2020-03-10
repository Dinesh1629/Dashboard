<?php
function navbar(){
	?>
<!DOCTYPE html>
<html>
<head>
	<title>nav</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	#myNavbar
  {
    color:black;

  }
  .text
  {
    font-size:30px;
  }
  .rules
  {
    font-size:20px;

  
}

  
   .navbar
   {
    padding-top:-20px;
   }
   #row1
   {
     border-style: dotted;
      margin-right:3px;
      width:500px;
    
   }
   #row2
   {
     border-style:dotted;
     font-size:20px;
     padding-bottom:25px;
     width:500px;

      
   }
   .p
   {
    content: '✓';

   }
   ul p:before {
  content: '✓';
}
#img
{
  padding-left:10px;
  padding-top:-10px;
  
}
#nav
{
  box-shadow: 0px 0px 50px green;
}
#button
{

 border-radius: 25%; 
 background-color: orange;
 box-shadow:black;
 border-style:solid;
    border-width: 5px;
    color:white;
    border-color:black;

}
.ul
{
  margin-right:-10px;
}
  
  
</style>
<body>
  <header>
<nav class="navbar navbar-inverse" style="background-color:lightblue;padding-bottom:20px" id="nav">
  <div class="container-fluid" >
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <div>
      <a class="navbar-brand" id="img"> <img src="img/logo.png" height="130px" width="100px"></a>
    </div>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active">
          <div class="text" style="padding-left:400px">
          <h1>Sasurie College </h1>
          <h1>Of Engineering</h1>
        </div>
      </li>
      </div>
  
</nav>
</header>

</body>
</html>
<?php
}
?>