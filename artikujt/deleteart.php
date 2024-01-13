<?php 
include('../db_conn.php');

$artikujt_id = $_POST['id'];
$sql2 = "DELETE FROM Artikujt Where id='$artikujt_id'";
$delQuery =mysqli_query($conn,$sql2);
if($delQuery==true)
{
	 $data = array(
        'status'=>'success',
       
    );

    echo json_encode($data);
}
else
{
     $data = array(
        'status'=>'failed',
      
    );

    echo json_encode($data);
} 

?>