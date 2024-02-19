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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
    integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">

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


<?php $validation = \Config\Services::validation(); ?>
<?php $session = \Config\Services::session(); ?>
<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <?= view('nav'); ?>
    <!-- partial -->
    <div class="main-panel">
        <?php
        if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success alert-dismissible fade show my-3" style="width: 90%;
    margin-left: 5%; padding-left: 34%;">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php elseif (session()->getFlashdata('failed')): ?>
            <div class="alert alert-danger alert-dismissible fade show my-3" style="width: 90%;
    margin-left: 5%; padding-left: 34%;">
                <?= session()->getFlashdata('failed') ?>
            </div>
        <?php endif; ?>
        <div class="content-wrapper">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>
                            Donor
                        </h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">
                                Donor
                            </a></li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">
                    Donor
                </h4>
                <?php if ((($session->get('tablename')) !=='seeker')) : ?>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_branch">+ Add
                    New Donor</button>
                    <?php endif; ?>
                <!-- Modal -->
                <div class="modal fade" id="add_branch">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <form action="<?= base_url('/add_donors'); ?> " enctype="multipart/form-data" method="POST">
                                <?= csrf_field() ?>
                                <div class="modal-header">
                                    <h5 class="modal-title">New Donor</h5>
                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">


                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Donor's First Name</label>
                                            <input name="firstname" type="text" class="form-control " required
                                                placeholder="mark">

                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Donor's Last Name</label>
                                            <input required name="lastname" type="text" class="form-control "
                                                placeholder="paul">

                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Email</label>
                                            <input required name="email" type="email" class="form-control "
                                                placeholder="example@gmail.com">

                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Mobile</label>
                                            <input required name="mobile" type="number" class="form-control "
                                                placeholder="2567087865671">

                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>NIN</label>
                                            <input required name="NIN" placeholder="AGDHDF56VHGD7D" type="text" class="form-control ">

                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>District</label>
                                            <input required name="district" placeholder="district here" type="text" class="form-control ">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>County/Munipality</label>
                                            <input required name="county" placeholder="County here" type="text" class="form-control ">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Sub County</label>
                                            <input required name="subcounty" placeholder="Sub County" type="text" class="form-control ">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Village</label>
                                            <input required name="village" placeholder="Village here" type="text" class="form-control ">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Type of Blood</label>
                                            <select class="form-select" name="bg" aria-label="Default select example">
                                                <option value="A+">A+</option>
                                                <option value="A-">A-</option>
                                                <option value="B+">B+</option>
                                                <option value="B-">B-</option>
                                                <option value="AB+">AB+</option>
                                                <option value="AB-">AB-</option>
                                                <option value="O+">O+</option>
                                                <option value="O-">O-</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>password</label>
                                            <input required name="password" placeholder="password here" type="password" class="form-control ">
                                        </div>
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
            <div class="card-body">
                <div class="table-responsive">
                    <!-- Table -->
                    <table id='empTable' class='display dataTable'>
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>NIN</th>
                                <th>Blood gp</th>
                                <?php if ((($session->get('tablename')) !=='seeker')) : ?>
                                <th>Action</th>
                                <?php endif;?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (count($branch)) { ?>
                                <?php foreach ($branch as $bra) { ?>
                                    <tr>
                                        <td>
                                            <?= $bra['firstname'] ?>
                                        </td>
                                        <td>
                                            <?= $bra['lastname'] ?>
                                        </td>
                                        <td>
                                            <?= $bra['email'] ?>
                                        </td>
                                        <td>
                                            <?= $bra['mobile'] ?>
                                        </td> 
                                        <td>
                                            <?= $bra['NIN'] ?>
                                        </td>
                                        <td>
                                            <?= $bra['bg'] ?>
                                        </td>
                                        <?php if ((($session->get('tablename')) !=='seeker')) : ?>
                                        <td>
                                            <a href="<?= base_url("/donors/show" . $bra['id']) ?>" class="btn btn-sm btn-dark"><i
                                                    class="la la-eye"></i></a>
                                            <a href="<?= base_url("/donors/edit" . $bra['id']) ?>"
                                                class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
                                            <!-- <a href="<?= base_url("/donors/delete" . $bra['id']) ?>"
                                        class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a> -->

                                            <a href="javascript:void(0);" class="btn btn-sm btn-danger" data-toggle="modal"
                                                data-target="#view_donors"><i class="la la-trash-o"></i></a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="view_donors">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Delete </h5>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal"><span>&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5 class="btn btn-sm btn-danger">Are sure You want to delete this
                                                            ?</h5>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                            <a href="<?= base_url("/donors/delete" . $bra['id']) ?>"
                                                                class="btn btn-primary">YES</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <?php endif; ?>
                                    </tr>
                                <?php } ?>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <!-- Script -->
        <script>
            $(document).ready(function () {
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