<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>credit mahnagement system</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
    <style>


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
    font-size:80px;
}
h2{
    text-align:center;
    color:white;
    font-size:60px;
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
/* input[type=number], select{
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
} */

/* label {
  padding: 12px 12px 12px 0;
  display: inline-block;
} */




/* 
.container {
   border-radius: 5px;

  padding: 20px;
} */

/* .col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
/* .row:after {
  content: "";
  display: table;
  clear: both;
} */
/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
/* @media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit]
 {
    width: 100%;
    margin-top: 0;
  }
} */

video{
    position:fixed;
  min-width:100%; 
  z-index:-1;
  opacity:0.9;
}
html,body {
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100vh;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;    
   
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
@media screen and (max-width:480px){
    .glow-on-hover{

        font-size:13px;
        width:110px;




    top:80%; 
    bottom: 0;
    position: relative; 
    }

}
    

    </style>



<video width="400" autoplay smooth muted loop>
  <source src="front.mov" type="video/mp4">
  <source src="front.ogg" type="video/ogg">
  Your browser does not support HTML5 video.
</video>


<!-- <video autoplay muted loop id="myVideo">
  <source src="front.mov" type="video/mp4">
  Your browser does not support HTML5 video.
</video>    -->
<div class="box">
    <h1 class="mhead">𝓒𝓡𝓔𝓓𝓘𝓣 𝓜𝓐𝓝𝓐𝓖𝓔𝓜𝓔𝓝𝓣</h1>
    
    <br>
   
   <h2>𝓦𝓮𝓵𝓬𝓸𝓶𝓮!!!</h2>
   
    <br><br><br><br><br>

    <div class="text-center">
   <a href="index.php" ><button class="glow-on-hover" type="button">VIEW USERS</button></a>
<a href="credit-user.php"><button class="glow-on-hover" type="button">TRANSACTIONS</button></a>
</div>
</div>  



</body>
</html>
