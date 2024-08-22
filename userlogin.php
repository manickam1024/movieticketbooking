<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Ticket Booking</title>
    
    <link rel="stylesheet" href="styles.css">
    
        
    <style>
        body, html {
            margin: 0;
            padding: 0;
            background: #0a0a0a;
          
            
        }

        #videoContainer {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
            z-index: 7;
        }

        video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        #content {
            display: none;
            background-color: white;
            height: 200vh;
            padding: 20px;
        }

        .slide-up {
            animation: slideUp 1s forwards;
        }

        @keyframes slideUp {
            from { top: 0; }
            to { top: -100vh; }
        }
       
    </style>
</head>
<body>
    <div id="videoContainer">
        <video id="myVideo" src="newk.mp4" autoplay muted style="position: relative; width: 900px; height: 500px; left: 320px; top: 100px;"></video>
    </div>
    <div id="content">
        <h1>Other Content</h1>
        <p>This is the other content that will be displayed after the video slides up.</p>
        <!-- Add more content as needed -->
    </div>

   

<div class="page">
  <div class="container">
    <div class="left">
      <div class="login">Login</div>
      <a href="adminlogin.PHP" style="text-decoration: none; color:#0a0a0a ;position:relative;left:60px;  font-family: 'Montserrat', helvetica, arial, sans-serif;
"> <br>click here to admin login</a>
      </div>
    <div class="right">
      <svg viewBox="0 0 320 300">
        <defs>
          <linearGradient
                          inkscape:collect="always"
                          id="linearGradient"
                          x1="13"
                          y1="193.49992"
                          x2="307"
                          y2="193.49992"
                          gradientUnits="userSpaceOnUse">
            <stop
                  style="stop-color:#ff00ff;"
                  offset="0"
                  id="stop876" />
            <stop
                  style="stop-color:#ff0000;"
                  offset="1"
                  id="stop878" />
          </linearGradient>
        </defs>
        <path d="m 40,120.00016 239.99984,-3.2e-4 c 0,0 24.99263,0.79932 25.00016,35.00016 0.008,34.20084 -25.00016,35 -25.00016,35 h -239.99984 c 0,-0.0205 -25,4.01348 -25,38.5 0,34.48652 25,38.5 25,38.5 h 215 c 0,0 20,-0.99604 20,-25 0,-24.00396 -20,-25 -20,-25 h -190 c 0,0 -20,1.71033 -20,25 0,24.00396 20,25 20,25 h 168.57143" />
      </svg>
      <form action="userpass.php" method="POST" class="form">
      
        <label for="email">username</label>
        <input type="text" id="email" name="email">
        <label for="password">Password</label>
        <input type="password" id="password" name="password">
        <input type="submit" id="submit" value="Submit">
      </div>
    </div>
  </div>
</div>

<script>
        document.getElementById('myVideo').addEventListener('ended', function() {
            document.getElementById('videoContainer').classList.add('slide-up');

            setTimeout(function() {
                document.getElementById('videoContainer').style.display = 'none';
            }, 1000); 
           // Duration of the slide-up animation
        });



        var current = null;
document.getElementById('email').addEventListener('focus', function(e) {
  if (current) current.pause();
  current = anime({
    targets: 'path',
    strokeDashoffset: {
      value: 0,
      duration: 700,
      easing: 'easeOutQuart'
    },
    strokeDasharray: {
      value: '240 1386',
      duration: 700,
      easing: 'easeOutQuart'
    }
  });
});
document.getElementById('password').addEventListener('focus', function(e) {
  if (current) current.pause();
  current = anime({
    targets: 'path',
    strokeDashoffset: {
      value: -336,
      duration: 700,
      easing: 'easeOutQuart'
    },
    strokeDasharray: {
      value: '240 1386',
      duration: 700,
      easing: 'easeOutQuart'
    }
  });
});
document.getElementById('submit').addEventListener('focus', function(e) {
  if (current) current.pause();
  current = anime({
    targets: 'path',
    strokeDashoffset: {
      value: -730,
      duration: 700,
      easing: 'easeOutQuart'
    },
    strokeDasharray: {
      value: '530 1386',
      duration: 700,
      easing: 'easeOutQuart'
    }
  });
});

    </script>
</body>
</html>

