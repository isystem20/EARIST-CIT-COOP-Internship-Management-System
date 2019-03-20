      <div class="be-content">
        <?php
        if ($this->session->userdata('usertype') == 'ADMIN') { ?>

        <div class="page-head">
          <h2 class="page-head-title">Registration</h2>
          <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb page-head-nav">
              <li class="breadcrumb-item"><a href="#">Administration</a></li>
              <li class="breadcrumb-item"><a href="#">Masterlist</a></li>
              <li class="breadcrumb-item"><a href="<?=base_url('manage/students'); ?>">Students</a></li>
              <li class="breadcrumb-item active">Register</li>
            </ol>
          </nav>
        </div>
        
        <?php
        }
        ?>


        <div class="main-content container-fluid">

          <?=form_open_multipart('company/add','id="company_reg_form"'); ?>
            <div class="row">
              <div class="col-lg-12">
                <div class="card card-border-color card-border-color-primary">
                  <div class="card-header card-header-divider">Company Registration
                    <!-- <span class="card-subtitle">This is the default bootstrap form layout</span> -->
                  </div>
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="inputPlaceholder3" class="col-12 col-sm-3 col-form-label text-sm-right">Company Name</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input id="companynametext" type="text" name="CompanyName" placeholder="Company Name" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPlaceholder3" class="col-12 col-sm-3 col-form-label text-sm-right">Company Address</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input id="inputPlaceholder3" type="text" name="Address1" placeholder="Floor, Building, Street" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputText3" class="col-12 col-sm-3 col-form-label text-sm-right">City Location</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                          <select class="select2" name="CityId">
                              <!-- <option value="">Select City</option>   -->
                              <?php
                              if ($cities->num_rows() > 0) {
                                foreach ($cities->result() as $row) {
                                 ?>
                                <option value="<?=$row->Id ?>"><?=$row->Name; ?></option>  
                              <?php
                                }
                              }
                              ?>
                          </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPlaceholder3" class="col-12 col-sm-3 col-form-label text-sm-right">ZIP code</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input id="inputPlaceholder3" type="text" name="Zip" placeholder="Company Zip Code" class="form-control">
                      </div>
                    </div>  
                    <div class="form-group row">
                      <label for="inputDisabled3" class="col-12 col-sm-3 col-form-label text-sm-right">Company Website</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input id="inputDisabled3" type="text" name="Website" placeholder="http://cit-cms.com" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-12 col-sm-3 col-form-label text-sm-right"></div>
                      <div class="col-12 col-sm-8 col-lg-6">
                            <p class="text-right">
                            <button type="submit" id="company_reg_btn" class="btn btn-big btn-space btn-primary">Submit</button>
                            </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          <?=form_close(); ?>         
        </div>
      </div>
