
<?php 
$servername = "localhost";
$username = "root";
$password = ""; // You need to provide your actual password here
$dbname = "movie";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Define SQL query to retrieve movie data
$sql = "SELECT * FROM movie";
$result = mysqli_query($conn, $sql);

?>




<?php 
$servername = "localhost";
$username = "root";
$password = ""; // You need to provide your actual password here
$dbname = "movie";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Define SQL query to retrieve movie data
$sql = "SELECT * FROM upcoming";
$ro = mysqli_query($conn, $sql);

?> 





<?php 
$servername = "localhost";
$username = "root";
$password = ""; // You need to provide your actual password here
$dbname = "movie";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Define SQL query to retrieve movie data
$sql = "SELECT * FROM offer";
$o = mysqli_query($conn, $sql);

?> 

<html>
<head>
<link rel="stylesheet" href="yes.css">

</head>
<body>

<div class="e">


<ul>
<img src="mmm.jpg" alt="" height="45px" width="65px" style="position: relative; top: 17px; left:30px; opacity:0.9; 
">
  <img src="home_24dp_FILL0_wght400_GRAD0_opsz24.png" alt="" height="25px"; width="25px" style="position: relative; top:7px; left:1075px;
  ">
   <img src="person_24dp_FILL0_wght400_GRAD0_opsz24.png" alt="" height="25px"; width="25px" style="position: relative; top:8px; left:1165px;
  ">
   <img src="logout_24dp_FILL0_wght400_GRAD0_opsz24.png" alt="" height="25px"; width="25px" style="position: relative; top:8px; left:1260px;
  ">
  

  <h2  class="k">CINEMA NOW </h2>
  <div style="position: relative; top:-1px ;right:-40px;">

  <li class="ka"><a class="active" href="userlogin.php"> logout</a></li>
  <li class="ka"><a href="profile.php">profile</a></li>
 <li class="ka"><a href="userhome.php">home</a></li>
 
 
  </div>
</ul>
</div>
<div class="nw"></div>

<div id="container">



<img src="https://originserver-static1-uat.pvrcinemas.com/pvrcms/movie_h/12745_4HXRxUCw.jpg"  class="im" style="border-bottom-right-radius: 15px;border-top-right-radius: 15px;  opacity:0.9;" >

<img src="https://originserver-static1-uat.pvrcinemas.com/pvrcms/movie_h/12789_hwsNpoJT.jpg"  class="im"  >
<img src="https://originserver-static1-uat.pvrcinemas.com/pvrcms/movie_h/12883_pLECewJE.jpg"  class="im"  >
<img src="https://originserver-static1-uat.pvrcinemas.com/pvrcms/banners/MFF_Website-Banner_1440x340-01-01_72519_0HWdrTJD.jpg"  class="im">

<img  src="https://originserver-static1-uat.pvrcinemas.com/pvrcms/banners/Flash-Ticket-Offerweb_75705_5480D88S.jpg" class="im" >
<img src="https://originserver-static1-uat.pvrcinemas.com/pvrcms/banners/99webnew_56503_PU3909gR.jpg"  class="im">
<img src="https://originserver-static1-uat.pvrcinemas.com/pvrcms/banners/MagicpinPassport_50452_a7146jCo.jpg"  class="im">
<img src="https://originserver-static1-uat.pvrcinemas.com/pvrcms/banners/UNLIMITEDDIGITALWeb_58224_MzsLj4Qk.jpg"  class="im">
<img src="https://originserver-static1-uat.pvrcinemas.com/pvrcms/banners/Summer%20Film%20Fest_2024_5thWk-South_Web%20banner_86746_3rHZzp0c.jpg"  class="im">
<img src="https://originserver-static1-uat.pvrcinemas.com/pvrcms/banners/UNLIMITEDDIGITALWeb_58224_MzsLj4Qk.jpg"  class="im">





</div>

</div>





<div>
<div   style="height: 50px; width:50px; position:relative;top:-40px; z-index: index 1; background-color:#000;   border-top-right-radius: 10px;border-bottom-right-radius: 10px; opacity:0.5;
"  id="c1">
<img src="arrow-point-to-right.png" alt="" width="25px" height="25px" style="border-radius: 50%; transform:rotate(-180deg); position:relative; top:13px;left:10px; ">
</div>
<div   style="height: 50px; width:50px; position:relative;top:-85px; left:1470px;z-index: index 1; background-color:#000;   border-top-left-radius: 10px;border-bottom-left-radius: 10px; opacity:0.5;
" id="c2" >
<img src="arrow-point-to-right.png" alt="" width="25px" height="25px" style="border-radius: 50%; transform:rotate(-2deg); position:relative; top:13px;left:10px; ">
</div>

<img src="https://i.pinimg.com/originals/3c/1a/e7/3c1ae797efafc7257699de4234d9f508.png" alt="" width="150px" height="150px" style=" transform:rotate(-2deg); position:relative; top:167px;left:470px;   opacity:0.9">

<img src="ticket.webp" alt="" width="70px" height="70px" style=" transform:rotate(10deg); position:relative; top:170px;left:810px;   opacity:0.9">


<div style="border-radius:30px; height: 100px; width:500px; background-color:aliceblue; z-index:-1; position:relative; top:40px;right:-500px; opacity:0.5;    box-shadow: 0px 0px 20px 5px rgba(0,0,0, 0.2);
">
  <h2 style="position: relative; top:35px ; left: 170px; font-family: 'Montserrat', helvetica, arial, sans-serif;   font-weight: 501; color: black;">NOW SHOWING </h2>
</div>



<div class="card-container">
 


<?php 
  while ($row = mysqli_fetch_assoc($result)) {
    
    echo '<form action="theatre.php " method="post">';
    echo '<input style="display:none" type="text" name="movie_id" value="' . $row["id"] . '">';
    echo '<div class="card" >';
    echo '<div class="img"><img src="' . $row["pic"]. '"></div>';
    echo '<h2 style="color:#242333; font-weight: 400; font-size: 19px;">' . $row["name"] . '</h2>';

    echo '<h4 style=" color: #555;
    font-weight: 400; font-size: 13px;"> ' . $row["languages"] . '</h4>';
    echo '<h4 style=" color: #555;
    font-weight: 400;font-size: 13px;">Genre: ' . $row["genre"].'</h4>' ;
    echo '<p><button type="submit"  
    >Book Tickets</button></p>';
    echo '</div>';
    echo '</form>';   
}
?>
</div>






<img src="Lovepik_com-401388954-speaker-icon-free-vector-illustration-material.png" alt="" width="170px" height="170px" style=" transform:rotate(-2deg); position:relative; top:210px;left:415px;  ">
<img src="https://www.pngall.com/wp-content/uploads/12/Save-Bookmark-PNG-File.png" alt="" width="70px" height="70px" style="  position:relative; top:250px;left:740px;   opacity:0.9;">

<div style="border-radius:30px; height: 100px; width:400px; background-color:aliceblue; z-index:-1; position:relative; top:100px;right:-550px; opacity:0.5;    box-shadow: 0px 0px 20px 5px rgba(0,0,0, 0.2);
">


  <h2 style="position: relative; top:35px ; left: 80px; font-family: 'Montserrat', helvetica, arial, sans-serif;   font-weight: 501; color: black;">UPCOMING MOVIES </h2>
</div>


<div  class="card-contain">
<div   style="height: 10px; width:10px; position:relative;top:30px;left:630px; " id="up" >
<img src="https://www.freeiconspng.com/thumbs/arrow-icon/arrow-icon--myiconfinder-23.png" alt="" width="40px" height="40px" style="border-radius: 50%; transform:rotate(-91deg);">
</div>



<div style="height: 10px; width:10px; position:relative; top:480px ;left:615px;  " id="down">
<img src="https://www.freeiconspng.com/thumbs/arrow-icon/arrow-icon--myiconfinder-23.png" alt="" width="40px" height="40px" style="border-radius: 50%; transform:rotate(87deg); ">
</div>






<?php 
while ($r = mysqli_fetch_assoc($ro)) {

    echo '<input style="display:none" type="text" name="movie_id" value="' . $r["id"] . '">';
    echo '<div class="movie_card" id="tomb">';
    echo '  <div class="info_section">';
    echo '    <div class="movie_header">';
    echo '<div class="new">';

    echo '    <div class="locandina" >  <img  src="'.$r["pic"].'" alt="Movie Poster"/ style="object-fit:cover;     "> </div>';
    


    echo '      <div class="trailer">';
    
    echo '        <h3 style="font-family: Montserrat, helvetica, arial, sans-serif; position:relative; top:-128px; left:20px; color:white; letter-spacing:2px; font-weight: 400;">trailer</h3>';
    
    echo '      <img src="play_arrow_20dp_FILL0_wght400_GRAD0_opsz20.png" style="position:relative; top:-167px; right:-80px; height:28px; width:28px; " alt="Play Arrow"/> ';
    echo '      </div>';

    echo '</div>';


    echo '<div style="position:relative ; top :60px ;left:20px">';
    echo '      <h1>' . $r["name"] . '</h1>';
    echo '      <h4 style="position:relative; left:0px">' . $r["languages"] . '</h4>';
    echo '      <span class="minutes">release date: ' . $r["date"] . '</span>';
    echo '      <p class="type">Genre: ' . $r["genre"] . '</p>';
    echo '    </div>'; // Close movie_header
   echo '</div>';
    echo '    <div class="movie_desc">';
    echo '<p class="text">'. $r["des"]  . '</p>';
    echo '<div id="link" style="display:none">' .$r["youtube"].'</div>';
    
  
    echo '    </div>'; // Close movie_desc
    echo '  </div>'; // Close info_section

    
    // Assuming $r is an associative array with a key "bg"
    echo '<div class="blur_back tomb_back" style="background: url(' . $r["bg"] . ');  object-fit:cover; "></div>';



    echo '</div>'; // Close movie_card
}
?>



</div>

<img src="https://static.vecteezy.com/system/resources/previews/018/867/080/original/movie-tickets-with-stars-illustration-in-minimal-style-png.png" alt="" width="150px" height="100px" style=" position:relative; top:340px;left:180px;   opacity:0.9">



<div style="border-radius:20px; height: 100px; width:380px; background-color:aliceblue; z-index:-1; position:relative; top:220px;right:-200px; opacity:0.5;    box-shadow: -9px -1px 20px 3px rgba(0,0,0, 0.2);
">
  <h2 style="position: relative; top:35px ; left: 180px; font-family: 'Montserrat', helvetica, arial, sans-serif;   font-weight: 501; color: black;">OFFERS</h2>
</div>

<?php
echo '<div class="card-c">';

 while ($w = mysqli_fetch_assoc($o)) 
 {


echo '  <div class="cardy">    <div class="img" >  <img src="'. $w["bg"].'"  > </div>';
 echo '<div class="cardfooter"><p3>'.$w["name"].'</p3>  <p1>valid till:</p1>  <p2>'.$w["date"].'</p2>  </div>';
 echo '</div>';
 }
 echo '</div>';

?>



<script src="myjs.js">
</script>


</div>

<!--FONT AWESOME-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--GOOGLE FONTS-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet"> 
</head>
<body>
<footer>
<div class="footer">
<div class="row">
<a href="#"><i class="fa fa-facebook"></i></a>
<a href="#"><i class="fa fa-instagram"></i></a>
<a href="#"><i class="fa fa-youtube"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
</div>

<div class="row">
<ul>
<li><a href="#">Contact us</a></li>
<li><a href="#">Our Services</a></li>
<li><a href="#">Privacy Policy</a></li>
<li><a href="#">Terms & Conditions</a></li>
<li><a href="#">Career</a></li>
</ul>
</div>

<div class="row"> Copyright © 2024  - All rights reserved  
</div>
</div>
</footer>


</body>
</html>