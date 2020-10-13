<?php
    include_once('../includes/dbcon.php');
    $sql="select * from students";
    $result=mysqli_query($con,$sql);
    $row=mysqli_num_rows($result);
    if($row>0){
        while($row=mysqli_fetch_assoc($result))
        {
            echo $row['name']."  email is: ".$row['email']."  Phone No. is : ".$row['phone']."<br>";
        }
        echo "data exist."."<br>";
        echo "NO. Rows : ".$row;
    }
    else{
        echo "There is no data.";
    }
    $sql="insert into students(name,email,phone,address) values('win','win@gmail.com','09772321211','Newyork')";
    $result=mysqli_query($con,$sql);
    if($result)
    {
    echo "Success";

    }
    else
    {
    echo mysqli_error($con);

    }
?>