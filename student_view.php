<?php
  require 'dbcon.php';
?>
<?php include('includes/header.php');?>
   <div class="container mt-5">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="card shadow">
          <!-- start card-header -->
          <div class="card-header">
            <h3>Student View Details
              <a href="index.php" class="btn btn-danger float-end">BACK</a>
            </h3>
          </div>
          <!-- end card-header -->
          <div class="card-body">
            <?php 
            if(isset($_GET['id'])){
                $st_id=mysqli_real_escape_string($con,$_GET['id']);
                $query="SELECT * FROM students WHERE student_id='$st_id' ";
                $query_run=mysqli_query($con,$query);

                if(mysqli_num_rows($query_run)>0){
                    $student=mysqli_fetch_array($query_run);
                    // print_r($student);
                    ?>
                    <form action="code.php" method="POST">
                      <div class="mb-3">
                        <label for="" class="form-label">Student Name</label>
                        <p class="form-control">
                        <?= $student['student_name']?>
                        </p>
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Student Email</label>
                        <p class="form-control">
                        <?= $student['student_email']?>
                        </p>
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Student Phone</label>
                        <p class="form-control">
                        <?= $student['student_phone']?>
                        </p>
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Student Course</label>
                        <p class="form-control">
                        <?= $student['student_course']?>
                        </p>
                      </div>
                       
                    </form>
                <?php
                }else{
                    echo "<h4>Not Found</h4>";
                }
            }
            ?>
          </div>
        </div>
      </div>
    </div>
   </div>
   <?php include('includes/footer.php');?>