 <?php
/*session_start(); # NOTE THE SESSION START
$_SESSION = array(); 
session_unset();
session_destroy();*/


  function loadAllData()
  {
  $servername = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'eventscaledar';

// Create connection
 $conn = mysqli_connect($servername, $username, $password, $dbname);
 // Check connection
 if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
}

$sql = 'select * from events order by EventDate ASC';
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
	$c=1;
    
    $res = mysqli_query($conn,"select * from events order by EventDate ASC");
    $records = array();
      while($obj = mysqli_fetch_object($res)) {
        $records []= $obj;
    }
    file_put_contents("data.json", json_encode($records));
    
    
    
    while($row = mysqli_fetch_assoc($result)) {
       
	   		echo "<tr><td>".$row["EID"]."</td><td>".$row["EventDate"]."</td><td>".$row["Event"]."</td><td>".$row["Details"]."</td><td>&nbsp;&nbsp;&nbsp;<img class='hp' id='p$c' src='".$row["Photos"]."'/>&nbsp;&nbsp;&nbsp;		<input type='button' value='edit' class='edit btn-group' onclick='edit($c);' id='r$c'/>&nbsp;&nbsp;&nbsp;<input type='button' value='Delete' class='edit btn-group' onclick='delete1($c);' id='d$c'/></td></tr>";
			
	
		$c++;
      
    }
} else {
 file_put_contents("data.json", json_encode($records));
    echo "0 results";
}

mysqli_close($conn);
  }

   loadAllData();

 ?> 