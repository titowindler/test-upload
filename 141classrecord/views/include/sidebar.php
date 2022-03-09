<ul class="sidebar navbar-nav">

  <?php if($_SESSION['user_type'] == 1) { ?>

      <li class="nav-item">
        <a class="nav-link" href="#">
          <span><center>141 Class Record</center></span>
        </a>
      </li>

       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span>Students</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="add_student.php">Add Students</a>
            <a class="dropdown-item" href="view_student.php">View Students</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span>Class</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="add_class.php">Add Class</a>
            <a class="dropdown-item" href="view_class.php">View Class</a>
        </div>
      </li>

   <?php } ?>
  </ul>
