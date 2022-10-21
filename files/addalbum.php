<?php
include 'header.php';
 include 'oops/photo.php';
 include 'oops/database.php';
$connection=new connection();
$con=$connection->getdatabase();
$album=new Album($con);
$albumType=$_GET['albumType'];
if(!isset($_SESSION['email']))
{
    header("location:../index.php");
}
if(isset($_POST['submit']))
{
    $title=$_POST['title'];
    $description=$_POST['description'];
    $filename = $_FILES['img']['name'];

    $filetmp =$_FILES['img']['tmp_name'];
    $destination='../upload/'.$filename;
    move_uploaded_file($filetmp, $destination);
    $addAblum=$album->insertAlbum($title,$description,$filename,$albumType);
    
}
if(!isset($_SESSION['email']))
{
    header("location:../index.php");
}

  if(isset($_SESSION['email']) && $_SESSION['email'] == "admin@gmail.com")
  {
 echo '<br><a href="nalbum.php"><button class="btnmain">Normal</button></a><br>';

  }
  
  if(isset($_SESSION['email']) && $_SESSION['email'] == "admin@gmail.com")
  {

 echo '<a href="palbum.php"><button class="btnmain">Premium</button></a><br>';
  }
  
  if(isset($_SESSION['email']))
  {
 echo '<a href="logout.php"><button id="btnlogout" class="btnmain">logout</button></a>';
  
  }

?>
<body style="background-color:#FFC0CB">
<div class="container my-3">
<form id="addAlbum" method= "post" action="" enctype='multipart/form-data'>
  <div class="form-group">
    <label for="exampleInputEmail1">Album Title</label>
    <input type="text" class="form-control" id="title"  name="title">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <textarea  class="form-control" id="description" name="description"></textarea >
  </div>
  <b>Choose Image for Album</b>
 <input type="file" name="img" required >
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>

</form>

</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script src="../js/loginValidate.js"></script>

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