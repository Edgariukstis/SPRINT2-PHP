<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/main.css">
    <title>Darbuotojai&Projektai</title>
</head>
<body>
  <a class="btn btn-primary"href="/SPRINT2PHP?a=darbuotojai">Darbuotojai</a>
  
  <a class="btn btn-secondary"href="/SPRINT2PHP?a=projektai">Projektai</a>
<?php
    $lenta = 'employee_tbl.php'; // pagal nutylejima sita
    if (isset($_GET["a"]) AND $_GET["a"] === 'projektai') {
    $lenta = 'project_tbl.php';
    } 
include $lenta;
?>


</body>
</html>
