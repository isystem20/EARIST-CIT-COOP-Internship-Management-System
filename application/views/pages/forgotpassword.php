  <body class="be-splash-screen">
    <div class="be-wrapper be-login">
      <div class="be-content">
        <div class="main-content container-fluid">
          <div class="splash-container">
            <div class="card card-border-color card-border-color-primary">
              <div class="card-header">
                <img src="<?=base_url('themes/others/'); ?>defaultlogo.png" alt="logo" width="202" class="logo-img">
                <span class="splash-description">Account Recovery</span></div>
              <div class="card-body">
                <form action="<?=base_url('recovery/'); ?>" id="recoveryform">
                    <div class="form-group row">
                      <div class="col-12 col-sm-8 col-lg-8">
                        <input id="Email" type="text" name="Email" placeholder="Your email address" class="form-control">
                      </div>
                      <div class="col-12 col-sm-8 col-lg-4">
                        <button data-dismiss="modal" type="button" class="btn btn-primary btn-xl" id="SendRecoveryCode">Send code</button>
                      </div>
                    </div>
                  <div class="form-group">
                    <input id="password" type="password" placeholder="Pass Code" class="form-control">
                  </div>
                  <div class="form-group login-submit">
                    <button data-dismiss="modal" type="submit" class="btn btn-primary btn-xl">Verify</button>
                  </div>
                </form>
              </div>
            </div>
            <div class="splash-footer"><span>Don't have an account? <a href="pages-sign-up.html">Sign Up</a></span></div>
          </div>
        </div>
      </div>
    </div>
<!--     <script src="assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="assets/js/app.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      });
      
    </script>
  </body>
</html> -->