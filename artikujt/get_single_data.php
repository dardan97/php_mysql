<?php include('../db_conn.php');
$id = $_POST['id'];

$sql = "SELECT * FROM Artikujt WHERE id='$id' LIMIT 1";


$result = mysqli_query($conn,$sql);


$row = array();
$row = mysqli_fetch_assoc($result);


echo json_encode($row);
?>