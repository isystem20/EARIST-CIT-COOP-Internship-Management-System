
<div class="be-content">
  <div class="page-head">
    <h2 class="page-head-title">Student Masterlist</h2>
    <nav aria-label="breadcrumb" role="navigation">
      <ol class="breadcrumb page-head-nav">
        <li class="breadcrumb-item"><a href="#">Administration</a></li>
        <li class="breadcrumb-item"><a href="#">Masterlist</a></li>
        <li class="breadcrumb-item active">Students</li>
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
            <button class="btn btn-space btn-warning StudentChangeStatusSelectButton" id="StudentActiveSelectButton" data-action="<?=base_url('student/change'); ?>" data-cmd="1">
              <i class="icon icon-left mdi mdi-account-add"></i> Set to Active
            </button>
            <button class="btn btn-space btn-warning StudentChangeStatusSelectButton" id="StudentInactiveSelectButton" data-action="<?=base_url('student/change'); ?>" data-cmd="0">
              <i class="icon icon-left mdi mdi-account-add"></i> Set to Inactive
            </button>  
            <button class="btn btn-space btn-danger" id="StudentDeleteSelectButton" data-url="<?=base_url('student/del'); ?>">
              <i class="icon icon-left mdi mdi-account-add"></i> Delete
            </button>  

            <div class="btn-group btn-space">
              <button type="button" class="btn btn-secondary">Filter By Course</button>
              <button type="button" data-toggle="dropdown" class="btn btn-secondary dropdown-toggle"><span class="mdi mdi-chevron-down"></span><span class="sr-only">Toggle Dropdown</span></button>
              <div role="menu" class="dropdown-menu">
                <a href="<?=base_url('manage/students'); ?>" class="dropdown-item">No Filter</a>
                  <?php
                  if (!empty($courses)) {
                     if ($courses->num_rows() > 0) {
                        foreach ($courses->result() as $row) { ?>                
                <a href="<?=base_url('manage/students/course/'.$row->Id); ?>" class="dropdown-item"><?=$row->Name; ?></a>
                  <?php
                        }
                     }
                  }
                  ?>
              </div>
            </div>

            <div class="btn-group btn-space">
              <button type="button" class="btn btn-secondary">Filter By Status</button>
              <button type="button" data-toggle="dropdown" class="btn btn-secondary dropdown-toggle"><span class="mdi mdi-chevron-down"></span><span class="sr-only">Toggle Dropdown</span></button>
              <div role="menu" class="dropdown-menu">
                <a href="<?=base_url('manage/students'); ?>" class="dropdown-item">No Filter</a>               
                <a href="<?=base_url('manage/students/status/1'); ?>" class="dropdown-item">Active</a>
                <a href="<?=base_url('manage/students/status/0'); ?>" class="dropdown-item">Inactive</a>
              </div>
            </div>

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
                    <th>S.N</th>
                    <th>Photo</th>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Year</th>
                    <th>Course</th>
                    <th>Section</th>
                    
                    <!-- <th style="width:80px;">Action</th> -->
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
                      <td class="cell-detail"> <span><?=$row->Code; ?></span></td>
                      <td class="user-avatar cell-detail user-info">
                        <img src="<?php if($row->Photopath != '') { echo base_url($row->Photopath); } else { echo base_url('themes/others/photo.png'); } ?>" alt="" class="mt-0 mt-md-2 mt-lg-0">
                      </td>
                      <td class="cell-detail"> <span><?=$row->LastName; ?></span></td> 
                      <td class="cell-detail"> <span><?=$row->FirstName; ?></span></td>
                      <td class="cell-detail"> <span><?=$row->YearLevelName; ?></span>
                      </td>
                      <td class="cell-detail"> <span><?=$row->CourseName; ?></td>
                      <td class="cell-detail"> <span><?=$row->SectionName; ?></td>
                    <!--   <td class="text-right">
                        <div class="btn-group btn-space ">
                          <a href="<?=base_url('student/view/'.$row->Id); ?>" class="btn btn-secondary">Open</a>
                          <button type="button" data-toggle="dropdown" class="btn btn-secondary dropdown-toggle">
                            <span class="mdi mdi-chevron-down"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                          </button>
                          <div role="menu" class="dropdown-menu">
                            <a href="#" class="dropdown-item">Update</a>
                            <a href="#" class="dropdown-item StudentChangeStatusSelectButton" id="StudentActiveSelectButton" data-action="<?=base_url('student/change'); ?>" data-cmd="1">Set as Active</a>
                            <a href="#" class="dropdown-item StudentChangeStatusSelectButton" id="StudentActiveSelectButton" data-action="<?=base_url('student/change'); ?>" data-cmd="0">Set as Inactive</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Assign Company</a>
                            <a href="#" class="dropdown-item">Check Progress</a>
                          </div>
                        </div>
                      </td> -->
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
