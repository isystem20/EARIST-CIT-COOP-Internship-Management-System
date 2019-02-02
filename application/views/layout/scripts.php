    <div id="all_delete_modal" tabindex="-1" role="dialog" class="modal modal-full-color modal-full-color-danger fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>
          </div>
          <div class="modal-body">
            <div class="text-center"><span class="modal-main-icon mdi mdi-info-outline"></span>
              <?php $hidden = array('Class' => '', ); ?>
              <?=form_open('','id="all_delete_form"',$hidden); ?>
              <h3>Warning!</h3>
              <p>You are about to delete selected records.<br>Do you wish to proceed?</p>
              <div class="mt-8">
                <button type="button" data-dismiss="modal" class="btn btn-secondary btn-space">Cancel</button>
                <button type="submit" class="btn btn-primary btn-space" id="all_delete_btn">Proceed</button>
              </div>
              <?=form_close(); ?>  
            </div>
          </div>
          <div class="modal-footer"></div>
        </div>
      </div>
    </div>




    <script src="<?=base_url('themes/beagle/'); ?>assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="<?=base_url('themes/beagle/'); ?>assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="<?=base_url('themes/beagle/'); ?>assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="<?=base_url('themes/beagle/'); ?>assets/js/app.js" type="text/javascript"></script>
    <script src="<?=base_url('themes/beagle/'); ?>assets/lib/jquery.gritter/js/jquery.gritter.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        App.init();
        App.uiNotifications();
      });
    </script>
    <?php if (!empty($form)) { ?>
    <script src="<?=base_url('themes/beagle/'); ?>assets/lib/parsley/parsley.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('form').parsley();
      });
    </script>
    <?php } ?>
    <?php if (!empty($formelements)) { ?>
    <script src="<?=base_url('themes/beagle/'); ?>assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="<?=base_url('themes/beagle/'); ?>assets/lib/jquery.nestable/jquery.nestable.js" type="text/javascript"></script>
    <script src="<?=base_url('themes/beagle/'); ?>assets/lib/moment.js/min/moment.min.js" type="text/javascript"></script>
    <script src="<?=base_url('themes/beagle/'); ?>assets/lib/datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
    <script src="<?=base_url('themes/beagle/'); ?>assets/lib/select2/js/select2.min.js" type="text/javascript"></script>
    <script src="<?=base_url('themes/beagle/'); ?>assets/lib/select2/js/select2.full.min.js" type="text/javascript"></script>
    <script src="<?=base_url('themes/beagle/'); ?>assets/lib/bootstrap-slider/bootstrap-slider.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        App.formElements();
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
        App.dashboard();
      });
    </script>
    <?php } ?>   
    <?php if (!empty($editor)) { ?>
    <script src="<?=base_url('themes/beagle/'); ?>assets/lib/summernote/summernote-bs4.min.js" type="text/javascript"></script>
    <script src="<?=base_url('themes/beagle/'); ?>assets/lib/summernote/summernote-ext-beagle.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        App.textEditors();
      });
    </script>
    <?php } ?>        
    <?php if (!empty($table)) { ?>
    <script type="text/javascript">
      $(document).ready(function(){
        App.tableFilters();
      });
    </script>
    <?php } ?> 
    <?php if (!empty($profile)) { ?>
    <script src="<?=base_url('themes/beagle/'); ?>assets/lib/jquery-flot/jquery.flot.js" type="text/javascript"></script>
    <script src="<?=base_url('themes/beagle/'); ?>assets/lib/jquery-flot/jquery.flot.pie.js" type="text/javascript"></script>
    <script src="<?=base_url('themes/beagle/'); ?>assets/lib/jquery-flot/jquery.flot.time.js" type="text/javascript"></script>
    <script src="<?=base_url('themes/beagle/'); ?>assets/lib/jquery-flot/jquery.flot.resize.js" type="text/javascript"></script>
    <script src="<?=base_url('themes/beagle/'); ?>assets/lib/jquery-flot/plugins/jquery.flot.orderBars.js" type="text/javascript"></script>
    <script src="<?=base_url('themes/beagle/'); ?>assets/lib/jquery-flot/plugins/curvedLines.js" type="text/javascript"></script>
    <script src="<?=base_url('themes/beagle/'); ?>assets/lib/jquery-flot/plugins/jquery.flot.tooltip.js" type="text/javascript"></script>
    <script src="<?=base_url('themes/beagle/'); ?>assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        App.pageProfile();
      });
    </script>
    <?php } ?> 



    <script src="<?=base_url('themes/beagle/'); ?>assets/js/ajax.js" type="text/javascript"></script>

  </body>


</html>