<?php
    $a=(int)$_POST['rno'];
    $b=$_POST['nm'];
    $mysqli=mysqli_connect("localhost","root","","stud");
    if(mysqli_connect_errno( )) 
    {
        print("error %s".mysqli_connect_error( ));
        exit( );
    }
    else 
    {
        $sql="INSERT INTO BE(roll, name) VALUES ($a,'$b')";
        $res=mysqli_query($mysqli,$sql);
        if($res==TRUE)
        {
        echo"success";
        }
        else
        {
        echo "error", mysqli_error($mysqli);
        }
    }
        ?>
        