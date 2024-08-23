
<header id="page-topbar">
    <div class="layout-width">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box horizontal-logo">
                    <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="{{ asset('steex/layouts/s/assets/images/logo-sm.png')}}" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ asset('steex/layouts/assets/images/logo-dark.png')}}" alt="" height="22">
                        </span>
                    </a>

                    <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="{{ asset('steex/layouts/s/assets/images/logo-sm.png')}}" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="a{{ asset('steex/layouts/ssets/images/logo-light.png')}}" alt="" height="22">
                        </span>
                    </a>
                </div>


           

                <div class="dropdown ms-sm-3 header-item topbar-user">
                    <button type="button" class="btn shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            <img class="rounded-circle header-profile-user" src="{{ asset('steex/layouts/assets/images/users/32/avatar-1.jpg')}}" alt="Header Avatar">
                            <span class="text-start ms-xl-2">

                                <span class="d-none d-xl-block ms-1 fs-sm user-name-sub-text"> Laravel Developer</span>
                            </span>
                        </span>
                </div>
            </div>
        </div>
    </div>
</header>
