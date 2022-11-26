<?php
  session_start();
  require 'dbcon.php';
?>
<?php include('includes/header.php');?>
   <div class="container mt-5">
    <div class="row">
      <div class="col-md-8 offset-md-2">
      <?php include('message.php');?>
        <div class="card shadow">
          <!-- start card-header -->
          <div class="card-header">
            <h3>Student Edit Form
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
                        <input type="hidden" name="student_id" value="<?= $student['student_id']?>" class="form-control">
                        <div class="mb-3">
                        <label for="" class="form-label">Student Name</label>
                        <input type="text" class="form-control" value="<?= $student['student_name']?>" name="name" placeholder="Enter a name" >
                        </div>
                        <div class="mb-3">
                        <label for="" class="form-label">Student Email</label>
                        <input type="email" class="form-control" value="<?= $student['student_email']?>" name="email" placeholder="Enter an email" >
                        </div>
                        <div class="mb-3">
                        <label for="" class="form-label">Student Phone</label>
                        <input type="text" class="form-control" value="<?= $student['student_phone']?>" name="phone" placeholder="Enter a phone" >
                        </div>
                        <div class="mb-3">
                        <label for="" class="form-label">Student Course</label>
                        <input type="text" class="form-control" value="<?= $student['student_course']?>" name="course" placeholder="Enter a course" >
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary" name="updateBtn" type="submit">Update Save</button>
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