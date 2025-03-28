<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <img src="{{ asset('images/penro_cag.png') }}" width="40px" height="40px" alt="" style="background-color: white; border-radius:50%;">
        {{-- <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div> --}}
        <div class="sidebar-brand-text mx-3">PENRO CAG. <sup>RPS</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fa-solid fa-house"></i>
            <span>Dashboard</span></a>
    </li>


 {{-- <li class="nav-item {{ request()->routeIs('add.doc') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('add.doc') }}">
        <i class="fa-solid fa-file-circle-plus"></i>
        <span>Add Document</span>
    </a>
</li> --}}

        <!-- Divider -->
        <hr class="sidebar-divider">

            <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->


        <!-- Lands Section -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLands"
                aria-expanded="false" aria-controls="collapseLands">
                <i class="fa-solid fa-mountain-sun"></i>
                <span>Lands</span>
            </a>
            <div id="collapseLands" class="collapse {{ request()->routeIs('for.doc', 'ppi.doc') ? 'show' : '' }}"
                aria-labelledby="headingLands" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Documents:</h6>
                    <a class="collapse-item {{ request()->routeIs('ppi.doc') ? 'active' : '' }}" href="">FPA (Agri. Lands)</a>
                    <a class="collapse-item {{ request()->routeIs('ppi.doc') ? 'active' : '' }}" href="">RFPA (Residential)</a>
                    <a class="collapse-item {{ request()->routeIs('ppi.doc') ? 'active' : '' }}" href="">SP (School Sites)</a>
                    <a class="collapse-item {{ request()->routeIs('for.doc') ? 'active' : '' }}" href="">Foreshore</a>
                </div>
            </div>
        </li>

        <!-- Forestry Section -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForestry"
                aria-expanded="false" aria-controls="collapseForestry">
                <i class="fa-solid fa-tree"></i>
                <span>Forestry</span>
            </a>
            <div id="collapseForestry" class="collapse {{ request()->routeIs('tenur.doc', 'for.doc', 'ppi.doc') ? 'show' : '' }}"
                aria-labelledby="headingForestry" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Documents:</h6>
                    <a class="collapse-item {{ request()->routeIs('tenur.doc') ? 'active' : '' }}" href="{{ route('tenur.doc') }}">Tenurial Instrument (TI)</a>
                    <a class="collapse-item {{ request()->routeIs('for.doc') ? 'active' : '' }}" href="{{ route('for.doc') }}">Permits</a>
                </div>
            </div>
        </li>

        <!-- Document Records Section -->
        {{-- <li class="nav-item {{ request()->routeIs('tenur.doc', 'for.doc', 'ppi.doc') ? 'active' : '' }}">
            <a class="nav-link {{ request()->routeIs('tenur.doc', 'for.doc', 'ppi.doc') ? '' : 'collapsed' }}" href="#" data-toggle="collapse" data-target="#collapseRecords"
                aria-expanded="{{ request()->routeIs('tenur.doc', 'for.doc', 'ppi.doc') ? 'true' : 'false' }}" aria-controls="collapseRecords">
                <i class="fa-solid fa-folder"></i>
                <span>Document Records</span>
            </a>
            <div id="collapseRecords" class="collapse {{ request()->routeIs('tenur.doc', 'for.doc', 'ppi.doc') ? 'show' : '' }}"
                aria-labelledby="headingRecords" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Documents:</h6>
                    <a class="collapse-item {{ request()->routeIs('tenur.doc') ? 'active' : '' }}" href="{{ route('tenur.doc') }}">Tenurial Instrument (TI)</a>
                    <a class="collapse-item {{ request()->routeIs('for.doc') ? 'active' : '' }}" href="{{ route('for.doc') }}">Foreshore</a>
                    <a class="collapse-item {{ request()->routeIs('ppi.doc') ? 'active' : '' }}" href="{{ route('ppi.doc') }}">API / PPI</a>
                </div>
            </div>
        </li> --}}





    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item {{ request()->routeIs('all.doc') ? 'active' : '' }}">
        <a class="nav-link {{ request()->routeIs( 'all.doc') ? '' : 'collapsed' }}" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="{{ request()->routeIs( 'all.doc') ? 'true' : 'false' }}" aria-controls="collapseUtilities">
            <i class="fa-solid fa-list-check"></i>
            <span>Manage Documents</span>
        </a>
        <div id="collapseUtilities" class="collapse {{ request()->routeIs( 'all.doc') ? 'show' : '' }}" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Manage:</h6>
                <a class="collapse-item {{ request()->routeIs('all.doc') ? 'active' : '' }}" href="{{ route('all.doc') }}">All Documents</a>
                <a class="collapse-item" href="utilities-border.html">Archive Documents</a>
                {{-- Keep these comments without affecting active status --}}
                {{-- <a class="collapse-item" href="utilities-animation.html">Unarchive Documents</a>
                <a class="collapse-item" href="utilities-other.html">Other</a> --}}
            </div>
        </div>
    </li>


    <!-- Divider -->
   <hr class="sidebar-divider">

 {{--   <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="login.html">Login</a>
                <a class="collapse-item" href="register.html">Register</a>
                <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item" href="404.html">404 Page</a>
                <a class="collapse-item" href="blank.html">Blank Page</a>
            </div>
        </div>
    </li> --}}

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('docs.chart') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
    </li>

    <!-- Nav Item - Tables -->
    {{-- <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
    </li> --}}

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    {{-- <!-- Sidebar Message -->
    <div class="sidebar-card d-none d-lg-flex">
        <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
        <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
        <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
    </div> --}}

</ul>
