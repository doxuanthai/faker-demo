<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>HELLO FAKER</h2>
  <table class="table-condensed table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Image</th>
      </tr>
    </thead>
    <tbody>
      <?php
        require 'autoload.php';
        $faker = Faker\Factory::create();
        $row = isset($_GET['row']) ? $_GET['row'] : 25;
        for ($i = 0; $i < $row; $i++) { 
          echo '<tr>';
          echo '<td>'.$faker->Firstname.'</td>';
          echo '<td>'.$faker->Lastname.'</td>';
          echo '<td>'.$faker->email.'</td>';
          echo '<td>'.$faker->address.'</td>';
          echo '<td>'.$faker->phoneNumber.'</td>';
          echo '<td><img src="'.$faker->imageUrl(64,64,'cats').'"></td>';
          echo '</tr>';
        }
      ?>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>

