<?php 
include('../db_conn.php');
$artcode = $_POST['artcode'];
$pershkrimi = $_POST['pershkrimi'];
$cmimi = $_POST['cmimi'];
$departamenti = $_POST['departamenti'];


//$sql2 = "INSERT INTO Artikujt (Artcode, Pershkrimi, Cmimi, Departamenti)
//VALUES ('$artcode', '$pershkrimi', '$cmimi', '$departamenti')";
$sql2 = "call artikujt_insert('$artcode', '$pershkrimi', '$cmimi', '$departamenti')";



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
