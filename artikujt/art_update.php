<?php 
include('../db_conn.php');
$artcode = $_POST['artcode'];
$pershkrimi = $_POST['pershkrimi'];
$cmimi = $_POST['cmimi'];
$departamenti = $_POST['departamenti'];
$id = $_POST['id'];

$sql2 = "UPDATE Artikujt SET artcode ='$artcode', pershkrimi = '$pershkrimi', cmimi = '$cmimi', departamenti = '$departamenti'  WHERE id='$id' ";

$query= mysqli_query($conn,$sql2);
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