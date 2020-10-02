<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>database</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>
<video autoplay muted loop id="myVideo">
  <source src="money.mp4" type="video/mp4"> 
</video>
<br><br><br>
<div class="topnav">
<!-- <button type="button" class="btn btn-outline-success"> </button>-->
<!-- <button type="button" class="btn btn-outline-danger"></button> -->
<a href="adduser.php">ADD USER</a>
<a href="deleteuser.php">DELETE USER</a>
</div>  <br>
<style>
.btn{
  font-size:30px;
}
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
      .btn{
        font-size:20px;
      }
    }

video{
  object-fit:fill

}


* {
  box-sizing: border-box;
}
h1{
    text-align:center;
    color:white;
}
h2{
    text-align:center;
    color:white;
}

video{
    position:fixed;
  min-width:100%; 
  z-index:-1;
  opacity:0.9;
}
} 

@media
	  only screen 
    and (max-width: 760px), (min-device-width: 768px) 
    and (max-device-width: 1024px)  {

		table, thead, tbody, th, td, tr {
			display: inline-block;
		}

		thead tr {
			position: absolute;
			top: 50px;
			left: 50px;
		}

    tr {
      text-align:center;
      position:absolute;
      margin: 0 0 1rem 0;
    }
    
    
		td {
      position:relative;
			border: none;
			border-bottom: 1px solid #eee;
			position: relative;
			padding-left: 50%;
		}

		td:before {
			position: fixed;
			top: 0;
			left: 6px;
			width: 45%;
			padding-right: 10px;
			white-space: nowrap;
    }

	}

</style>

<?php


$con=mysqli_connect("localhost","id14959517_cms","2o-*mKgRNkt8g(|b","id14959517_table");
if($con->connect_error){
    die("connection failed".$con->connect_error);
}
session_start()
?>
<div class="table-responsive">
<table role="table"  class="  center table table-striped">
  <thead role="rowgroup">
    <tr role="row">
    <th scope="col" style="background-color:lightgray;">UserID</th>
    <th scope="col" style="background-color:lightgray;">Username</th>
      <th scope="col" style="background-color:lightgrey;">Email</th>
      <th scope="col" style="background-color:lightgrey;">Credits</th>
    </tr>
  </thead>
  <?php
  $sql="SELECT * FROM traansfer";
$result=$con->query($sql);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
      ?>
  <tbody role="rowgroup">
      <tr role="row">
      <td>    <?php    echo $row["userID"];   ?></td>
          <td>    <?php    echo $row["username"];   ?></td>
          <td>    <?php    echo $row["email"];   ?></td>
          <td>    <?php    echo $row["credit"];   ?></td>
      </tr>  
  </tbody>
      <?php
    }
    echo "</table>";
}
else{
    echo "0 result";
}
$con->close();
?>
</table>
</div>
<br>


<div class="text-center">
<a href="start.php"><button type="button" class="btn btn-outline-dark">HOME</button>
</a>
<br><br><br>
</div>
</body>
</html>


