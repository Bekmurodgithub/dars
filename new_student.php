<?php
  session_start();
?>
<?php include('includes/header.php');?>

   <div class="container mt-5">
    <div class="row">
      <div class="col-md-8 offset-md-2">
      <?php include('message.php');?>
        <div class="card shadow">
          <!-- start card-header -->
          <div class="card-header">
            <h3>Student Add Form
              <a href="index.php" class="btn btn-danger float-end">BACK</a>
            </h3>
          </div>
          <!-- end card-header -->
          <div class="card-body">
            <form action="code.php" method="POST">
             <div class="mb-3">
              <label for="" class="form-label">Student Name</label>
              <input type="text" class="form-control" name="name" placeholder="Enter a name" >
             </div>
             <div class="mb-3">
              <label for="" class="form-label">Student Email</label>
              <input type="email" class="form-control" name="email" placeholder="Enter an email" >
             </div>
             <div class="mb-3">
              <label for="" class="form-label">Student Phone</label>
              <input type="text" class="form-control" name="phone" placeholder="Enter a phone" >
             </div>
             <div class="mb-3">
              <label for="" class="form-label">Student Course</label>
              <input type="text" class="form-control" name="course" placeholder="Enter a course" >
             </div>
             <div class="mb-3">
                <button class="btn btn-primary" name="saveBtn" type="submit">Add Student</button>
             </div>
            </form>
          </div>
        </div>
      </div>
    </div>
   </div>
   <?php include('includes/footer.php');?>