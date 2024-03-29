<?php include('../db_conn.php');


$output= array();
$sql2 = "SELECT * FROM Artikujt";
//$sql = "call pozita_select()";

$totalQuery = mysqli_query($conn,$sql);
$total_all_rows = mysqli_num_rows($totalQuery);

$columns = array(
	0 => 'Id',
	1 => 'Artcode',
	2 => 'Pershkrimi',
	3 => 'Cmimi',
	4 => 'Departamenti',
	
);

if(isset($_POST['search']['value']))
{
	$search_value = $_POST['search']['value'];
	$sql .= " WHERE Artcode like '%".$search_value."%'";
	$sql .= " OR Pershkrimi like '%".$search_value."%'";
	$sql .= " OR Cmimi like '%".$search_value."%'";
	$sql .= " OR Departamenti like '%".$search_value."%'";

}

if(isset($_POST['order']))
{
	$column_name = $_POST['order'][0]['column'];
	$order = $_POST['order'][0]['dir'];
	$sql .= " ORDER BY ".$columns[$column_name]." ".$order."";
}
else
{
	$sql .= " ORDER BY id desc";
}

if($_POST['length'] != -1)
{
	$start = $_POST['start'];
	$length = $_POST['length'];
	$sql .= " LIMIT  ".$start.", ".$length;
}


$query = mysqli_query($conn,$sql2);
$count_rows = mysqli_num_rows($query);
$data = array();
while($row = mysqli_fetch_assoc($query))
{
	$sub_array = array();
	$sub_array[] = $row['Id'];
	$sub_array[] = $row['Artcode'];
	$sub_array[] = $row['Pershkrimi'];
	$sub_array[] = $row['Cmimi'];
	$sub_array[] = $row['Departamenti'];
	
	$data[] = $sub_array;
}

$output = array(
	'draw'=> intval($_POST['draw']),
	'recordsTotal' =>$count_rows ,
	'recordsFiltered'=>   $total_all_rows,
	'data'=>$data,
);
echo  json_encode($output);  
