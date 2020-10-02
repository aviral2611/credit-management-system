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
</video><style>


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
h1{
    text-align:center;
    color:white;
}
h2{
    text-align:center;
    color:white;
}


@media
	  only screen 
    and (max-width: 760px), (min-device-width: 768px) 
    and (max-device-width: 1024px){
        h1{
            font-size:30px;
        }
        h2{
            font-size:20px;
        }
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

.glow-on-hover {
    width: 220px;
    height: 50px;
    border: none;
    outline: none;
    color: #fff;
    background: #111;
    cursor: pointer;
    position: relative;
    z-index: 0;
    border-radius: 10px;
}

.glow-on-hover:before {
    content: '';
    background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
    position: absolute;
    top: -2px;
    left:-2px;
    background-size: 400%;
    z-index: -1;
    filter: blur(5px);
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    animation: glowing 20s linear infinite;
    opacity: 0;
    transition: opacity .3s ease-in-out;
    border-radius: 10px;
}

.glow-on-hover:active {
    color: #000
}

.glow-on-hover:active:after {
    background: transparent;
}

.glow-on-hover:hover:before {
    opacity: 1;
}

.glow-on-hover:after {
    z-index: -1;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: #111;
    left: 0;
    top: 0;
    border-radius: 10px;
}

@keyframes glowing {
    0% { background-position: 0 0; }
    50% { background-position: 400% 0; }
    100% { background-position: 0 0; }
}


</style>
       

<?php


$con=mysqli_connect("localhost","id14959517_cms","2o-*mKgRNkt8g(|b","id14959517_table");
if($con->connect_error){
    die("connection failed".$con->connect_error);
}

$sql="SELECT * FROM user";
$result=$con->query($sql);
?>
    <h1 style="text-align:center;">𝓣𝓡𝓐𝓝𝓢𝓐𝓒𝓣𝓘𝓞𝓝 𝓗𝓘𝓢𝓣𝓞𝓡𝓨</h1>
    <BR><BR>
<table class="center table table-striped">
  <thead>
    <tr>
      <th scope="col" style="background-color:lightgray;">Sno</th>
      <th scope="col" style="background-color:lightgray;">Sender</th>
      <th scope="col" style="background-color:lightgrey;">Receiver</th>
      <th scope="col" style="background-color:lightgrey;">Credit</th>
    </tr>
  </thead>
  <?php
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
      ?>
  <tbody>
      <tr>
          <td>    <?php    echo $row["sno"];   ?></td>
          <td>    <?php    echo $row["Sender"];   ?></td>
          <td>    <?php    echo $row["Receiver"];   ?></td>
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

<br><br><br>
<div class="text-center">
<a href="transferform.php"><button class="glow-on-hover" type="button">Credit Transfer</button></a>
</div>
</body>
</html>