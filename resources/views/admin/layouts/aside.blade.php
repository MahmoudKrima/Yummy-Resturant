<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('admin') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('admin') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        {{-- <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu --> --}}
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                {{-- Categories --}}
                <li class="nav-item ">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Categories
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('categories/create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add New Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('categories') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View All Categories</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- Team --}}
                <li class="nav-item ">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Team
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('team/create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add New Member</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('team') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View All Members</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- About Us --}}
                <li class="nav-item ">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            About
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('about/create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add New About</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('about') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View All About</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- section side bar --}}
                <li class="nav-item ">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Section
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('section/create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add New Section</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('section') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View All Sections</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- products --}}
                <li class="nav-item ">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Products
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('product/create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add New Product</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('product') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View All Products</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- Reviews section --}}
                <li class="nav-item ">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Reviews
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('review/create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add New Review</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('review') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View All Reviews</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- Events section --}}
                <li class="nav-item ">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Events
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('event/create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add New Event</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('event') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View All Events</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- Gallery section --}}
                <li class="nav-item ">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Gallery
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('gallery/create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add New Gallery</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('gallery') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View All Gallerys</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item ">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Messages
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/show-messages') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View All Messages</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item ">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Booked Tables
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/show-tables') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View All Books</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Starter Page</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Starter Page</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Control Sidebar -->
    {{-- <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar --> --}}
