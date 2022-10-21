<?php
class User
{
    function __construct($con)
    {
        $this->con=$con;
    }
    function signin($em,$pa)
    {
    $stmt="Select * from user where email='$em' and password='$pa'";
    $res=mysqli_query($this->con,$stmt);
    $num=mysqli_num_rows($res);
    if($num>0)
    {
        return true;
    }
    else{
        return false;
    }
    }
   
    function user($em)
    {
        $stmt="select * from user where email='$em'";
        $res=mysqli_query($this->con,$stmt);
        $detail=mysqli_fetch_assoc($res);
        return $detail;

    }
}
?>