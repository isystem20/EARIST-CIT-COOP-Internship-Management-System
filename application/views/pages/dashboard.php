

      <div class="be-content">
        <div class="main-content container-fluid">
          <div class="row">
            <div class="col-12 col-lg-6 col-xl-3">
                <div class="widget widget-tile">
                  <div id="spark1" class="chart sparkline"></div>
                  <div class="data-info">
                    <div class="desc">Active Students</div>
                    <div class="value"><span class="indicator indicator-equal mdi mdi-chevron-right"></span><span data-toggle="counter" data-end="<?=$counters['active_students']; ?>" class="number">0</span>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3">
                <div class="widget widget-tile">
                  <div id="spark2" class="chart sparkline"></div>
                  <div class="data-info">
                    <div class="desc">Monthly Active</div>
                    <div class="value"><span class="indicator indicator-positive mdi mdi-chevron-up"></span><span data-toggle="counter" data-end="80" data-suffix="%" class="number">0</span>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3">
                <div class="widget widget-tile">
                  <div id="spark3" class="chart sparkline"></div>
                  <div class="data-info">
                    <div class="desc">Average Progress</div>
                    <div class="value"><span class="indicator indicator-positive mdi mdi-chevron-up"></span><span data-toggle="counter" data-end="532" class="number">0</span>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3">
                <div class="widget widget-tile">
                  <div id="spark4" class="chart sparkline"></div>
                  <div class="data-info">
                    <div class="desc">Completed OJT</div>
                    <div class="value"><span class="indicator indicator-negative mdi mdi-chevron-down"></span><span data-toggle="counter" data-end="113" class="number">0</span>
                    </div>
                  </div>
                </div>
            </div>
          </div>
<!--           <div class="row">
            <div class="col-md-12">
              <div class="widget widget-fullwidth be-loading">
                <div class="widget-head">
                  <div class="tools">
                    <div class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle"><span class="icon mdi mdi-more-vert d-inline-block d-md-none"></span></a>
                      <div role="menu" class="dropdown-menu"><a href="#" class="dropdown-item">Week</a><a href="#" class="dropdown-item">Month</a><a href="#" class="dropdown-item">Year</a>
                        <div class="dropdown-divider"></div><a href="#" class="dropdown-item">Today</a>
                      </div>
                    </div><span class="icon mdi mdi-chevron-down"></span><span class="icon toggle-loading mdi mdi-refresh-sync"></span><span class="icon mdi mdi-close"></span>
                  </div>
                  <div class="button-toolbar d-none d-md-block">
                    <div class="btn-group">
                      <button type="button" class="btn btn-secondary">Week</button>
                      <button type="button" class="btn btn-secondary active">Month</button>
                      <button type="button" class="btn btn-secondary">Year</button>
                    </div>
                    <div class="btn-group">
                      <button type="button" class="btn btn-secondary">Today</button>
                    </div>
                  </div><span class="title">Recent Movement</span>
                </div>
                <div class="widget-chart-container">
                  <div class="widget-chart-info">
                    <ul class="chart-legend-horizontal">
                      <li><span data-color="main-chart-color1"></span> Purchases</li>
                      <li><span data-color="main-chart-color2"></span> Plans</li>
                      <li><span data-color="main-chart-color3"></span> Services</li>
                    </ul>
                  </div>
                  <div class="widget-counter-group widget-counter-group-right">
                    <div class="counter counter-big">
                      <div class="value">25%</div>
                      <div class="desc">Purchase</div>
                    </div>
                    <div class="counter counter-big">
                      <div class="value">5%</div>
                      <div class="desc">Plans</div>
                    </div>
                    <div class="counter counter-big">
                      <div class="value">5%</div>
                      <div class="desc">Services</div>
                    </div>
                  </div>
                  <div id="main-chart" style="height: 260px;"></div>
                </div>
                <div class="be-spinner">
                  <svg width="40px" height="40px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                    <circle fill="none" stroke-width="4" stroke-linecap="round" cx="33" cy="33" r="30" class="circle"></circle>
                  </svg>
                </div>
              </div>
            </div>
          </div> -->
          <div class="row">
            <div class="col-12 col-lg-6">
              <div class="card card-table">
                <div class="card-header">
                  <div class="tools dropdown"> <span class="icon mdi mdi-download"></span><a href="#" role="button" data-toggle="dropdown" class="dropdown-toggle"><span class="icon mdi mdi-more-vert"></span></a>
                    <div role="menu" class="dropdown-menu"><a href="#" class="dropdown-item">Action</a><a href="#" class="dropdown-item">Another action</a><a href="#" class="dropdown-item">Something else here</a>
                      <div class="dropdown-divider"></div><a href="#" class="dropdown-item">Separated link</a>
                    </div>
                  </div>
                  <div class="title">Recent Activities</div>
                </div>
                <div class="card-body table-responsive" style="overflow-y: auto;height:255px;">
                  <table class="table table-striped table-borderless">
                    <thead>
                      <tr>
                        <th style="width:40%;">User</th>
                        <th style="width:20%;">Action</th>
                        <th style="width:30%;">Date</th>
                        <th style="width:10%;" class="actions"></th>
                      </tr>
                    </thead>
                    <tbody class="no-border-x">

                  <?php
                  if (!empty($recent_acts)) {
                     if ($recent_acts->num_rows() > 0) {
                        foreach ($recent_acts->result() as $row) { ?>

                      <tr>
                        <td><?=$row->FirstName.' '.$row->LastName ?></td>
                        <td class="number"><?=$row->Action; ?></td>
                        <td><?php if(date('Y-m-d',strtotime($row->Timestamp)) != date('Y-m-d')) { echo date('M d, y h:i A',strtotime($row->Timestamp)); } else { echo 'Today '.date('h:i A',strtotime($row->Timestamp)); }; ?></td>
                        <td class="actions"><a href="#" class="icon"><i class="mdi mdi-plus-circle-o"></i></a></td>
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
            <div class="col-12 col-lg-6">
              <div class="card card-table">
                <div class="card-header">
                  <div class="tools dropdown"><span class="icon mdi mdi-download"></span><a href="#" role="button" data-toggle="dropdown" class="dropdown-toggle"><span class="icon mdi mdi-more-vert"></span></a>
                    <div role="menu" class="dropdown-menu"><a href="#" class="dropdown-item">Action</a><a href="#" class="dropdown-item">Another action</a><a href="#" class="dropdown-item">Something else here</a>
                      <div class="dropdown-divider"></div><a href="#" class="dropdown-item">Separated link</a>
                    </div>
                  </div>
                  <div class="title">Online Users</div>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th style="width:58%;">User</th>
                        <th style="width:20%;">Last Active</th>
                        <th class="actions"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="user-avatar"> <img src="<?=base_url('themes/beagle/'); ?>assets/img/avatar6.png" alt="Avatar">Penelope Thornton</td>
                        <td>Aug 16, 2016</td>
                        <td class="actions"><a href="#" class="icon text-danger"><i class="mdi mdi-close-circle"></i></a></td>
                      </tr>
                      <tr>
                        <td class="user-avatar"> <img src="<?=base_url('themes/beagle/'); ?>assets/img/avatar4.png" alt="Avatar">Benji Harper</td>
                        <td>Jul 15, 2016</td>
                        <td class="actions"><a href="#" class="icon text-danger"><i class="mdi mdi-close-circle"></i></a></td>
                      </tr>
                      <tr>
                        <td class="user-avatar"> <img src="<?=base_url('themes/beagle/'); ?>assets/img/avatar5.png" alt="Avatar">Justine Myranda</td>
                        <td>Jul 28, 2016</td>
                        <td class="actions"><a href="#" class="icon text-danger"><i class="mdi mdi-close-circle"></i></a></td>
                      </tr>
                      <tr>
                        <td class="user-avatar"> <img src="<?=base_url('themes/beagle/'); ?>assets/img/avatar3.png" alt="Avatar">Sherwood Clifford</td>
                        <td>Jun 30, 2016</td>
                        <td class="actions"><a href="#" class="icon text-danger"><i class="mdi mdi-close-circle"></i></a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-lg-4">
              <div class="card">
                <div class="card-header card-header-divider pb-3">Document Counters</div>
                <div class="card-body pt-5">
                  <div class="row user-progress user-progress-small">
                    <div class="col-lg-5"><span class="title">Application Letter</span></div>
                    <div class="col-lg-7">
                      <div class="progress">
                        <div style="width: 67%" class="progress-bar bg-success"></div>
                      </div>
                    </div>
                  </div>
                  <div class="row user-progress user-progress-small">
                    <div class="col-lg-5"><span class="title">Endorsement Letter</span></div>
                    <div class="col-lg-7">
                      <div class="progress">
                        <div style="width: 65%" class="progress-bar bg-success"></div>
                      </div>
                    </div>
                  </div>
                  <div class="row user-progress user-progress-small">
                    <div class="col-lg-5"><span class="title">Acceptance Letter</span></div>
                    <div class="col-lg-7">
                      <div class="progress">
                        <div style="width: 30%" class="progress-bar bg-success"></div>
                      </div>
                    </div>
                  </div>
                  <div class="row user-progress user-progress-small">
                    <div class="col-lg-5"><span class="title">MOA</span></div>
                    <div class="col-lg-7">
                      <div class="progress">
                        <div style="width: 15%" class="progress-bar bg-success"></div>
                      </div>
                    </div>
                  </div>
                  <div class="row user-progress user-progress-small">
                    <div class="col-lg-5"><span class="title">Waiver</span></div>
                    <div class="col-lg-7">
                      <div class="progress">
                        <div style="width: 15%" class="progress-bar bg-success"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-4">
              <div class="widget be-loading">
                <div class="widget-head">
                  <div class="tools"><span class="icon mdi mdi-chevron-down"></span><span class="icon mdi mdi-refresh-sync toggle-loading"></span><span class="icon mdi mdi-close"></span></div>
                  <div class="title">Completed OJT</div>
                </div>
                <div class="widget-chart-container">
                  <div id="top-sales" style="height: 178px;"></div>
                  <div class="chart-pie-counter">3</div>
                </div>
                <div class="chart-legend">
                  <table>
                    <tr>
                      <td class="chart-legend-color"><span data-color="top-sales-color1"></span></td>
                      <td>No Company</td>
                      <td class="chart-legend-value">125</td>
                    </tr>
                    <tr>
                      <td class="chart-legend-color"><span data-color="top-sales-color2"></span></td>
                      <td>On-going</td>
                      <td class="chart-legend-value">1569</td>
                    </tr>
                    <tr>
                      <td class="chart-legend-color"><span data-color="top-sales-color3"></span></td>
                      <td>Dropped</td>
                      <td class="chart-legend-value">0</td>
                    </tr>
                  </table>
                </div>
                <div class="be-spinner">
                  <svg width="40px" height="40px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                    <circle fill="none" stroke-width="4" stroke-linecap="round" cx="33" cy="33" r="30" class="circle"></circle>
                  </svg>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-4">
              <div class="card">
                <div class="card-header">Document Flow</div>
                <div class="card-body">
                  <ul class="user-timeline user-timeline-compact">
                    <li class="latest">
                      <div class="user-timeline-title">Application</div>
                    </li>
                    <li>
                      <div class="user-timeline-title">Endorsement</div>
                    </li>
                    <li>
                      <div class="user-timeline-title">Acceptance</div>
                    </li>
                    <li>
                      <div class="user-timeline-title">Agreement</div>
                    </li>
                    <li>
                      <div class="user-timeline-title">Completion</div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
