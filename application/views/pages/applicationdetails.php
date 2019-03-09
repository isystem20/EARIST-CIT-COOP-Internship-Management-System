      <div class="be-content">
        <?php
        if ($this->session->userdata('usertype') == 'ADMIN') { ?>

        <div class="page-head">
          <h2 class="page-head-title">Edit Application</h2>
          <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb page-head-nav">
              <li class="breadcrumb-item"><a href="#">Administration</a></li>
              <li class="breadcrumb-item"><a href="#">Masterlist</a></li>
              <li class="breadcrumb-item"><a href="<?=base_url('manage/students'); ?>">Application</a></li>
              <li class="breadcrumb-item active">Edit</li>
            </ol>
          </nav>
        </div>
        
        <?php
        }
        ?>


        <div class="main-content container-fluid">

          <?=form_open_multipart('applications/add','id="application_reg_form"'); ?>
            <div class="row">
              <div class="col-lg-12">
                <div class="card card-border-color card-border-color-primary">
                  <div class="card-header card-header-divider">Internship Application Form
                    <!-- <span class="card-subtitle">This is the default bootstrap form layout</span> -->
                  </div>
                  <div class="card-body">

                    <div class="form-group row">
                      <label for="inputText3" class="col-12 col-sm-3 col-form-label text-sm-right">Select Company</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                          <select class="select2" name="CompanyId">
                              <option value="">[Add New Company]</option>  
                              <?php
                              if ($companies->num_rows() > 0) {
                                foreach ($companies->result() as $row) {
                                 ?>
                                <option value="<?=$row->Id ?>"><?=$row->CompanyName; ?></option>  
                              <?php
                                }
                              }
                              ?>
                          </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-12 col-sm-3 col-form-label text-sm-right">Application Date</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                          <div class="">
                            <div data-min-view="2" data-date-format="yyyy-mm-dd" class="input-group date datetimepicker">
                              <div class="input-group-append">
                                <button class="btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></button>
                              </div>                                    
                              <input size="16" type="text" name="LabelDate" value="<?=date('Y-m-d') ?>" class="form-control">
                            </div>
                          </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPlaceholder3" class="col-12 col-sm-3 col-form-label text-sm-right">Company Name</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input id="inputPlaceholder3" type="text" name="CompanyName" value="<?=$app_info[0]->CompanyName ?>" placeholder="Placeholder text" class="form-control">
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
                      <label for="inputPlaceholder3" class="col-12 col-sm-3 col-form-label text-sm-right">Contact Person</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input id="inputPlaceholder3" type="text" name="ContactPerson" placeholder="Contact Person" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputDisabled3" class="col-12 col-sm-3 col-form-label text-sm-right">Designation</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input id="inputDisabled3" type="text" name="Designation" placeholder="Designation of Contact Person" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-12 col-sm-3 col-form-label text-sm-right"></div>
                      <div class="col-12 col-sm-8 col-lg-6">
                            <p class="text-right">
                            <button type="submit" id="application_reg_btn" class="btn btn-big btn-space btn-primary">Submit</button>
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
