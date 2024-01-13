<?php 
include('../db_conn.php');
$emriPozites = $_POST['emriPozites'];
$id = $_POST['id'];

//$sql = "INSERT INTO Pozita (emriPozites) VALUES ('$emriPozites')";
$sql = "call pozita_insert('$emriPozites')";

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

