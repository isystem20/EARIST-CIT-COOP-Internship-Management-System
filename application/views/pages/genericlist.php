
<div class="be-content">
  <div class="page-head">
    <h2 class="page-head-title"><?=$labels['title']; ?></h2>
    <nav aria-label="breadcrumb" role="navigation">
      <ol class="breadcrumb page-head-nav">
        <li class="breadcrumb-item"><a href="#">Menu</a></li>
        <li class="breadcrumb-item active">My Applications</li>
      </ol>
    </nav>
  </div>
  <div class="main-content container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="card card-table">
          <div class="card-header">
            <button data-toggle="modal" data-target="#generic_add_edit" class="btn btn-space btn-primary">
              <i class="icon icon-left mdi mdi-account-add"></i> Add
            </button>
            <button class="btn btn-space btn-success" id="StudentUpdateSelectButton" data-url="<?=base_url('student/edit/'); ?>" >
              <i class="icon icon-left mdi mdi-account-add"></i> Update
            </button>
            <button class="btn btn-space btn-warning">
              <i class="icon icon-left mdi mdi-account-add"></i> Delete
            </button>


            <div class="tools dropdown"><span class="icon mdi mdi-download"></span><a href="#" role="button" data-toggle="dropdown" class="dropdown-toggle"><span class="icon mdi mdi-more-vert"></span></a>
              <div role="menu" class="dropdown-menu"><a href="#" class="dropdown-item">Action</a><a href="#" class="dropdown-item">Another action</a><a href="#" class="dropdown-item">Something else here</a>
                <div class="dropdown-divider"></div><a href="#" class="dropdown-item">Separated link</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <table id="table3" class="table table-generic table-striped table-hover table-fw-widget">
              <thead>
                  <tr>
                    <th style="width:5%;">
                      <label class="custom-control custom-control-sm custom-checkbox">
                        <input type="checkbox" class="custom-control-input"><span class="custom-control-label"></span>
                      </label>
                    </th>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Last Modified</th> 
                    <th style="width:10px;">Status </th> 

                    <th style="width:60px;">Action</th>
                  </tr>
              </thead>
                <tbody>

                  <?php
                  if (!empty($all_list)) {
                     if ($all_list->num_rows() > 0) {
                        foreach ($all_list->result() as $row) { ?>


                    <tr id="row">
                      <td>
                        
                        <label class="custom-control custom-control-sm custom-checkbox">
                          <input type="checkbox" dataclass="studentids" class="custom-control-input studentids" data-id="<?=$row->Id; ?>">
                          <span class="custom-control-label"></span>
                        </label>
                        
                      </td>
                      <td class="cell-detail"> <span><?=$row->Code; ?></span></td>
                      <td class="cell-detail"> <span><?=character_limiter($row->Name, 40); ?></span></td> 
                      <td class="cell-detail"> <span><?=character_limiter($row->Description, 40); ?></span></td>
                      <td class="cell-detail"> <span><?=date('Y-m-d',strtotime($row->ModifiedAt)); ?></span></td>
                      <td class="text-right"> <span><?php if($row->IsActive == '1') {echo '<span class="badge badge-success">Active</span>';}else {echo '<span class="badge badge-default">Inactive</span>';} ?></span></td>
                      <td class="text-right">

                        <button class="btn btn-secondary generic_edit_btn" data-id="<?=$row->Id; ?>" data-code="<?=$row->Code; ?>" data-name="<?=$row->Name; ?>" data-desc="<?=$row->Description; ?>" data-status="<?=$row->IsActive; ?>" data-action="<?=base_url('manage/generic/'.$labels['class'].'/update'); ?>"><i class="mdi mdi-edit"></i></button>
                        <button class="btn btn-warning generic_del_btn" data-id="<?=$row->Id; ?>" data-name="<?=$row->Name; ?>"><i class="mdi mdi-delete"></i></button>
                      </td>
                    </tr>


                  <?php
                        }
                     }
                  }
                  ?>

                </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div id="generic_add_edit" tabindex="-1" role="dialog" class="modal fade colored-header colored-header-primary">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header modal-header-colored">
        <h3 class="modal-title" id="generic_add_edit_title">Add Record</h3>
        <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><span class="mdi mdi-close">       </span></button>
      </div>
      <?php $hidden = array('Id' => '', ); ?>
      <?=form_open_multipart('manage/generic/'.$labels['class'].'/add','id="generic_reg_form"',$hidden); ?>
      <div class="modal-body">
        <div class="form-group row mt-2">
          <label for="code" class="col-3 col-lg-2 col-form-label text-right">Code</label>
          <div class="col-9 col-lg-10">
            <input id="code" name="Code" type="text" placeholder="Item Code" class="form-control">
          </div>
        </div>
        <div class="form-group row mt-2">
          <label for="itemname" class="col-3 col-lg-2 col-form-label text-right">Name</label>
          <div class="col-9 col-lg-10">
            <input id="itemname" name="Name" type="text" placeholder="Item Name" class="form-control">
          </div>
        </div>
        <div class="form-group row mt-2">
          <label for="itemdesc" class="col-3 col-lg-2 col-form-label text-right">Description</label>
          <div class="col-9 col-lg-10">
            <textarea id="itemdesc" name="Description" class="form-control" placeholder="Short Description"></textarea>
          </div>
        </div>
        <div class="form-group row pt-0 pb-0">
          <label class="col-3 col-lg-2 col-form-label text-right">Status</label>
          <div class="col-9 col-lg-10">
            <div class="form-group">
              <label class="custom-control custom-radio custom-control-inline">
                <input type="radio" checked="" name="IsActive" value="1" id="Active" class="custom-control-input is-valid"><span class="custom-control-label">Active</span>
              </label>
              <label class="custom-control custom-radio custom-control-inline">
                <input type="radio" name="IsActive" value="0" id="Inactive" class="custom-control-input is-invalid"><span class="custom-control-label">Inactive</span>
              </label>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-secondary md-close">Cancel</button>
        <button type="submit" id="generic_reg_btn" class="btn btn-primary md-close">Submit</button>
      </div>
      <?=form_close(); ?>  
    </div>
  </div>
</div>



<div id="generic_add_edit" tabindex="-1" role="dialog" class="modal fade colored-header colored-header-primary">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header modal-header-colored">
        <h3 class="modal-title" id="generic_add_edit_title">Add Record</h3>
        <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><span class="mdi mdi-close">       </span></button>
      </div>
      <?php $hidden = array('Id' => '', ); ?>
      <?=form_open_multipart('manage/generic/'.$labels['class'].'/add','id="generic_reg_form"',$hidden); ?>
      <div class="modal-body">
        <div class="form-group row mt-2">
          <label for="code" class="col-3 col-lg-2 col-form-label text-right">Code</label>
          <div class="col-9 col-lg-10">
            <input id="code" name="Code" type="text" placeholder="Item Code" class="form-control">
          </div>
        </div>
        <div class="form-group row mt-2">
          <label for="itemname" class="col-3 col-lg-2 col-form-label text-right">Name</label>
          <div class="col-9 col-lg-10">
            <input id="itemname" name="Name" type="text" placeholder="Item Name" class="form-control">
          </div>
        </div>
        <div class="form-group row mt-2">
          <label for="itemdesc" class="col-3 col-lg-2 col-form-label text-right">Description</label>
          <div class="col-9 col-lg-10">
            <textarea id="itemdesc" name="Description" class="form-control" placeholder="Short Description"></textarea>
          </div>
        </div>
        <div class="form-group row pt-0 pb-0">
          <label class="col-3 col-lg-2 col-form-label text-right">Status</label>
          <div class="col-9 col-lg-10">
            <div class="form-group">
              <label class="custom-control custom-radio custom-control-inline">
                <input type="radio" checked="" name="IsActive" value="1" id="Active" class="custom-control-input is-valid"><span class="custom-control-label">Active</span>
              </label>
              <label class="custom-control custom-radio custom-control-inline">
                <input type="radio" name="IsActive" value="0" id="Inactive" class="custom-control-input is-invalid"><span class="custom-control-label">Inactive</span>
              </label>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-secondary md-close">Cancel</button>
        <button type="submit" id="generic_reg_btn" class="btn btn-primary md-close">Submit</button>
      </div>
      <?=form_close(); ?>  
    </div>
  </div>
</div>

<div id="generic_del" tabindex="-1" role="dialog" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>
      </div>
      <div class="modal-body">
      <?php $hidden = array('Id' => '', ); ?>
      <?=form_open_multipart('manage/generic/'.$labels['class'].'/delete','id="generic_del_form"',$hidden); ?>
        <div class="text-center">
          <div class="text-danger"><span class="modal-main-icon mdi mdi-close-circle-o"></span></div>
          <h3>Warning!</h3>
          <p>You are about to delete this record: <strong><span id="itemname"></span></strong></p>
          <p>Are you sure?</p>
          <div class="mt-8">
            <button type="button" data-dismiss="modal" class="btn btn-space btn-secondary">No</button>
            <button type="submit" id="generic_del_btn" class="btn btn-space btn-danger">Yes</button>
          </div>
        </div>
      <?=form_close(); ?>  
      </div>
      <div class="modal-footer"></div>
    </div>
  </div>
</div>