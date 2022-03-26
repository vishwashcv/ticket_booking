<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form>
    <input type="text" id="m1" oninput="a()"/>
    <input type="text" id="m2" oninput="b()"/>
  </form>
  <p id="demo"></p>
</body>
<script>
  function a(){
    var x = document.getElementById("m1").value;
    console.log(x); 
  }
  function b(){

    var x = document.getElementById("m2").value;
    document.getElementById("demo").innerHTML = x;
    <?php 
     $m1='<script>document.write(x)</script>';
  ?>
    
  } 

  
</script>

<?php 
echo $m1;
?>


</html>