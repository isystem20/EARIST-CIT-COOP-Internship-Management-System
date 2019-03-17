      <nav class="navbar navbar-expand fixed-top be-top-header">
        <div class="container-fluid">
          <div class="be-navbar-header"><a href="#" class="nav-link be-toggle-left-sidebar"><span class="icon mdi mdi-menu"></span></a><a href="index-2.html" class="navbar-brand"></a>
          </div>
          <div class="be-right-navbar  be-right-navbar-flex">
            <div class="page-title"><span><?php if(!empty($page_title)) {echo $page_title;} else { echo 'CIT Coop Management System';}; ?></span></div>
            <div class="search-container">
              <div class="input-group input-group-sm">
                <input type="text" name="search" placeholder="Search..." class="form-control search-input"><span class="input-group-btn">
                  <button type="button" class="btn btn-primary">Search</button></span>
              </div>
            </div>
            <ul class="nav navbar-nav float-right be-user-nav">
              <li class="nav-item dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><img src="<?=base_url('themes/beagle/'); ?>assets/img/avatar.png" alt="Avatar"><span class="user-name"><?=$this->session->userdata('firstname'); ?></span></a>
                <div role="menu" class="dropdown-menu">     
                  <div class="user-info">
                    <div class="user-name"><?=$this->session->userdata('firstname'); ?></div>
                    <div class="user-position online">Available</div>
                  </div>
<!--                   <a href="pages-profile.html" class="dropdown-item"><span class="icon mdi mdi-face"></span> Account</a>
                  <a href="#" class="dropdown-item"><span class="icon mdi mdi-settings"></span> Settings</a> -->
                  <a href="<?=base_url('logout'); ?>" class="dropdown-item"><span class="icon mdi mdi-power"></span> Logout</a>
                </div>
              </li>
            </ul>

            <ul class="nav navbar-nav float-right be-icons-nav">
<!--               <li class="nav-item dropdown"><a href="#" role="button" aria-expanded="false" class="nav-link be-toggle-right-sidebar"><span class="icon mdi mdi-settings"></span></a></li> -->
              <li class="nav-item dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span class="icon mdi mdi-notifications"></span><span class="indicator"></span></a>
                <ul class="dropdown-menu be-notifications">
                  <li>
                    <div class="title">Notifications<span class="badge badge-pill">1</span></div>
                    <div class="list">
                      <div class="be-scroller">
                        <div class="content">
                          <ul>
                            <li class="notification notification-unread"><a href="#">
                                <div class="image"><img src="<?=base_url('themes/beagle/'); ?>assets/img/avatar2.png" alt="Avatar"></div>
                                <div class="notification-info">
                                  <div class="text"><span class="user-name">Administrator</span> generated your Recommendation Letter for ABC Company.</div><span class="date">2 min ago</span>
                                </div></a></li>
                           
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="footer"> <a href="#">View all notifications</a></div>
                  </li>
                </ul>
              </li>
      <!--         <li class="nav-item dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span class="icon mdi mdi-apps"></span></a>
                <ul class="dropdown-menu be-connections">
                  <li>
                    <div class="list">
                      <div class="content">
                        <div class="row">
                          <div class="col"><a href="#" class="connection-item"><img src="assets/img/github.png" alt="Github"><span>GitHub</span></a></div>
                          <div class="col"><a href="#" class="connection-item"><img src="assets/img/bitbucket.png" alt="Bitbucket"><span>Bitbucket</span></a></div>
                          <div class="col"><a href="#" class="connection-item"><img src="assets/img/slack.png" alt="Slack"><span>Slack</span></a></div>
                        </div>
                        <div class="row">
                          <div class="col"><a href="#" class="connection-item"><img src="assets/img/dribbble.png" alt="Dribbble"><span>Dribbble</span></a></div>
                          <div class="col"><a href="#" class="connection-item"><img src="assets/img/mail_chimp.png" alt="Mail Chimp"><span>Mail Chimp</span></a></div>
                          <div class="col"><a href="#" class="connection-item"><img src="assets/img/dropbox.png" alt="Dropbox"><span>Dropbox</span></a></div>
                        </div>
                      </div>
                    </div>
                    <div class="footer"> <a href="#">More</a></div>
                  </li>
                </ul>
              </li> -->
            </ul>
          </div>
        </div>
      </nav>

