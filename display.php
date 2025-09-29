<?php include 'connect.php'; ?>

<!DOCTYPE html>
<html>

<head>
  <title>Students List</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
  <h2>Students</h2>
  <button  class="btn btn-primary " ><a href="create.php" class="text-light">Add New</a></button>
  <table border="1" cellpadding="10">
    <!-- <tr>
      <th>ID</th><th>Student ID</th><th>Name</th><th>Email</th><th>Action</th>
    </tr> -->

  </table>


  <table class="table">
    <thead>
      <tr>
        <th scope="col">sid</th>
        <th scope="col">Name</th>
        <th scope="col">email</th>
        <th scope="col">batch</th>
      </tr>
    </thead>
    <tbody>

      <?php
      $sql = "SELECT * FROM students";
      $result = mysqli_query($conn, $sql);
      // if ($result) {
      //   $row = mysqli_fetch_assoc($result);
      //   echo $row['sname'];
      // }
      if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
          $id = $row['sid'];
          $name = $row['sname'];
          $email = $row['semail'];
          $batch = $row['sbatch'];
          echo ' <tr>
      <th scope="row">' . $id . '</th>
      <td>' . $name . '</td>
      <td>' . $email . '</td>
      <td>' . $batch . '</td>
    </tr>';
        };
      };
      ?>
      <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>John</td>
      <td>Doe</td>
      <td>@social</td>
    </tr> -->
    </tbody>
  </table>









  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>



</body>

</html>