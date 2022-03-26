	<?php
	$ticvalue=$_REQUEST['ticvalue'];
	$count=$_REQUEST['count'];
	$seatno=$_REQUEST['seatno'];
	$time=$_REQUEST['time'];
	$date=$_REQUEST['date'];
	$moviename=$_REQUEST['movie'];
	echo "<body style='background-image:url(./a1.jpg);background-repeat:no-repeat;background-size:100%;color:white;'><h1 style='padding:50px 0 0 0;text-align:center;background-color:#051367; margin: 8% 150px 0 150px;'> Movie ticket</h1>";
	echo "<center><p style='text-align:center;padding: 1% 0 50px 0 ;background-color:#051367; margin: 0 150px 0 150px; '>  Movie : $moviename<br>";
	echo "Time: $time";
	echo"<br>";
	echo "Date: $date";
	echo"<br>";
	echo "total price:$ticvalue";
	echo "<br>";
	echo "No.of.seats$count";
	echo "<br>";
	// $seat  =   str_replace( array( '" "') ,', ', $seatno);
	//echo "$seat<br>";
	$s=array_map('intval', explode(',', $seatno));
	//$s= explode(' ', $seatno);
	$n = sizeof($s);

	$servername = "localhost";
	$username = "id18675936_test1";
$password = "\N9ye0\Y|q-qb_S@";
$dbname = "id18675936_test";

	$f=0;

	$conn = new mysqli($servername, $username, $password, $dbname);
	for( $i = 0; $i < $n; ++$i)
	{
	$s1 = "SELECT seatno FROM seats WHERE  movie='".$moviename."' and timing='".$time."' and dat='".$date."' and seatno='".$s[$i]."'";
	$result = $conn->query($s1);
	//$row = $result->fetch_all();
	if ($result->num_rows > 0) {
	$f="";
	while($row = $result->fetch_assoc()) {
	$f = $row["seatno"];

	}
	}
	}

	//  echo  . $row["movie"]. . $row["timing"]. . $row["dat"]. "<br>"; 
	
	$conn->close();

	//print_r($row);
	if ($f==null){

		$_xor = 0;
		$pos;

		// do for each element of array
		for( $i = 0; $i < $n; ++$i)
		{
			// left-shift 1 by value
			// of current element
			$pos = 1 << $s[$i];

			// Toggle the bit everytime
			// element gets repeated
			$_xor ^= $pos;
		}

		// Traverse array again and
		// use _xor to find even
		// occurring elements
		echo " Seat :";
		
			$g=0;
		for ($i = 0; $i < $n; ++$i)
		{
			// left-shift 1 by value
			// of current element
			$pos = 1 << $s[$i];

			// Each 0 in _xor represents
			// an odd occurrence
				
			if (($pos & $_xor)&&($s[$i]!=0))
			{
				// print the even
				// occurring numbers
				echo  "-",$s[$i],"-";
							$d[$g++]=$s[$i];
							
				$servername = "localhost";
				$username = "id18675936_test1";
				$password = "\N9ye0\Y|q-qb_S@";
				$dbname = "id18675936_test";
				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);
				// Check connection
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}$sql = "INSERT INTO seats (movie, timing, dat,seatno, price)
				VALUES ('{$moviename}','{$time}','{$date}','{$s[$i]}','{$ticvalue}')
				";

				if ($conn->query($sql) === TRUE) {
				echo " "; 
				} 
				else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
				$conn->close();
						// set bit as 1 to avoid
							// printing duplicates
							$_xor ^= $pos;
			}
		}	

	$d1  =    implode (" ",$d);
	echo "</p></center></body>";
	?>

	<html><center><p style='padding: 20px 0 40px 0;background-color:#051367; margin: 0 150px 0 150px;position:relative;'>
	<img src="https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl=<?php echo "Seat No :$d1";echo "movie:$moviename";
	echo "Time: $time ";
	echo "Date: $date ";
	echo "total price:$ticvalue ";
	echo "No.of.seats: $count "; ?>" />
	<br/>
	</p>
	</center>
	</html>


	<?php   
	}
	else
	{ 

		$servername = "localhost";
		$username = "id18675936_test1";
		$password = "\N9ye0\Y|q-qb_S@";
		$dbname = "id18675936_test";
		
		$f=0;
		
		$conn = new mysqli($servername, $username, $password, $dbname);
		echo "seatno :";
		for( $i = 0; $i < $n; ++$i)
		{
		$s1 = "SELECT seatno FROM seats WHERE  movie='".$moviename."' and timing='".$time."' and dat='".$date."' and seatno='".$s[$i]."'";
		$result = $conn->query($s1);
		//$row = $result->fetch_all();
		if ($result->num_rows > 0) {
		$f="";
		while($row = $result->fetch_assoc()) {
	echo	$f = "-".$row["seatno"]."-";
		
		}
		}
		}
		
		//  echo  . $row["movie"]. . $row["timing"]. . $row["dat"]. "<br>"; 
		
		$conn->close();
		
	//echo $f1[$i];}	?>
		
	<html><center><p style='padding: 20px 0 90px 0;background-color:#051367; margin: 0 150px 0 150px;'>

	<!--- qr code--->

	<img src="https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl=<?php $servername = "localhost";
		$username = "id18675936_test1";
		$password = "\N9ye0\Y|q-qb_S@";
		$dbname = "id18675936_test";
		
		$f=0;
		
		$conn = new mysqli($servername, $username, $password, $dbname);
		echo "seatno :";
		for( $i = 0; $i < $n; ++$i)
		{
		$s1 = "SELECT seatno FROM seats WHERE  movie='".$moviename."' and timing='".$time."' and dat='".$date."' and seatno='".$s[$i]."'";
		$result = $conn->query($s1);
		//$row = $result->fetch_all();
		if ($result->num_rows > 0) {
		$f="";
		while($row = $result->fetch_assoc()) {
	echo	$f = "-".$row["seatno"]."-";
		
		}
		}
		}
		
		//  echo  . $row["movie"]. . $row["timing"]. . $row["dat"]. "<br>"; 
		
		$conn->close();
		echo "movie:$moviename";
	echo "Time: $time ";
	echo "Date: $date ";
	echo "total price:$ticvalue ";
	echo "No.of.seats: $count "; ?>" />
	<br/>
	</p>
	</center>
	</html>

	<?php
	}

	?>