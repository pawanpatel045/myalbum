<?php
include 'header.php';
if(!isset($_SESSION['email']))
{
    header("location:../index.php");
}

  if(isset($_SESSION['email']) && $_SESSION['email'] == "admin@gmail.com")
  {
 echo '<br><a href="nalbum.php"><button class="btnmain">Normal Album</button></a><br>';

  }
  
  if(isset($_SESSION['email']) && $_SESSION['email'] == "admin@gmail.com")
  {

 echo '<a href="palbum.php"><button class="btnmain">Premium Album</button></a><br>';
  }
  
  if(isset($_SESSION['email']))
  {
 echo '<a href="logout.php"><button id="btnlogout" class="btnmain">logout</button></a>';
  
  }
  
 echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>success</strong>Loged in successfully
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>';
if(isset($_SESSION['email']) && isset($_SESSION['isPremium']) && $_SESSION['isPremium']=='1')
{
    echo "welcome ".$_SESSION['name']." you are premium user";
    header('location:palbum.php');
}
elseif(isset($_SESSION['email']) && isset($_SESSION['isPremium']) && $_SESSION['isPremium']=='0')
{
    echo "welcome ".$_SESSION['name']." you are Normal user";
    header('location:nalbum.php');
}

?>
<body style="background-color:#FFC0CB">


<style>
  .btnmain{
    width: 10%;
    background-color: lightcyan;
    border-radius: 20px;;
    border: none;
  }
  .btnmain:hover
  {
    background-color: green;
    color: white;
  }

  </style>