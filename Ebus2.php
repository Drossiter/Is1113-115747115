<!DOCTYPE html>
<html>
      <head>
          <title> Enter Details</title>
          
          <!--JQuery-->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      </head>
      
      <body>
          <h4>Please enter your payment details</h4>
          
          <form action ="Ebus.php" method="Post">
             <label for = "user_pin">PIN</label>
             <input type = "password" id= "user_pin" placeholder="Card PIN" maxlenght="4">
             
             <button type="Submit" id="btnPurchase" disabled>Proceed with Purchase</button>
              
          </form>
          <br/>
          <button onClick="validateDetails()"Validate></button>
              
          <script type="text/javascript" src="Ebus2_validator.js"></script>
      </body>
</html>