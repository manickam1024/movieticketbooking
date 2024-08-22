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
            border-radius: 10px;
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
            background-color:  red;
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
    <form action="up.php" method="post">
        <fieldset>
            <legend>Movie Details</legend>
            <label for="movieName">Movie Name</label> <br>
            <input type="text" name="movieName" > <br><br>

            <label for="selectImage">Select Image</label> <br>
            <input type="text" name="url" ><br><br>

            <label for="selectLanguage">Select Language</label> <br>
            <input type="checkbox" name="language[]" value="tamil" style=" position :relative;top :30px"> Tamil<br>
            <input type="checkbox" name="language[]" value="telugu"  style=" position :relative;top :30px"> Telugu<br>
            <input type="checkbox" name="language[]" value="english"  style=" position :relative;top :30px"> English<br>
            <input type="checkbox" name="language[]" value="kannada"  style=" position :relative;top :30px"> Kannada<br><br>
</fieldset>
<br><br>



        <fieldset>
            <legend>Additional Details</legend>
           

           
            <label for="genre">Genre</label> <br>
            <input type="text" name="genre"> <br><br>

            <label for="genre">id</label> <br>
            <input type="text" name="id"> <br><br>

            <label for="genre">trailer</label> <br>
            <input type="text" name="youtube"> <br><br>
            
        </fieldset>
        <br><br>

        <fieldset>
            <legend>release date</legend>
            <input type="date" name="from">
          
        </fieldset>
        <br><br>
        
        <fieldset>

        <label for="duration">description</label> 
            <input type="text" name="des" id=""><br><br><br>

            <label for="duration">background image </label> 
           <input type="text" name="bg" id="">


            </fieldset>
            <br><br>
        <input type="submit" value="Add Movie">
    </form>
</body>
</html>
