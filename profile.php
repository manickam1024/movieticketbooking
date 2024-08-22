<?php 

session_start();

$servername = "localhost";
$username = "root";
$password = ""; // You need to provide your actual password here
$dbname = "movie";

// Create connection
$s = mysqli_connect($servername, $username, $password, $dbname);

$name = $_SESSION['username'];
$moviename = $_SESSION['moviename'];




?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
@import url('https://fonts.googleapis.com/css?family=Montserrat:300,400,700,800');


        .data
        {
            position: relative;
            top: 200px;
            left: 900px;
        }
        .div1
        {
            height:250px;
            width: 110%;
            background-color: aliceblue;
            font-weight: 400;
            box-shadow: 0px 0px 10px 1px rgb(0, 0, 0,0.2);
            position: relative;
            top: 76px;
            left: -10px;
            
            
        }
        .c1 h1{
          font-family: 'Montserrat', helvetica, arial, sans-serif;
position: relative;
top: 10px;
          font-size: xx-large;

        }



        body
        {
          background-color: aliceblue;
          overflow-x: hidden;
        }
        
        .e ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color:#242333;
  position: fixed;
  top: 0;
  right: 2px;
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



.k, .ka {
  font-weight: 501;
  font-family: 'Montserrat', helvetica, arial, sans-serif;

}
.k {
  letter-spacing: 3px;
  font-variant: small-caps;
  position: relative; left:100px; top:-20px ;  

}
.ka {
  margin-right: 40px;
  font-weight: 500;
  font-size: medium;
}
.ka:hover {
  transform: scale(1.03);
  
}
.c1
{
  position: relative;
  top: -420px;
  right: 500px;
}
.o
{
  position: relative;
  top: -60px;
  box-shadow: 0px 0px 7px 0px rgb(0, 0, 0,0.2);
  width: 300px;
  font-family: 'Montserrat', helvetica, arial, sans-serif;
  right: 600px;
  padding: 5px;
  border-radius: 10px;
  margin: 10px;
  margin-bottom: 20px;
  

  

}
.oo 
{
  height: max-content;
  width: 1100px;
  display: flex;

  flex-wrap: wrap;
  justify-content: space-evenly;
  
}
.book
{
  font-family: 'Montserrat', helvetica, arial, sans-serif;
  position: relative;
  left: 180px;
  margin: 20px;
  top: 150px;
  height: 80PX;
  width: 250PX;
  background-color: aliceblue;
  box-shadow: 0px 0px 10px 1px rgb(0, 0, 0,0.2);
  border-radius: 20PX;


}
.book h2
{
  position: relative;
  top: 27px;
  font-size: 20px;
  left: 30px;
  opacity: 0.7;

}
.cancelMessage
{
  color: red;
}

    </style>
</head>
<body>
<div class="e">


<ul>
<img src="mmm.jpg" alt="" height="45px" width="65px" style="position: relative; top: 17px; left:30px; opacity:0.9; 
">
  <img src="home_24dp_FILL0_wght400_GRAD0_opsz24.png" alt="" height="25px"; width="25px" style="position: relative; top:10px; left:1075px;
  ">
   <img src="person_24dp_FILL0_wght400_GRAD0_opsz24.png" alt="" height="25px"; width="25px" style="position: relative; top:10px; left:1165px;
  ">
   <img src="logout_24dp_FILL0_wght400_GRAD0_opsz24.png" alt="" height="25px"; width="25px" style="position: relative; top:10px; left:1260px;
  ">
  

  <h2  class="k">CINEMA NOW </h2>
  <div style="position: relative; top: -10px; right:-40px;">

  <li class="ka"><a class="active" href="userlogin.php"> logout</a></li>
  <li class="ka"><a href="profile.php">profile</a></li>
 <li class="ka"><a href="userhome.php">home</a></li>
 
 
  </div>
</ul>

</div>
<div class="data">
    <?php
    // Start or resume session
  
    
    // Assuming $name is already defined or retrieved from session
    echo '<div class="c1"> <h1> Hello ' . $name . '!</h1></div>';
    
    // Select data from database based on session values
    $conn = "SELECT * FROM seat WHERE names='$name'";
    $query = mysqli_query($s, $conn);
    
    // Check if any rows are returned
    if (mysqli_num_rows($query) > 0) {
        echo '<div class="oo">';
        
        while ($array = mysqli_fetch_assoc($query)) {
            echo '<div class="o">';
            echo 'Moviename: ' . $array['moviename'];
            echo "<br>";
            echo 'Theatre: ' .  $array['theatre'];
            echo "<br>";
            echo 'Seat No: ' . $array['seatid'];
            echo "<br>";
            
            // Display cancel button
            echo '<form method="post">';
            echo '<input type="hidden" name="seatid" value="' . $array['seatid'] . '">';
           echo '<br>';
            echo '<button type="submit" name="cancelTicketBtn" style="background-color: gray; color: #fff; padding: 8px 16px; border: none; cursor: pointer; border-radius: 10px;">Cancel Ticket</button>';
            echo '</form>';
            echo '<br>';
            
            // Check if ticket is cancelled (using session)
            $sessionKey = 'ticket_cancelled_' . $array['seatid'];
            if (isset($_SESSION[$sessionKey]) && $_SESSION[$sessionKey] === true) {
                echo '<div class="cancelMessage">Ticket Cancelled</div>';
            } else {
                echo '<div class="cancelMessage"></div>';
            }
            
            echo '</div>';
            echo "<br>";
        }
        
        echo '</div>';
    } else {
        // No rows found
        echo "No data found!";
    }
    
    // Handle cancellation request
    if (isset($_POST['cancelTicketBtn'])) {
        $cancelledSeatId = $_POST['seatid'];
        
        // Set session variable to mark ticket as cancelled
        $_SESSION['ticket_cancelled_' . $cancelledSeatId] = true;
        
        // Refresh the page or redirect as needed after cancellation
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    }
    ?>
</div>


<script>
    // JavaScript to handle click event on Cancel Ticket button
    document.addEventListener('DOMContentLoaded', function() {
        var cancelButtons = document.querySelectorAll('.cancelTicketBtn');
        
        cancelButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                var seatId = this.getAttribute('data-seatid');
                var message = 'Ticket with Seat No: ' + seatId + ' cancelled!';
                
                // Create cancellation message element
                var messageElement = document.createElement('div');
                messageElement.innerText = message;
                messageElement.classList.add('cancelMessageText'); // Optional styling
                
                // Insert cancellation message below the button's parent element
                var parentElement = this.parentNode;
                parentElement.querySelector('.cancelMessage').appendChild(messageElement);
                
                // Optionally, you can hide or disable the button after click
                this.style.display = 'none'; // Hide button after click
                // this.disabled = true; // Disable button after click
            });
        });
    });
</script>






</body>
</html>




