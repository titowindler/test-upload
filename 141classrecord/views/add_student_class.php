<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Class Record</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <?php include('include/header.php');?>
   

  <div id="wrapper">

     <?php include('include/sidebar.php');?>

     <?php
     $class = $_GET['view'];
     ?>
    

    <div id="content-wrapper">

      <div class="container-fluid">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header bg-primary" style="color:white;border-bottom: white"><h3><center>Enroll Students</center></h3>
          <hr color="white"></div>
      <div class="card-body">
        <form class="form-horizontal" action="../controller/add_student_class.php" name="login"  method="post">


          <input type="hidden" name="class" value="<?php echo $class ?>">


          <?php

          require('../controller/connection.php');

          $conn = connect();

          $sql = "SELECT * FROM student";

          $result = mysqli_query($conn,$sql);

           ?>
      
           <div class="form-group">
            <div class="form-label-group">
              <select name="student" class="form-control"> 
                <option selected disabled>Select A Student</option>
                <?php
                while($row = mysqli_fetch_assoc($result)) {
                  echo "<option value='{$row['student_id']}'>ID Number: {$row['studentIdNumber']} - Name: {$row['student_fname']} {$row['student_lname']}</option>";
                  }
                 ?>
              </select>
            </div>
          </div>

      
          <button type="submit" class="btn btn-success">Submit</button>
          <a class="btn btn-danger" href="view_student_class.php?view=<?php echo $class ?>">Cancel</a>
        </form>
      </div>
    </div>
  </div>


    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

</body>

</html>
