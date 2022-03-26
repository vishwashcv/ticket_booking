<?php session_start(); echo $a= $_SESSION["otp"]; ?>
<html>
<style>
input[type=submit]{
  color: white;
  padding: 12px 35px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  background-color: blueviolet;
  box-shadow: 2px 2px rgb(41, 41, 41) ;
  font-size: 20px;
  letter-spacing: 0px;
 
  }
  form {
    background-color: rgba(185, 202, 246, 0.5);
     box-shadow: 5px 5px 10px;
     height:470px;
     width:450px;
  }
  input {
    padding: 20px 30px;
    margin: 40px;
    border: none;
    box-shadow: 5px 5px 10px ;
    color:green;
    background-color: transparent;
    font-size: 25px;
    text-align:center;
    letter-spacing: 10px;
    text-decoration-color: green;
  }
  input[type=text]:focus{
    color: rgb(24, 34, 43);
    border: rgba(185, 202, 246, 0.5);
    outline: rgb(134, 158, 230)
   
  }
  body{
    background-image: linear-gradient(to right,white , rgb(241, 241, 193),white);

  }
</style>
<center>
<form method="get" action="./seatselectview.php">
    <br>
<h2>Enter your OTP </h2>
<input type="text" name="otp"  id="otpphp" oninput="h()" required>
<input type="submit" id="submitphp" value="continue"> 
</form>
<center>
</html>
<script>
 document.getElementById("submitphp").style.visibility="hidden";
 var a=<?php echo $a; ?>;
 function h(){
  var val=document.getElementsByTagName("input")[0].value;
if( val == a){
    document.getElementById("submitphp").style.visibility="visible";
 
}else{
    document.getElementById("submitphp").style.visibility="hidden";
  
}
 }
</script>