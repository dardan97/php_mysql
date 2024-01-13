<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])){

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>|| Dashboard ||</title>


         <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" ></script>
        <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    <!-- DataTables CSS library -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- DataTables JS library -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    <link src="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


    </head>


    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="../home.php">HOME</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                
            </form>
            <!-- Navbar-->  
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li> 
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                        <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link" href="../home.php">
                                <div class="sb-nav-link-icon"></div>
                                Home 
                            </a>
                            <div class="sb-sidenav-menu"></div>
                            <a class="nav-link" href="/dashboard/dashboard.php">
                                <div class="sb-nav-link-icon"></div>
                                Users 
                            </a>
                            <div class="sb-sidenav-menu"></div>
                            <a class="nav-link" href="/departamenti/departamenti.php">
                            <div class="sb-nav-link-icon"></div>
                                Departamenti 
                            </a>
                            <div class="sb-sidenav-menu"></div>
                            <a class="nav-link" href="/pozita/pozita.php">
                                <div class="sb-nav-link-icon"></div>
                                Pozita 
                            </a>
                            <div class="sb-sidenav-menu"></div>
                            <a class="nav-link" href="/artikujt/artikujt.php">
                                <div class="sb-nav-link-icon"></div>
                                Artikujt 
                            </a>
                          
                            
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Hello User
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>

<!----------------------------------ADD MODAL-------------------------------------------------------------------------------------- -->

<div class="container-fluid px-4">

<div class="modal fade" id="add-modal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="userCrudModal">Add Users</h1>

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    
        <div class="modal-body">
        <form id="add-form" name="add-form" class="form-horizontal">
        <input type="hidden" class="form-control" id="mode" name="mode" value="add">        

        <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
	  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	</div>
	<div class="alert alert-danger alert-dismissible" id="error" style="display:none;">
	  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	</div>
            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter your first name">
            </div>
            <div class="mb-3">
                <label>Username</label>
                <input type="text" name="user_name" class="form-control" id="user_name" placeholder="Enter your Username">
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password">
            </div>
            <div class="mb-3">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="btn-save" value="create">Save changes</button>
            </div>
          </form>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

<!-- -------------------------------------------------UPDATE MODAL------------------------------------------------- -->


<div class="modal fade" id="edit-modal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="userCrudModal">Edit Users</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

        <div class="modal-body">
        <form id="update-form" name="update-form" class="form-horizontal">
            <input type="hidden" name="id" id="id">
            <input type="hidden" class="form-control" id="mode" name="mode" value="update">

            <div class="mb-3">
                <label>Username</label>
                <input type="text" name="user_name" id="user_name" class="form-control" placeholder="Enter your Username">
            </div>
            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter your first name">
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password">
            </div>
            <div class="mb-3">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" id="btn-save" value="create">Save changes </button>
            </div>
            
      </div>

      <div class="modal-footer">
        
      </div>
      </form>
      
    </div>
  </div>
</div>
                <br><br>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Users List
                            </div>
                            <div class="card-body">

                            <a href="javascript:void(0)" class="btn btn-primary float-left add-model"> Add User </a>
                            <br><br>
                            
                                <table id="usersListTable" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Username</th>
                                            <th>Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
                
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="../assets/demo/chart-area-demo.js"></script>
        <script src="../assets/demo/chart-bar-demo.js"></script>
        
        <script src="../js/datatables-simple-demo.js"></script>
    </body>
</html>


<script>

$(document).ready(function(){
$('#usersListTable').DataTable({
"processing": true,
"serverSide": true,
"order": [],
"ajax": "fetch.php",
dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],

});

});

/*  add user model */
$('.add-model').click(function () {
$('#add-modal').modal('show');
});

// add form submit
$(document).ready(function ($) {

$('#add-form').submit(function(e){
e.preventDefault();
$('#add-form').attr("disabled", "disabled");
var name = $('#name').val();
var user_name = $('#user_name').val();
var password = $('#password').val();
var id = $('#id').val();

if (name != '' && user_name != '' && password != ''){
$.ajax({
url:"add-edit-delete.php",
type: "POST",
data: $(this).serialize(), // get all form field value in serialize form
cache: false,

success: function(dataResult){  
var oTable = $('#usersListTable').dataTable(); 
oTable.fnDraw(false);
var dataResult = JSON.parse(dataResult);

if(dataResult.statusCode==200){  
$('#add-form').modal('hide');
$('#add-form').trigger("reset");
$('#add-form').removeAttr("disabled");
$('#add-form').find('input:text').val('')
$("#success").show();
$('#success').html('User added successfully !');
$('#error').hide();
}
else if(dataResult.statusCode==201){
$('#success').hide();    
$("#error").show();
$('#error').html('User already exists !');  
}
}
});
}else {
        alert('Please fill all the required fields');
      }
});  
});


/* edit user function */
$('body').on('click', '.btn-edit', function () {
var id = $(this).data('id');
$.ajax({
url:"add-edit-delete.php",
type: "POST",
data: {
id: id,
mode: 'edit'
},
dataType : 'json',
success: function(result){
$('#id').val(result.id);
$('#name').val(result.user_name);
$('#user_name').val(result.user_name);
$('#password').val(result.password)
$('#edit-modal').modal('show');
}
});
});


/* --------------------------UPDATE----------------------------*/
// add form submit
$('#update-form').submit(function(e){
e.preventDefault();
// ajax
$.ajax({
url:"add-edit-delete.php",
type: "POST",
data: $(this).serialize(), // get all form field value in serialize form
success: function(){
var oTable = $('#usersListTable').dataTable(); 
oTable.fnDraw(false);
$('#edit-modal').modal('hide');
$('#update-form').trigger("reset");
}
});
});  

/* DELETE FUNCTION */
$('body').on('click', '.btn-delete', function () {
var id = $(this).data('id');
if (confirm("Are You sure want to delete !")) {
$.ajax({
url:"add-edit-delete.php",
type: "POST",
data: {
id: id,
mode: 'delete'
},
dataType : 'json',
success: function(result){
var oTable = $('#usersListTable').dataTable(); 
oTable.fnDraw(false);
}
});
} 
return false;
});
</script>


<?php
}else{
     header("Location: index.php");
     exit();
}
 ?> 