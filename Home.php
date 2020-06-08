<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="logo.jpg">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Home</title>
	 
</head>
<style>
  .tablink {
  background-color: #555;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 25%;
}

.tablink:hover {
  background-color: #777;
}
</style>
<style type="text/css">
    
    #slider {
    width: 720px;
    height: 300px;
    overflow: hidden;
}
.container{
  width: 1170px;
  margin: 0 auto;
}

#slider .slides {
    display: block;
    width: 6000px;
    height: 300px;
    margin: 0;
    padding: 0;
}

#slider .slide {
    float: left;
    list-style-type: none;
    width: 720px;
    height: 600px;
}

/* helper css, since we don't have images */
.slide1 {background: red;}
.slide2 {background: blue;}
.slide3 {background: green;}
.slide4 {background: purple;}
.slide5 {background: pink;}


</style>
<body>
  <!-- 
  <button  class="form-control col-lg-2,btn">Basic</button>
  <button  class="form-control col-lg-2,btn btn-default">Default</button>
  <button  class="form-control col-lg-2,btn btn-primary">Primary</button>
  <button  class="form-control col-lg-2,btn btn-success">Success</button>
  <button  class="form-control col-lg-2,btn btn-info">Info</button>
  <button  class="form-control col-lg-2,btn btn-warning">Warning</button>
  <button  class="form-control col-lg-2,btn btn-danger">Danger</button>
    
 -->
 <center>
    <div class="container">
        
            <div id="slider">
                <ul class="slides">
                    <li class="slide slide1"><img src="1.JPG"width="1080px" height="300px"></li>
                    <li class="slide slide2"><img src="2.JPG"width="1080px" height="300px"></li>
                    <li class="slide slide3"><img src="3.JPG"width="1080px" height="300px"></li>
                    <li class="slide slide4"><img src="4.JPG"width="1080px" height="300px"></li>
                    <li class="slide slide5"><img src="5.JPG"width="1080px" height="300px"></li>
                    <li class="slide slide1"><img src="6.JPG"width="1080px" height="300px"></li>
                </ul>
            </div>
        </div>
    </center>
        <script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript" src="Slider.js"></script>
 <form action="form.php"> <button class="tablink">Event Application</button></form>
 <form action="signup.php"> <button class="tablink">Register</button></form>
 <form action="login.php"> <button class="tablink">Signin</button></form>
 <form action="VC.php"> <button class="tablink">View Applications</button></form>
</body>
</html>