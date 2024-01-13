<?php
// Database connection info 
$host='localhost';
$username='root';
$password='1234';
$dbname="test_db";
$conn = mysqli_connect($host,$username,$password,"$dbname");

//Add/Insert
if ($_POST['mode'] === 'add') {
    $name = $_POST['name'];
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    $duplicate = mysqli_query($conn, "select * from USERS where user_name='$user_name'");

    if (mysqli_num_rows($duplicate)>0) {
    
        echo json_encode(array("statusCode"=>201));
      
	   
    } else {
        $sql = "INSERT INTO USERS (name,user_name,password) VALUES ('$name','$user_name', 'password')";

        if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo json_encode(array("statusCode"=>201));
		}
        
    }
    mysqli_close($conn);
    
}

//EDIT* - UPDATE
if ($_POST['mode'] === 'edit') {
$result = mysqli_query($conn,"SELECT * FROM USERS WHERE id='" . $_POST['id'] . "'");
$row= mysqli_fetch_array($result);
echo json_encode($row);
}   

//EDIT - UPDATE*
if ($_POST['mode'] === 'update') {
$result2 = mysqli_query($conn,"UPDATE USERS set  name='" . $_POST['name'] . "', user_name='" . $_POST['user_name'] . "' WHERE id='" . $_POST['id'] . "'");
echo json_encode(true);
}  

//DELETE
if ($_POST['mode'] === 'delete') {
mysqli_query($conn, "DELETE FROM USERS WHERE id='" . $_POST["id"] . "'");
echo json_encode(true);
}








