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
                        <h4><?=$page_title?> </h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)"><?=$page_title?></a></li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"><?=$page_title?></h4>

                <div class="modal fade" id="add_branch">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <form action="<?= base_url('/add_branch'); ?>">
                                <?= csrf_field() ?>
                                <div class="modal-header">
                                    <h5 class="modal-title">New Branch</h5>
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
                                            <label>Branch Name</label>
                                            <input required name="name" type="text" class="form-control "
                                                placeholder="Branch1">

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
                            
                                <th>Invoice No.</th>
                                <th>Vechile No. Plate</th>
                                <th>Driver Name</th>
                                <th>Driver Mob</th>
                                <th>Sender Name</th>
                                <th>Sender Mob</th>
                                <th>Sender Branch</th>
                                <th>Product</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (count($cargo)) { ?>
                            <?php foreach ($cargo as $car) { ?>
                            <tr>
                                <td><?= $car['invoice_no'] ?></td>
                                <td><?= $car['vechile_plate'] ?></td>
                                <td><?= $car['driver_name'] ?></td>
                                <td><?= $car['driver_mobile'] ?></td>
                                <td><?= $car['sender_name'] ?></td>
                                <td><?= $car['sender_mobile'] ?></td>
                                <td><?= $car['sender_branch'] ?></td>
                                <td><?= $car['product_name'] ?></td>
                                <td><span class="badge badge-rounded badge-warning"><?= $car['status'] ?></span></td>
                                <td>
                                    <a href="<?= base_url("/transit/show".$car['id']) ?>" class="btn btn-sm btn-dark"><i
                                            class="la la-eye"></i></a>
                                    <a href="<?= base_url("/transit/edit".$car['id']) ?>"
                                        class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
                                    <a href="<?= base_url("/transit/delete".$car['id']) ?>"
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