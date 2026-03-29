<!DOCTYPE html>
<html lang="en">
<?php
 
 include('adminPanel/config/database.php');
 include('adminPanel/models/adminModel/storeModel.php');
$website=getAdminStore($conn);
$banner=getBanners($conn);
$test=allTestimonial($conn)
 ?>
    

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--plugins-->
        <link href="assets/css/plugins/plugins.css" rel="stylesheet">
        <!--Custom css-->
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/master-slider-custom.html" rel="stylesheet" type="text/css">