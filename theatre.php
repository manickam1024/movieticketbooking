<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="index.css">
<style>

</style>
</head>
<body>

<div id="loading">
    <!-- Your loading symbol goes here -->
    Loading...
</div>

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
  <div style="position: relative; top:-1px ;right:-30px;">

  <li class="ka"><a class="active" href="userlogin.php"> logout</a></li>
  <li class="ka"><a href="profile.php">profile</a></li>
 <li class="ka"><a href="userhome.php">home</a></li>
 
 
  </div>
</ul>
</div>



<div class="card-container">


<?php
// theatre.php

// Start session


// Check if the movie ID is set in the query parameters
if(isset($_POST['movie_id'])) {
    // Retrieve the movie ID from the query parameters
    $movie_id = $_POST['movie_id'];

    // Set session variable
    $_SESSION['id'] = $movie_id;

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
        
        echo '<img src="play_circle_20dp_FILL0_wght400_GRAD0_opsz20.png" height="50" width="50" style="position:relative; left:300px; z-index:3; top:220px; transition: transform 0.3s;" onmouseover="this.style.transform=\'scale(1.06)\';" onmouseout="this.style.transform=\'scale(1)\'; z-index:3;
        "> ';
        echo '<div class="card" style="    background-image: url('.$row["pic"].');
        ">';
      
        echo '<div class="info">';

        echo '<img src="' . $row["pic"] . '" 
 >  ';
       echo '<div>';
        echo'<div class="j">';
        echo ' <h2 style="position:relative ; left:-170px; opacity:1">' . $row["name"] . '</h2>';
        echo '<p>Language: ' . $row["languages"] . '</p>';
        echo '<p>Genre: ' . $row["genre"] .'</p>';
        echo '<p>Duration: ' . $row["duration"] .'</p>';
        echo '</div>';
        echo '<div>';

        echo '<div class ="des">'.$row["des"].'
        </div>';
        echo '</div>';
        echo '</div>';        echo '</div>';



        

        $name=$row["name"];
        $_SESSION['moviename']=$name;
      
        // Display the session variable to verify it

        echo '</div>';
    } else {
        echo "No movie found with the provided ID";
    }

    // Close the database connection
    
} else {
    // If movie ID is not set in the query parameters, display an error message
    echo "Movie ID is not provided";
}


?>










<div class="date">
    <?php

    for ($i = 0; $i < 5; $i++) { // Loop for five days
        $nextDate = date('d M D', strtotime("+$i day")); // Get next 5 dates
        echo '<div class="dates" onclick="redirectToTicket(\'' . date('Y-m-d', strtotime("+$i day")) . '\')"> <p>' . $nextDate . '</p></div>';
    }
    ?>
</div>





<script>
    function redirectToTicket(date) {
        // Store selected date in session
        fetch('store_date_in_session.php?date=' + date)
            .then(response => {
                // Handle response as needed
                console.log('Date stored in session');
                // Original functionality here
                var theatreContents = {};
                document.querySelectorAll('.theatres').forEach(function(theatre) {
                    theatreContents[theatre.id] = theatre.innerHTML;
                });
                document.querySelectorAll('.theatres').forEach(function(theatre) {
                    theatre.classList.add('disabled');
                    theatre.innerHTML = '<div class="loading-symbol">Loading...</div>';
                });
                setTimeout(function() {
                    document.querySelectorAll('.theatres').forEach(function(theatre) {
                        theatre.classList.remove('disabled');
                        theatre.innerHTML = theatreContents[theatre.id];
                    });
                }, 2000);
            })
            .catch(error => {
                console.error('Error storing date in session:', error);
            });
    }
</script>






<div class="theatre">

    <?php
    
    $movies = explode(',', $row["theatres"]);
    $times = explode(',', $row["timings"]);
    $lang = explode(',', $row["languages"]);
      


    foreach ($movies as $index => $movie) {
        echo '<div class="theatres" id="theatres_' . $index . '" onmouseenter="toggleTimings(' . $index . ', true)" onmouseleave="toggleTimings(' . $index . ', false)">';

        echo '<h3 style="position: relative; top:27px">' . $movie . '</h3>';

        echo '<div class="times" id="times_' . $index . '" style="display: none;">';
        
        foreach ($times as $timeIndex => $time) {
            echo '<form id="ticketForm_' . $index . '_' . $timeIndex . '" action="ticket.php" method="post">';
            echo '<input type="hidden" name="theatre" value="' . htmlspecialchars($movie) . '">'; // Hidden input field for theater name
            echo '<input type="hidden" name="time" value="' . htmlspecialchars($time) . '">';
            // Hidden input field for language selection
            echo '<input type="hidden" name="language" id="language_' . $index . '_' . $timeIndex . '" value="">';
            echo '<div class="time" onclick="selectTimeAndLanguage(' . $index . ', ' . $timeIndex . ')"> <p>' . $time . '</p></div>';
            echo '</form>';
        }

        echo '<div class="select-wrapper">';

        echo '<select class="select" id="lang_' . $index . '" onchange="updateLanguage(' . $index . ')">';
// Add a heading-like option that is disabled and selected
echo '<option value="" disabled selected>language</option>';
foreach ($lang as $langs) {
    echo '<option value="' . $langs . '">' . $langs . '</option>';
}
echo '</select>';
        echo '</div>'; // Close select-wrapper

        echo '</div>'; // Close times div
        echo '</div>'; // Close theatres div
    }
    ?>
</div>
  

<script>
    var selectedTime = null;
    var selectedLanguage = null;
    var selectedTheatre = null;

    function selectTimeAndLanguage(index, timeIndex) {
        // Set the selected time and theater
        selectedTime = document.getElementById('ticketForm_' + index + '_' + timeIndex).querySelector('input[name="time"]').value;
        selectedTheatre = document.getElementById('ticketForm_' + index + '_' + timeIndex).querySelector('input[name="theatre"]').value;
        // Submit the form only if both time, language, and theater are selected
        if (selectedTime !== null && selectedLanguage !== null && selectedTheatre !== null) {
            document.getElementById('ticketForm_' + index + '_' + timeIndex).submit();
        } else {
            alert('Please select both time and language.');
        }
    }

    function updateLanguage(index) {
        selectedLanguage = document.getElementById('lang_' + index).value;
        // Update the hidden input field for language selection for each time form
        var timeForms = document.querySelectorAll('[id^="ticketForm_' + index + '_"]');
        timeForms.forEach(function(form) {
            var timeIndex = form.id.split('_')[2];
            document.getElementById('language_' + index + '_' + timeIndex).value = selectedLanguage;
        });
    }

    function toggleTimings(index, isHovered) {
        var timingsDiv = document.getElementById('times_' + index);
        var theatre = document.getElementById('theatres_' + index);

        if (isHovered) {
            timingsDiv.style.display = 'flex';
            theatre.classList.add('expanded');
        } else {
            timingsDiv.style.display = 'none';
            theatre.classList.remove('expanded');
        }
    }
</script>










</body>
</html>
