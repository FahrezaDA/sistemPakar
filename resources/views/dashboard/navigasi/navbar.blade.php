@extends('dashboard.navigasi.master')

<div id="wrapper">
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Dashboard Sistem Pakar</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>




  <!-- Nav Item - Charts -->
<li class="nav-item">
    <a class="nav-link" href="{{'gejala'}}">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Gejala</span>
    </a>
</li>


    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{ 'penyakit' }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Penyakit</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ 'aturan' }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Rules</span>
        </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->