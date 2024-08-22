<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:300,400,700,800');

    #head
{
    position: relative;
    left: 600px;
    top: 0px;
    width: 320px;
    animation: ani 2s forwards;
    border-radius: 40px;
     

    
    

}
#tail
{
    position: relative;
    left: 600px;
    height: 400px;
    width: 300px;
    top: -10px;
    animation: ani 2s forwards;
    background-image: url(https://accred.bookmyshow.com/dist/img/loginid-bg.png);
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
    font-family: 'Montserrat', helvetica, arial, sans-serif;

    
    

    
}
body
{
    overflow: hidden;
    font-family: 'Montserrat', helvetica, arial, sans-serif;

    
}



@keyframes ani
     {
        from
        {
            top: -100px;        }
        to
        {

        
        top: -30px;
        }
    }

#login
{
    position: relative;
    left: 65px;
    top: 180px;
}
#in1
{
    position: relative;
    left: 50px;
    font-family: 'Montserrat', helvetica, arial, sans-serif;

    top: 40px;
    width: 190px;
    height: 30px;
    border-radius: 20px;
    padding-left: 15px;

    border: none;
}
#in2
{
    position: relative;
    left: 50px;
    top: 70px;
    height: 24px;
    width: 190px;
    height: 30px;
    padding-left: 15px;
    border-radius: 20px;
    font-family: 'Montserrat', helvetica, arial, sans-serif;
    border: none;
}
#in3
{
    position: relative;
    left: 95px;
    top: 90px;
    height: 30px;
    width: 100px;
    border-radius: 10px;
    border: none;
 background-color: aliceblue;
    font-family: 'Montserrat', helvetica, arial, sans-serif;

    text-align: center;

}


#in3:hover {
  transform: scale(1.03);
  background-color: white;
  
  
}
#in0
{

}
.m:hover {
    transition: all 0.2s;
  transform: scale(1.02);
  color: blue;

  
  
  
}

.m
{
    position: relative;
    top: -20px;
    color: black;
}



</style>
</head>
<body style="background-image: url(admin\ login.jpg);" >
   <form method="post" action="admin.php">
    <div>
      
    <div id="head">
        <img src="loginBoxBg.png" alt="" height="250px" width="300px" style="border-radius: 3px;">
    </div>

    <div id="tail">
  <div style="position: relative; left: 110px; top: 30px;">      <img src="https://accred.bookmyshow.com/dist/img/login-page-user-icon.png" alt="" height="70px" width="70px" > <h4 style="position: relative; left: 10px;">Admin</h4></div>

        <input type="text" name="username" id="in1" style="    font-family: 'Montserrat', helvetica, arial, sans-serif;
">
        <input type="password" name="password" id="in2">
        <br>
        <input type="submit" name="" id="in3">

       <div class="m"> <a href="userlogin.PHP" style="position:relative ; left:70px; top:110px;  font-size: 14px;" > <br>click here to user login</a>
       </div> 
    </div>

    </div>
    
   </form>
</body>
</html>