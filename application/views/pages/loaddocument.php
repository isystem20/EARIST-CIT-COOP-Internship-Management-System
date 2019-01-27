      <div class="be-content">
        <div class="page-head">
          <h2 class="page-head-title">Document Registration</h2>
          <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb page-head-nav">
              <li class="breadcrumb-item"><a href="#">Administration</a></li>
              <li class="breadcrumb-item"><a href="#">Masterlist</a></li>
              <li class="breadcrumb-item"><a href="<?=base_url('manage/documents'); ?>">Documents</a></li>
              <li class="breadcrumb-item active">Register</li>
            </ol>
          </nav>
        </div>
        <div class="main-content container-fluid">
          <?php
          $hidden = array('Id' => $doc[0]->Id, );
          ?>
          <?=form_open_multipart('document/update','id="document_reg_form"',$hidden); ?>
          <div class="row">
            <div class="col-md-12">
              <div class="card card-border-color card-border-color-primary">
                <div class="card-header card-header-divider">Document Register<span class="card-subtitle">Create Dynamic And Customizable Document</span></div>
                <div class="card-body">
                      <div class="row">
                          <div class="col-sm-12 row">
                              <div class="form-group col-sm-2">
                                <label for="inputUserName">Code</label>
                                <input type="text" name="Code" value="<?=$doc[0]->Code; ?>"  placeholder="Unique Code" class="form-control">
                              </div>
                              <div class="form-group col-sm-3">
                                <label for="inputUserName">Name</label>
                                <input name="DocumentName" type="text" value="<?=$doc[0]->DocumentName; ?>"  placeholder="Document Name" class="form-control">
                              </div>
                              <div class="form-group col-sm-3">
                                <label for="inputUserName">Prerequisite</label>
                                <select class="select2" name="Prerequisite">
                                    <option value="">None</option>
                                    <?php
                                    if ($docslist->num_rows() > 0) {
                                      foreach ($docslist->result() as $row) {
                                        $str = '';
                                        if ($row->Id == $profile[0]->Prerequisite) {
                                          $str = 'selected';
                                        }
                                       ?>
                                      <option <?=$str; ?> value="<?=$row->Id ?>"><?=$row->DocumentName; ?></option>  
                                    <?php
                                      }
                                    }
                                    ?>
                                </select>
                              </div>
                              <div class="form-group col-sm-4">
                                <label for="inputUserName">Description</label>
                                <input name="Description" type="text" value="<?=$doc[0]->Description; ?>"  placeholder="Short Description" class="form-control">
                              </div>                              
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-sm-12 row">
                              <div class="form-group col-sm-12">
                                <label for="inputUserName">Content</label>
                                <div id="editor1"></div>
                                <textarea id="pre-loaded-content" style="display: none;"><?=$doc[0]->Content; ?></textarea>
                              </div>                            
                          </div>
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

