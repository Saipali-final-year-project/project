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
                            Expired Blood
                        </h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">
                                Expired Blood
                            </a></li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">
                    Expired Blood
                </h4>
                <!-- Button trigger modal -->

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
                                <th>District</th>
                                <th>Blood gp</th>
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
                                            <?= $bra['district'] ?>
                                        </td> 
                                        <td>
                                            <?= $bra['subcounty'] ?>
                                        </td>
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