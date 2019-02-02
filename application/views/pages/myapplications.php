
<div class="be-content">
  <div class="page-head">
    <h2 class="page-head-title">My Applications</h2>
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
            <a href="<?=base_url('applications/register'); ?>" class="btn btn-space btn-primary">
              <i class="icon icon-left mdi mdi-account-add"></i> Add
            </a>
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
            <table id="table3" class="table table-striped table-hover table-fw-widget">
              <thead>
                  <tr>
                    <th style="width:5%;">
                      <label class="custom-control custom-control-sm custom-checkbox">
                        <input type="checkbox" class="custom-control-input"><span class="custom-control-label"></span>
                      </label>
                    </th>
                    <th>Date</th>
                    <th>Company Name</th>
                    <th>Contact Person</th>
                    <th>Address</th>            
                    <th style="width:80px;">Action</th>
                  </tr>
              </thead>
                <tbody>

                  <?php
                  if (!empty($all_list)) {
                     if ($all_list->num_rows() > 0) {
                        foreach ($all_list->result() as $row) { ?>


                    <tr>
                      <td>
                        
                        <label class="custom-control custom-control-sm custom-checkbox">
                          <input type="checkbox" dataclass="studentids" class="custom-control-input studentids" data-id="<?=$row->Id; ?>">
                          <span class="custom-control-label"></span>
                        </label>
                        
                      </td>
                      <td class="cell-detail"> <span><?=date('Y-m-d',strtotime($row->LabelDate)); ?></span></td>
                      <td class="cell-detail"> <span><?=$row->CompanyName; ?></span></td> 
                      <td class="cell-detail"> <span><?=$row->ContactPerson; ?></span></td>
                      <td class="cell-detail"> <span><?=$row->Address1; ?></span></td>
                      <td class="text-right">

                        <div class="btn-group btn-space ">
                          <a href="<?=base_url('student/view/'.$row->Id); ?>" class="btn btn-secondary">Open</a>
                          <button type="button" data-toggle="dropdown" class="btn btn-secondary dropdown-toggle">
                            <span class="mdi mdi-chevron-down"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                          </button>
                          <div role="menu" class="dropdown-menu">
                            <a href="#" class="dropdown-item">Request with ...</a>
                            <a href="#" class="dropdown-item">Delete</a>
                          </div>
                        </div>
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
