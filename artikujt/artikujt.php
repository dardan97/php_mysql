<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])){

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>|| Artikujt ||</title>

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
                <li class="nav-item ">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="../logout.php">Logout</a></li> 
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
                            <a class="nav-link" href="artikujt.php">
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
                        <h1 class="mt-4">Artikujt</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Artikujt</li>
                        </ol>
                </div>


<div class="container-fluid">

        <div class="row">
        <div class="container">
        <div class="btnAdd">
          <a href="#!" data-id="" data-bs-toggle="modal" data-bs-target="#addUserModal" class="btn btn-success btn-sm">Add Product</a>
        </div>
        <div class="row">
            <div class="md2">
                <div class="md8">
                   
            <table id="example" class="display" style="width:100%">
              <thead>
                <tr>
                <th>Id</th>
                <th>ArtCode</th>
                <th>Pershkrimi</th>
                <th>Cmimi</th>
                <th>Departamenti</th>
                <th>Options</th>
                </tr>
              </thead>
                <tbody>
                 
                </tbody>
            </table>     
                </div>
            </div>
        </div>
        </div>   
          </div>
          <div class="col-md-2"></div>
        </div>
      </div>
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
  <!-- Optional JavaScript; choose one of the two! -->
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <!-- Option 2: Separate Popper and Bootstrap JS -->
  
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
  
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="crossorigin="anonymous"></script>
   
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.1/datatables.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- Modal, Update -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Product</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="updateUser" method="get">
            <input type="hidden" name="id" id="id" value="">
            <input type="hidden" name="trid" id="trid" value="">
            <div class="mb-3 row">
              <label for="artcodeField" class="col-md-3 form-label">Art code:</label>
              <div class="col-md-9">
                <input type="text" class="form-control" id="artcodeField" name="artcode">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="pershkrimiField" class="col-md-3 form-label">Pershkrimi:</label>
              <div class="col-md-9">
                <input type="text" class="form-control" id="pershkrimiField" name="pershkrimi">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="cmimiField" class="col-md-3 form-label">Cmimi:</label>
              <div class="col-md-9">
                <input type="text" class="form-control" id="cmimiField" name="cmimi">
              </div>
            </div>
            <div class="mb-3 ">
              <?php
                  include("../db_conn.php");        
                  ?>               
                  <select name="departamenti" class="form-control" id="depField">
                      <option value="">--Select Department--</option>
                      <?php 
                      $query ="SELECT emriDep FROM Departamenti";
                      $result = $conn->query($query);
                      if($result->num_rows> 0){
                          while($optionData=$result->fetch_assoc()){
                          $option =$optionData['emriDep'];
                          $id =$optionData['id'];
                      ?>
  
                      <?php
                        //selected option
                        if(!empty($emriDep) && $emriDep== $option){
                        // selected option
                        ?>
                        <option value="<?php echo $option; ?>" selected><?php echo $option; ?> </option>
                        <?php 
                    continue;
                      }?>
                        <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
                      <?php
                        }}
                        ?>
                    </select>  
              </div>
              <div class="mb-3">
              <button type="submit" class="btn btn-primary" value="GET">Submit</button>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </form>
        </div>
      
      </div>
    </div>
  </div>


  <!-- Add Product Modal -->
  <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="addUser" action="">
            <div class="mb-3 row">
              <label for="addArtcodeField" class="col-md-3 form-label">Art Code:</label>
              <div class="col-md-9">
                <input type="text" class="form-control" id="addArtcodeField" name="artcode">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="addPershkrimiField" class="col-md-3 form-label">Pershkrimi:</label>
              <div class="col-md-9">
                <input type="text" class="form-control" id="addPershkrimiField" name="pershkrimi">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="addCmimiField" class="col-md-3 form-label">Cmimi:</label>
              <div class="col-md-9">
                <input type="text" class="form-control" id="addCmimiField" name="cmimi">
              </div>
            </div>    
            <div class="mb-3 ">   
                  <?php
                  include("../db_conn.php");        
                  ?>               
                  <select name="departamenti" class="form-control" id="addDepField">
                      <option value="">--Select Department--</option>
                      <?php 
                      $query ="SELECT emriDep FROM Departamenti";
                      $result = $conn->query($query);
                      if($result->num_rows> 0){
                          while($optionData=$result->fetch_assoc()){
                          $option =$optionData['emriDep'];
                          $id =$optionData['id'];
                      ?>

                      <?php
                        //selected option
                        if(!empty($emriDep) && $emriDep== $option){
                        // selected option
                        ?>
                        <option value="<?php echo $option; ?>" selected><?php echo $option; ?> </option>
                        <?php 
                    continue;
                      }?>
                        <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
                      <?php
                        }}
                        ?>
                    </select>  
              </div>
            <div class="mb-3">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </form>
        </div>
      
      </div>
    </div>
  </div>

  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>     
        <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>
        
        
        <script src="../assets/demo/chart-area-demo.js"></script>
        <script src="../assets/demo/chart-bar-demo.js"></script>   
        <script src="../js/datatables-simple-demo.js"></script>
</body>

</html>
<script type="text/javascript">


  //var table = $('#example').DataTable();

  $(document).ready(function() {
      $('#example').DataTable({
     
        "fnCreatedRow": function(nRow, aData) {
          $(nRow).attr('id', aData[0]);
        },
        'serverSide': 'true',
        'processing': 'true',
        'paging': 'true',
        'order': [],
        'ajax': {
          'url': 'fetchart.php',
          'type': 'post',
        },
        "aoColumnDefs": [{
            "bSortable": false,
            "aTargets": [5]
          }],
          dom: 'Bfrtip',
          buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
      });
    });

    $(document).on('submit', '#addUser', function(e) {
      e.preventDefault();
      var artcode = $('#addArtcodeField').val();
      var pershkrimi = $('#addPershkrimiField').val();
      var cmimi = $('#addCmimiField').val();
      var departamenti = $('#addDepField').val();
      if (artcode != '' && pershkrimi != '' && cmimi != '' && departamenti != '') {
        $.ajax({
          url: "art_add.php",
          type: "post",
          data: {
            artcode: artcode,
            pershkrimi: pershkrimi,
            cmimi: cmimi,
            departamenti: departamenti
          },
          success: function(data) {
            var json = JSON.parse(data);
            var status = json.status;
            if (status == 'true') {
              mytable = $('#example').DataTable();
              mytable.draw();
                 
              $('#addUserModal').trigger("reset");
              $('#addUserModal').removeAttr("disabled");
              //$('#addUserModal').modal('hide'); 
              

            } else {
              alert('failed');
            }
          }
        });
      } else {
        alert('Fill all the required fields');
      }
    });


    $('#example').on('click', '.editbtn ', function(event) {
      var table = $('#example').DataTable();
      var trid = $(this).closest('tr').attr('id');
      // console.log(selectedRow);
      var id = $(this).data('id');
      $('#exampleModal').modal('show');

      $.ajax({
        url: "get_single_data.php",
        data: {
          id: id
        },
        type: 'post',
        success: function(data) {
          var json = JSON.parse(data);
          $('#artcodeField').val(json.Artcode);
          $('#pershkrimiField').val(json.Pershkrimi);
          $('#cmimiField').val(json.Cmimi);
          //$('#depField').val(json.Departamenti);
          
          $('#id').val(id);
          $('#trid').val(trid);
        }
      })
    });

    $(document).on('submit', '#updateUser', function(e) {
      e.preventDefault();
      //var tr = $(this).closest('tr');  
      var artcode = $('#artcodeField').val();
      var pershkrimi = $('#pershkrimiField').val();
      var cmimi = $('#cmimiField').val();
      var departamenti = $('#depField').val();
      var trid = $('#trid').val();
      var id = $('#id').val();
      if (artcode != '' && pershkrimi != '' && cmimi != '' && departamenti != '') {
        $.ajax({
          url: "art_update.php",
          type: "post",
          data: {
            artcode: artcode,
            pershkrimi: pershkrimi,
            cmimi: cmimi,
            departamenti: departamenti,     
            id: id
          },
          success: function(data) {
            var json = JSON.parse(data);
            var status = json.status;
            if (status == 'true') {
              table = $('#example').DataTable();
              // table.cell(parseInt(trid) - 1,0).data(id);
              // table.cell(parseInt(trid) - 1,1).data(artcode);
              var button = '<td><a href="javascript:void();" data-id="' + id + '" class="btn btn-info btn-sm editbtn">Edit</a>   <a href="#!"  data-id="' +id + '"  class="btn btn-danger btn-sm deleteBtn">Delete</a></td>';
              var row = table.row("[id='" + trid + "']");
              row.row("[id='" + trid + "']").data([id, artcode, pershkrimi, cmimi, departamenti, button]);
              $('#exampleModal').modal('hide');
            } else {
              alert('failed');
            }
          }
        });
      } else {
        alert('Fill all the required fields');
      }
    });

    $(document).on('click', '.deleteBtn', function(event) {
      var table = $('#example').DataTable();
      event.preventDefault();
      var id = $(this).data('id');
      if (confirm("Are you sure want to delete this Article ? ")) {
        $.ajax({
          url: "deleteart.php",
          data: {
            id: id
          },
          type: "post",
          success: function(data) {
            var json = JSON.parse(data);
            status = json.status;
            if (status == 'success') {
              //table.fnDeleteRow( table.$('#' + id)[0] );
              //$("#example tbody").find(id).remove();
              //table.row($(this).closest("tr")) .remove();
              $("#" + id).closest('tr').remove();
            } else {
              alert('Failed');
              return;
            }
          }
        });
      } else {
        return null;
      }

    })

</script>  

<?php
}else{
     header("Location: index.php");
     exit();
}
?> 