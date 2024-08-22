<?php
session_start(); 
$movie=$_SESSION["moviename"];
echo '<div class="session">'.$movie.'</div>';
$_SESSION['selected_theatre'] = $_POST['theatre'];
$theatre=$_SESSION["selected_theatre"];
echo '<div class="theatre">'.$theatre.'</div>';



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="u.css">

    <script type="text/javascript" src="jquery-3.7.1.js"> </script>
    <style>
 


.e ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color:#242333;
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 2;
  height: 80px;
  color: aliceblue;
  font-family: arial;

  border-bottom-left-radius: 15px;
  font-family: 'Montserrat', helvetica, arial, sans-serif;
  border-bottom-right-radius: 15px;

}
.e li {
  float: right;
  position: relative;
  top: -55px;
  position: relative; right:20px; top:-90px ;opacity:0.8 ; 

}
.e li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
.e h2 {
  position: relative;
  left: 100px;
  top: -45px;
  opacity: 0.8;
}
h3{
  font-size: large;
  position: relative;
  font-family: 'Montserrat', helvetica, arial, sans-serif;
font-weight: 600;

}
    </style>
</head>
<body>
  <script>
document.addEventListener('DOMContentLoaded', function() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'getData.php', true);
    xhr.onreadystatechange = function() {
        if (this.readyState == 4) {
            if (this.status == 200) {
                try {
                    var response = JSON.parse(this.responseText);
                    response.forEach(function(seat) {
                        var seatElement = document.getElementById(seat.seatid);
                        if (seatElement) { // Check if the seat element exists
                            var sessionDiv = document.querySelector('.session');
                            var sessionInnerHTML = sessionDiv.innerHTML;
                            var moviename = seat.moviename;
                            var theatreDiv = document.querySelector('.theatre');
                            var theatre = theatreDiv.innerHTML;
                            var theatrename = seat.theatre;

                            // Log the inner HTML and moviename for debugging or further use
                            console.log(sessionInnerHTML, moviename, theatre,theatrename);

                            if (sessionInnerHTML == moviename && theatre == theatrename) {
                                if (seat.status === 'occupied') {
                                    seatElement.classList.add('occupied');
                                } else {
                                    seatElement.classList.remove('occupied');
                                }
                            }
                        }
                    });
                } catch (error) {
                    console.error('Error parsing JSON: ' + error.message);
                }
            } else {
                console.error('Failed to fetch data: ' + this.status);
            }
        }
    };
    xhr.send();
});


</script>

<div class="e">


<ul>
<img src="mmm.jpg" alt="" height="45px" width="65px" style="position: relative; top: 17px; left:30px; opacity:0.9; 
">
  <img src="home_24dp_FILL0_wght400_GRAD0_opsz24.png" alt="" height="25px"; width="25px" style="position: relative; top:20px; left:1075px;
  ">
   <img src="person_24dp_FILL0_wght400_GRAD0_opsz24.png" alt="" height="25px"; width="25px" style="position: relative; top:20px; left:1165px;
  ">
   <img src="logout_24dp_FILL0_wght400_GRAD0_opsz24.png" alt="" height="25px"; width="25px" style="position: relative; top:20px; left:1260px;
  ">
  

  <h4  class="k">CINEMA NOW </h4>
  <div style="position: relative; top:25px ;right:-40px;">

  <li class="ka" ><a class="active" href="userlogin.php"> logout</a></li>
  <li class="ka" ><a href="profile.php">profile</a></li>
 <li class="ka"><a href="userhome.php">home</a></li>
 
 
  </div>
</ul>
</div>

<ul class="showcase">
   
    
    
      <div class="seat selected"></div>
      <small>Selected</small>
    </li>
    <br>
    <li>
      <div class="seat occupied"></div>
      <small>Occupied</small>
    </li>  
    <br>  
    <li>
      <div class="seat"></div>
      <small>N/A </small> 
    </li>
  </ul>
  <div class="white" id="white">
<div class="movie-container">
  
  
  <select id="movie" style="display: none;">
    
  </select>
  
 
  
  <div class="container" id="container">
    <div class="screen" id="screen"></div>
    <form id="new">

</form>

    <p id="in" class="in"> Normal (Rs 180) <p>
    <div class="row">
   
    <h8 class="text">A</h8>
    <div class="seat" id="A1">180</div>
<div class="seat" id="A2">180</div>
<div class="seat" id="A3">180</div>
<div class="seat" id="A4">180</div>
<div class="seat" id="A5">180</div>
<div class="seat" id="A6">180</div>
<div class="seat" id="A7">180</div>
<div class="seat" id="A8">180</div>
<div class="seat" id="A9">180</div>
<div class="seat" id="A10">180</div>
<div class="seat" id="A11">180</div>
<div class="seat" id="A12">180</div>
<div class="seat" id="A13">180</div>
<div class="seat" id="A14">180</div>
<div class="seat" id="A15">180</div>
<div class="seat" id="A16">180</div>
    </div>
      <div class="row">
      <h8 class="text">
      B
</h8>

<div class="seat" id="B1">180</div>
<div class="seat" id="B2">180</div>
<div class="seat" id="B3">180</div>
<div class="seat" id="B4">180</div>
<div class="seat" id="B5">180</div>
<div class="seat" id="B6">180</div>
<div class="seat" id="B7">180</div>
<div class="seat" id="B8">180</div>
<div class="seat" id="B9">180</div>
<div class="seat" id="B10">180</div>
<div class="seat" id="B11">180</div>
<div class="seat" id="B12">180</div>
<div class="seat" id="B13">180</div>
<div class="seat" id="B14">180</div>
<div class="seat" id="B15">180</div>
<div class="seat" id="B16">180</div>
</div>

<p id="in" class="in"> Executive (Rs 250) </p>
<br>
<div class="row">
    <h8 class="text">C</h8>
    <div class="seat" id="C1">250</div>
    <div class="seat" id="C2">250</div>
    <div class="seat" id="C3">250</div>
    <div class="seat" id="C4">250</div>
    <div class="seat" id="C5">250</div>
    <div class="seat" id="C6">250</div>
    <div class="seat" id="C7">250</div>
    <div class="seat" id="C8">250</div>
    <div class="seat" id="C9">250</div>
    <div class="seat" id="C10">250</div>
    <div class="seat" id="C11">250</div>
    <div class="seat" id="C12">250</div>
    <div class="seat" id="C13">250</div>
    <div class="seat" id="C14">250</div>
    <div class="seat" id="C15">250</div>
    <div class="seat" id="C16">250</div>
</div>
<div class="row">
    <h8 class="text">D</h8>
    <div class="seat" id="D1">250</div>
    <div class="seat" id="D2">250</div>
    <div class="seat" id="D3">250</div>
    <div class="seat" id="D4">250</div>
    <div class="seat" id="D5">250</div>
    <div class="seat" id="D6">250</div>
    <div class="seat" id="D7">250</div>
    <div class="seat" id="D8">250</div>
    <div class="seat" id="D9">250</div>
    <div class="seat" id="D10">250</div>
    <div class="seat" id="D11">250</div>
    <div class="seat" id="D12">250</div>
    <div class="seat" id="D13">250</div>
    <div class="seat" id="D14">250</div>
    <div class="seat" id="D15">250</div>
    <div class="seat" id="D16">250</div>
</div>
 
<div class="row">
    <h8 class="text">E</h8>
    <div class="seat" id="E1">250</div>
    <div class="seat" id="E2">250</div>
    <div class="seat" id="E3">250</div>
    <div class="seat" id="E4">250</div>
    <div class="seat" id="E5">250</div>
    <div class="seat" id="E6">250</div>
    <div class="seat" id="E7">250</div>
    <div class="seat" id="E8">250</div>
    <div class="seat" id="E9">250</div>
    <div class="seat" id="E10">250</div>
    <div class="seat" id="E11">250</div>
    <div class="seat" id="E12">250</div>
    <div class="seat" id="E13">250</div>
    <div class="seat" id="E14">250</div>
    <div class="seat" id="E15">250</div>
    <div class="seat" id="E16">250</div>
</div>
<div class="row">
    <h8 class="text">F</h8>
    <div class="seat" id="F1">250</div>
    <div class="seat" id="F2">250</div>
    <div class="seat" id="F3">250</div>
    <div class="seat" id="F4">250</div>
    <div class="seat" id="F5">250</div>
    <div class="seat" id="F6">250</div>
    <div class="seat" id="F7">250</div>
    <div class="seat" id="F8">250</div>
    <div class="seat" id="F9">250</div>
    <div class="seat" id="F10">250</div>
    <div class="seat" id="F11">250</div>
    <div class="seat" id="F12">250</div>
    <div class="seat" id="F13">250</div>
    <div class="seat" id="F14">250</div>
    <div class="seat" id="F15">250</div>
    <div class="seat" id="F16">250</div>
</div>

<div class="row">
    <h8 class="text">G</h8>
    <div class="seat" id="G1">250</div>
    <div class="seat" id="G2">250</div>
    <div class="seat" id="G3">250</div>
    <div class="seat" id="G4">250</div>
    <div class="seat" id="G5">250</div>
    <div class="seat" id="G6">250</div>
    <div class="seat" id="G7">250</div>
    <div class="seat" id="G8">250</div>
    <div class="seat" id="G9">250</div>
    <div class="seat" id="G10">250</div>
    <div class="seat" id="G11">250</div>
    <div class="seat" id="G12">250</div>
    <div class="seat" id="G13">250</div>
    <div class="seat" id="G14">250</div>
    <div class="seat" id="G15">250</div>
    <div class="seat" id="G16">250</div>
</div>
<div class="row">
    <h8 class="text">H</h8>
    <div class="seat" id="H1">250</div>
    <div class="seat" id="H2">250</div>
    <div class="seat" id="H3">250</div>
    <div class="seat" id="H4">250</div>
    <div class="seat" id="H5">250</div>
    <div class="seat" id="H6">250</div>
    <div class="seat" id="H7">250</div>
    <div class="seat" id="H8">250</div>
    <div class="seat" id="H9">250</div>
    <div class="seat" id="H10">250</div>
    <div class="seat" id="H11">250</div>
    <div class="seat" id="H12">250</div>
    <div class="seat" id="H13">250</div>
    <div class="seat" id="H14">250</div>
    <div class="seat" id="H15">250</div>
    <div class="seat" id="H16">250</div>
</div>
<div class="row">
    <h8 class="text">I</h8>
    <div class="seat" id="I1">250</div>
    <div class="seat" id="I2">250</div>
    <div class="seat" id="I3">250</div>
    <div class="seat" id="I4">250</div>
    <div class="seat" id="I5">250</div>
    <div class="seat" id="I6">250</div>
    <div class="seat" id="I7">250</div>
    <div class="seat" id="I8">250</div>
    <div class="seat" id="I9">250</div>
    <div class="seat" id="I10">250</div>
    <div class="seat" id="I11">250</div>
    <div class="seat" id="I12">250</div>
    <div class="seat" id="I13">250</div>
    <div class="seat" id="I14">250</div>
    <div class="seat" id="I15">250</div>
    <div class="seat" id="I16">250</div>
</div>
<div class="row">
    <h8 class="text">J</h8>
    <div class="seat" id="J1">250</div>
    <div class="seat" id="J2">250</div>
    <div class="seat" id="J3">250</div>
    <div class="seat" id="J4">250</div>
    <div class="seat" id="J5">250</div>
    <div class="seat" id="J6">250</div>
    <div class="seat" id="J7">250</div>
    <div class="seat" id="J8">250</div>
    <div class="seat" id="J9">250</div>
    <div class="seat" id="J10">250</div>
    <div class="seat" id="J11">250</div>
    <div class="seat" id="J12">250</div>
    <div class="seat" id="J13">250</div>
    <div class="seat" id="J14">250</div>
    <div class="seat" id="J15">250</div>
    <div class="seat" id="J16">250</div>
</div>

<p id="in" class="in">Premium (Rs 350) </p>
<br>
<div class="row">
    <h8 class="text">K</h8>
    <div class="seat" id="K1">350</div>
    <div class="seat" id="K2">350</div>
    <div class="seat" id="K3">350</div>
    <div class="seat" id="K4">350</div>
    <div class="seat" id="K5">350</div>
    <div class="seat" id="K6">350</div>
    <div class="seat" id="K7">350</div>
    <div class="seat" id="K8">350</div>
    <div class="seat" id="K9">350</div>
    <div class="seat" id="K10">350</div>
    <div class="seat" id="K11">350</div>
    <div class="seat" id="K12">350</div>
    <div class="seat" id="K13">350</div>
    <div class="seat" id="K14">350</div>
    <div class="seat" id="K15">350</div>
    <div class="seat" id="K16">350</div>
</div>
<div class="row">
    <h8 class="text" style="position: relative; left:-9px;">L</h8>
    <div class="seat" id="L1">350</div>
    <div class="seat" id="L2">350</div>
    <div class="seat" id="L3">350</div>
    <div class="seat" id="L4">350</div>
    <div class="seat" id="L5">350</div>
    <div class="seat" id="L6">350</div>
    <div class="seat" id="L7">350</div>
    <div class="seat" id="L8">350</div>
    <div class="seat" id="L9">350</div>
    <div class="seat" id="L10">350</div>
    <div class="seat" id="L11">350</div>
    <div class="seat" id="L12">350</div>
    <div class="seat" id="L13">350</div>
    <div class="seat" id="L14">350</div>
    <div class="seat" id="L15">350</div>
    <div class="seat" id="L16">350</div>
    <div class="seat" id="L15">350</div>
    <div class="seat" id="L16">350</div>
</div>

    <input type="button" style="position: relative;  width:160px; height:30px; top: 20px; " id="btn">
    <p class="text" id="txt">
      Proceed <span id="count"> 
    </p>
  
  </div>

</div>
  <?php



// Start session at the very beginning           
// Other PHP code goes here                      

?>
</div>


<?php
// theatre.php

// Retrieve the movie ID from the query parameters



  // Get the movie ID from tery parameters
  
// Start sess
// Start session before any outpu
$movie_id = $_SESSION['id'];
// Create a database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "movie";

$conn = mysqli_connect($servername, $username, $password, $dbname);


// Check the database connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Prepare and execute SQL query to fetch movie details using the movie ID
$sql = "SELECT * FROM movie WHERE id = $movie_id";
$result = mysqli_query($conn, $sql);

// Check if there is a result
if (mysqli_num_rows($result) > 0) {
    // Fetch the movie details
    $row = mysqli_fetch_assoc($result);
    echo '<div id="pay">';
    echo '<div class="card">';
    echo '<br>';
    echo '<div class="bs">';
    echo '<h3 style="position:relative ;top:25px; left:10px"> booking summary</h3>';
    echo '</div>';
    echo '<br>';
    echo ' <img src="' . $row["pic"] . '" > ';
    echo '<div class="info1">';
    echo '<div class="hello"><div><h5>' . $row["name"] . '</h5/></div>';
    echo '<div><h5>Language: ' . $row["languages"] . '</h5></div>';
    echo '<div class="sub"><h5>Genre: ' . $row["genre"] .'</h5></div>' ;
    echo '<div><h5>Duration: ' . $row["duration"] .'</h5></div> </div>' ;
    echo '</div>';
    
// Retrieve the data from the form
$time = $_POST['time'];
$language = $_POST['language'];
$date = date('d M D', strtotime("+1 day"));
// Now you can use $time and $language as needed
// For example, you can echo them to display on the page
echo '<div class="info2">';
echo '<div class="lan">';
echo "Selected date: " . $date;

echo '<br>';
echo "Selected language: " . htmlspecialchars($language);

echo '<br>';
// Now you can use the $time variable to do whatever you need with it
echo "Selected time: " . htmlspecialchars($time); 
echo "<p>selected seats : ";
echo '<span id="smtg"></span> </p>';// htmlspecialchars to prevent XSS attacks
echo '</div>';
echo '<fieldset>';
echo '<div class="info3">';
echo '<legend>tickets </legend>';
echo '<input type="number" id="num"  >';
echo '<input type="number" id="in1" value="0" >';
echo '<p>convience fee : 60 <br> GST : 10 </p>';
echo '</div>';
echo '<br> <br> <br> <br> <br>';
echo '<div class="totals"><h4>grand total</h4>';
echo '<input type="number" id="total" value="0"></div>';
echo '<a href="payment.php" class="pay"><div class="final" id="final"><p id="p1">next<p></div><a>';
echo '</fieldset>';




// Retrieve the date parameter from the URL

// You can also store the date in session or perform any other actions you need.
// For example, to store the date in session:

    

} else {
    echo "Session variable 'id' is not set";
}





?>



</div>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Your code here
    var d = document.getElementById('btn');
    d.addEventListener("click", fun);

    var ticket = document.getElementById('container');
    var pro=document.getElementById('pay');
    var btn=document.getElementById('btn');
    var p=document.getElementById('txt');
    var white=document.getElementById('white');
    var s = document.querySelectorAll('.seat');
    var screen=document.getElementById('screen');
    var li=document.getElementsByClassName('ka');
    var n=document.getElementsByClassName('in');

    function fun() {
      
        ticket.style.right='170px';
        pro.style.left='1110px';

        btn.style.display='none';
        p.style.display='none';
        white.style.top='85px';
        screen.style.width="23%";
        screen.style.height="107px";



        // New width
screen.style.top="-30px";

      ticket.style.top="-10px";
        white.style.position='fixed';
        

        s.forEach(seat => {
                seat.style.height = '17px'; // New height
                seat.style.width = '19px'; 
                seat.style.margin='3px';
                 // New width
            });




    }
});


    const container = document.querySelector('.container');
const seats = document.querySelectorAll('.row .seat:not(.occupied)');

const total = document.getElementById('total');
const movieSelect = document.getElementById('movie');


var divs = document.querySelectorAll('.seat');





// Loop through each div and add event listener for 'click' event
// Loop through each div and add event listener for 'click' event
// Loop through each div and add event listener for 'click' event
divs.forEach(function(div) {
    // Add a custom attribute to keep track of whether the div has been clicked
    div.clicked = false;
    


    div.addEventListener('click', function() {
        var divContent = parseFloat(div.textContent.trim()); //trim() used to remove white spaces from both the ends
        var total=document.getElementById('total');
        var inputField = document.getElementById('in1');
        var oldValue = parseFloat(inputField.value);
        var pay=document.getElementById("final");

        
        if (div.clicked) {
            // Perform subtraction
            var newValue = oldValue - divContent;
            total.value=newValue+70;
        } else {
            // Perform addition
            var newValue = oldValue + divContent;
            total.value=newValue+70;
        }

        // Update the value of the input field
        inputField.value = newValue;

        // Toggle the clicked state
        div.clicked = !div.clicked;


        // Toggle between classes "seat" and "seat occupied"
       
    });
});


let ticketPrice = +movieSelect.value;

//Update total and count
function updateSelectedCount() {
  const count = document.getElementById('num');
  const selectedSeats = document.querySelectorAll('.row .seat.selected');
let seatHTML = '';

selectedSeats.forEach(seat => {
    seatHTML +=seat.id; // Adding the ID and HTML of each selected seat to the seatHTML string
});

document.getElementById('smtg').innerHTML = seatHTML;


 

//querySelector() offers more flexibility by allowing you to use any CSS selector. This means you can select elements based on not only their IDs but also their classes, tag names, attributes, and more.


  const selectedSeatsCount = selectedSeats.length;
  count.value= selectedSeatsCount;
 
}

//Movie Select Event
movieSelect.addEventListener('change', e => {
  ticketPrice = +e.target.value;
  updateSelectedCount();
});

//Seat click event
container.addEventListener('click', e => {
  if (e.target.classList.contains('seat') &&       //In JavaScript, the classList property is used to manipulate the classes of an HTML element. It provides a convenient way to add, remove, toggle, and check for the presence of CSS classes on an element without directly manipulating the className property.

     !e.target.classList.contains('occupied')) {
    e.target.classList.toggle('selected');          // toggle() it adds a specified class if it's not present and removes it if it is.

  }
  updateSelectedCount();
});




    </script>









    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script>
  $(document).ready(function(){
    $('.pay').click(function(){
        $('.row .selected').each(function(){
            var seatId = $(this).attr('id');
            
            $.ajax({
                url: 'seat.php',
                method: 'POST',
                data: { key: seatId },
                success: function(response){
                    // Handle success response if needed
                    console.log(response);
                },
                error: function(xhr, status, error){
                    // Handle error response if needed
                    console.error(error);
                }
            });
        });
    });
});

</script>
</body>


</html>
