
<div class="be-content">
  <div class="main-content container-fluid">
    <div class="user-profile">
      <div class="row">
        <div class="col-lg-5">
          <div class="user-display">
            <div class="user-display-bg"><img src="<?php if($this->session->userdata('banner') != '') { echo base_url($this->session->userdata('banner')); } else { echo base_url('themes/others/banner.jpg'); } ?>" alt="Profile Background"></div>
            <div class="user-display-bottom">
              <div class="user-display-avatar"><img src="<?php if($this->session->userdata('photo') != '') { echo base_url($this->session->userdata('photo')); } else { echo base_url('themes/others/photo.png'); } ?>" alt="Avatar"></div>
              <div class="user-display-info">
                <div class="name"><?=$profile[0]->FirstName.' '.$profile[0]->MiddleName. ' '.$profile[0]->LastName. ' '.$profile[0]->Suffix; ?></div>
                <div class="nick"><span class="mdi mdi-account"></span>Student Code: <?=$profile[0]->YearLevelName; ?></div>
              </div>
              <div class="row user-display-details">
                <div class="col-4">
                  <div class="title">Year Level</div>
                  <div class="counter"><?=$profile[0]->YearLevelName; ?></div>
                </div>
                <div class="col-4">
                  <div class="title">Semester</div>
                  <div class="counter"><?=$profile[0]->SemesterName; ?></div>
                </div>
                <div class="col-4">
                  <div class="title">Section</div>
                  <div class="counter"><?=$profile[0]->SectionName; ?></div>
                </div>
              </div>
            </div>
          </div>
          <div class="user-info-list card">
            <!-- <div class="card-header card-header-divider">About Me<span class="card-subtitle">I am a web developer and designer based in Montreal - Canada, I like read books, good music and nature.</span></div> -->
            <div class="card-body">
              <table class="no-border no-strip skills">
                <tbody class="no-border-x no-border-y">
                  <tr>
                    <td class="icon"><span class="mdi mdi-case"></span></td>
                    <td class="item">Email<span class="icon s7-portfolio"></span></td>
                    <td><?=$profile[0]->PersonalEmail; ?></td>
                  </tr>
                  <tr>
                    <td class="icon"><span class="mdi mdi-cake"></span></td>
                    <td class="item">Birthday<span class="icon s7-gift"></span></td>
                    <td><?=$profile[0]->Birthdate; ?></td>
                  </tr>
                  <tr>
                    <td class="icon"><span class="mdi mdi-smartphone-android"></span></td>
                    <td class="item">Mobile<span class="icon s7-phone"></span></td>
                    <td><?=$profile[0]->MobileNo; ?></td>
                  </tr>
                  <tr>
                    <td class="icon"><span class="mdi mdi-globe-alt"></span></td>
                    <td class="item">Location<span class="icon s7-map-marker"></span></td>
                    <td><?=$profile[0]->Address1; ?></td>
                  </tr>
                  <tr>
                    <td class="icon"><span class="mdi mdi-pin"></span></td>
                    <td class="item">Advisor<span class="icon s7-global"></span></td>
                    <td><?=$profile[0]->Advisor; ?></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="widget widget-fullwidth widget-small">
            <div class="widget-head pb-6">
              <div class="tools"><span class="icon mdi mdi-chevron-down"></span><span class="icon mdi mdi-refresh-sync"></span><span class="icon mdi mdi-close"></span></div>
              <div class="title">Request Logs</div>
            </div>
            <div class="widget-chart-container" style="height:630px;overflow-y: scroll;">
              <!-- <div id="bar-chart1" style="height: 180px;"></div> -->
              <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th style="width:40%;">Date</th>
                    <th style="width:40%;">Document</th>
                    <th>Status</th>
                    <!-- <th class="actions"></th> -->
                  </tr>
                </thead>
                <tbody>
                  <?php
                  if (!empty($requests)) {
                     if ($requests->num_rows() > 0) {
                        foreach ($requests->result() as $row) { ?>
                  <tr>
                    <td class="user-avatar"><?=date('Y-m-d',strtotime($row->CreatedAt)); ?></td>
                    <td><?=$row->DocumentName; ?></td>
                    <td><?php if($row->Status == '1'){echo '<span class="badge badge-secondary">Pending</span>';} elseif($row->Status == '0'){ echo '<span class="badge badge-danger">Rejected</span>';} elseif($row->Status == '2') { echo '<span class="badge badge-success">Approved</span>';} ?></td>
                    <!-- <td class="actions"><a href="#" class="icon"><i class="mdi mdi-delete"></i></a></td> -->
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
<!--       <div class="row">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header card-header-divider">Current Progress<span class="card-subtitle">This is the user current progress widget</span></div>
            <div class="card-body">
              <div class="row user-progress">
                <div class="col-10"><span class="title">Bootstrap Admin</span>
                  <div class="progress">
                    <div style="width: 78%" class="progress-bar bg-primary"></div>
                  </div>
                </div>
                <div class="col-2 pl-0 pl-sm-3"><span class="value">78%</span></div>
              </div>
              <div class="row user-progress">
                <div class="col-10"><span class="title">Custom Work</span>
                  <div class="progress">
                    <div style="width: 57%" class="progress-bar bg-primary"></div>
                  </div>
                </div>
                <div class="col-2 pl-0 pl-sm-3"><span class="value">57%</span></div>
              </div>
              <div class="row user-progress">
                <div class="col-10"><span class="title">Clients Module</span>
                  <div class="progress">
                    <div style="width: 45%" class="progress-bar bg-primary"></div>
                  </div>
                </div>
                <div class="col-2 pl-0 pl-sm-3"><span class="value">45%</span></div>
              </div>
              <div class="row user-progress">
                <div class="col-10"><span class="title">Email Templates</span>
                  <div class="progress">
                    <div style="width: 36%" class="progress-bar bg-danger"></div>
                  </div>
                </div>
                <div class="col-2 pl-0 pl-sm-3"><span class="value">36%</span></div>
              </div>
              <div class="row user-progress">
                <div class="col-10"><span class="title">Plans Module</span>
                  <div class="progress">
                    <div style="width: 30%" class="progress-bar bg-danger"></div>
                  </div>
                </div>
                <div class="col-2 pl-0 pl-sm-3"><span class="value">30%</span></div>
              </div>
              <div class="row user-progress">
                <div class="col-10"><span class="title">User Managemenet System</span>
                  <div class="progress">
                    <div style="width: 21%" class="progress-bar bg-danger"></div>
                  </div>
                </div>
                <div class="col-2 pl-0 pl-sm-3"><span class="value">21%</span></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header card-header-divider">Latest Activity<span class="card-subtitle">This is a custom timeline widget</span></div>
            <div class="card-body">
              <ul class="user-timeline">
                <li class="latest">
                  <div class="user-timeline-date">Just Now</div>
                  <div class="user-timeline-title">Create New Page</div>
                  <div class="user-timeline-description">Quisque sed est felis. Vestibulum lectus nulla, maximus in eros non, tristique consectetur lorem. Nulla molestie sem quis imperdiet facilisis</div>
                </li>
                <li>
                  <div class="user-timeline-date">Today - 15:35</div>
                  <div class="user-timeline-title">Back Up Theme</div>
                  <div class="user-timeline-description">Quisque sed est felis. Vestibulum lectus nulla, maximus in eros non, tristique consectetur lorem. Nulla molestie sem quis imperdiet facilisis</div>
                </li>
                <li>
                  <div class="user-timeline-date">Yesterday - 10:41</div>
                  <div class="user-timeline-title">Changes In The Structure</div>
                  <div class="user-timeline-description">Quisque sed est felis. Vestibulum lectus nulla, maximus in eros non, tristique consectetur lorem. Nulla molestie sem quis imperdiet facilisis</div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div> -->
    </div>
  </div>
</div>
