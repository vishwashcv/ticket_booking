
<?php


$servername = "localhost";
$username = "id18675936_test1";
$password = "\N9ye0\Y|q-qb_S@";
$dbname = "id18675936_test";
 $a=(array)null;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$m=$_REQUEST['movie'];
$t=$_REQUEST['time'];
$d=$_REQUEST['date'];
$sql = "SELECT * FROM seats WHERE movie  = '".$m."' and timing='".$t."' and dat='".$d."' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  $x=0;
  while($row = $result->fetch_assoc()) {
    $x +=1;
   $a[$x] =   $row["seatno"];
    
  }
} else {
  echo "";
}
echo "<br>";
//foreach ($a as $value) {
//  echo "$value <br>";
  
//}
$a_to_json=json_encode((array)$a);
$conn->close();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./seatselect.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ticket booking</title>
</head>
<style>
  @import url('https://fonts.googleapis.com/css?family=Lato&display=swap');

* {
  box-sizing: border-box;
}

.seat{
  background-color:white;
  display: inline-block;
     border: 2px  ridge;
    padding: 8px;
   font-size: 10px;
   border-top-left-radius: 4px; 
   border-top-right-radius: 4px; 

   }
.seat:hover:not(.selected) {
 
 border: solid  rgb(118, 230, 155) 2px;
    cursor: pointer;
}


li {
    list-style-type: none;
    }

.wholeborder {
    position:relative;
    top: 50px;
}
body{
    background-repeat:no-repeat ;
     background-position: center;
     height: 100%; 
    background-size:cover ;
    
  }

body, html {
    height: 100%;
    margin: 0;
    font-family: Roboto, sans-serif;
    background-color: #DFF6FF;
  }
  .selected{
      background-color:rgb(54, 160, 221);
    
  }
  .sold {
    background-color: royalblue !important;
    pointer-events :none;
}
  .val{
      color: white;
      border-color: tomato;
  }
  
  p.text {
    margin: 5px ;
    color: rgb(14, 0, 0);
    top: 40px;
    position: relative;
    padding: 30px;
    font-size:13px;
    text-align:center;
  }
  
  p.text span {
    color:green;
  }
  .screen{
    perspective: 110px;
    position: relative;
  }
  .border{
    width: 350px;
    height: 30px;
   border:solid 1px gainsboro;
  
   background: rgba(100,100,100,0.2); 
  transform-style: preserve-3d;
  transform: rotateX(45deg);
  }
  #w{
    background-color: black;
    color: blanchedalmond;
  }
  .seat1,.seat2,.seat3{
    background-color:gainsboro;
  pointer-events:none;
  border: 2px  ridge;
 padding: 4px;
font-size: 10px;
border-top-left-radius: 4px; ;
border-top-right-radius: 4px; 
display: inline-block;
  }
  .seat2{
    background-color:rgb(54, 160, 221);
   }
   .seat3{
    background-color:white;
 
   }
   .detail{
    position: absolute; 
    padding: 2px;
    font-size: 4px;
   }
  #cont1{
    border:none;
    background-color: #5D8BF4;
    color: white;
    padding: 10px; 
  }
</style>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
 
<center>


    <body>
      <h1 id='p'></h1>
      <div class="details">
      sold      <div class="seat1"></div>
  selected      <div class="seat2"></div>
  empty         <div class="seat3"></div>
  </div>
        <div class="wholeborder" id="all">
 
            <ul>
                <li class="seat" id="h1" value="1"></li>
                <li class="seat" value="2"></li>
                <li class="seat" value="3"></li>
                <li class="seat" value="4"></li>
                <li class="seat" value="5"></li>
                <li class="seat" value="6"></li>
                <li class="seat" value="7"></li>
                <li class="seat" value="8"></li>
                <li class="seat" value="9"></li>
                <li class="seat" value="10"></li>
                <li class="seat" value="11"></li>
                <li class="seat" value="12"></li>
                <li class="seat" value="13"></li>
                <li class="seat" value="14"></li>
  
                </ul>
     <ul>
               <li class="seat" value="15"></li>
                <li class="seat" value="16"></li>
                <li class="seat" value="17"></li>
                <li class="seat" value="18"></li>
                <li class="seat" value="19"></li>
                <li class="seat" value="20"></li>
                <li class="seat" value="21"></li>
                <li class="seat" value="22"></li>
                <li class="seat" value="23"></li>
                <li class="seat" value="24"></li>
                <li class="seat" value="25"></li>
                <li class="seat" value="26"></li>
                <li class="seat" value="27"></li>
                <li class="seat" value="28" ></li>


                </ul>
     <ul>

                <li class="seat" value="29" ></li>
                <li class="seat" value="30" ></li>
                <li class="seat" value="31"></li>
                <li class="seat" value="32"></li>
                <li class="seat" value="33"></li>
                <li class="seat" value="34"></li>
                <li class="seat" value="35"></li>
                <li class="seat" value="36"></li>
                <li class="seat" value="37"></li>
                <li class="seat" value="38" ></li>
                <li class="seat" value="39" ></li>
                <li class="seat" value="40" ></li>
                <li class="seat" value="41"></li>
               <li class="seat"  value="42"></li>
                    
               </ul>
     <ul>
                <li class="seat" value="43"></li>
                <li class="seat" value="44"></li>
                <li class="seat" value="45"></li>
                <li class="seat" value="46"></li>
                <li class="seat" value="47"></li>
                <li class="seat" value="48"></li>
                <li class="seat" value="49"></li>
                <li class="seat" value="50"></li>
                <li class="seat" value="51"></li>
                <li class="seat" value="52"></li>
                <li class="seat" value="53"></li>
                <li class="seat" value="54"></li>
                <li class="seat" value="55"></li>
                <li class="seat" value="56"></li>

                </ul>
     <ul>
                <li class="seat" id="57" value="56"></li>
                <li class="seat" id="57"value="57"></li>
                <li class="seat" value="59"></li>
                <li class="seat" value="60"></li>
                <li class="seat" value="61"></li>
                <li class="seat" value="62"></li>
               
              </ul>
              <ul class="screen">
              <li class="border" ></li>
         
               </ul>
        </div>
    </body>

    <p class="text">Selected seats is <span id="count">0</span> ticket price : <span id="ticvalue">0</span> Rs
        <span id="write">dsddsc</span>
        <span id="write1">cscc</span>
          </p>
     
    <br>
    <br>
    <br>
  <form method="get" action="./seatselectview.php">
      <input type="hidden" name="ticvalue"  id="ticvaluephp" value="" required>
      <input type="hidden" name="count"  id="countphp" value="" required>
      <input type="hidden" name="seatno"  id="seatnophp" required>
      <input type="hidden" name="time"  id="timephp" required>
      <input type="hidden" name="date"  id="datephp" required>
      <input type="hidden" name="movie"  id="moviephp" required>
     
     <input type="submit" name="Submit" id="cont1" value="Book">

  </form>
 </center>

<script>

	//  $("#all ul").click(function() {
  //  var a= alert(this.id);  
   // });  
    document.getElementById("cont1").style.visibility="hidden";
  
    start();
    function start(){
       const container = document.querySelector(".wholeborder");
       var ss  = document.querySelectorAll(".seat");


        container.addEventListener('click', (e) => {

        if (e.target.classList.contains('seat')&&!e.target.classList.contains('sold')) {
        (e.target.classList.toggle('selected'));
         updateselectedcount();
      //  var it = e.target.value;
      //  ss.item(it-1).style.pointerEvents = "none";
  //      var s =   document.getElementsByTagName("li")[it].id;
    //    console.log(s);
        document.getElementById('seatnophp').value += e.target.value+",";
        
        }
       });
      
    }
     function updateselectedcount() {
        const selectedseats = document.querySelectorAll(".seat.selected");
        document.getElementById('count').innerHTML = selectedseats.length;
        document.getElementById('countphp').value = selectedseats.length;
      
        var selectedseatscount = selectedseats.length;
        let ticprice = 150;
        document.getElementById('ticvalue').innerHTML = selectedseatscount * ticprice;
        document.getElementById('ticvaluephp').value = selectedseatscount * ticprice;
        if(selectedseats.length!=0){
        document.getElementById("cont1").style.visibility="visible";
      }else{
        document.getElementById("cont1").style.visibility="hidden";
      }
  //   if(selectedseats.length==2){
  //     location.reload();
  //    }
     }
  function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
}

var date = getParameterByName('date');

var time = getParameterByName('time');

document.getElementById("write").innerHTML = date;
document.getElementById("datephp").value = date;

document.getElementById("write1").innerHTML = time;
document.getElementById("timephp").value = time;

var movie = getParameterByName('movie');
document.getElementById("moviephp").value = movie;


var a = []; 
var a=<?php echo json_encode($a); ?>;
  
var x = document.querySelectorAll(".seat");
 
 
const collection = document.getElementsByClassName("seat");


var s="";
for ( i=0 ; i <= <?php echo sizeof($a); ?> ; i++) {
  s +=a[i]+",";
 }

let Arr = s.split(',');

//document.getElementById("ww").innerHTML =Arr;

for ( i=1 ; i <= <?php echo sizeof($a); ?> ; i++) {
  collection.item(Arr[i]-1).style.backgroundColor = "gainsboro";
  collection.item(Arr[i]-1).style.pointerEvents = "none";
 }


 document.getElementById("p").innerHTML = movie;
    document.getElementById("p").style.textTransform = "uppercase"; 
</script>
</html>
