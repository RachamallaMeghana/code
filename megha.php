<html>
 <head> 
  <style>
     .error{
      color:red; 
      }
   </style> 
 </head> 
 <body bgcolor="aqua"> 
  <div class="progress bar"> 
   <div class="progress-bar bg-primary"> 
   </div> 
   <nav class="navbar navbar-expand"> 
    <ul class="navbar-navnar"> 
     <li><a class="nav-link" href="#">File</a>&nbsp; <a class="nav-link" href="#">view</a>&nbsp; <a class="nav-link" href="#">Menu</a>&nbsp; <a class="nav-link" href="#">services</a>&nbsp; <a class="nav-link" href="#">Outcomes</a>&nbsp; </li> 
    </ul> 
   </nav> 
  </div> ?php $name=$passw=$gender=""; $nameErr=$passErr=$genderErr=""; if($_SERVER["REQUEST_METHOD"]=="POST") { if(empty($_POST["name"])) { $nameErr="Name is required"; }else{ $name=$_POST["name"]; } if(empty($_POST["pass"])) { $passErr="Password is required"; }else{ $passw=$_POST["pass"]; } if(empty($_POST["gender"])) { $genderErr="Gender is required"; }else{ $gender=$_POST["gender"]; } } ? ?php echo $name; echo " 
  <br>"; echo $passw; echo " 
  <br>"; echo $gender; ?&gt; 
  <fieldset> 
   <img src="https://pbs.twimg.com/media/Et1y8DVXIAEAB-J.jpg" style="width:1020px; height:200px;"> 
   <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
     Name: 
    <input type="text" name="name"> 
    <span class="error"> 
     <!--*php echo $nameErr;?--></span> 
    <br> Password: 
    <input type="password" name="pass"> 
    <span class="error">* 
     <!--?php echo $passErr;?--></span> 
    <br> Gender: 
    <input type="radio" name="gender" value="female">Female 
    <input type="radio" name="gender" value="Male">Male 
    <span class="error">* 
     <!--?php echo $genderErr;?--></span> 
    <br> 
    <input type="checkbox" name="All are true">checkbox 
    <span class="error">* 
     <!-- ?php echo $trueErr;?--></span> 
    <br> 
    <input type="submit" value="Submit"> 
   </form> 
  </fieldset> 
 </body>
</html>