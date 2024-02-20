<?php $validation =  \Config\Services::validation(); ?>
<?php $session = \Config\Services::session(); ?>
<?php if(($session->get('type')) =='1'):?>
    <style>
        .sidebar-offcanvas{
            background-color: black;
            color: white;
            margin-top: -30px;
        }
    </style>
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/dashboard') ?>">
                <i class="fas fa-tachometer-alt menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/admins') ?>">

                <i class=" fas fa-user menu-icon"></i>
                <span class="menu-title">Admin</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/branch') ?>">

                <i class=" fas fa-building menu-icon"></i>
                <span class="menu-title">Hospital</span>
            </a>
        </li>
        <li class="nav-item"> 
            <a class="nav-link" href="<?= base_url('/staff') ?>">
                <i class="fas fa-users menu-icon"></i>
                <span class="menu-title">Hospital Head</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/seekers') ?>">
                <i class="fas fa-user menu-icon"></i>
                <span class="menu-title">Seekers</span> 
            </a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/donors') ?>">
                <i class="fas fa-user menu-icon"></i>
                <span class="menu-title">Donors</span> 
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/orders') ?>">
                <i class="fas fa-coins menu-icon"></i>
                <span class="menu-title">Requests</span> 
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/parcel') ?>">
                <i class="fas fa-boxes menu-icon"></i>
                <span class="menu-title">Delivery</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/track_parcel') ?>">
                <i class="fas fa-search menu-icon"></i>
                <span class="menu-title">Track blood</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/availableblood') ?>">
                <i class="fas fa-cookie menu-icon"></i>
                <span class="menu-title">Available Blood</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/expired') ?>">
                <i class="fas fa-search menu-icon"></i>
                <span class="menu-title">Expired blood</span>
            </a>
        </li>
    </ul>
</nav>
<?php elseif (($session->get('type')) =='2') : ?>
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/dashboard') ?>">
                <i class="fas fa-tachometer-alt menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/branch') ?>">

                <i class=" fas fa-building menu-icon"></i>
                <span class="menu-title">Hospital</span>
            </a>
        </li>
        <li class="nav-item"> 
            <a class="nav-link" href="<?= base_url('/staff') ?>">
                <i class="fas fa-users menu-icon"></i>
                <span class="menu-title">Hospital Head</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/seekers') ?>">
                <i class="fas fa-user menu-icon"></i>
                <span class="menu-title">Seekers</span> 
            </a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/donors') ?>">
                <i class="fas fa-user menu-icon"></i>
                <span class="menu-title">Donors</span> 
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/orders') ?>">
                <i class="fas fa-coins menu-icon"></i>
                <span class="menu-title">Requests</span> 
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/parcel') ?>">
                <i class="fas fa-boxes menu-icon"></i>
                <span class="menu-title">Delivery</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/track_parcel') ?>">
                <i class="fas fa-search menu-icon"></i>
                <span class="menu-title">Track blood</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/availableblood') ?>">
                <i class="fas fa-cookie menu-icon"></i>
                <span class="menu-title">Available Blood</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/expired') ?>">
                <i class="fas fa-search menu-icon"></i>
                <span class="menu-title">Expired blood</span>
            </a>
        </li>
    </ul>
</nav>
<?php elseif (($session->get('type')) =='3') : ?>
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/dashboard') ?>">
                <i class="fas fa-tachometer-alt menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/parcel') ?>">
                <i class="fas fa-boxes menu-icon"></i>
                <span class="menu-title">Delivery</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/track_parcel') ?>">
                <i class="fas fa-search menu-icon"></i>
                <span class="menu-title">Track blood</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/expired') ?>">
                <i class="fas fa-search menu-icon"></i>
                <span class="menu-title">Expired blood</span>
            </a>
        </li>
    </ul>
</nav>
<?php elseif (($session->get('type')) =='') : ?>
<?php endif; ?>