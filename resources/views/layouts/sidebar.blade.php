<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ \Illuminate\Support\Facades\Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>

                </li>

                @hasrole('admin')
                <li class="nav-item">
                    <a href="{{ route('adminusers.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Manage User</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('hr') }}" class="nav-link">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>Hr</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('production') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Production</p>
                    </a>
                </li>
                @endhasrole

                @hasrole('user1')
                <li class="nav-item">
                    <a href="{{ route('hr') }}" class="nav-link">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>Hr</p>
                    </a>
                </li>
                @endhasrole

                @hasrole('user2')
                <li class="nav-item">
                    <a href="{{ route('production') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Production</p>
                    </a>
                </li>
                @endhasrole
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>