

      <div class="be-left-sidebar">
        <div class="left-sidebar-wrapper"><a href="#" class="left-sidebar-toggle">Dashboard</a>
          <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
              <div class="left-sidebar-content">
                <ul class="sidebar-elements">
                  <?php if ($this->session->userdata('usertype') == 'ADMIN') { ?>
                  <li class="divider">Administration</li>
                  <li class="active"><a href="<?=base_url(); ?>"><i class="icon mdi mdi-home"></i><span>Dashboard</span></a>
                  </li>                 
                  <li class="parent"><a href="#"><i class="icon mdi mdi-accounts-list-alt"></i><span>Masterlist</span></a>
                    <ul class="sub-menu">
                      <li><a href="<?=base_url('manage/students');?>">Students</a></li>
                      <li><a href="<?=base_url('manage/accounts');?>">User Accounts</a></li>
                      <li><a href="<?=base_url('manage/documents');?>">Documents</a></li>
                      <li><a href="<?=base_url('manage/companies');?>">Companies</a></li>
                      <!-- <li><a href="<?=base_url('manage/advisors');?>">Advisors</a></li> -->
                    </ul>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-view-list"></i><span>Maintenance</span></a>
                    <ul class="sub-menu">
                      <li><a href="<?=base_url('manage/generic/sections');?>">Sections</a></li>
                      <li><a href="<?=base_url('manage/generic/semesters');?>">Semesters</a></li>
                      <li><a href="<?=base_url('manage/generic/courses');?>">Courses</a></li>
                      <li><a href="<?=base_url('manage/generic/levels');?>">School Levels</a></li>
                      <li class="dropdown-divider"></li>  
                      <li><a href="<?=base_url('manage/generic/nationalities');?>">Nationalities</a></li>
                      <li><a href="<?=base_url('manage/generic/cities');?>">Cities</a></li>
                      <li><a href="<?=base_url('manage/generic/regions');?>">Regions</a></li>
                    </ul>
                  </li>
                  <li><a href="<?=base_url('monitor/internship');?>"><i class="icon mdi mdi-chart"></i><span>Progress Monitor</span></a>
                  </li>                   
              <!--     <li class="divider">Reports</li>                  
                  <li><a href="<?=base_url(); ?>"><i class="icon mdi mdi-accounts-list"></i><span>Status Summary</span></a>
                  </li>  -->
                  <li class="divider">Document Letter Requests</li>  

                  <?php

                  if (!empty($docs)) {
                     if ($docs->num_rows() > 0) {
                        foreach ($docs->result() as $row) { ?>
                  <li><a href="<?=base_url('requests/documents/'.$row->Id); ?>"><i class="icon mdi mdi-file-text"></i><span><?=$row->DocumentName; ?> <?php if($row->PendingRequest > 0) { echo '<span class="badge badge-pill badge-primary">'.$row->PendingRequest.'</span>'; } ?></span></a>
                  </li> 

                  <?php
                        }
                     }
                  }
                  ?>
                  <!--
                  <li><a href="<?=base_url(); ?>"><i class="icon mdi mdi-account-box-mail"></i><span>Recommendation <span class="badge badge-pill badge-primary">8</span></span></a>
                  </li> 
                  <li><a href="<?=base_url(); ?>"><i class="icon mdi mdi-accounts-outline"></i><span>Acceptance</span></a>
                  </li> 
                  <li><a href="<?=base_url(); ?>"><i class="icon mdi mdi-accounts"></i><span>Memorandum of Agreement</span></a>
                  </li> 
                  <li><a href="<?=base_url(); ?>"><i class="icon mdi mdi-face"></i><span>Waiver</span></a>
                  </li> 
                  <li><a href="<?=base_url(); ?>"><i class="icon mdi mdi-file-text"></i><span>Company Evaluation</span></a>
                  </li> 
                  <li><a href="<?=base_url(); ?>"><i class="icon mdi mdi-accounts"></i><span>Letter of Appreciation</span></a>
                  </li> 
                  <li><a href="<?=base_url(); ?>"><i class="icon mdi mdi-file-text"></i><span>Custom Reports</span></a>
                  </li> 
                  <li class="divider">Settings</li>
                  <li><a href="<?=base_url(); ?>"><i class="icon mdi mdi-home"></i><span>System and Server</span></a>
                  </li>                 
                  <li><a href="<?=base_url(); ?>"><i class="icon mdi mdi-home"></i><span>Reports</span></a>
                  </li>  -->
                  <?php } ?>

                  <?php if ($this->session->userdata('usertype') == 'STUDENT') { ?>
                  <li class="divider">MENU</li>  

                  <li><a href="<?=base_url('profile'); ?>"><i class="icon mdi mdi-account-box-mail"></i><span>My Profile </span></a>
                  </li> 
                  <li><a href="<?=base_url('applications'); ?>"><i class="icon mdi mdi-accounts-outline"></i><span>My Applications</span></a>
                  </li> 
                  <li><a href="<?=base_url('documents'); ?>"><i class="icon mdi mdi-accounts"></i><span>My Documents</span></a>
                  </li> 
                  <li><a href="<?=base_url('requests'); ?>"><i class="icon mdi mdi-face"></i><span>My Requests</span></a>
                  </li> 
                  <li class="divider">Settings</li>
                  <li><a href="<?=base_url('notifications'); ?>"><i class="icon mdi mdi-home"></i><span>Notifications</span></a>
                  </li>                 
                  <li><a href=""><i class="icon mdi mdi-home"></i><span>Reset Password</span></a>
                  </li>                       
                  <?php } ?>



                </ul>
              </div>
            </div>
          </div>



<!--           <div class="progress-widget">
            <div class="progress-data"><span class="progress-value">60%</span><span class="name">Current Project</span></div>
            <div class="progress">
              <div style="width: 60%;" class="progress-bar progress-bar-primary"></div>
            </div>
          </div> -->
        </div>
      </div>