<?php

$conn = mysqli_connect('localhost','root','root','sensorvalues');

$value = $_GET['integer'];

if (isset($_GET['submit'])){
    $sql = "INSERT INTO sensor_values(sensorvalue)VALUES('$value')";
    mysqli_query($conn,$sql);
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sensor values</title>
</head>
<style>
    body { 
        display : flex ; 
        justify-content : center ;
         align-items : center ; 
         min-height : 100vh ;
          flex-direction : column ; 
          background : #040d15 ;}


    h1 {
        text-align: right;
        margin: 20px;

    }

    input{
         position : relative ; 
        display : inline - block ;
         padding : 12px 36px ; 
         margin : 10px 0 ; 
         color : #fff ; 
         text-decoration : none ; 
         text-transform : uppercase ;
          font-size : 18px ; 
          Letter-spacing : 2px ; 
          border-radius : 40px ; 
          background : linear-gradient( 90deg , #0162c8 , #55e7fc ) ;}

    input[type=text]{
    width:100%;
    border:2px solid #aaa;
    border-radius:4px;
    margin:8px 0;
    outline:none;
    padding:8px;
    box-sizing:border-box;
    transition:.3s;
  }
  
  input[type=text]:focus{
    border-color:dodgerBlue;
    box-shadow:0 0 8px 0 dodgerBlue;

  }
</style>
<body>
<form action="index.php" method="get">

<input type="text" name="integer">
<input type="submit" name="submit" value="send">

</form>
</body>


</html>

