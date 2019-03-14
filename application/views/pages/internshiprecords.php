      <div class="be-content">
        <?php
        if ($this->session->userdata('usertype') == 'ADMIN') { ?>

        <div class="page-head">
          <h2 class="page-head-title">Internship Record</h2>
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

          <?=form_open_multipart('record/add','id="record_reg_form"'); ?>
            <div class="row">
              <div class="col-lg-12">
                <div class="card card-border-color card-border-color-primary">
                  <div class="card-header card-header-divider">Internship Record Form
                    <!-- <span class="card-subtitle">This is the default bootstrap form layout</span> -->
                  </div>
                  <div class="card-body">
                    <input id="inputPlaceholder3" type="hidden" name="ApplicationId" value="<?=$application[0]['Id'] ?>">
                    <input id="inputPlaceholder3" type="hidden" name="StudentId" value="<?=$this->session->userdata('account_id'); ?>">
                    <div class="form-group row">
                      <label for="inputText3" class="col-12 col-sm-3 col-form-label text-sm-right">Select Company</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                          <select class="select2" name="">
                              <option value="">[Add New Company]</option>  
                              <?php
                              if ($companies->num_rows() > 0) {
                                $s = '';
                                foreach ($companies->result() as $row) {
                                  if ($row->Id == $application[0]['CompanyId']) {
                                     $s = 'selected';
                                  }
                                 ?>
                                <option <?=$s; ?> value="<?=$row->Id ?>"><?=$row->CompanyName; ?></option>  
                              <?php
                                }
                              }
                              ?>
                          </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPlaceholder3" class="col-12 col-sm-3 col-form-label text-sm-right">Supervisor</label>
                      <div class="col-12 col-sm-8 col-lg-3">
                        <input id="inputPlaceholder3" type="text" name="SFirstName" placeholder="First Name" class="form-control">
                      </div>
                      <div class="col-12 col-sm-8 col-lg-3">
                        <input id="inputPlaceholder3" type="text" name="SLastName" placeholder="Last Name" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPlaceholder3" class="col-12 col-sm-3 col-form-label text-sm-right">Supervisor Designation</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input id="inputPlaceholder3" type="text" name="SupervisorPosition" placeholder="Designation" class="form-control">
                      </div>
                    </div>              
                    <div class="form-group row">
                      <label for="inputPlaceholder3" class="col-12 col-sm-3 col-form-label text-sm-right">Manager</label>
                      <div class="col-12 col-sm-8 col-lg-3">
                        <input id="inputPlaceholder3" type="text" name="MFirstName" placeholder="First Name" class="form-control">
                      </div>
                      <div class="col-12 col-sm-8 col-lg-3">
                        <input id="inputPlaceholder3" type="text" name="MLastName" placeholder="Last Name" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPlaceholder3" class="col-12 col-sm-3 col-form-label text-sm-right">Department</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input id="inputPlaceholder3" type="text" name="Department" placeholder="Department" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPlaceholder3" class="col-12 col-sm-3 col-form-label text-sm-right">Internship Hours</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input id="inputPlaceholder3" type="text" name="Hours" placeholder="Required Hours" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-12 col-sm-3 col-form-label text-sm-right">Start Date</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                          <div class="">
                            <div data-min-view="2" data-date-format="yyyy-mm-dd" class="input-group date datetimepicker">
                              <div class="input-group-append">
                                <button class="btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></button>
                              </div>                                    
                              <input size="16" type="text" name="StartDate" value="<?=date('Y-m-d') ?>" class="form-control">
                            </div>
                          </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-12 col-sm-3 col-form-label text-sm-right">Expected End Date</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                          <div class="">
                            <div data-min-view="2" data-date-format="yyyy-mm-dd" class="input-group date datetimepicker">
                              <div class="input-group-append">
                                <button class="btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></button>
                              </div>                                    
                              <input size="16" type="text" name="EndDate" value="<?=date('Y-m-d') ?>" class="form-control">
                            </div>
                          </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPlaceholder3" class="col-12 col-sm-3 col-form-label text-sm-right">Shift Schedule (Days)</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input id="inputPlaceholder3" type="text" name="ScheduleDays" placeholder="E.q Monday to Friday" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPlaceholder3" class="col-12 col-sm-3 col-form-label text-sm-right">Shift Schedule (Time)</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input id="inputPlaceholder3" type="text" name="ScheduleTime" placeholder="E.q 8:00 AM to 5:00 PM" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-12 col-sm-3 col-form-label text-sm-right"></div>
                      <div class="col-12 col-sm-8 col-lg-6">
                            <p class="text-right">
                            <button type="submit" id="record_reg_btn" class="btn btn-big btn-space btn-primary">Submit</button>
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
