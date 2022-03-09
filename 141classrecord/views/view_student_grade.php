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

     require("../controller/connection.php");

     $conn = connect();

     $grade = $_GET['g'];
     $class = $_GET['view'];
     ?>
    
    <div id="content-wrapper">

      <div class="container-fluid">

<div class="container">
<div class="row">
  <div class="col-md-5">
    <div class="card card-login mt-5">
      <div class="card-header bg-primary" style="color:white"><center><h3>Add Grade</h3> </center>
        <hr color="white">
      </div>

      <div class="card-body">
        <form class="form-horizontal" action="../controller/add_grade.php" name="login"  method="post">


        <input type="hidden" name="grade" id="grade" value="<?php echo $grade ?>">
        <input type="hidden" name="class" id="class" value="<?php echo $class ?>">

         <div class="form-group">
            <div class="form-label-group">
               <select name="exam" class="form-control" id=dropdown> 
                <option selected hidden value="none" >Select A Grade</option>
                <option value="premid">Pre Midterm</option>
                 <option value="midterm">Midterm</option>
                  <option value="prefinal">Pre Final</option>
                   <option value="final">Final</option>
              </select>
            </div>
          </div>

           <div class="form-group">
            <div class="form-label-group">
              <input type="text" class="form-control" name="as" id="as" class="as">
              <label>Actual Score</label>
            </div>
          </div>

      
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" name="ps" class="form-control" id="ps" class="ps">
              <label>Perfect Score</label>
            </div>
          </div>

      
          <button type="submit" class="btn btn-success">Submit</button>
          <a class="btn btn-danger" href="view_student_class.php?view=<?php echo $class ?>">Cancel</a>
        </form>
      </div>
    </div>
  </div>


  <?php

  $sql = "SELECT * FROM grade WHERE grade_id = $grade";
  $result = mysqli_query($conn,$sql);


   ?>

    <div class="col-md-7">

        <table class="table table-bordered mt-5" id="viewBankAccount" width="100%" cellspacing="0">
       <thead>
                <tr>
                     <th>Premid</th>
                     <th>Midterm</th>
                     <th>Prefinal</th>
                     <th>Final</th>
                     <th>Final Grade</th>
                </tr>
      </thead>
      <tbody>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
              <td><?php echo $row['premid']; ?></td>
              <td><?php echo $row['midterm']; ?></td>
              <td><?php echo $row['prefinal']; ?></td>
              <td><?php echo $row['final']; ?></td>
              <td><?php echo $row['finalgrade']; ?></td>
            </tr>
        <?php } ?>
      </tbody>
   </table>


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

<script> 
    $(document).ready(function(){
              var grade = $('#grade').val();
              var studentclass = $('#class').val();
        $('#dropdown').change(function(){
            //Selected inputValue
              var inputValue = $(this).val();
            
              //Ajax for calling php function
               $.post('../controller/fetch_score.php', 
                { exam: inputValue, 
                  class : studentclass,
                  grade : grade }, 
                function(data){
                  var obj = $.parseJSON(data);
                  
                   $('#as').val(obj.actualscore);
                  $('#ps').val(obj.perfectscore);
                  //do after submission operation in DOM
              });
           });
        });
</script>

</html>
