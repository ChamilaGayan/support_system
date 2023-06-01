<?php
$userid = auth()->user()->id;
?>
<nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content" data-simplebar style="height: calc(100% - 60px);">
        <div class="sidebar-brand">
            <a href="{{ route('home') }}">
                <h4>Support System</h4>
            </a>
        </div>

        <ul class="sidebar-menu">
            <li><a href="{{ route('home') }}"><i class="uil uil-dashboard me-2 d-inline-block"></i>Dashboard</a></li>

            <li class="sidebar-dropdown">
                <a href="{{ route('ticket') }}"><i class="uil uil-file-medical-alt h3 mb-0"></i>Ticket</a>
            </li>

        </ul>
        <!-- sidebar-menu  -->
    </div>
    <!-- Sidebar Footer -->
    <ul class="sidebar-footer list-unstyled mb-0">
        <li class="list-inline-item mb-0 ms-1">
            <a href="{{ route('home') }}" class="btn btn-icon btn-pills btn-soft-primary">
                <i class="uil uil-comment"></i>
            </a>
        </li>
    </ul>
    <!-- Sidebar Footer -->
</nav>
