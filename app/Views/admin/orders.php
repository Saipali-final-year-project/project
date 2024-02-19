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
                            Requests
                        </h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">
                                Requests
                            </a></li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="card">
        <div class="card-header">
                <h4 class="card-title"><?=$page_title?></h4>
                <!-- Button trigger modal -->
                <?php if ((($session->get('tablename')) !=='seeker')) : ?>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_branch">+ Add
                    New</button>
                    <?php endif; ?>
                <!-- Modal -->
                <div class="modal fade " id="add_branch">
                    <div class="modal-dialog modal-dialog-centered" role="document" align="center">
                        <div class="modal-content">
                        <h4 class="card-title m-3"><?=$page_title?></h4>
                            <form action="<?= base_url('/add_orders'); ?>">
                                <?= csrf_field() ?>
                                <div class="row ">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <input type="text" name="firstname" class="form-control"
                                        placeholder="firstname">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <input type="text" name="lastname" class="form-control"
                                        placeholder="lastname">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control"
                                        placeholder="email">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <input type="number" name="phone" class="form-control"
                                        placeholder="phone">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <input type="text" name="bg" class="form-control"
                                        placeholder="blood group">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <input type="text" name="district" class="form-control"
                                        placeholder="district">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <input type="text" name="address" class="form-control"
                                        placeholder="Adrress">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <input type="text" name="town" class="form-control"
                                        placeholder="Town">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <input type="text" name="subcounty" class="form-control"
                                        placeholder="subcounty">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 d-none">
                                <div class="form-group">
                                    <label class="form-label">status</label>
                                    <input type="text" name="status" class="form-control"
                                        placeholder="status">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 d-none">
                                <div class="form-group">
                                    <input type="number" name="qty" class="form-control"
                                        placeholder="Quantity" >
                                </div>
                            </div>
                            
                            <!-- <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Booking mode</label>
                                    <select
                                        class="form-control <?php if ($validation->getError('booking_mode')) : ?>is-invalid<?php endif ?>"
                                        name="booking_mode">
                                        <option value="">Select </option>
                                        <option value="Paid">Paid</option>
                                        <option value="To Pay">To Pay</option>
                                        <option value="TBB">TBB</option>
                                    </select>
                                    <?php if (isset($validation)) : ?>
                                    <small class="text-danger"><?= $validation->getError('booking_mode') ?></small>
                                    <?php endif; ?>
                                </div>
                            </div> -->

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
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Blood Needed</th>
                                <th>units</th>
                                <th>Hospital</th>
                                <th>Address</th>
                                <?php if ((($session->get('tablename')) !=='seeker')) : ?>
                                <th>Action</th>
                                <?php endif; ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (count($branch)) { ?>
                                <?php foreach ($branch as $bra) { ?>
                                    <tr>
                                        <td>
                                            <?= $bra['firstname'] ?> <span><?= $bra['lastname'] ?></span>
                                        </td>
                                        <td>
                                            <?= $bra['phone'] ?>
                                        </td>
                                        <td>
                                            <?= $bra['email'] ?>
                                        </td>
                                        <td>
                                            <?= $bra['bg'] ?>
                                        </td>
                                        
                                        <td>
                                            <?= $bra['qty'] ?>
                                        </td>
                                        <td>
                                            <?= $bra['district'] ?> <br><?= $bra['town'] ?><br><?= $bra['subcounty'] ?>
                                        </td>
                                        <td>
                                            <?= $bra['address'] ?>
                                        </td>
                                        <?php if ((($session->get('tablename')) !=='seeker')) : ?>
                                        <td>
                                        <a href="<?= base_url("/orders/show".$bra['id']) ?>" class="btn btn-sm btn-dark"><i
                                            class="la la-eye"></i></a>
                                            <a href="<?= base_url("/orders/edit" . $bra['id']) ?>" class="btn btn-sm btn-primary"><i class="la la-pencil" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Edit driver information"></i></a>
                                            <a href="<?= base_url("/orders/delete" . $bra['id']) ?>"
                                                class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>

                                            <!-- Modal -->
                                            <div class="modal fade" id="view_donors">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Delete Orders</h5>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal"><span>&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5 class="btn btn-sm btn-danger">Are sure You want to delete this
                                                                Orders?</h5>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                            <a href="<?= base_url("/Orders/delete" . $bra['id']) ?>"
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