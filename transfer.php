<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>database</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>



<!-- /* body{
 margin:0;
 padding: 0;
 font-family:sans-serif;
 background-image: linear-gradient(rgba(0,0,0,5),rgba(0,0,0,0.3)),url("bg.jpg");
 background-size: cover; 
}

</style>     -->

<img src="cc4.jpg" alt="photo">

<?php
$con=mysqli_connect("localhost","id14959517_cms","2o-*mKgRNkt8g(|b","id14959517_table");
if($con->connect_error){
    die("connection failed".$con->connect_error);
}

$credit=$_POST['credit'];
$Sender=$_POST['Sender'];
$Receiver=$_POST['Receiver'];
$record="SELECT credit from `id14959517_table`.`traansfer` WHERE username='$Sender'";


$result=mysqli_query($con,$record);
$row=mysqli_fetch_assoc($result);
$num=(int)implode('',$row);
?>
<div class="text-center">
<?php
if($Sender==$Receiver)
{
    
echo "<p class='msg'>YOU HAVE ENTERED SAME SENDER AND RECEIVER.....TRY AGAIN!!</p>";

}
else if(empty($credit)){
    echo "<p class='msg'>credit is  empty</p>";
}
elseif($credit>$num){
echo "<p class='msg'>INSUFFICIENT CREDIT BALANCE!!!!</p>";
}

elseif($credit<0){
    echo "<p class='msg'>ENTERED NUMBER IS NEGATIVE</p>";
}
elseif($credit==0){
echo "<p class='msg'>CREDITS ENTERED AS ZERO...TRY AGAIN!</p>";
}

else{
    $sl="INSERT INTO `id14959517_cms`.`user`(`Sender`, `Receiver`, `credit`) VALUES ('$Sender','$Receiver','$credit');";

mysqli_query($con,"UPDATE `id14959517_table`.`traansfer` SET credit = credit - '$credit' WHERE username='$Sender'");
mysqli_query($con,"UPDATE `id14959517_table`.`traansfer` SET credit = credit + '$credit' WHERE username='$Receiver'");

echo "<p class='msg'>TRANSACTION SUCCESSFULL</p>";
if($con->query($sl)==true){
    // echo"successfully inserted";
    // $insert=true;
}

else{
    echo "ERROR: $sl <br> $con->error";
}

}
$con->close();
?> 
<br><br><br>
<a href="credit-user.php"><button type="button" class="btn btn-outline-secondary">RETURN</button></a>

</div>


<style>
img{
  width: 100%;
  height: 100%;
  opacity:0.3;
  position:absolute;
z-index: -1;
}
.msg{
    color:red;
    font-size:40px;
}



</style>

</body>
</html>