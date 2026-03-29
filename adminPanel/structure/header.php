<?php
    require_once(realpath(dirname(__FILE__)."/../config/config.php"));
    
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ;?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo constant("BASE_URL") ?>assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo constant("BASE_URL") ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" target="" />
    <link rel="stylesheet" type="text/css" href="<?php echo constant("BASE_URL") ?>assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo constant("BASE_URL") ?>assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo constant("BASE_URL") ?>assets/lineicons/style.css">    
    
    <!-- Metrial Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Custom styles for this template -->
    <link href="<?php echo constant("BASE_URL") ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo constant("BASE_URL") ?>assets/css/style-responsive.css" rel="stylesheet">

    <script src="<?php echo constant("BASE_URL") ?>assets/js/chart-master/Chart.js"></script>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" rel="stylesheet">