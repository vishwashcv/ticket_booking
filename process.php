<?php

session_start();
$_SESSION["ticvalue"] =$_REQUEST['ticvalue'];
$_SESSION["count"]=$_REQUEST['count'];
$_SESSION["seatno"]=$_REQUEST['seatno'];
$_SESSION["time"]=$_REQUEST['time'];
$_SESSION["date"]=$_REQUEST['date'];
$_SESSION["moviename"]=$_REQUEST['movie'];
$_SESSION["email"]=$_REQUEST['email'];
$_SESSION["number"]=$_REQUEST['number'];


function generateNumericOTP($n) {	
	$generator = "1357902468";
	$result = "";
	for ($i = 1; $i <= $n; $i++) {
		$result .= substr($generator, (rand()%(strlen($generator))), 1);
	}
	return $result;
}
// Main program
$n = 6;

$_SESSION["otp"]= generateNumericOTP($n);

function sms(){
$fields = array(
    "sender_id" => $_SESSION["name"],
    "message" => $_SESSION["otp"]= generateNumericOTP($n),
    "route" => "v3",
    "numbers" => $_SESSION["number"],
);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($fields),
  CURLOPT_HTTPHEADER => array(
    "authorization: dfnESs3roIc5ePO8tQGL0Rpv6gMzxBqwWjYumHyhZiU4kaDTCFLhDdABCJ864UzqubQVa7ZIFHefPyTN",
    "accept: */*",
    "cache-control: no-cache",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

//if ($err) { echo "cURL Error #:" . $err;}
//   else { echo $response;}
//echo $_SESSION["otp"];
}
?>
<?php  echo $a= $_SESSION["otp"]; ?>
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