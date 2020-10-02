<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>

<style >

video{
        position:absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    @media (min-aspect-ratio: 16/9) {
      video{
       
        width: 100%;
        height: 100%;
      }
    }
    @media (max-aspect-ratio: 16/9) {
      video {
       
       width:40%; 
        height: 100%;

        padding:0
      }
    }

video{
  object-fit:fill

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




/* 
.container {
   border-radius: 5px;

  padding: 20px;
} */

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


video{
    position:fixed;
  min-width:100%; 
  z-index:-1;
  opacity:0.6;
}

}


</style>
<?php


$con=mysqli_connect("localhost","id14959517_cms","]mmfgDCoxc7FGSgl","id14959517_table");

$query="SELECT * FROM `traansfer` ";
$result=    mysqli_query($con,$query);

$result2=    mysqli_query($con,$query);
$options="";
while($row2 =  mysqli_fetch_array($result2)){
    $options =$options."<option>$row2[1]</option>";
}


?>
<video autoplay muted loop id="myVideo">
  <source src="money.mp4" type="video/mp4">
</video>


<div class="container">
<div class="text-center">
<h1 >𝓣𝓡𝓐𝓝𝓢𝓕𝓔𝓡 𝓒𝓡𝓔𝓓𝓘𝓣</h1>
</div>
  <form action="transfer.php" method="POST">
  <div class="row">
      <div class="col-25">
        <label for="Sender">Sender's Name</label>
      </div>
      <div class="col-75">
        <select id="Sender" name="Sender" class="custom-select my-1 mr-sm-2">
        
    <!-- <option selected>Choose...</option> -->
    <option ><?php echo $options;?></option>

        </select>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="Receiver">Receiver's Name</label>
      </div>
      <div class="col-75">
        <select id="Receiver" name="Receiver" class="custom-select my-1 mr-sm-2">
        
    <option selected>Choose...</option>
    <option ><?php echo $options;?></option>

        </select>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="credit">Credit</label>
      </div>
      <div class="col-75">
        <input type="number" id="number" class="form-control mb-2 mr-sm-2" name="credit" placeholder="123..">
      </div>
    </div>

    <div class="text-center">
    <a href="transfer.php" ><button value="TRANSFER" type="submit" class="btn btn-warning">TRANSFER</button></a>
    </div>
  </form>
</div>



</body>
</html>