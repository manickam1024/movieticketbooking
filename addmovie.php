<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Movie - Ticket Booking</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:300,400,700,800');

        body {
            font-family: Arial, sans-serif;
            background-color: #ff6868;;
            padding: 20px;
            font-family: 'Montserrat', helvetica, arial, sans-serif;

        }

        form {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
        position: relative;
        left: 630px;
            margin-bottom: 20px;
}

        label {
            font-weight: bold;
        }

        input[type="checkbox"], input[type="file"], input[type="checkbox"] {
            margin-bottom: 10px;
            width: calc(100% - 20px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: red;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h2>Add Movie</h2>
    <form action="dbadmin.php" method="post">
        <fieldset>
            <legend>Movie Details</legend>
            <label for="movieName">Movie Name</label> <br>
            <input type="text" name="movieName" > <br><br>

            <label for="selectImage">Select Image</label> <br>
            <input type="text" name="url" ><br><br>

            <label for="selectLanguage">Select Language</label> <br>
            <input type="checkbox" name="language[]" value="tamil" style="margin-left: 20px; position :relative;top :30px "> Tamil<br>
            <input type="checkbox" name="language[]" value="telugu" style="margin-left: 20px; position :relative;top :30px "> Telugu<br>
            <input type="checkbox" name="language[]" value="english" style="margin-left: 20px; position :relative;top :30px "> English<br>
            <input type="checkbox" name="language[]" value="kannada" style="margin-left: 20px; position :relative;top :30px "> Kannada<br><br>
</fieldset>
<br><br>

<fieldset>
<label for="selectTheatres">Select Theatres</label> <br>
            <input type="checkbox" name="theatres[]" value="krishna" style="margin-left: 20px; position :relative;top :30px"> Krishna<br>
            <input type="checkbox" name="theatres[]" value="brundha" style="margin-left: 20px; position :relative;top :30px"> Brundha<br>
            <input type="checkbox" name="theatres[]" value="pvr" style="margin-left: 20px; position :relative;top :30px"> PVR<br>
            <input type="checkbox" name="theatres[]" value="nexus" style="margin-left: 20px; position :relative;top :30px"> Nexus<br><br>
            <input type="checkbox" name="theatres[]" value="thirumala" style="margin-left: 20px; position :relative;top :30px"> thirumala<br>
            <input type="checkbox" name="theatres[]" value="AGS cinema" style="margin-left: 20px; position :relative;top :30px"> AGS cenima<br>
            <input type="checkbox" name="theatres[]" value="astor theatre" style="margin-left: 20px; position :relative;top :30px"> astor theatre<br>
            <input type="checkbox" name="theatres[]" value="caribbean cinemas" style="margin-left: 20px; position :relative;top :30px"> caribbean cenimas<br><br>
            <input type="checkbox" name="theatres[]" value="manis cinemas" style="margin-left: 20px; position :relative;top :30px"> mani's cinemas<br>
          <br><br>

    <label for="selectTimings">Select Timings</label> <br>
            <input type="checkbox" name="timings[]" value="9:30" style="margin-left: 20px; position :relative;top :30px"> 9:30 am<br>
            <input type="checkbox" name="timings[]" value="1:30" style="margin-left: 20px; position :relative;top :30px"> 1:30 pm<br>
            <input type="checkbox" name="timings[]" value="4:00" style="margin-left: 20px; position :relative;top :30px"> 4:00 pm<br>
            <input type="checkbox" name="timings[]" value="7:30" style="margin-left: 20px; position :relative;top :30px"> 7:30 pm<br>
            <input type="checkbox" name="timings[]" value="9:30" style="margin-left: 20px; position :relative;top :30px"> 9:30 pm<br><br> 
</fieldset>
<br><br>

        <fieldset>
            <legend>Additional Details</legend>
           

            <label for="duration">Duration</label> <br>
            <input type="text" name="duration"> <br><br>

            <label for="genre">Genre</label> <br>
            <input type="text" name="genre"> <br><br>

            <label for="genre">id</label> <br>
            <input type="text" name="id"> <br><br>

            <label for="genre">youtube</label> <br>
            <input type="text" name="youtube"> <br><br>
            
        </fieldset>
        <br><br>

        <fieldset>
            <legend>date available</legend>
            <h4>from</h4>
            <input type="text" name="from">
            <h4>to</h4>
            <input type="text" name="to">
        </fieldset>
        <br>
        <fieldset>
        <label for="genre">des</label> <br>
            <input type="text" name="des"> <br><br>
        </fieldset>
        <br><br>
        <input type="submit" value="Add Movie">
    </form>
</body>
</html>
