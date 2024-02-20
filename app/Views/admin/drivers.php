<?= $this->extend('layouts/master') ?>
<?= $this->section('contents') ?>
<!-- Datatable CSS -->
<link href='<?= base_url(); ?>/assets/vendor/datatables/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>
<link href='<?= base_url(); ?>/assets/vendor/datatables/css/buttons.dataTables.min.css' rel='stylesheet' type='text/css'>

<style type="text/css">
    .dt-buttons {
        width: 100%;
    }
</style>

<!-- Datatable -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">

<script src="<?= base_url(); ?>/assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>/assets/js/plugins-init/datatables.init.js"></script>
<!-- jQuery Library -->
<script src="<?= base_url(); ?>/assets/vendor/datatables/button/jquery.min.js"></script>
<!-- Datatable JS -->
<script src="<?= base_url(); ?>/assets/vendor/datatables/button/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>/assets/vendor/datatables/button/dataTables.buttons.min.js"></script>
<script src="<?= base_url(); ?>/assets/vendor/datatables/button/jszip.min.js"></script>
<script src="<?= base_url(); ?>/assets/vendor/datatables/button/pdfmake.min.js"></script>
<script src="<?= base_url(); ?>/assets/vendor/datatables/button/vfs_fonts.js"></script>
<script src="<?= base_url(); ?>/assets/vendor/datatables/button/buttons.html5.min.js"></script>
 

<?php $validation =  \Config\Services::validation(); ?>
<?php $session = \Config\Services::session(); ?>
<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <?= view('nav'); ?>
    <!-- partial -->
    <div class="main-panel">
        <?php
        if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-success alert-dismissible fade show my-3" style="width: 90%;
    margin-left: 5%; padding-left: 34%;">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php elseif (session()->getFlashdata('failed')) : ?>
            <div class="alert alert-danger alert-dismissible fade show my-3" style="width: 90%;
    margin-left: 5%; padding-left: 34%;">
                <?= session()->getFlashdata('failed') ?>
            </div>
        <?php endif; ?>
        <div class="content-wrapper">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4 style="color:#1ba70c"><?= $page_title ?> </h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <!-- <li class="breadcrumb-item active"><a href="javascript:void(0)"><-?= $page_title ?></a></li> -->
                    </ol>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-sm-10">
                <!-- <h4 class="card-title"><-?= $page_title ?></h4> -->
            </div>
            <div class="col-sm-2">
                <!-- Button trigger modal -->
                <button type="button" class="btn" data-toggle="modal" style="color:white; background-color:#1ba70c" data-target="#add_driver">+ Add
                    New</button>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="add_driver">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form action="<?= base_url('/add_Drivers'); ?>" enctype="multipart/form-data" method="POST">
                        <?= csrf_field() ?>
                        <div class="modal-header">
                            <h5 class="modal-title">Insert Drivers</h5>
                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>First Name</label>
                                    <input name="firstname" type="text" class="form-control " required placeholder="Mark">

                                </div>
                                <div class="form-group col-md-6">
                                    <label>Last Name</label>
                                    <input required name="lastname" type="text" class="form-control " placeholder="Kiggundu">

                                </div>
                                <div class="form-group col-md-6">
                                    <label>Email</label>
                                    <input required name="email" type="email" class="form-control " placeholder="example@gmail.com">

                                </div>
                                <div class="form-group col-md-6">
                                    <label>Mobile</label>
                                    <input required name="mobile" type="text" class="form-control " placeholder="07087865671">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Driver's picture</label>
                                    <input class="form-control" name="photo" type="file">

                                </div>
                                <div class="form-group col-md-6">
                                    <label>NIN</label>
                                    <input required name="NIN" type="text" class="form-control">

                                </div>
                                <div class="form-group col-md-6">
                                    <label>License Number</label>
                                    <input required name="licenseNo" type="text" class="form-control">

                                </div>
                                <div class="form-group col-md-6">
                                    <label>Number Plate</label>
                                    <input required name="numberplate" type="text" class="form-control">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Delivery capacity</label>
                                    <input required name="capacity" type="number" class="form-control">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Car images</label>
                                    <input class="form-control" name="userfiles[]" type="file" multiple>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Location</label>
                                    <input required name="location" type="text" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Current Location</label>
                                    <input required name="location" type="text" class="form-control">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Collection Area</label>
                                    <select class="form-select" name="collection" aria-label="Default select example">
                                      <option selected>Open this select menu</option>
                                        <?php if (count($branches)) {
                                            foreach ($branches as $branch) {
                                                echo '<option value="' . $branch['Bname'] . '">' . $branch['Bname'] . '</option>';
                                            }
                                        } ?>
                                    </select>

                                </div>

                                <div class="form-group col-md-6">
                                    <label>Delivery Price (Per bunch)</label>
                                    <input required name="deliveryprice" type="text" class="form-control" placeholder="500">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Password</label>
                                    <input required name="password" type="password" class="form-control">
                                </div>
                                
                                <div class="form-group col-md-6" style="visibility: hidden;">
                                    <label>latitude</label>
                                    <input required name="latitude" type="text" id="latitude" readonly class="form-control" placeholder="500">
                                </div>

                                <div class="form-group col-md-6" style="visibility: hidden;">
                                    <label>Longitude</label>
                                    <input required name="longitude" type="text" id="longitude" readonly class="form-control">
                                </div>
                                <input name="status" type="hidden" class="form-control" value="Inactive">
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="submit" id="getCoordinates" class="btn" style="color:white; background-color:#1ba70c">Save</button>
                            <button type="button" class="btn" style="color:#1ba70c; background-color:white; border:1px solid #1ba70c" data-dismiss="modal">Close</button>

                        </div>
                    </form>

                </div>
            </div>
        </div>


        <!-- </div> -->
        <div class="card-body">
            <div class="table-responsive">
                <!-- Table -->
                <table id='empTable' class='display dataTable'>
                    <thead>
                        <tr>
                            <th>Photo</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email Address</th>
                            <th>Mobile Number</th>
                            <th>NIN</th>
                            <th>License Number</th>
                            <th>Number Plate</th>
                            <th>Truck capacity</th>
                            <th>Truck Image</th>
                            <th>Location</th>
                            <th>Collection Area</th>
                            <th>Delivery price(per bunch)</th>
                            <!-- <th>Status</th> -->
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (count($drivers)) { ?>
                            <?php foreach ($drivers as $driver) { ?>
                                <tr>
                                    <td>
                                        <img src="<?php echo base_url('assets/upload/' . $driver["photo"]) ?>" class="img-fluid" style="width:100%; height:100px;" />
                                    </td>
                                    <td><?= $driver['firstname'] ?></td>
                                    <td><?= $driver['lastname'] ?></td>
                                    <td><?= $driver['email'] ?></td>
                                    <td><?= $driver['mobile'] ?></td>
                                    <td><?= $driver['NIN'] ?></td>
                                    <td><?= $driver['licenseNo'] ?></td>
                                    <td><?= $driver['numberplate'] ?></td> 
                                    <td><?= $driver['capacity'] ?></td>
                                    <td>
                                        <img src="<?php echo base_url('assets/upload/' . $driver["carimages"]) ?>" class="img-fluid" style="width:100%; height:100px;" />
                                    </td>
                                    <td><?= $driver['location'] ?></td>
                                    <td style="width: auto; height:auto;">
                                        <iframe src="https://www.google.com/maps?q=<?= $driver['latitude']; ?>,<?= $driver['longitude']; ?>$hl=es;z=14&output=embed" frameborder="0"></iframe></td>
                                    <td><?= $driver['collection'] ?></td>
                                    <td><?= $driver['deliveryprice'] ?></td>

                                    <td>
                                        <a href="<?= base_url("/Drivers/updateimage" . $driver['id']) ?>" class="btn" style="background-color:#1ba70c; color:white;" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Update profile image"><i class="la la-user"></i></a>
                                        <a href="<?= base_url("/Drivers/show" . $driver['id']) ?>" class="btn btn-sm btn-dark" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="View driver information"><i class="la la-eye"></i></a>
                                        <a href="<?= base_url("/Drivers/edit" . $driver['id']) ?>" class="btn btn-sm btn-primary"><i class="la la-pencil" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Edit driver information"></i></a>
                                        
                                        <a href="javascript:void(0);" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#view_Drivers" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Delete driver information"><i class="la la-trash-o"></i></a>
                                        <!-- Modal -->
                                        <div class="modal fade" id="view_Drivers">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Delete Driver</h5>
                                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h5 class="btn btn-sm btn-danger">Are sure you want to delete this Driver ?</h5>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="<?= base_url("/Drivers/delete" . $driver['id']) ?>" class="btn btn-primary">Yes</a>
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                            <?php } ?>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
        <!-- </div> -->
        <!-- Script -->
       
         <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
  

  

            $(document).ready(function() {
                var empDataTable = $('#empTable').DataTable({
                    dom: 'Blfrtip',
                    buttons: [{
                            extend: 'copy',
                            text: '<i class="bi bi-clipboard-check"></i> <u>C</u>opy',
                            key: {
                                key: 'c',
                                altKey: true
                            },
                            // text: window.copyButtonTrans,
                            exportOptions: {
                                columns: ':visible'
                            },
                            // className: 'btn btn-danger',
                        },
                        {
                            extend: 'pdf',
                            text: '<i class="bi bi-file-earmark-pdf"></i> PDF',
                            exportOptions: {
                                columns: ':visible' // Column index which needs to export
                            },
                            className: 'btn btn-danger',
                        },
                        {
                            extend: 'csv',
                            text: '<i class="bi bi-filetype-csv"></i> CSV', //window.csvButtonTrans,
                            exportOptions: {
                                columns: ':visible'
                            },
                            className: 'btn btn-warning',

                            exportOptions: {
                                columns: ':visible' // Only firstname, lastname, email and role
                            },

                        },
                        {
                            extend: 'excel',
                            text: '<i class="bi bi-file-earmark-excel"></i> Excel', //window.excelButtonTrans,
                            exportOptions: {
                                columns: ':visible'
                            },
                            className: 'btn btn-success',
                        },

                    ]

                });

            });
        </script>
        <script>
                document.addEventListener("DOMContentLoaded", function() {
        // Get references to the latitude and longitude input fields.
        const latitudeInput = document.getElementById("latitude");
        const longitudeInput = document.getElementById("longitude");

        // Check if geolocation is available.
        if ("geolocation" in navigator) {
            navigator.geolocation.getCurrentPosition(function(position) {
                const latitude = position.coords.latitude;
                const longitude = position.coords.longitude;

                // Display the coordinates in the input fields.
                latitudeInput.value = latitude;
                longitudeInput.value = longitude;
            }, function(error) {
                console.error("Error getting coordinates:", error);
            });
        } else {
            alert("Geolocation is not supported in this browser.");
        }
    });
        </script>
        <!-- plugins:js -->

        <?= $this->endSection() ?>
        <script src="assets/js/bootstrap.bundle.min.js"></script>