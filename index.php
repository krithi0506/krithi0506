<?php   
session_start();  
if(!isset($_SESSION["sess_user"])){  
    header("location:loginex.php");  
} else {  
?>  
<!DOCTYPE html>
<html>
<title>Achieve,online courses and certification,Learn for free</title>
<link href="point.css" rel="stylesheet" type"text/css" />
<body>
<div id="wrapper">
<header></header>
<ul id="myul">
     <li><a href="faq.html">FAQ</a></li>
     <li><a href="ack.html">Acknowledgements</a></li>
     <li><a href="res.html">Resources</a></li>    
     <li><a href="index.html">Courses</a></li>
</ul>

<!--START OF CONTENT-->
<div id="content">
<h2>Welcome, <?=$_SESSION['sess_user'];?>! <a href="logout.php">Logout</a></h2> 

<!START OF STYLE TAG-->
<style>
div.gallery {
  margin: 5px;
  
  float: left;
  width: 180px;
}


div.gallery img {
  width: 100%;
  height: 150px;
}

div.desc {
  padding: 15px;
  text-align: center;
}
</style>


<div class="gallery">
  <a target="_blank" href="img1.jpg">
    <img src="img1.jpg" alt="" width="1000" height="1600">
  </a>
List by subject of interest
<pre>
<select>
<option value="">List by subject of interest</option>
<option value="">j2h3ui</option>
<option value=""><a href ="https://nptel.ac.in/courses/111106094/">mathematics</a></option>
</select>
</pre>
</p>
</div>

<div class="gallery">
  <a target="_blank" href="https://nptel.ac.in/courses/104106108/">
    <img src="img2.jpg" alt="chemistry" width="600" height="400">
</a>
 organic chemistry lab

<a target="_blank" href="https://nptel.ac.in/courses/126105010/">
<img src="img7.jpg" alt="agriculture" width="600" height="400">
</a>
agricuture

</div>

<div class="gallery">
  <a target="_blank" href="https://nptel.ac.in/courses/111106094/">
    <img src="img3.jpg" alt="Northern Lights" width="600" height="400">
  </a>
  
mathematics
<a target="_blank" href="https://nptel.ac.in/courses/120108004/">
    <img src="img8.jpg" alt="Northern Lights" width="600" height="400">
  </a>
environment science


</div>

<div class="gallery">
  <a target="_blank" href="https://nptel.ac.in/courses/106105077/">
    <img src="img4.jpg" alt="Mountains" width="600" height="400">
  </a>
artificial intelligence
<a target="_blank" href="https://nptel.ac.in/courses/109104030/">
    <img src="img9.jpg" alt="Mountains" width="600" height="400">
  </a>
Humanities and social science
</div>


<div class="gallery">
  <a target="_blank" href="https://nptel.ac.in/courses/115101003/">
    <img src="img5.jpg" alt="Mountains" width="600" height="400">
  </a>
physics
<a target="_blank" href="https://nptel.ac.in/courses/102103044/">
    <img src="img10.jpg" alt="Mountains" width="600" height="400">
  </a>
Biotechnology
</div>

<div class="gallery">
  <a target="_blank" href="https://nptel.ac.in/courses/124107005/">
    <img src="img6.jpg" alt="Mountains" width="600" height="400">
  </a>
architecture
<a target="_blank" href="https://nptel.ac.in/courses/110105054/">
    <img src="img11.jpg" alt="Mountains" width="600" height="400">
  </a>
management

</div>

</div>




<p id= "contenttxt">

<a href="login.php">Entrollment Open For 291 Courses-Click here to enrol</a>
</p>



<!--END OF CONTENT-->

<footer></footer>
</div> <!--END OF WRAPPER-->
</body>
</html>
<?php  
}  
?>  