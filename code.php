<?php
session_start();
require 'dbcon.php';

// DELETE
if(isset($_POST['deleteBtn'])){
    $st_id=mysqli_real_escape_string($con,$_POST['deleteBtn']);

    $query="DELETE FROM students WHERE student_id='$st_id'";
    $query_run=mysqli_query($con,$query);

    if($query_run){
        $_SESSION['msg']="Student Deleted Successfully!";
        header("Location:index.php");
        exit(0);
    }else{
        $_SESSION['msg']="Student Not Deleted!";
        header("Location:index.php");
        exit(0);
    }
}
// UPDATE
if(isset($_POST['updateBtn'])){
    $st_id=mysqli_real_escape_string($con,$_POST['student_id']);
    $name=mysqli_real_escape_string($con,$_POST['name']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $phone=mysqli_real_escape_string($con,$_POST['phone']);
    $course=mysqli_real_escape_string($con,$_POST['course']);

    $query="UPDATE students SET student_name='$name',student_email='$email',student_phone='$phone',student_course='$course' 
            WHERE student_id='$st_id'";
    $query_run=mysqli_query($con,$query);

    if($query_run){
        $_SESSION['msg']="Student Updated Successfully!";
        header("Location:index.php");
        exit(0);
    }else{
        $_SESSION['msg']="Student Not Updated!";
        header("Location:index.php");
        exit(0);
    }
}
// CREATE
if(isset($_POST['saveBtn'])){
    $name=mysqli_real_escape_string($con,$_POST['name']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $phone=mysqli_real_escape_string($con,$_POST['phone']);
    $course=mysqli_real_escape_string($con,$_POST['course']);

    // echo "name=".$name." email=".$email." phone=".$phone." course=".$course;
    $query="INSERT INTO students (student_name,student_email,student_phone,student_course) VALUES('$name','$email','$phone','$course')";
    $query_run=mysqli_query($con,$query);
    if($query_run){
        $_SESSION['msg']="Student added Successfully!";
        header("Location:new_student.php");
        exit(0);
    }else{
        $_SESSION['msg']="Student Not Added!";
        header("Location:new_student.php");
        exit(0);
    }
}
?>