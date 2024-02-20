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
       
        <!-- Modal -->
        <div class="modal fade" id="add_seeker">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form action="<?= base_url('/add_seekers'); ?>" enctype="multipart/form-data" method="POST">
                        <?= csrf_field() ?>
                        <div class="modal-header">
                            <h5 class="modal-title">Insert Seeker</h5>
                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>First Name</label>
                                    <input name="firstname" type="text" class="form-control " required placeholder="FirstName">

                                </div>
                                <div class="form-group col-md-6">
                                    <label>Last Name</label>
                                    <input required name="lastname" type="text" class="form-control " placeholder="LastName">

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
                                    <label>NIN</label>
                                    <input required name="NIN" type="text" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Region</label>
                                    <select class="form-select" name="region" aria-label="Default select example">
                                        <option selected>Select</option>
                                        <option value="Central">Central</option>
                                        <option value="Northern">Northern</option>
                                        <option value="Western">Western</option>
                                        <option value="Eastern">Eastern</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>District</label>
                                    <input required name="district" type="text" class="form-control">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Town</label>
                                    <input required name="town" type="text" class="form-control">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Blood Needed</label>
                                    <input required name="subcounty" type="text" class="form-control">
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
                                    <label>Password</label>
                                    <input required name="password" type="password" class="form-control">
                                </div>
                                <input name="status" type="hidden" class="form-control" value="Inactive">
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn" style="color:white; background-color:#1ba70c">Save</button>
                            <button type="button" class="btn" style="color:#1ba70c; background-color:white; border:1px solid #1ba70c" data-dismiss="modal">Close</button>

                        </div>
                    </form>

                </div>
            </div>
        </div>

        <div class="content-wrapper">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0 ">
                    <div class="welcome-text">
                        <h4 style="color:#1ba70c">Seekers</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <!-- <li class="breadcrumb-item active"><a href="javascript:void(0)">Donors</a></li> -->
                    </ol>
                </div>
            </div>
        </div>
        

        <!-- </div> -->
       <div class="card">
       <div class="card-body">
        <div class="row mt-2">
            <div class="col-sm-10">
                <h4 class="card-title">Seekers</h4>
            </div>
            <div class="col-sm-2">
                <!-- Button trigger modal -->
                <button type="button" class="btn" data-toggle="modal" style="color:white; background-color:#1ba70c" data-target="#add_seeker">+ Add
                    </button>
            </div>
        </div>
            <div class="table-responsive">
                <!-- Table -->
                <table id='empTable' class='display dataTable'>
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email Address</th>
                            <th>Mobile</th>
                            <th>NIN</th>
                            <!-- <th>Status</th> -->
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (count($seekers)) { ?>
                            <?php foreach ($seekers as $seeker) { ?>
                                <tr>
                                    <td><?= $seeker['firstname'] ?></td>
                                    <td><?= $seeker['lastname'] ?></td>
                                    <td><?= $seeker['email'] ?></td>
                                    <td><?= $seeker['mobile'] ?></td>
                                    <td><?= $seeker['NIN'] ?></td>

                                    <td>
                                        <a href="<?= base_url("/seekers/show" . $seeker['id']) ?>" class="btn btn-sm btn-dark" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="View Donor information"><i class="la la-eye"></i></a>
                                        <a href="<?= base_url("/seekers/edit" . $seeker['id']) ?>" class="btn btn-sm btn-primary"><i class="la la-pencil" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Edit Donor information"></i></a>
                                        <!-- <a href="<?= base_url("/seekers/delete" . $seeker['id']) ?>"
                                        class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a> -->

                                        <a href="javascript:void(0);" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#view_seekers" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Delete Donor information"><i class="la la-trash-o"></i></a>
                                        <!-- Modal -->
                                        <div class="modal fade" id="view_seekers">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Delete seeker</h5>
                                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h5 class="btn btn-sm btn-danger">Are sure you want to delete this seeker?</h5>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="<?= base_url("/seekers/delete" . $seeker['id']) ?>" class="btn btn-primary">Yes</a>
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
        <!-- plugins:js -->

        <?= $this->endSection() ?>
        <script src="assets/js/bootstrap.bundle.min.js"></script>