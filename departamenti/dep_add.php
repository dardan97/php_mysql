<?php 
include('../db_conn.php');
$emriDep = $_POST['emriDep'];
$id = $_POST['id'];

//$sql = "INSERT INTO Departamenti (emriDep) VALUES ('$emriDep')";
$sql = "call dep_insert('$emriDep')";

$query= mysqli_query($conn,$sql);
$lastId = mysqli_insert_id($conn);
if($query ==true)
{
   
    $data = array(
        'status'=>'true',
       
    );

    echo json_encode($data);
}
else
{
     $data = array(
        'status'=>'false',
      
    );

    echo json_encode($data);
} 

?>