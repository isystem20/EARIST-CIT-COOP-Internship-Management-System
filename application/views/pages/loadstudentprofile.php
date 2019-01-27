      <div class="be-content">
        <?php
        if ($this->session->userdata('usertype') == 'ADMIN') { ?>

        <div class="page-head">
          <h2 class="page-head-title">Registration</h2>
          <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb page-head-nav">
              <li class="breadcrumb-item"><a href="#">Administration</a></li>
              <li class="breadcrumb-item"><a href="#">Masterlist</a></li>
              <li class="breadcrumb-item"><a href="#">Students</a></li>
              <li class="breadcrumb-item active">Register</li>
            </ol>
          </nav>
        </div>
        
        <?php
        }
        ?>


        <div class="main-content container-fluid">
          <?php
          $hidden = array('Id' => $profile[0]->Id, );
          ?>
          <?=form_open_multipart('student/update','id="student_reg_form"',$hidden); ?>
            <div class="row">
              <div class="col-lg-12">
                <div class="card card-border-color card-border-color-primary">
                  <div class="card-header card-header-divider">Personal Information
                    <!-- <span class="card-subtitle">This is the default bootstrap form layout</span> -->
                  </div>
                  <div class="card-body">

                      <div class="row">
                        <div class="col-sm-10 row">
                            <div class="form-group col-sm-4">
                              <label for="inputUserName">Given Name</label>
                              <input id="inputUserName" type="text" name="FirstName" value="<?=$profile[0]->FirstName; ?>"  placeholder="Enter user name" autocomplete="off" class="form-control">
                          <!--     <ul class="parsley-errors-list filled" id="parsley-id-5">
                                <li class="parsley-required">This value is required.</li>
                              </ul> -->
                            </div>
                            <div class="form-group col-sm-4">
                              <label for="inputUserName">Middle Name</label>
                              <input id="inputUserName" type="text" name="MiddleName" value="<?=$profile[0]->MiddleName; ?>"  placeholder="Enter user name" autocomplete="off" class="form-control">
                            </div>
                            <div class="form-group col-sm-4">
                              <label for="inputUserName">Family Name</label>
                              <input id="inputUserName" type="text" name="LastName" value="<?=$profile[0]->LastName; ?>" placeholder="Enter user name" autocomplete="off" class="form-control">
                            </div>                        
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                              <label for="inputUserName">Suffix</label>
                                <select class="select2" name="Suffix">
                                    <option <?php if($profile[0]->Suffix == '' ) { echo 'selected'; } ?> value="">None</option>
                                    <option <?php if($profile[0]->Suffix == 'Jr' ) { echo 'selected'; } ?> value="Jr">Jr</option>
                                    <option <?php if($profile[0]->Suffix == 'III' ) { echo 'selected'; } ?> value="III">III</option>
                                </select>
                            </div>                        
                        </div>
                      </div>
                      <div class="row">
                          <div class="col-sm-12 row">
                              <div class="form-group col-sm-4">
                                <label for="inputUserName">Birthdate</label>
                                <div class="">
                                  <div data-min-view="2" data-date-format="yyyy-mm-dd" class="input-group date datetimepicker">
                                    <div class="input-group-append">
                                      <button class="btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></button>
                                    </div>                                    
                                    <input size="16" type="text" name="Birthdate" value="<?=$profile[0]->Birthdate; ?>" class="form-control">
                                  </div>
                                </div>
                              </div>
                              <div class="form-group col-sm-4">
                                <label for="inputUserName">Civil Status</label>
                                <select class="select2" name="CivilStatus">
                                    <option <?php if($profile[0]->Suffix == '' ) { echo 'Single'; } ?> value="Single">Single</option>
                                    <option <?php if($profile[0]->Suffix == '' ) { echo 'Married'; } ?> value="Married">Married</option>
                                    <option <?php if($profile[0]->Suffix == '' ) { echo 'Separated'; } ?> value="Separated">Separated</option>
                                </select>
                              </div>
                              <div class="form-group col-sm-4">
                                <label for="inputUserName">Nationality</label>
                                <select class="select2" name="Nationality">
                                <?php
                                if ($nationality->num_rows() > 0) {
                                  foreach ($nationality->result() as $row) {
                                    $str = '';
                                    if ($row->Id == $profile[0]->Nationality) {
                                      $str = 'selected';
                                    }
                                    ?>
                                    <option <?=$str; ?> value="<?=$row->Id ?>"><?=$row->Name; ?></option>  
                                    <?php
                                      }
                                    }
                                    ?>
                                </select>
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-sm-12 row">
                              <div class="form-group col-sm-4">
                                <label for="inputUserName">Email</label>
                                <input type="email" name="PersonalEmail" value="<?=$profile[0]->PersonalEmail; ?>"  parsley-type="email" placeholder="Enter a valid e-mail" class="form-control">
                              </div>
                              <div class="form-group col-sm-4">
                                <label for="inputUserName">Mobile</label>
                                <input data-parsley-type="digits" name="MobileNo" value="<?=$profile[0]->MobileNo; ?>" type="text"  placeholder="Enter only digits" class="form-control parsley-error" data-parsley-id="63">
                              </div>
                              <div class="form-group col-sm-4">
                                <label for="inputUserName">Landline</label>
                                <input data-parsley-type="digits" name="TelNo" value="<?=$profile[0]->TelNo; ?>" type="text"  placeholder="Enter only digits" class="form-control parsley-error" data-parsley-id="63">
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-sm-12 row">
                              <div class="form-group col-sm-6">
                                <label for="inputUserName">Address</label>
                                <input id="inputUserName" type="text" name="Address1" value="<?=$profile[0]->Address1; ?>"  placeholder="House Number, Street, Subdivision" autocomplete="off" class="form-control">
                              </div>
                              <div class="form-group col-sm-3">
                                <label for="inputUserName">City/Province</label>
                                <select class="select2" name="CityId">
                                    <option value="">Select City</option>
                                    <?php
                                    if ($cities->num_rows() > 0) {
                                      foreach ($cities->result() as $row) {
                                      $str = '';
                                      if ($row->Id == $profile[0]->CityId) {
                                        $str = 'selected';
                                      }
                                      ?>
                                      <option <?=$str; ?> value="<?=$row->Id ?>"><?=$row->Name; ?></option>  

                                    <?php
                                      }
                                    }
                                    ?>
                              
                                </select>
                              </div>
                              <div class="form-group col-sm-3">
                                <label for="inputUserName">Region</label>
                                <select class="select2" name="ProvinceId">
                                    <option value="AK">Select Region</option>
                                    <?php
                                    if ($regions->num_rows() > 0) {
                                      foreach ($regions->result() as $row) {
                                      $str = '';
                                      if ($row->Id == $profile[0]->ProvinceId) {
                                        $str = 'selected';
                                      }
                                      ?>
                                      <option <?=$str; ?> value="<?=$row->Id ?>"><?=$row->Name; ?></option> 
                                    <?php
                                      }
                                    }
                                    ?>
                              
                                </select>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-lg-12">
                <div class="card card-border-color card-border-color-primary">
                  <div class="card-header card-header-divider">Academic and Additional Information
                    <!-- <span class="card-subtitle">This is the default bootstrap form layout</span> -->
                  </div>
                  <div class="card-body">
                      <div class="row">
                        <div class="col-sm-2">
                            <div class="form-group">
                              <label for="inputUserName">Student Number</label>
                              <input id="inputUserName" type="text" name="Code" value="<?=$profile[0]->Code; ?>" placeholder="Enter Student No." autocomplete="off" class="form-control">
                            </div>                        
                        </div>
                        <div class="col-sm-10 row">
                            <div class="form-group col-sm-3">
                              <label for="inputUserName">Program/Course</label>
                              <select class="select2" name="CourseId">
                                  <!-- <option value="">Select Program/Course</option> -->
                                    <?php
                                    if ($courses->num_rows() > 0) {
                                      foreach ($courses->result() as $row) {
                                      $str = '';
                                      if ($row->Id == $profile[0]->CourseId) {
                                        $str = 'selected';
                                      }
                                      ?>
                                      <option <?=$str; ?> value="<?=$row->Id ?>"><?=$row->Name; ?></option> 

                                    <?php
                                      }
                                    }
                                    ?>
                              </select>
                            </div>
                            <div class="form-group col-sm-3">
                              <label for="inputUserName">Year Level</label>
                              <select class="select2" name="YearLevelId">
                                  <!-- <option value="">Select Year Level</option> -->
                                    <?php
                                    if ($yearlevels->num_rows() > 0) {
                                      foreach ($yearlevels->result() as $row) { 
                                      $str = '';
                                      if ($row->Id == $profile[0]->YearLevelId) {
                                        $str = 'selected';
                                      }
                                      ?>
                                      <option <?=$str; ?> value="<?=$row->Id ?>"><?=$row->Name; ?></option> 

                                    <?php
                                      }
                                    }
                                    ?>
                              </select>
                            </div>
                            <div class="form-group col-sm-3">
                              <label for="inputUserName">Semester</label>
                              <select class="select2" name="SemesterId">
                                  <!-- <option value="">Select Semester</option> -->
                                    <?php
                                    if ($semesters->num_rows() > 0) {
                                      foreach ($semesters->result() as $row) { 
                                      $str = '';
                                      if ($row->Id == $profile[0]->SemesterId) {
                                        $str = 'selected';
                                      }
                                      ?>
                                      <option <?=$str; ?> value="<?=$row->Id ?>"><?=$row->Name; ?></option> 

                                    <?php
                                      }
                                    }
                                    ?>
                              </select>
                            </div>
                            <div class="form-group col-sm-3">
                              <label for="inputUserName">Section</label>
                              <select class="select2" name="SectionId">
                                  <!-- <option value="">Select Section</option> -->
                                    <?php
                                    if ($sections->num_rows() > 0) {
                                      foreach ($sections->result() as $row) {
                                      $str = '';
                                      if ($row->Id == $profile[0]->SectionId) {
                                        $str = 'selected';
                                      }
                                      ?>
                                      <option <?=$str; ?> value="<?=$row->Id ?>"><?=$row->Name; ?></option>

                                    <?php
                                      }
                                    }
                                    ?>
                              </select>
                            </div>                                                  
                        </div>

                      </div>
                      <div class="row">
                          <div class="col-sm-12 row">
                              <div class="form-group col-sm-6">
                                <label for="inputUserName">Internship Advisor</label>
                                <select class="select2" name="Advisor">
                                    <?php
                                    if ($advisors->num_rows() > 0) {
                                      foreach ($advisors->result() as $row) {
                                      $str = '';
                                      if ($row->Id == $profile[0]->Advisor) {
                                        $str = 'selected';
                                      }
                                      ?>
                                    <option <?=$str; ?> value="<?=$row->Id ?>"><?=$row->LastName.', '.$row->FirstName; ?></option>  

                                    <?php
                                      }
                                    }
                                    ?>
                                </select>
                              </div>
                              <div class="form-group col-sm-3">
                                <label for="inputUserName">Profile Picture</label>
                                <div>
                                  <input id="Profile" type="file" name="Profile" data-multiple-caption="{count} files selected" class="inputfile">
                                  <label for="Profile" class="btn-secondary btn-big"> 
                                    <i class="mdi mdi-upload"></i><span>Browse files...          </span>
                                  </label>                                
                                </div>
                              </div>
                              <div class="form-group col-sm-3">
                                <label for="inputUserName">Banner Image</label>
                                <div>
                                  <input id="Banner" type="file" name="Banner" data-multiple-caption="{count} files selected" class="inputfile">
                                  <label for="Banner" class="btn-secondary btn-big"> 
                                    <i class="mdi mdi-upload"></i><span>Browse files...          </span>
                                  </label>                                
                                </div>
                              </div>
                          </div>
                      </div>

                      <div class="row pt-0 pt-sm-5">
                        <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                        </div>
                        <div class="col-sm-6 pl-0">
                          <p class="text-right">
                            <button type="submit" id="student_reg_btn" class="btn btn-big btn-space btn-primary">Submit</button>
                            
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
