<?php 
include('../db_conn.php');
$emriPozites = $_POST['emriPozites'];
$id = $_POST['id'];

//$sql = "UPDATE Pozita SET emriPozites ='$emriPozites' WHERE id='$id' ";
$sql = "call pozita_update($id, '$emriPozites')";

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