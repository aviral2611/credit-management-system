<?php

$del=false;
if(isset($_POST['delete'])){
    $con=mysqli_connect("localhost","id14959517_cms","2o-*mKgRNkt8g(|b","id14959517_table");


    $userID=$_POST['userID'];

$query="DELETE FROM `id14959517_table`.`traansfer` WHERE `userID`='$userID';";
// $result=mysqli_query($con,$query);
if($con->query($query)==true){
    // echo"successfully inserted";
    $del=true;
}
else{
    echo "ERROR: $query <br> $con->error";
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
img{
    position:absolute;
    top:0%;
    left:0%;
    opacity:0.3;
    z-index:-1;
    width:100%;
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
.msg{
    font-size:25px;
    color:blue;
}
#sub{
  font-size:40px;
}
/* #sub{
    font-size:20px;

} */
</style>
<img  src="cc4.jpg" alt="addimage">
<div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
            <form class="form-example" action="deleteuser.php" method="post">


            <div class="row">
                <div class="col-25">
                    <label for="userID">UserID:</label>
                    </div>
                    <div class="col-75">
                    
                    <input type="text" class="form-control username" name="userID" placeholder="Enter Username..." name="username">
                </div>
                </div>
            
                <!-- <div class="form-group">
                    <label for="userID">UserID:</label>
                    <input type="text" class="form-control username" name="userID" placeholder="Enter UserID..." name="userID">
                </div>   -->
                <br>
                <div class="text-center">
                <button id="sub1" type="submit" name="delete" class="btn btn-primary btn-customized">Submit</button>
                </div>



            </form>
            
            <div class="text-center">
            <!-- <?php
            // if($del==true){
            // echo "<p class='msg'>𝓘𝓷𝓯𝓸𝓻𝓶𝓪𝓽𝓲𝓸𝓷 𝓓𝓮𝓵𝓮𝓽𝓮𝓭 𝓢𝓾𝓬𝓬𝓮𝓼𝓼𝓯𝓾𝓵𝓵𝔂!!!</p>";
            // }
            // ?> -->
            </div>
        </div>

    </div>
</div>
<br><br>
<div class="text-center">
<a href="index.php"><button id="sub" type="button" class="btn btn-outline-dark">LIST</button>
</a>
<br><br>
</div>
</body>
</html>


2o-*mKgRNkt8g(|b