<div class="be-content">
 <!--  <div class="page-head">
    <h2 class="page-head-title">Student Masterlist</h2>
    <nav aria-label="breadcrumb" role="navigation">
      <ol class="breadcrumb page-head-nav">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Maintenance</a></li>
        <li class="breadcrumb-item active">Student List</li>
      </ol>
    </nav>
  </div> -->
  <div class="main-content container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-table">
          <div class="row table-filters-container">
            <div class="col-12 col-lg-12 col-xl-6">
              <div class="row">
                <div class="col-12 col-lg-6 table-filters pb-0 pb-xl-4"><span class="table-filter-title">OJT progress</span>
                  <div class="filter-container">
                    <form>
                      <label class="control-label d-block"><span id="slider-value">10% - 60%</span></label>
                      <input id="milestone_slider" type="text" data-slider-value="[10,60]" data-slider-step="5" data-slider-max="100" data-slider-min="0" value="50" class="bslider form-control">
                    </form>
                  </div>
                </div>
                <div class="col-12 col-lg-6 table-filters pb-0 pb-xl-4"><span class="table-filter-title">Company</span>
                  <div class="filter-container">
                    <label class="control-label" data-toggle="tooltip" data-original-title="I am a Tooltip">Select a company:</label>
                    <form>
                      <select class="select2">
                        <option value="Bootstrap">Accenture</option>
                        <option value="CLI">IBM</option>
                      </select>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-12 col-xl-6">
              <div class="row">
                <div class="col-12 col-lg-6 table-filters pb-0 pb-xl-4"><span class="table-filter-title">Date</span>
                  <div class="filter-container">
                    <form>
                      <div class="row">
                        <div class="col-6">
                          <label class="control-label">Since:</label>
                          <input type="text" class="form-control form-control-sm datetimepicker">
                        </div>
                        <div class="col-6">
                          <label class="control-label">To:</label>
                          <input type="text" class="form-control form-control-sm datetimepicker">
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-12 col-lg-6 table-filters pb-xl-4"><span class="table-filter-title">Status</span>
                  <div class="filter-container">
                    <form>
                      <div class="row">
                        <div class="col-6">
                          <div class="custom-controls-stacked">
                            <label class="custom-control custom-checkbox">
                              <input type="checkbox" checked="" class="custom-control-input"><span class="custom-control-label">No Company</span>
                            </label>
                            <label class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input"><span class="custom-control-label">On-going</span>
                            </label>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="custom-controls-stacked">
                            <label class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input"><span class="custom-control-label">Completed</span>
                            </label>
                            <label class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input"><span class="custom-control-label">Dropped</span>
                            </label>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive noSwipe">
              <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th style="width:5%;">
                      <label class="custom-control custom-control-sm custom-checkbox">
                        <input type="checkbox" class="custom-control-input"><span class="custom-control-label"></span>
                      </label>
                    </th>
                    <th style="width:20%;">Student Name</th>
                    <th style="width:17%;">Last Action</th>
                    <th style="width:15%;">Current Status</th>
                    <th style="width:10%;">Company</th>
                    <th style="width:10%;">Date Started</th>
                    <th style="width:10%;"></th>
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
                          <input type="checkbox" class="custom-control-input"><span class="custom-control-label"></span>
                        </label>
                      </td>
                      <td class="user-avatar cell-detail user-info"><img src="<?=base_url('themes/beagle/')?><?=$row->Photopath; ?>" alt="Avatar" class="mt-0 mt-md-2 mt-lg-0"><span><?=$row->FirstName.' '.$row->LastName; ?></span><span class="cell-detail-description">Section 1</span></td>
                      <td class="cell-detail"> <span>Endorsement</span><span class="cell-detail-description">May 1, 2018</span></td>
                      <td class="milestone"><span class="completed">8 / 15</span><span class="version">OJT Progress</span>
                        <div class="progress">
                          <div style="width: 45%" class="progress-bar progress-bar-primary"></div>
                        </div>
                      </td>
                      <td class="cell-detail"><span>Accenture</span><span class="cell-detail-description">63e8ec3</span></td>
                      <td class="cell-detail"><span>May 6, 2018</span><span class="cell-detail-description">8:30</span></td>
                      <td class="text-right">
                        <div class="btn-group btn-hspace">
                          <button type="button" data-toggle="dropdown" class="btn btn-secondary dropdown-toggle">On-going <span class="icon-dropdown mdi mdi-chevron-down"></span></button>
                          <div role="menu" class="dropdown-menu"><a href="#" class="dropdown-item">Action</a><a href="#" class="dropdown-item">Another action</a><a href="#" class="dropdown-item">Something else here</a>
                            <div class="dropdown-divider"></div><a href="#" class="dropdown-item">Separated link</a>
                          </div>
                        </div>
                      </td>
                    </tr>


                  <?php
                        }
                     }
                  }
                  ?>


                  <tr class="online">
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
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
