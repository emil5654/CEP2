<?php
{
// Function to print out objects / arrays
function PrintObj ($o) { echo "<pre>"; print_r($o); echo "</pre>"; }

// Load the POST.
$data = file_get_contents("php://input");

// ...and decode it into a PHP array.
$data = json_decode($data); 

// Do whatever with the array. 
PrintObj($data);


/*if ($_SERVER["REQUEST_METHOD"] == "GET") {
$jsonobj = $_REQUEST['timestamp'];

$arr = json_decode($jsonobj, true);

echo count($arr);
*/
  // collect value of input field

$servername = "localhost";
$username = "root";
$password = "cep2";
$dbname = "kitchenguearddb";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "INSERT INTO event(Timestamp)
VALUES ($data)";

if (mysqli_query($conn, $sql))
{
  echo "New record created successfully";
}
else
{
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
  }
?>
