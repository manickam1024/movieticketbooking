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
overflow-x: hidden;
}

        form {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
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
    <h2>Add offer</h2>
    <form action="off.php" method="post">
     
           

       
        <fieldset>


        <label for="duration">id</label> <br>
           <input type="text" name="id" id="" >
           <br><br>

        <label for="duration">offer name</label> <br>
            <input type="text" name="name" id=""><br><br>

            <label for="duration">background image </label> <br>
           <input type="text" name="bg" id="">  <br> <br>

           <label for="duration">valid till</label> <br>
           <input type="date" name="date" id="">
<br> <Br>
          


            </fieldset>
            <br><br>
        <input type="submit" value="Add offer">
    </form>
</body>
</html>
