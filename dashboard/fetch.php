<?php
include '../db_conn.php';

$dbDetails = array( 
	'host' => 'localhost', 
	'user' => 'root', 
	'pass' => '1234', 
	'db'   => 'test_db'
	); 

// mysql db table to use 
$table = 'users'; 
// Table's primary key 
$primaryKey = 'id'; 

$columns = array( 
	array( 'db' => 'id', 'dt' => 0 ), 
	array( 'db' => 'user_name',  'dt' => 1 ), 
	array( 'db' => 'name',  'dt' => 2 ),
	 
	array( 
	'db'        => 'id',
	'dt'        => 3, 
	'formatter' => function( $d, $row ) { 
	return '<a href="javascript:void(0)" class="btn btn-info btn-sm btn-edit" data-id="'.$row['id'].'"> Edit </a> <a href="javascript:void(0)" class="btn btn-danger btn-sm btn-delete ml-2" data-id="'.$row['id'].'"> Delete </a>'; 
	} 
	) 
	);
	

	// Include SQL query processing class 
	require '../ssp.class.php'; 
	// Output data as json format 
	echo json_encode( 
	SSP::simple( $_GET, $dbDetails, $table, $primaryKey, $columns ));

