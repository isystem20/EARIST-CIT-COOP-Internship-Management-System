

    <script src="<?=base_url('themes/beagle/'); ?>assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="<?=base_url('themes/beagle/'); ?>assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="<?=base_url('themes/beagle/'); ?>assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="<?=base_url('themes/beagle/'); ?>assets/js/app.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        //initialize the javascript
        App.init();
      });
    </script>
    <script src="<?=base_url('themes/beagle/'); ?>assets/lib/jquery.gritter/js/jquery.gritter.js" type="text/javascript"></script>
    <script src="<?=base_url('themes/beagle/'); ?>assets/lib/prettify/prettify.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        App.uiNotifications();
        prettyPrint();
      });
    </script>

    
    <?php if (!empty($charts)) { ?>
    <script src="<?=base_url('themes/beagle/'); ?>assets/lib/jquery-flot/jquery.flot.js" type="text/javascript"></script>
    <script src="<?=base_url('themes/beagle/'); ?>assets/lib/jquery-flot/jquery.flot.pie.js" type="text/javascript"></script>
    <script src="<?=base_url('themes/beagle/'); ?>assets/lib/jquery-flot/jquery.flot.time.js" type="text/javascript"></script>
    <script src="<?=base_url('themes/beagle/'); ?>assets/lib/jquery-flot/jquery.flot.resize.js" type="text/javascript"></script>
    <script src="<?=base_url('themes/beagle/'); ?>assets/lib/jquery-flot/plugins/jquery.flot.orderBars.js" type="text/javascript"></script>
    <script src="<?=base_url('themes/beagle/'); ?>assets/lib/jquery-flot/plugins/curvedLines.js" type="text/javascript"></script>
    <script src="<?=base_url('themes/beagle/'); ?>assets/lib/jquery-flot/plugins/jquery.flot.tooltip.js" type="text/javascript"></script>
    <script src="<?=base_url('themes/beagle/'); ?>assets/lib/jquery.sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="<?=base_url('themes/beagle/'); ?>assets/lib/countup/countUp.min.js" type="text/javascript"></script>
    <?php } ?>

    <script src="<?=base_url('themes/beagle/'); ?>assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <?php if (!empty($select2)) { ?>
    <script src="<?=base_url('themes/beagle/'); ?>assets/lib/select2/js/select2.min.js" type="text/javascript"></script>
    <script src="<?=base_url('themes/beagle/'); ?>assets/lib/select2/js/select2.full.min.js" type="text/javascript"></script>
    <?php } ?>
    <?php if (!empty($slider)) { ?>
    <script src="<?=base_url('themes/beagle/'); ?>assets/lib/bootstrap-slider/bootstrap-slider.min.js" type="text/javascript"></script>
    <?php } ?>
    <?php if (!empty($datepicker)) { ?>
    <script src="<?=base_url('themes/beagle/'); ?>assets/lib/datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
    <?php } ?>
    <?php if (!empty($charts)) { ?>
    <script src="<?=base_url('themes/beagle/'); ?>assets/lib/jqvmap/jquery.vmap.min.js" type="text/javascript"></script>
    <script src="<?=base_url('themes/beagle/'); ?>assets/lib/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        //initialize the javascript
        App.dashboard();
      
      });
    </script>
    <?php } ?>    
    <?php if (!empty($table)) { ?>
    <script type="text/javascript">
      $(document).ready(function(){
        //initialize the javascript
        App.tableFilters();
      });
    </script>
    <?php } ?> 
    <?php if (!empty($datatable)) { ?>
    <script src="<?=base_url('themes/beagle/'); ?>assets/lib/datatables/datatables.net/js/jquery.dataTables.js" type="text/javascript"></script>
    <script src="<?=base_url('themes/beagle/'); ?>assets/lib/datatables/datatables.net-bs4/js/dataTables.bootstrap4.js" type="text/javascript"></script>
    <script src="<?=base_url('themes/beagle/'); ?>assets/lib/datatables/datatables.net-buttons/js/dataTables.buttons.min.js" type="text/javascript"></script>
    <script src="<?=base_url('themes/beagle/'); ?>assets/lib/datatables/datatables.net-buttons/js/buttons.html5.min.js" type="text/javascript"></script>
    <script src="<?=base_url('themes/beagle/'); ?>assets/lib/datatables/datatables.net-buttons/js/buttons.flash.min.js" type="text/javascript"></script>
    <script src="<?=base_url('themes/beagle/'); ?>assets/lib/datatables/datatables.net-buttons/js/buttons.print.min.js" type="text/javascript"></script>
    <script src="<?=base_url('themes/beagle/'); ?>assets/lib/datatables/datatables.net-buttons/js/buttons.colVis.min.js" type="text/javascript"></script>
    <script src="<?=base_url('themes/beagle/'); ?>assets/lib/datatables/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        App.dataTables();
      });
    </script>
    <?php } ?>

    <script src="<?=base_url('themes/beagle/'); ?>assets/js/ajax.js" type="text/javascript"></script>

  </body>


</html>