<?php
include 'connect.php';

if (isset($_POST['submit'])) {

    $sname = $_POST['name'];
    $semail = $_POST['email'];
    $sbatch = $_POST['batch'];

    $sql = "insert into `students` (sname,semail,sbatch) VALUES ('$sname', '$semail','$sbatch')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        // echo "Data Inserted Successfully";
        header('location:display.php');
    } else {
        echo "Failed";
    }
}
//                     if (isset($_POST['submit'])) {
//                        $sname= $_POST['name'];
// $semail= $_POST['email']; 
// $sbatch= $_POST['batch'];

//                         $sql = "INSERT INTO students (student_id, name, email) VALUES ('$sid', '$name', '$email')";
//                         if ($conn->query($sql) === TRUE) {
//                             echo "<div class='alert alert-success mt-3'>Student added successfully!</div>";
//                         } else {
//                             echo "<div class='alert alert-danger mt-3'>Error: " . $conn->error . "</div>";
//                         }
//                     }



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white text-center">
                        <h4>Add Student</h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <!-- Student ID -->

                            <!-- Name -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" id="name" class="form-control" required>
                            </div>
                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email" class="form-control" required>
                            </div>
                            <!-- Batch -->
                            <div class="mb-3">
                                <label for="batch" class="form-label">Batch</label>
                                <input type="batch" name="batch" id="batch" class="form-control" required>
                            </div>
                            <!-- Submit Button -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success" name="submit">Submit</button>
                                <button type="submit" class="btn btn-success" name="submit"> <a href="display.php">Show Students </a></button>
                            </div>
                        </form>





                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>