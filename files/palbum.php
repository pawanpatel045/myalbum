<?php
include 'header.php';
 include 'oops/photo.php';
 include 'oops/database.php';
$connection=new connection();
  $con=$connection->getdatabase();
if(!isset($_SESSION['email']))
{
    header("location:../index.php");
}
$album=new Album($con);
$details=$album->getpalbum();
if(isset($_GET['updated']))
{
  $value=$_GET['val'] ? "Published":"Unpublished";
  echo '
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Congratulations</strong> Successfully '.$value .'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div> 
          ';
}
if(isset($_GET['current']))
{
    $curr=($_GET['current']=="Publish") ? "1":"0";
    $albumid=$_GET['albumid'] ;
    $updateResult=$album->ualbum($curr,$albumid);
    if($updateResult)
    {
      
      header('location:palbum.php?updated=true&val='.$curr.'');
    

    }

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
<div class="container">
<h4>Premium album</h4>
<?php 
if(isset($_SESSION['email']) && $_SESSION['email'] == "admin@gmail.com")
{

  echo '<a class="btn btn-info my-4" href="addalbum.php?albumType=1">Add New Album</a>';
}
foreach($details as $detail){
echo '<div class="row d-flex justify-content-center mx-1">
<div class="card mx-1" style="width: 22rem;">
  <img src="../upload/'.$detail['albumimage'].'" height="200" class="card-img-top" alt="">
  <div class="card-body">
    <h5 class="card-title">'.$detail['Title'].'</h5>
    <p class="card-text">'.$detail['Description'].'</p>
    <a href="valbum.php?albumId='.$detail['id'].'" class="btn btn-info ">View Album</a>'; ?>
   <?php
      if(isset($_SESSION['email']) && $_SESSION['email'] == "admin@gmail.com")
      {
        $button = $detail['isPublish']?  "Unpublish":"Publish" ;
        echo '<a href="palbum.php?current='. $button .'&albumid='.$detail['id'].' " class="btn btn-success ">'.$button.'</a>';
      }
    ?> 
<?php
   echo '</div>
</div> ';
}
?>

</div>
</div>
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
