 <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              <?php echo date('Y') ." @copypright version AR.01"; ?>
              
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo constant("BASE_URL") ?>assets/js/jquery.js"></script>
    <script src="<?php echo constant("BASE_URL") ?>assets/js/jquery-1.8.3.min.js"></script>
    <script src="<?php echo constant("BASE_URL") ?>assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?php echo constant("BASE_URL") ?>assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo constant("BASE_URL") ?>assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo constant("BASE_URL") ?>assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="<?php echo constant("BASE_URL") ?>assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script type="text/javascript" src="<?php echo constant("BASE_URL") ?>assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="<?php echo constant("BASE_URL") ?>assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="<?php echo constant("BASE_URL") ?>assets/js/gritter-conf.js"></script>


	
	<script type="application/javascript">

        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
         });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>

    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function()
       {
        $('#REpresntDATA').DataTable();
      } );
    </script>
    <script type="text/javascript">
      $(document).ready(function()
       {
        $('#REpresntDATA1').DataTable();
      } );
    </script>
  

  </body>
</html>