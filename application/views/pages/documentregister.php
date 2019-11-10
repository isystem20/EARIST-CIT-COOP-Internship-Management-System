      <div class="be-content">
        <div class="page-head">
          <h2 class="page-head-title">Document Registration</h2>
          <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb page-head-nav">
              <li class="breadcrumb-item"><a href="#">Administration</a></li>
              <li class="breadcrumb-item"><a href="#">Masterlist</a></li>
              <li class="breadcrumb-item"><a href="#">Documents</a></li>
              <li class="breadcrumb-item active">Register</li>
            </ol>
          </nav>
        </div>
        <div class="main-content container-fluid">
          <?=form_open_multipart('document/add','id="document_reg_form"'); ?>
          <div class="row">
            <div class="col-md-12">
              <div class="card card-border-color card-border-color-primary">
                <div class="card-header card-header-divider">Document Register<span class="card-subtitle">Create Dynamic And Customizable Document</span></div>
                <div class="card-body">
                      <div class="row">
                          <div class="col-sm-12 row">
                              <div class="form-group col-sm-2">
                                <label for="inputUserName">Code</label>
                                <input type="text" name="Code" placeholder="Unique Code" class="form-control">
                              </div>
                              <div class="form-group col-sm-3">
                                <label for="inputUserName">Name</label>
                                <input name="DocumentName" type="text"  placeholder="Document Name" class="form-control">
                              </div>
                              <div class="form-group col-sm-3">
                                <label for="inputUserName">Prerequisite</label>
                                <select class="select2" name="Prerequisite">
                                    <option value="">None</option>
                                    <?php
                                    if ($docslist->num_rows() > 0) {
                                      foreach ($docslist->result() as $row) {
                                       ?>
                                      <option value="<?=$row->Id ?>"><?=$row->DocumentName; ?></option>  
                                    <?php
                                      }
                                    }
                                    ?>
                                </select>
                              </div>
                              <div class="form-group col-sm-4">
                                <label for="inputUserName">Description</label>
                                <input name="Description" type="text"  placeholder="Short Description" class="form-control">
                              </div>                              
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-sm-12 row">
                              <div class="form-group col-sm-12">
                                <label for="inputUserName">Content</label>
                                <div id="editor1"></div>
                              </div>                            
                          </div>
                      </div>
                      <div>
                        <p>Variables</p>
                        <p>{{DocumentDate}} - Desired Document Date </p>
                        <p>{{ContactPersonTitle}} - Contact Person's Title</p>
                        <p>{{ContactPersonFirstName}} - Contact Person's First Name</p>
                        <p>{{ContactPersonLastName}} - Contact Person's Last Name</p>
                        <p>{{ContactPersonPronoun}} - Contact Person's Pronoun</p>
                        <p>{{ContactPerson3rdPerson}} - Contact Person's 3rd Person</p>                        
                        <p>{{ContactPerson}} - Company Contact Person's Full Name</p>
                        <p>{{ContactPerson_Designation}} - Designation of Contact Person</p>
                        <p>{{CompanyName}} - Name of the Participating Company</p>
                        <p>{{CompanyAddress1}} - Company Address (Unit/Building/Street) </p>
                        <p>{{CompanyAddress2}} - Company Address (City, Region, Zip) </p>
                        <p>{{StudentFullName}} - Full name of Student</p>
                        <p>{{StudentFName}} - First name of Student</p>
                        <p>{{StudentLNAme}} - Last name of Student</p>

                        <p>{{StudentAddress}} - Student Address</p>
                        <p>{{GuardianName}} - Student's Guardian Fullname</p>
                        <p>{{GuardianContact}} - Guardian's Contact Number</p>



                        <p>{{StudentCode}} - Student Unique Number/Code </p>
                        <p>{{StudentCourse}} - Course / Program of the Student</p>
                        <p>{{StudentOJTHours}} - Number of hours required for Internship</p>

                        <p>{{StudentGender}} - Gender of Student</p>
                        <p>{{StudentPronoun}} - Pronoun to use for the Student</p>
                        <p>{{Student3rdPerson}} - Third person to use for the Student</p>


                        <p>{{TrainingSupervisor}} - Name of Training Supervisor</p>
                        <p>{{TrainingSupervisor_Designation}} - Designation of Training Supervisor</p>
                        <p>{{TrainingManager}} - Name of Company Department Head</p>

                        <p>{{StudentStartDate}} - Start of Internship in the Company</p>
                        <p>{{StudentEndDate}} - Estimated End of Internship in the Company</p>
                        <p>{{StudentScheduleDays}} - Internship Day Schedule</p>
                        <p>{{StudentScheduleTime}} - Internship Time Schedule</p>
                      </div>
                      <div class="row pt-0 pt-sm-5">
                        <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0"></div>
                        <div class="col-sm-6 pl-0">
                          <p class="text-right">
                            <button type="submit" id="document_reg_btn" class="btn btn-big btn-space btn-primary">Submit</button>
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

      <style type="text/css">
        .ui-helper-hidden-accessible {
          display: none;
        }
      </style>

