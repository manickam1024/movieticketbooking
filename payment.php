<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    
    @import url('https://fonts.googleapis.com/css?family=Montserrat:300,400,700,800');
body
{
    font-family: 'Montserrat', helvetica, arial, sans-serif;
    overflow:hidden;
    background-color: aliceblue;

}
    
    
    .k, .ka {
  font-family: 'Montserrat', helvetica, arial, sans-serif;
  font-weight: 501;
}
.k {
  letter-spacing: 3px;
  font-variant: small-caps;
  position: relative; left:100px; top:-45px ;  
}
.ka {
  margin-right: 40px;
  font-weight: 500;
  font-size: medium;
  position: relative;
  
}
.ka:hover {
  transform: scale(1.03);
}
.e ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #242333;
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 2;
  height: 80px;
  color: aliceblue;
  font-family: arial;
  border-bottom-left-radius: 5px;
  border-bottom-right-radius: 5px;
}
.e li {
  float: right;
  position: relative;
  top: -55px;
  position: relative; right:20px; top:-100px ;opacity:0.8 ; 

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
.nav
{
    height: 660px;
    width: 340px;
    box-shadow: 0px 0px 7px 2px rgb(0, 0,0,0.2);
    display: block;
    position: relative;
    right: 10px;
}
.h
{
    position: relative;
    top: 65px;

    height: 60px;
    width: 100%;
    box-shadow: 0px 0px 7px 1px rgb(0, 0,0,0.2);

}
.h p
{
    position: relative;
    left: 70px;
    top: 20px;
    font-weight: 700;
}


.h1
{
    position: relative;
    top: 65px;
left: 50px;
    height: 60px;
    width: 70%;
    box-shadow: 0px 0px 10px -4px rgb(0, 0,0,0.2);
    margin-bottom: 20px;
    font-weight: 300;


}
.h1 :hover
{
    transform: scale(1.01);
}

.h1 p
{
    position: relative;
    left: 70px;
    top: -30px;
    font-weight: 450;


}
.credit 
{
    height: 400px;
    width: 800px;
    box-shadow: 0px 0px 7px 1px rgb(0, 0,0,0.2);
    top: -500px;
    left: 550px;
    position: relative;
    font-family: 'Montserrat', helvetica, arial, sans-serif;
    border-radius: 20px;



    
}
.debit
{
    height: 400px;
    width: 800px;
    box-shadow: 0px 0px 7px 1px rgb(0, 0,0,0.2);
    top: -500px;
    left: 550px;
    position: relative;
    font-family: 'Montserrat', helvetica, arial, sans-serif;
    border-radius: 20px;
    display: none;



    
}
.debit input
{
    font-family: 'Montserrat', helvetica, arial, sans-serif;
    padding-left: 10px;
    box-shadow: 0px 0px 2px 0px rgb(0, 0,0,0.5);
    border: none;
    background-color: aliceblue;
}
.credit input
{
    font-family: 'Montserrat', helvetica, arial, sans-serif;
    padding-left: 10px;
    box-shadow: 0px 0px 2px 0px rgb(0, 0,0,0.5);
    border: none;
    background-color: aliceblue;
}
.pay
{
    width: 100%;
    height: 60px;
    background-color: #242333;
    position: relative;
    top: 27px;
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;

}
.pays
{
    width: 100px;
    height: 60px;
    background-color:#242333;
    position: relative;
    top: 27px;
    border-radius: 20px;
    color: white;opacity: 0.9;


}
.pay h3
{
    color: aliceblue;
    position: relative;
    left: 360px;
    top: 14px;
}
.upi 

{
    display: flex;
    flex-wrap: wrap;
    display: none;


}
.nets  
{
    display: none;
}
.e
{
    position: relative;
    right: 10px;
}

  </style>
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



<div class="nav"> 
    <div class="h"> <p>payment methods</p></div> <br>
    <div class="h1 " id="d1"> <img src="https://originserver-static1-uat.pvrcinemas.com/pvrcms/paymodes/credircard_68643_oKs6qiQS.png" alt="" style="height: 30px; width:32px; position:relative;top:16px; left:26px; "><p>credit card </p></div>
    <div class="h1" id="d2"> <img src="https://originserver-static1-uat.pvrcinemas.com/pvrcms/paymodes/netbanking_89836_BPXPXxxq.png" alt="" style="height: 30px; width:32px; position:relative;top:16px; left:27px; "><p>Net banking </p></div>
    <div class="h1" id="d3"> <img src="https://originserver-static1-uat.pvrcinemas.com/pvrcms/paymodes/upi_55969_rC76FP0Q.png" alt="" style="height: 25px; width:27px; position:relative;top:16px; left:26px; "><p>Upi </p></div>
    <div class="h1" id="d4"> <img src="https://originserver-static1-uat.pvrcinemas.com/pvrcms/paymodes/debitcard_54600_5WBLIkvV.png" alt="" style="height: 30px; width:32px; position:relative;top:16px; left:26px; "><p>debit card </p></div>


</div>

<div class="credit">
    <h3 style="position: absolute; left:50px; top:20px">Credit Card</h3>
    <img src="https://cdn-icons-png.freepik.com/512/656/656975.png" alt="" height="150px" width="150px" style="position: relative; top:120px; left:70px">
    <div class="main">
        <input type="text" id="creditCardNumber" placeholder="Enter card number" style="position: relative; height:50px; width:400px; left:300px; top:-100px; border-radius:10px;">
        <br>
        <input type="text" id="creditExpMonth" placeholder="MM" style="position: relative; height:50px; width:100px; left:300px; top:-80px ;border-radius:10px;">
        <input type="text" id="creditExpYear" placeholder="YY" style="position: relative; height:50px; width:100px; left:330px; top:-80px; border-radius:10px;">
        <input type="text" id="creditCVV" placeholder="CVV" style="position: relative; height:50px; width:100px; left:370px; top:-80px ;border-radius:10px;">
        <br>
        <input type="text" id="creditCardName" placeholder="Name on card" style="position: relative; height:50px; width:400px; left:300px; top:-50px; border-radius:10px;">
    </div>
    <div class="pay creditPay">
        <h3>Pay</h3>
    </div>
</div>

<div class="debit">

    <h3 style="position: absolute; left:50px; top:20px">Debit Card</h3>
    <img src="https://cdn-icons-png.freepik.com/512/656/656975.png" alt="" height="150px" width="150px" style="position: relative; top:120px; left:70px">
    <div class="main">
        <input type="text" id="debitCardNumber" placeholder="Enter card number" style="position: relative; height:50px; width:400px; left:300px; top:-100px; border-radius:10px;">
        <br>
        <input type="text" id="debitExpMonth" placeholder="MM" style="position: relative; height:50px; width:100px; left:300px; top:-80px ;border-radius:10px;">
        <input type="text" id="debitExpYear" placeholder="YY" style="position: relative; height:50px; width:100px; left:330px; top:-80px; border-radius:10px;">
        <input type="text" id="debitCVV" placeholder="CVV" style="position: relative; height:50px; width:100px; left:370px; top:-80px ;border-radius:10px;">
        <br>
        <input type="text" id="debitCardName" placeholder="Name on card" style="position: relative; height:50px; width:400px; left:300px; top:-50px; border-radius:10px;">
    </div>
    <div class="pay debitPay">
        <h3>Pay</h3>
    </div>
</div>

<div class="upi">

<h2 style="position: relative; left:500px ;top:-530px"> Pay using upi</h2>

<div style="position: relative; top:10px; right:30px">
 <div > <div style="position: relative;  left:500px ;top:-540px"><input type="checkbox" name="" id=""> <img src="https://assets-in.bmscdn.com/paymentcms/cred.avif" alt="" height="80px" width="80px" style="position: relative; top:40px ;left:10px"> <span style="position: relative; left:20px">CRED UPI</span>
</div></div>
<br>
<div > <div style="position: relative;  left:500px ;top:-540px"><input type="checkbox" name="" id=""> <img src="https://assets-in.bmscdn.com/paymentcms/Amazonpay.png" alt="" height="80px" width="80px" style="position: relative; top:40px ;left:10px"> <span style="position: relative; left:20px">CRED UPI</span>
</div><br></div>
<div> <div style="position: relative;  left:500px ;top:-540px"><input type="checkbox" name="" id=""> <img src="https://img2.lokercepat.id/files/2023-03-15/uwak-upi-136.jpg" alt="" height="80px" width="100px" style="position: relative; top:40px ;left:10px"> <span style="position: relative; left:20px">CRED UPI</span>
</div><br></div>
<div > <div style="position: relative;  left:900px ;top:-850px"><input type="checkbox" name="" id=""> <img src="https://assets-in.bmscdn.com/paymentcms/bhim_web.png" alt="" height="80px" width="80px" style="position: relative; top:40px ;left:10px"> <span style="position: relative; left:20px">CRED UPI</span>
</div><br></div>
<div > <div style="position: relative;  left:900px ;top:-850px"><input type="checkbox" name="" id=""> <img src="https://assets-in.bmscdn.com/paymentcms/phonepe_web.png" alt="" height="80px" width="80px" style="position: relative; top:40px ;left:10px"> <span style="position: relative; left:20px">CRED UPI</span>
</div><br></div>
<div > <div style="position: relative;  left:900px ;top:-850px"><input type="checkbox" name="" id=""> <img src="https://assets-in.bmscdn.com/paymentcms/gpay.jpg" alt="" height="80px" width="80px" style="position: relative; top:40px ;left:10px"> <span style="position: relative; left:20px">CRED UPI</span>
</div><br></div>
</div>
<h3 style="position: relative; left:1200px ;top:-820px" class="pays"> <p style="position: absolute; top:-3px; left:27px"> Pay</p> </h3>

</div>



<div class="nets">
<h2 style="position: relative; left:500px ;top:-530px"> Pay using net banking</h2>

<div style="position: relative; top:90px; right:230px">
 <div > <div style="position: relative;  left:500px ;top:-540px"><input type="checkbox" name="" id=""> <img src="https://in.bmscdn.com/webin/payment/netbanks/sbi-na.png?v1" alt="" height="60px" width="210px" style="position: relative; top:40px ;left:10px"></span>
</div></div>
<br>
<div > <div style="position: relative;  left:500px ;top:-540px"><input type="checkbox" name="" id=""> <img src="https://in.bmscdn.com/webin/payment/netbanks/hdf-na.png?v1" alt="" height="60px" width="210px" style="position: relative; top:40px ;left:10px"> 
</div><br></div>
<div> <div style="position: relative;  left:500px ;top:-540px"><input type="checkbox" name="" id=""> <img src="https://in.bmscdn.com/webin/payment/netbanks/ici-na.png?v1" alt="" height="60px" width="210px" style="position: relative; top:40px ;left:10px"> 
</div><br></div>
<div > <div style="position: relative;  left:900px ;top:-850px"><input type="checkbox" name="" id="" style="position: relative; top:70px"> <img src="https://in.bmscdn.com/webin/payment/netbanks/uti-na.png?v1" alt="" height="60px" width="210px" style="position: relative; top:100px ;left:10px"> 
</div><br></div>



<h3 style="position: relative; left:1000px ;top:-600px" class="pays"> <p style="position: relative;top:16px;left:27px"> Pay</p> </h3>

</div>






<script>
        var credit = document.getElementById('d1');
        var debit = document.getElementById('d4');
        var net = document.getElementById('d2');
        var upi = document.getElementById('d3');

        var creditDiv = document.querySelector('.credit');
        var debitDiv = document.querySelector('.debit');
        var netDiv = document.querySelector('.nets');
        var upiDiv = document.querySelector('.upi');

        var payButton = document.querySelectorAll('.pay');
        var payButtons = document.querySelectorAll('.pays');


        credit.addEventListener('click', function() {
            creditDiv.style.display = "block";
            debitDiv.style.display = "none";
            netDiv.style.display = "none";
            upiDiv.style.display = "none";
        });

        debit.addEventListener('click', function() {
            creditDiv.style.display = "none";
            debitDiv.style.display = "block";
            netDiv.style.display = "none";
            upiDiv.style.display = "none";
            console.log("clicked");
        });

        net.addEventListener('click', function() {
            creditDiv.style.display = "none";
            debitDiv.style.display = "none";
            netDiv.style.display = "flex";
            upiDiv.style.display = "none";
        });

        upi.addEventListener('click', function() {
            creditDiv.style.display = "none";
            debitDiv.style.display = "none";
            netDiv.style.display = "none";
            upiDiv.style.display = "block";
        });

    
        
    </script>
    <script>
     document.querySelector('.creditPay').addEventListener('click', function() {
        const cardNumber = document.getElementById('creditCardNumber').value.trim();
        const expMonth = document.getElementById('creditExpMonth').value.trim();
        const expYear = document.getElementById('creditExpYear').value.trim();
        const cvv = document.getElementById('creditCVV').value.trim();
        const cardName = document.getElementById('creditCardName').value.trim();

        // Validate credit card number (16 digits)
        if (!isValidCardNumber(cardNumber, 16)) {
            alert('Invalid credit card number. Please enter a valid 16-digit number.');
            return false;
        }

        // Validate expiration date
        if (!isValidExpiry(expMonth, expYear)) {
            alert('Invalid expiration date.');
            return false;
        }

        // Validate CVV (3 or 4 digits)
        if (!isValidCVV(cvv)) {
            alert('Invalid CVV.');
            return false;
        }

        // Validate card name (non-empty)
        if (cardName === "") {
            alert('Name on card cannot be empty.');
            return false;
        }

        alert('Payment successful (Credit Card).');
        return true;
    });

    // Debit Card Form Validation
    document.querySelector('.debitPay').addEventListener('click', function() {
        const cardNumber = document.getElementById('debitCardNumber').value.trim();
        const expMonth = document.getElementById('debitExpMonth').value.trim();
        const expYear = document.getElementById('debitExpYear').value.trim();
        const cvv = document.getElementById('debitCVV').value.trim();
        const cardName = document.getElementById('debitCardName').value.trim();

        // Validate debit card number (16 or 19 digits)
        if (!isValidCardNumber(cardNumber, [16, 19])) {
            alert('Invalid debit card number. Please enter a valid 16 or 19-digit number.');
            return false;
        }

        // Validate expiration date
        if (!isValidExpiry(expMonth, expYear)) {
            alert('Invalid expiration date.');
            return false;
        }

        // Validate CVV (3 or 4 digits)
        if (!isValidCVV(cvv)) {
            alert('Invalid CVV.');
            return false;
        }

        // Validate card name (non-empty)
        if (cardName === "") {
            alert('Name on card cannot be empty.');
            return false;
        }

        alert('Payment successful (Debit Card).');
        return true;
    });

    // Function to validate card number
    function isValidCardNumber(number, lengths) {
        // Remove any non-numeric characters
        number = number.replace(/\D/g, '');

        // Check if the number matches any of the specified lengths
        if (Array.isArray(lengths)) {
            return lengths.includes(number.length);
        } else {
            return number.length === lengths;
        }
    }

    // Function to validate expiration date
    function isValidExpiry(month, year) {
        const currentYear = new Date().getFullYear() % 100; // Get last two digits of current year
        const currentMonth = new Date().getMonth() + 1; // Months are zero-based

        if (month < 1 || month > 12 || isNaN(month)) {
            return false;
        }
        if (year < currentYear || (year == currentYear && month < currentMonth) || isNaN(year)) {
            return false;
        }

        return true;
    }

    // Function to validate CVV
    function isValidCVV(cvv) {
        return /^\d{3,4}$/.test(cvv);
    }
    </script>
</body>
</html>