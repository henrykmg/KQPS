<?php
if($_REQUEST['paction']=='save'){
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

$sql = "insert into events(EventDate,Event,Details,Photos) values('".$_REQUEST['event_date']."','".$_REQUEST['event']."','".$_REQUEST['event_detail']."','".$_REQUEST['photo']."')";

if(mysqli_query($conn, $sql)) {
   // echo "New record created successfully";

} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}

if($_REQUEST['paction']=='update')
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

//$sql = "insert into childdetails(FName,LName,Photo) values('fname','lname','hello')";

//$sql = "insert into events(EventDate,Event,Details,Photos) values('".$_REQUEST['event_date']."','".$_REQUEST['event']."','".$_REQUEST['event_detail']."','".$_REQUEST['photo']."')";
$sql = "update events set EventDate='".$_REQUEST['event_date']."',Event='".$_REQUEST['event']."',Photos='".$_REQUEST['photo']."',Details='".$_REQUEST['event_detail']."' where EID='".$_REQUEST['eid']."'";

if(mysqli_query($conn, $sql)) {
   // echo "Record updated successfully";

} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);   
}

else if($_REQUEST['paction']=='delete')
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

//$sql = "insert into childdetails(FName,LName,Photo) values('fname','lname','hello')";

 $sql = "delete from events where EID='".$_REQUEST['eid']."'";

if(mysqli_query($conn, $sql)) {
   // echo "Record updated successfully";

} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);   
}
    

?>