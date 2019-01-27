
<div class="be-content">
  <div class="page-head">
    <h2 class="page-head-title">Company Masterlist</h2>
    <nav aria-label="breadcrumb" role="navigation">
      <ol class="breadcrumb page-head-nav">
        <li class="breadcrumb-item"><a href="#">Administration</a></li>
        <li class="breadcrumb-item"><a href="#">Masterlist</a></li>
        <li class="breadcrumb-item active">Companies</li>
      </ol>
    </nav>
  </div>
  <div class="main-content container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="card card-table">
          <div class="card-header">
            <a href="<?=base_url('student/register'); ?>" class="btn btn-space btn-primary">
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
                    <th>Company Name</th>
                    <th>Address</th>
                    <th>City/Province</th>
                    <th>Active Interns</th>
                    <th>Last Modified</th>
                    <th>Status</th>                   
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
                      <td class="cell-detail"> <span><?=$row->CompanyName; ?></span></td> 
                      <td class="cell-detail"> <span><?=$row->Address1; ?></span></td>
                      <td class="cell-detail"> <span><?=$row->CityName.' '.$row->Zip; ?></span></td>
                      <td class="cell-detail"> <span><?=$row->InternCount; ?></td>
                      <td class="cell-detail"> <span><?=date('Y-m-d',strtotime($row->ModifiedAt)); ?></td>
                      <td class="text-right"> <span><?php if($row->IsActive == '1') {echo '<span class="badge badge-success">Active</span>';}else {echo '<span class="badge badge-default">Inactive</span>';} ?></span></td>
                      <td class="text-right">
                        <div class="btn-group btn-space ">
                          <a href="<?=base_url('student/view/'.$row->Id); ?>" class="btn btn-secondary">Open</a>
                          <button type="button" data-toggle="dropdown" class="btn btn-secondary dropdown-toggle">
                            <span class="mdi mdi-chevron-down"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                          </button>
                          <div role="menu" class="dropdown-menu">
                            <a href="#" class="dropdown-item">Update</a>
                            <a href="#" class="dropdown-item">Disable</a>
                            <a href="#" class="dropdown-item">Delete</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Assign Company</a>
                            <a href="#" class="dropdown-item">Check Progress</a>
                          </div>
                        </div>
                      </td>
                    </tr>


                  <?php
                        }
                     }
                  }
                  ?>


     <!--              <tr class="online">
                    <td>
                      <label class="custom-control custom-control-sm custom-checkbox">
                        <input type="checkbox" class="custom-control-input"><span class="custom-control-label"></span>
                      </label>
                    </td>
                    <td class="user-avatar cell-detail user-info"><img src="<?=base_url('themes/beagle/')?>assets/img/avatar4.png" alt="Avatar" class="mt-0 mt-md-2 mt-lg-0"><span>Benji Harper</span><span class="cell-detail-description">Section 1</span></td>
                    <td class="cell-detail"> <span>Main structure markup</span><span class="cell-detail-description">CLI Connector</span></td>
                    <td class="milestone"><span class="completed">22 / 30</span><span class="version">v1.1.5</span>
                      <div class="progress">
                        <div style="width: 75%" class="progress-bar progress-bar-primary"></div>
                      </div>
                    </td>
                    <td class="cell-detail"><span>develop</span><span class="cell-detail-description">4cc1bc2</span></td>
                    <td class="cell-detail"><span>April 22, 2016</span><span class="cell-detail-description">14:45</span></td>
                    <td class="text-right">
                      <div class="btn-group btn-hspace">
                        <button type="button" data-toggle="dropdown" class="btn btn-secondary dropdown-toggle">Open <span class="icon-dropdown mdi mdi-chevron-down"></span></button>
                        <div role="menu" class="dropdown-menu"><a href="#" class="dropdown-item">Action</a><a href="#" class="dropdown-item">Another action</a><a href="#" class="dropdown-item">Something else here</a>
                          <div class="dropdown-divider"></div><a href="#" class="dropdown-item">Separated link</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label class="custom-control custom-control-sm custom-checkbox">
                        <input type="checkbox" class="custom-control-input"><span class="custom-control-label"></span>
                      </label>
                    </td>
                    <td class="user-avatar cell-detail user-info"><img src="<?=base_url('themes/beagle/')?>assets/img/avatar5.png" alt="Avatar" class="mt-0 mt-md-2 mt-lg-0"><span>Justine Myranda</span><span class="cell-detail-description">Section 2</span></td>
                    <td class="cell-detail"> <span>Left sidebar adjusments</span><span class="cell-detail-description">Back-end Manager</span></td>
                    <td class="milestone"><span class="completed">10 / 30</span><span class="version">v1.1.3</span>
                      <div class="progress">
                        <div style="width: 33%" class="progress-bar progress-bar-primary"></div>
                      </div>
                    </td>
                    <td class="cell-detail"><span>develop</span><span class="cell-detail-description">5477993</span></td>
                    <td class="cell-detail"><span>April 15, 2016</span><span class="cell-detail-description">10:00</span></td>
                    <td class="text-right">
                      <div class="btn-group btn-hspace">
                        <button type="button" data-toggle="dropdown" class="btn btn-secondary dropdown-toggle">Open <span class="icon-dropdown mdi mdi-chevron-down"></span></button>
                        <div role="menu" class="dropdown-menu"><a href="#" class="dropdown-item">Action</a><a href="#" class="dropdown-item">Another action</a><a href="#" class="dropdown-item">Something else here</a>
                          <div class="dropdown-divider"></div><a href="#" class="dropdown-item">Separated link</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label class="custom-control custom-control-sm custom-checkbox">
                        <input type="checkbox" class="custom-control-input"><span class="custom-control-label"></span>
                      </label>
                    </td>
                    <td class="user-avatar cell-detail user-info"><img src="<?=base_url('themes/beagle/')?>assets/img/avatar3.png" alt="Avatar" class="mt-0 mt-md-2 mt-lg-0"><span>Sherwood Clifford</span><span class="cell-detail-description">Section 3</span></td>
                    <td class="cell-detail"> <span>Topbar dropdown style</span><span class="cell-detail-description">Bootstrap Admin</span></td>
                    <td class="milestone"><span class="completed">25 / 40</span><span class="version">v1.0.4</span>
                      <div class="progress">
                        <div style="width: 55%" class="progress-bar progress-bar-primary"></div>
                      </div>
                    </td>
                    <td class="cell-detail"><span>master</span><span class="cell-detail-description">8cb98ec</span></td>
                    <td class="cell-detail"><span>April 8, 2016</span><span class="cell-detail-description">17:24</span></td>
                    <td class="text-right">
                      <div class="btn-group btn-hspace">
                        <button type="button" data-toggle="dropdown" class="btn btn-secondary dropdown-toggle">Open <span class="icon-dropdown mdi mdi-chevron-down"></span></button>
                        <div role="menu" class="dropdown-menu"><a href="#" class="dropdown-item">Action</a><a href="#" class="dropdown-item">Another action</a><a href="#" class="dropdown-item">Something else here</a>
                          <div class="dropdown-divider"></div><a href="#" class="dropdown-item">Separated link</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr class="online">
                    <td>
                      <label class="custom-control custom-control-sm custom-checkbox">
                        <input type="checkbox" class="custom-control-input"><span class="custom-control-label"></span>
                      </label>
                    </td>
                    <td class="user-avatar cell-detail user-info"><img src="<?=base_url('themes/beagle/')?>assets/img/avatar.png" alt="Avatar" class="mt-0 mt-md-2 mt-lg-0"><span>Kristopher Donny</span><span class="cell-detail-description">Section 1</span></td>
                    <td class="cell-detail"> <span>Right sidebar adjusments</span><span class="cell-detail-description">CLI Connector</span></td>
                    <td class="milestone"><span class="completed">38 / 40</span><span class="version">v1.0.1</span>
                      <div class="progress">
                        <div style="width: 98%" class="progress-bar progress-bar-primary"></div>
                      </div>
                    </td>
                    <td class="cell-detail"><span>master</span><span class="cell-detail-description">65bc2da</span></td>
                    <td class="cell-detail"><span>Mars 18, 2016</span><span class="cell-detail-description">13:02</span></td>
                    <td class="text-right">
                      <div class="btn-group btn-hspace">
                        <button type="button" data-toggle="dropdown" class="btn btn-secondary dropdown-toggle">Open <span class="icon-dropdown mdi mdi-chevron-down"></span></button>
                        <div role="menu" class="dropdown-menu"><a href="#" class="dropdown-item">Action</a><a href="#" class="dropdown-item">Another action</a><a href="#" class="dropdown-item">Something else here</a>
                          <div class="dropdown-divider"></div><a href="#" class="dropdown-item">Separated link</a>
                        </div>
                      </div>
                    </td>
                  </tr> -->
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
