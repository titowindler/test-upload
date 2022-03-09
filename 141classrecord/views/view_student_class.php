<?php require('../controller/connection.php');?>

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


    <!-- Navbar -->
    
<?php include('include/header.php');?>
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include('include/sidebar.php');?>

     <?php
     $class = $_GET['view'];
     ?>

    <div id="content-wrapper">

      <div class="container-fluid">

    
    <div>
        <h3 style="color:green">View Class Record</h3>
          <hr color="green">
    </div>

        <table class="table table-bordered" id="locationTable" width="100%" cellspacing="0">
      <thead>
                <tr>
                     <th>Course Name</th>
                     <th>Teacher Name</th>
                     <th>Student Name</th>
                     <th>Final Grade</th>
                     <th>View Grade</th>
                     <th>Action</th>
                </tr>
      </thead>
           <?php
               $conn = connect();
               $result=mysqli_query($conn,"SELECT * FROM grade 
                JOIN student ON grade.studentID = student.student_id
                JOIN class ON grade.classID = class.class_id WHERE grade.classID = 
                '$class' ");
              while ($row=mysqli_fetch_array($result)) {
                ?> 
            
                 <tr>
                  <td><?php echo $row['course_code'];?> - <?php echo $row['course_name'];?></td>
                  <td><?php echo $row['teacher_fname'];?> <?php echo $row['teacher_lname'];?></td>
                  <td><?php echo $row['student_fname'];?> <?php echo $row['student_lname'];?> </td>
                  <td><?php echo $row['finalgrade'];?> </td>
                
                  <td><a class="btn btn-primary btn-sm" href="view_student_grade.php?view=<?php echo $class?>&g=<?php echo $row['grade_id'];?>">View Grade</a></td>

                   <td> 
                    <a class="btn btn-danger btn-sm" href="../controller/delete_student_class.php?view=<?php echo $class ?>&del=<?php echo $row['grade_id'];?>">Delete</a>
                  </td>

                </tr> 
            <?php } ?> 
       </table>

       <div>
          <a href="add_student_class.php?view=<?php echo $class ?>" class="btn btn-success">Enroll Students</a> 
          <a href="view_class.php" class="btn btn-danger">Cancel</a>
       </div>

    <br>
      </div>
      <!-- /.container-fluid -->

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

 <script>
    $(document).ready(function() {
        $('#locationTable').DataTable({
            "scrollY": "100%",
            "responsive": true,
            "paging": true,
            "scrollX": true,
            "searching": true,
            "info": false,
            "ordering": false
        });
    });
</script>


