<?php include "../db_conn.php";
$id = $_GET['id'];  

$sql = "SELECT * FROM Artikujt WHERE id='$id' LIMIT 1";

//echo $sql;

$result = mysqli_query($conn,$sql);

$users_arr = array();

while( $row = mysqli_fetch_array($result) ){
	$id = $row['Id'];
    $artcode = $row['Artcode'];
	$pershkrimi = $row['Pershkrimi'];
	$cmimi = $row['Cmimi'];
	$departamenti = $row['Departamenti'];

    $users_arr[] = array("Id" => $id, "Artcode" => $artcode, "Pershkrimi" => $pershkrimi,"Cmimi" => $cmimi,"Departamenti" => $departamenti );
}

// encoding array to json format
echo json_encode($users_arr);
?>