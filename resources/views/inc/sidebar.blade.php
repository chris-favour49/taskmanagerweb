  <!-- ========== App Menu ========== -->
  <div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('steex/layouts/assets/images/logo-sm.png')}}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('steex/layouts/assets/images/logo-dark.png')}}" alt="" height="22">
            </span>
        </a>
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('stee/layouts/asets/images/logo-sm.png')}}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('ste/layouts/assets/images/logo-light.png')}}" alt="" height="22">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-3xl header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">

                <li class="menu-title"><span data-key="t-menu">DashBoards</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="{{route('dashboard')}}" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ph-gauge"></i> <span data-key="t-dashboards">Dashboards</span>
                    </a>
                </li>


                <li class="menu-title"><span data-key="t-menu">Task Management</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarLayouts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                        <i class="ph-layout"></i> <span data-key="t-layouts">Task Management</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarLayouts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{route('tasks')}}" target="_blank" class="nav-link" data-key="t-horizontal">Create Task</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('alltasks')}}" target="_blank" class="nav-link" data-key="t-two-column">All Task</a>
                            </li>
                        </ul>
                    </div>
                </li>




                <li class="menu-title"><span data-key="t-menu">Projects</span></li>
                <li class="nav-item">
                    <a href="#sidebarEcommerce" class="nav-link menu-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarEcommerce11">
                        <i class="ph-storefront"></i> <span data-key="t-ecommerce11">Projects Settings</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarEcommerce">
                        <ul class="nav nav-sm flex-column">

                            <li class="nav-item">
                                <a href="#" class="nav-link " data-key="t-products-grid">Create Project</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-key="t-product-Details"> Assign Task</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-key="t-product-Details">View Projects</a>
                            </li>

                        </ul>
                    </div>
                </li>

                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
