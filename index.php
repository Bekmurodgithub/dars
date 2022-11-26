<?php
 session_start();
  require 'dbcon.php';
?>
<?php include('includes/header.php');?>

    <div class="container mt-5">
      <div class="row">
        <div class="col-md-12">
        <?php include('message.php');?>
          <div class="card shadow">
            <div class="card-header">
              <h4>Student Details
                <a href="new_student.php" class="btn btn-primary float-end">Add Student</a>
              </h4>
            </div>
            <div class="card-body">
              <table class="table table-bordered table-striped">
                <thead class="">
                  <tr>
                    <th>ID</th>
                    <th>Student Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Course</th>
                    <th>Action</th>
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
    
<?php include('includes/footer.php');?>
