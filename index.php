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
                  <?php
                    $query="SELECT * FROM students ORDER BY student_id";
                    $query_run=mysqli_query($con,$query);

                    if(mysqli_num_rows($query_run)>0){
                      foreach($query_run as $student){
                        // echo $student['student_name'];
                        ?>
                        <tr>
                          <td><?= $student['student_id']?></td>
                          <td><?= $student['student_name']?></td>
                          <td><?= $student['student_email']?></td>
                          <td><?= $student['student_phone']?></td>
                          <td><?= $student['student_course']?></td>
                          <td>
                            <a href="student_view.php?id=<?= $student['student_id']?>" class="btn btn-info btn-sm">View</a>
                            <a href="student_edit.php?id=<?= $student['student_id']?>" class="btn btn-warning btn-sm">Edit</a>
                            <form action="code.php" method="POST" class="d-inline">
                              <button type="submit" class="btn btn-danger btn-sm" value="<?= $student['student_id'];?>" name="deleteBtn">Delete</button>
                            </form>
                          </td>
                        </tr>
                        <?php
                      }
                    }else{
                      echo "<h4 class='text-center'>Hozircha birorta xam student ma'lumoti yo'q</h4>";
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    
<?php include('includes/footer.php');?>