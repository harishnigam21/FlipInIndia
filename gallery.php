<!-- including header secition -->
<?php
$title="Gallery || Flipin India Pvt. Ltd.";
$dir="gallery";
 include('structure/header.php'); ?>
<!-- End of Header -->


<!-- including Menu secition -->
<?php include('structure/menu.php'); ?>
<!-- End of Menu -->

<!-- CODE HERE -->

 <section id="content-region-3" class="padding-40 page-tree-bg">
            <div class="container">
                <h3 class="page-tree-text">
                Gallery
                </h3>
            </div>
        </section><!--page-tree end here-->
  <div class="space-70"></div>
<div class="container popup-container mb50">
           <div class="row">

              <?php 
                for($i=1;$i<71;$i++)
                {
              ?>
               <div class="col-md-4  margin-btm-20">
                   <a href="assets/img/factory/<?php echo $i;?>.PNG">
                       <img src="assets/img/factory/<?php echo $i;?>.PNG" alt="" class="img-fluid">
                   </a>
               </div>
              <?php
                }
              ?>
               
           </div>
        </div>


<!-- including Footer secition -->
<?php include('structure/footer.php'); ?>
<!-- End of Footer -->