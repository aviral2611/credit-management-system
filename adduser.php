
<?php
$insert=false;
$not_inserted=false;
if(isset($_POST['submit'])){

$con=mysqli_connect("localhost","id14959517_cms","2o-*mKgRNkt8g(|b","id14959517_table");
if($con->connect_error){
    die("connection failed".$con->connect_error);
}

?>
<?php

// if(isset($_POST['submitted'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $credit=$_POST['credit'];

    $sqlinsert="INSERT INTO `id14959517_table`.`traansfer` (`username`,`email`,`credit`)  VALUES  ('$username','$email','$credit');";
    // echo $sqlinsert;

    // if(!mysqli_query($con,$sqlinsert))
    // {
    //     die("error  insering new record");
    // }
// }    
if($con->query($sqlinsert)==true){
    // echo"successfully inserted";
    $insert=true;
}
else{
    echo "ERROR: $sqlinsert <br> $con->error";
    $not_inserted=true;
}

$con->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>









<style>


img{
        position:absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    @media (min-aspect-ratio: 16/9) {
      img{
       
        width: 100%;
        height: 100%;
      }
    }
    @media (max-aspect-ratio: 16/9) {
    img{
       
       width:100%; 
        height: 100%;

        padding:0
      }
    }

    img{
  object-fit:fill

}

img{
  width: 100%;
  height: 100%;
  opacity:0.9;
  position:absolute;
z-index: -1;
}






* {
  box-sizing: border-box;
}

input[type=number], select{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
input[type=text], select{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=number], select{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
input[type=text], select{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}




.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit]
 {
    width: 100%;
    margin-top: 0;
  }
}






/* form{
    font-size:50px;
}
.username{
    font-size:20px;
}
.number{
    font-size:20px;
}
.email{
    font-size:20px;
} */
#sub{
    font-size:40px; 
}
.msg{
    font-size:25px;
    color:blue;
}
img{
    position:fixed;
    opacity:0.3;
    z-index:-1;
    width:100%;
}
/* .btn{
  font-size:30px;
} */

</style>
<img  src="cc4.jpg" alt="addimage">
<div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
            <form class="form-example" action="adduser.php" method="POST">
            <div class="row">
                <div class="col-25">
                    <label for="username">Username:</label>
                    </div>
                    <div class="col-75">
                    <input type="text" class="form-control username" name="username" placeholder="Enter Username..." name="username">
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="email">Email:</label>
                    </div>
                    <div class="col-75">
                    <input type="email" class="form-control email" name="email" placeholder="Enter Email..." name="email">
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="number">Credits:</label>
                    </div>
                    <div class="col-75">
                    <input type="number" class="form-control number" min="1" name="credit" placeholder="Enter Credits..." name="credit">
                </div>
                </div>
                <div class="text-center">
                <button type="submit"  name="submit" class="btn btn-primary btn-customized">Submit</button>
                </div>
            </form>
            <div class="text-center">
            <?php
            
            if($insert==true){
                
            echo "<p class='msg'>𝓘𝓷𝓯𝓸𝓻𝓶𝓪𝓽𝓲𝓸𝓷 𝓐𝓭𝓭𝓮𝓭 𝓢𝓾𝓬𝓬𝓮𝓼𝓼𝓯𝓾𝓵𝓵𝔂!!!</p>";
           
        }

            ?>
             </div>
        </div>
    </div>
</div>
<br><br><br><br>
<div class="text-center">
<a href="index.php"  ><button id="sub" type="button" class="btn btn-outline-dark">LIST</button>
</a>
<br><br>
</div>

</body>
</html>