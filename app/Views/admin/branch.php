<?= $this->extend('layouts/master') ?>
<?= $this->section('contents') ?>
<!-- Datatable CSS -->
<link href='<?= base_url();?>/assets/vendor/datatables/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>
<link href='<?= base_url();?>/assets/vendor/datatables/css/buttons.dataTables.min.css' rel='stylesheet' type='text/css'>

<style type="text/css">
.dt-buttons {
    width: 100%;
}
</style>

<!-- Datatable -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
    integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">

<script src="<?= base_url();?>/assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url();?>/assets/js/plugins-init/datatables.init.js"></script>
<!-- jQuery Library -->
<script src="<?= base_url();?>/assets/vendor/datatables/button/jquery.min.js"></script>
<!-- Datatable JS -->
<script src="<?= base_url();?>/assets/vendor/datatables/button/jquery.dataTables.min.js"></script>
<script src="<?= base_url();?>/assets/vendor/datatables/button/dataTables.buttons.min.js"></script>
<script src="<?= base_url();?>/assets/vendor/datatables/button/jszip.min.js"></script>
<script src="<?= base_url();?>/assets/vendor/datatables/button/pdfmake.min.js"></script>
<script src="<?= base_url();?>/assets/vendor/datatables/button/vfs_fonts.js"></script>
<script src="<?= base_url();?>/assets/vendor/datatables/button/buttons.html5.min.js"></script>


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
                        <h4>Hospital </h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Hospital</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Hospital</h4>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_branch">+ Add
                    New</button>
                <!-- Modal -->
                <div class="modal fade" id="add_branch">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <form action="<?= base_url('/add_branch'); ?>">
                                <?= csrf_field() ?>
                                <div class="modal-header">
                                    <h5 class="modal-title">New Hospital</h5>
                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">


                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Street/Building</label>
                                            <input name="building" type="text" class="form-control " required
                                                placeholder="Organic complex">

                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>District/City/Town</label>
                                            <input required name="city" type="text" class="form-control "
                                                placeholder="Kampala">

                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Division/sub-country</label>
                                            <input required name="division" type="division" class="form-control "
                                                placeholder="Rubaga">

                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Hospital Name</label>
                                            <input required name="name" type="text" class="form-control "
                                                placeholder="Hospital1">

                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Contact</label>
                                            <input required name="contact" type="number" class="form-control ">

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
                                <th>Hospital Name</th>
                                <th>Street/Building</th>
                                <th>District/City/Town</th>
                                <th>Division/Sub-Country</th>
                                <th>Contact</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (count($branch)) { ?>
                            <?php foreach ($branch as $bra) { ?>
                            <tr>
                                <td><?= $bra['Bname'] ?></td>
                                <td><?= $bra['building'] ?></td>
                                <td><?= $bra['city'] ?></td>
                                <td><?= $bra['division'] ?></td>
                                <td><?= $bra['contact'] ?></td>
                                <td>
                                    <a href="<?= base_url("/branch/show".$bra['id']) ?>" class="btn btn-sm btn-dark"><i
                                            class="la la-eye"></i></a>
                                    <a href="<?= base_url("/branch/edit".$bra['id']) ?>"
                                        class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
                                    <a href="<?= base_url("/branch/delete".$bra['id']) ?>"
                                        class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>

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