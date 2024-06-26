<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="layout-width">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box horizontal-logo">
                            <a href="<?php echo base_url() ?>home" class="logo logo-dark">
                                <span class="logo-sm">
                                    <h1 class="display-7 fw-medium mt-3  lh-base text-black"><img src="<?php echo base_url('public/assets') ?>/images/svg/blender.svg" class="mb-2" alt="" height="35px">Chat<span id="logo-1">Blend</span></h1>
                                </span>
                                <span class="logo-lg">
                                    <h1 class="display-7 fw-medium mt-3  lh-base text-black"><img src="<?php echo base_url('public/assets') ?>/images/svg/blender.svg" class="mb-2" alt="" width="40px" height="35px">Chat<span id="logo-1">Blend</span></h1>
                                </span>
                            </a>

                            <a href="<?php echo base_url() ?>home" class="logo logo-light">
                                <span class="logo-sm">
                                    <h1 class="display-7 fw-medium mt-3 lh-base text-white"><img src="<?php echo base_url('public/assets') ?>/images/svg/blender.svg" class="mb-2" alt="" width="40px" height="35px">Chat<span id="logo-1">Blend</span></h1>
                                </span>
                                <span class="logo-lg">
                                    <h1 class="display-7 fw-medium mt-3 lh-base text-white"><img src="<?php echo base_url('public/assets') ?>/images/svg/blender.svg" class="mb-2" alt="" width="40px" height="35px">Chat<span id="logo-1">Blend</span></h1>
                                </span>
                            </a>
                        </div>
                        <!-- App Search-->
                        <form class="app-search d-none d-md-block mt-1 ml-4">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search..." autocomplete="off" id="search-options" value="">
                                <span class="mdi mdi-magnify search-widget-icon"></span>
                                <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none" id="search-close-options"></span>
                            </div>
                        </form>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="ms-1 header-item d-none d-sm-flex">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle shadow-none" data-toggle="fullscreen">
                                <i class='bx bx-fullscreen fs-22'></i>
                            </button>
                        </div>
                        <div class="ms-1 header-item d-none d-sm-flex">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode shadow-none">
                                <i class='bx bx-moon fs-22'></i>
                            </button>
                        </div>
                        <div class="dropdown topbar-head-dropdown ms-1 header-item">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle shadow-none" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class='bx bx-bell fs-22'></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">

                                <div class="dropdown-head bg-primary bg-pattern rounded-top">
                                    <div class="p-3">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="m-0 fs-16 fw-semibold text-white"> Notifications </h6>
                                            </div>
                                            <div class="col-auto dropdown-tabs">
                                                <span class="badge badge-soft-light fs-13"> 1 New</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="px-2 pt-2">
                                        <ul class="nav nav-tabs dropdown-tabs nav-tabs-custom" data-dropdown-tabs="true" id="notificationItemsTab" role="tablist">
                                            <li class="nav-item waves-effect waves-light">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#all-noti-tab" role="tab" aria-selected="true">
                                                    All (1)
                                                </a>
                                            </li>
                                            <li class="nav-item waves-effect waves-light">
                                                <a class="nav-link" data-bs-toggle="tab" href="#messages-tab" role="tab" aria-selected="false">
                                                    Messages
                                                </a>
                                            </li>
                                            <li class="nav-item waves-effect waves-light">
                                                <a class="nav-link" data-bs-toggle="tab" href="#alerts-tab" role="tab" aria-selected="false">
                                                    Alerts
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>

                                <div class="tab-content" id="notificationItemsTabContent">
                                    <div class="tab-pane fade show active py-2 ps-2" id="all-noti-tab" role="tabpanel">
                                        <div data-simplebar style="max-height: 300px;" class="pe-2">
                                            <div class="text-reset notification-item d-block dropdown-item position-relative">
                                                <div class="d-flex">
                                                    <div class="avatar-xs me-3">
                                                        <span class="avatar-title bg-soft-info text-info rounded-circle fs-16">
                                                            <i class="bx bx-badge-check"></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-1">
                                                        <a href="<?= base_url() ?>/profile_settings" class="stretched-link">
                                                            <h6 class="mt-0 mb-2 lh-base">Welcome, <?= $this->session->userdata('first_name') ?> Complete your profile and connect with the best language partners.
                                                            </h6>
                                                        </a>
                                                        <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                            <span><i class="mdi mdi-clock-outline"></i> Just 30 sec ago</span>
                                                        </p>
                                                    </div>
                                                    <div class="px-2 fs-15">
                                                        <div class="form-check notification-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="all-notification-check01">
                                                            <label class="form-check-label" for="all-notification-check01"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="my-3 text-center">
                                                <button type="button" class="btn btn-soft-success waves-effect waves-light">View
                                                    All Notifications <i class="ri-arrow-right-line align-middle"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade py-2 ps-2" id="messages-tab" role="tabpanel" aria-labelledby="messages-tab">
                                        <div data-simplebar style="max-height: 300px;" class="pe-2">
                                            <div class="text-reset notification-item d-block dropdown-item">

                                            </div>

                                            <div class="text-reset notification-item d-block dropdown-item">

                                            </div>




                                            <div class="my-3 text-center">
                                                <button type="button" class="btn btn-soft-success waves-effect waves-light">View
                                                    All Messages <i class="ri-arrow-right-line align-middle"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade p-4" id="alerts-tab" role="tabpanel" aria-labelledby="alerts-tab">
                                        <div class="w-25 w-sm-50 pt-3 mx-auto">
                                            <img src="<?= ($this->session->userdata('profile_picture') != "") ? $this->session->userdata('profile_picture') : base_url('public/assets/images/people/default.png') ?>" class="img-fluid" alt="user-pic">
                                        </div>
                                        <div class="text-center pb-5 mt-2">
                                            <h6 class="fs-18 fw-semibold lh-base">Hey! You have no any notifications </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown ms-sm-3 header-item topbar-user">
                            <button type="button" class="btn shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="d-flex align-items-center">
                                    <img id="user-img" class="rounded-circle header-profile-user" src="<?= ($this->session->userdata('profile_picture') != "") ? $this->session->userdata('profile_picture') : base_url('public/assets/images/people/default.png') ?>" alt=" Header Avatar">
                                    <span class="text-start ms-xl-2 ">
                                        <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text" id="username">Hi <?= $this->session->userdata('first_name') ?>!</span>
                                    </span>
                                </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <h6 class="dropdown-header" id="welcome"></h6>
                                <a class="dropdown-item" href="<?php echo base_url() ?>profile"><i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Profile</span></a>
                                <a class="dropdown-item" href="<?php echo base_url() ?>chats"><i class="mdi mdi-chat-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Chats</span></a>
                                <a class="dropdown-item" href="<?php echo base_url() ?>faq"><i class="mdi mdi-help-circle-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">FAQ</b></span></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo base_url() ?>profile_settings"><i class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Settings</span></a>
                                <a class="dropdown-item" href="<?php echo base_url() ?>users/logoff"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>