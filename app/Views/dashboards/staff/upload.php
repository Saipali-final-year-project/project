<?= $this->extend('dashboards/mstr/layouts'); ?>
<?= $this->section('sect'); ?>
<div class="container-scroller">
  <!-- partial:partials/_navbar.html -->
  <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
      <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="images/logo.svg" class="mr-2"
          alt="logo" /></a>
      <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo" /></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="ti-view-list"></span>
      </button>
      <ul class="navbar-nav mr-lg-2">
        <li class="nav-item nav-search d-none d-lg-block">
          <div class="input-group">
            <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
              <span class="input-group-text" id="search">
                <i class="ti-search"></i>
              </span>
            </div>
            <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now"
              aria-label="search" aria-describedby="search">
          </div>
        </li>
      </ul>
      <ul class="navbar-nav navbar-nav-right">
        <li class="nav-item dropdown mr-1">
          <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center"
            id="messageDropdown" href="#" data-toggle="dropdown">
            <i class="ti-email mx-0"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="messageDropdown">
            <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
            <a class="dropdown-item">
              <div class="item-thumbnail">
                <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
              </div>
              <div class="item-content flex-grow">
                <h6 class="ellipsis font-weight-normal">David Grey
                </h6>
                <p class="font-weight-light small-text text-muted mb-0">
                  The meeting is cancelled
                </p>
              </div>
            </a>
            <a class="dropdown-item">
              <div class="item-thumbnail">
                <img src="images/faces/face2.jpg" alt="image" class="profile-pic">
              </div>
              <div class="item-content flex-grow">
                <h6 class="ellipsis font-weight-normal">Tim Cook
                </h6>
                <p class="font-weight-light small-text text-muted mb-0">
                  New product launch
                </p>
              </div>
            </a>
            <a class="dropdown-item">
              <div class="item-thumbnail">
                <img src="images/faces/face3.jpg" alt="image" class="profile-pic">
              </div>
              <div class="item-content flex-grow">
                <h6 class="ellipsis font-weight-normal"> Johnson
                </h6>
                <p class="font-weight-light small-text text-muted mb-0">
                  Upcoming board meeting
                </p>
              </div>
            </a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
            <i class="ti-bell mx-0"></i>
            <span class="count"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">
            <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
            <a class="dropdown-item">
              <div class="item-thumbnail">
                <div class="item-icon bg-success">
                  <i class="ti-info-alt mx-0"></i>
                </div>
              </div>
              <div class="item-content">
                <h6 class="font-weight-normal">Application Error</h6>
                <p class="font-weight-light small-text mb-0 text-muted">
                  Just now
                </p>
              </div>
            </a>
            <a class="dropdown-item">
              <div class="item-thumbnail">
                <div class="item-icon bg-warning">
                  <i class="ti-settings mx-0"></i>
                </div>
              </div>
              <div class="item-content">
                <h6 class="font-weight-normal">Settings</h6>
                <p class="font-weight-light small-text mb-0 text-muted">
                  Private message
                </p>
              </div>
            </a>
            <a class="dropdown-item">
              <div class="item-thumbnail">
                <div class="item-icon bg-info">
                  <i class="ti-user mx-0"></i>
                </div>
              </div>
              <div class="item-content">
                <h6 class="font-weight-normal">New user registration</h6>
                <p class="font-weight-light small-text mb-0 text-muted">
                  2 days ago
                </p>
              </div>
            </a>
          </div>
        </li>
        <li class="nav-item nav-profile dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
            <img src="images/faces/face28.jpg" alt="profile" />
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
            <a class="dropdown-item">
              <i class="ti-settings text-primary"></i>
              Settings
            </a>
            <a class="dropdown-item">
              <i class="ti-power-off text-primary"></i>
              Logout
            </a>
          </div>
        </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
        data-toggle="offcanvas">
        <span class="ti-view-list"></span>
      </button>
    </div>
  </nav>
  <!-- partial -->
  <div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('staffIndex') ?>">
            <i class="ti-shield menu-icon"></i>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>
        <!-- <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
              <i class="ti-view-list-alt menu-icon"></i>
              <span class="menu-title">Add categories</span>
            </a>
          </li> -->
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('upload') ?>">
            <i class="ti-star menu-icon"></i>
            <span class="menu-title">Upload Crops</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
            <i class="ti-user menu-icon"></i>
            <span class="menu-title">Data </span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="auth">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="<?= base_url('add_farmers') ?>">Farmers </a></li>
              <li class="nav-item"> <a class="nav-link" href="<?= base_url('add_drivers') ?>">Drivers </a></li>
              <li class="nav-item"> <a class="nav-link" href="<?= base_url('') ?>">Vehicle Info</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="documentation/documentation.html">
            <i class="ti-write menu-icon"></i>
            <span class="menu-title">Documentation</span>
          </a>
        </li>
      </ul>
    </nav>
    <!-- partial -->
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
          <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between align-items-center">
              <div class="mt-3">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#"></a>Dashboard</li>
                  <li class="breadcrumb-item active">Crops Upload and Details</li>
                </ol>
              </div>
              <div>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modelId">
                  Upload Crops
                </button>

                <!-- Modal -->
                <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                  aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <div id="responseMessage"></div>
                        <h5 class="modal-title">Upload Crops</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="col-md-12">
                        <?php
                        if (session()->getFlashdata('status')) {
                          echo "<h5>" . session()->getFlashdata('status') . "</h5>";
                        }
                        ?>
                      </div>
                      <form method="post" action="<?= base_url('crop-upload') ?>" id="dataUploadForm"
                        enctype="multipart/form-data">
                        <div class="modal-body">
                          <div class="form-group">
                            <input type="text" class="form-control" name="cname" id="" aria-describedby="helpId"
                              placeholder="" required>
                            <small id="helpId" class="form-text text-muted">Crop Name</small>
                          </div>
                          <div class="form-group">
                            <input type="file" class="form-control" name="cimage" id="" aria-describedby="helpId"
                              placeholder="" required>
                            <small id="helpId" class="form-text text-muted">Image</small>
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control" name="cprice" id="" aria-describedby="helpId"
                              placeholder="" required>
                            <small id="helpId" class="form-text text-muted">Price in ugx</small>
                          </div>
                          <div class="mb-3">
                            <textarea class="form-control" name="cdescription" id="exampleFormControlTextarea1" rows="3"
                              required></textarea>
                            <small id="helpId" class="form-text text-muted">Description</small>
                          </div>
                          <div class="form-group">
                            <input type="date" class="form-control" name="cdate" id="" aria-describedby="helpId"
                              placeholder="" required>
                            <small id="helpId" class="form-text text-muted">PickUp Date</small>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card position-relative">
              <div class="card-body">
                <p class="card-title">Crop Information</p>
                <div class="row">
                  <div class="col-md-12 d-flex flex-column justify-content-center">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <?php foreach ($headers as $header): ?>
                            <th>
                              <?php echo $header; ?>
                            </th>
                          <?php endforeach; ?>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Tiger Nixon</td>
                          <td>System Architect</td>
                          <td>Edinburgh</td>
                          <td>61</td>
                          <td>63</td>
                          <td>63</td>
                          <td>2011-04-25</td>
                          <td>$320,800</td>
                        </tr>
                        <tr>
                          <td>Garrett Winters</td>
                          <td>Accountant</td>
                          <td>Tokyo</td>
                          <td>63</td>
                          <td>63</td>
                          <td>63</td>
                          <td>2011-07-25</td>
                          <td>$170,750</td>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <?php foreach ($headers as $header): ?>
                            <th>
                              <?php echo $header; ?>
                            </th>
                          <?php endforeach; ?>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
      <!-- partial:partials/_footer.html -->
      <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
          <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a
              href="https://www.templatewatch.com/" target="_blank">Templatewatch</a>. All rights reserved.</span>
          <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i
              class="ti-heart text-danger ml-1"></i></span>
        </div>
      </footer>
      <!-- partial -->
    </div>
    <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
</script>

<?= $this->endSection() ?>