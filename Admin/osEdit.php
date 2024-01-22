<?php
include('../config.php');
$id = $_GET['id'];

$sql = "select * from os where id = '$id'";

$queryExec = mysqli_query($conn, $sql);

$osDetails = mysqli_fetch_assoc($queryExec);

// echo '<pre>';
// var_dump($osDetails['complainants']);

$complainants = json_decode($osDetails['complainants'], true);
// var_dump($complainants);

$defendants = json_decode($osDetails['defendants'], true);

// var_dump($defendants);
// exit;
?>

<!DOCTYPE html>
<html
  lang="en"
  data-layout="vertical"
  data-topbar="light"
  data-sidebar="dark"
  data-sidebar-size="lg"
  data-sidebar-image="none"
  data-preloader="disable"
  data-theme="default"
  data-theme-colors="default"
>
  <head>
    <meta charset="utf-8" />
    <title>OS - Money Suit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      content="Premium Multipurpose Admin & Dashboard Template"
      name="description"
    />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets-dashboard-dashboard/images/favicon.ico" />

    <!-- jsvectormap css -->
    <link
      href="../assets-dashboard/libs/jsvectormap/css/jsvectormap.min.css"
      rel="stylesheet"
      type="text/css"
    />

    <!--Swiper slider css-->
    <link
      href="../assets-dashboard/libs/swiper/swiper-bundle.min.css"
      rel="stylesheet"
      type="text/css"
    />

    <!-- Layout config Js -->
    <script src="../assets-dashboard/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link
      href="../assets-dashboard/css/bootstrap.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <!-- Icons Css -->
    <link href="../assets-dashboard/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="../assets-dashboard/css/app.min.css" rel="stylesheet" type="text/css" />

    <link href="../assets-dashboard/css/toastr.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="../assets-dashboard/css/custom.min.css" rel="stylesheet" type="text/css" />
  </head>

  <body>
    <!-- Begin page -->
    <div id="layout-wrapper">
      <header id="page-topbar">
        <div class="layout-width">
          <div class="navbar-header">
            <div class="d-flex">
              <!-- LOGO -->
              <div class="navbar-brand-box horizontal-logo">
                <a href="index.php" class="logo logo-dark">
                  <span class="logo-sm">
                    <img src="../assets-dashboard/images/logo-sm.png" alt="" height="22" />
                  </span>
                  <span class="logo-lg">
                    <img src="../assets-dashboard/images/logo-dark.png" alt="" height="17" />
                  </span>
                </a>

                <a href="index.php" class="logo logo-light">
                  <span class="logo-sm">
                    <img src="../assets-dashboard/images/logo-sm.png" alt="" height="22" />
                  </span>
                  <span class="logo-lg">
                    <img
                      src="../assets-dashboard/images/logo-light.png"
                      alt=""
                      height="17"
                    />
                  </span>
                </a>
              </div>

              <button
                type="button"
                class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger material-shadow-none"
                id="topnav-hamburger-icon"
              >
                <span class="hamburger-icon">
                  <span></span>
                  <span></span>
                  <span></span>
                </span>
              </button>

              <!-- App Search-->
              <form id="" class="app-search d-none d-md-block">
                <div class="position-relative">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Search..."
                    autocomplete="off"
                    id="search-options"
                    value=""
                  />
                  <span class="mdi mdi-magnify search-widget-icon"></span>
                  <span
                    class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none"
                    id="search-close-options"
                  ></span>
                </div>
                <div
                  class="dropdown-menu dropdown-menu-lg"
                  id="search-dropdown"
                >
                  <div data-simplebar style="max-height: 320px">
                    <!-- item-->
                    <div class="dropdown-header">
                      <h6 class="text-overflow text-muted mb-0 text-uppercase">
                        Recent Searches
                      </h6>
                    </div>

                    <div class="dropdown-item bg-transparent text-wrap">
                      <a
                        href="index.php"
                        class="btn btn-soft-secondary btn-sm rounded-pill"
                        >how to setup <i class="mdi mdi-magnify ms-1"></i
                      ></a>
                      <a
                        href="index.php"
                        class="btn btn-soft-secondary btn-sm rounded-pill"
                        >buttons <i class="mdi mdi-magnify ms-1"></i
                      ></a>
                    </div>
                    <!-- item-->
                    <div class="dropdown-header mt-2">
                      <h6 class="text-overflow text-muted mb-1 text-uppercase">
                        Pages
                      </h6>
                    </div>

                    <!-- item-->
                    <a
                      href="javascript:void(0);"
                      class="dropdown-item notify-item"
                    >
                      <i
                        class="ri-bubble-chart-line align-middle fs-18 text-muted me-2"
                      ></i>
                      <span>Analytics Dashboard</span>
                    </a>

                    <!-- item-->
                    <a
                      href="javascript:void(0);"
                      class="dropdown-item notify-item"
                    >
                      <i
                        class="ri-lifebuoy-line align-middle fs-18 text-muted me-2"
                      ></i>
                      <span>Help Center</span>
                    </a>

                    <!-- item-->
                    <a
                      href="javascript:void(0);"
                      class="dropdown-item notify-item"
                    >
                      <i
                        class="ri-user-settings-line align-middle fs-18 text-muted me-2"
                      ></i>
                      <span>My account settings</span>
                    </a>

                    <!-- item-->
                    <div class="dropdown-header mt-2">
                      <h6 class="text-overflow text-muted mb-2 text-uppercase">
                        Members
                      </h6>
                    </div>

                    <div class="notification-list">
                      <!-- item -->
                      <a
                        href="javascript:void(0);"
                        class="dropdown-item notify-item py-2"
                      >
                        <div class="d-flex">
                          <img
                            src="../assets-dashboard/images/users/avatar-2.jpg"
                            class="me-3 rounded-circle avatar-xs"
                            alt="user-pic"
                          />
                          <div class="flex-grow-1">
                            <h6 class="m-0">Angela Bernier</h6>
                            <span class="fs-11 mb-0 text-muted">Manager</span>
                          </div>
                        </div>
                      </a>
                      <!-- item -->
                      <a
                        href="javascript:void(0);"
                        class="dropdown-item notify-item py-2"
                      >
                        <div class="d-flex">
                          <img
                            src="../assets-dashboard/images/users/avatar-3.jpg"
                            class="me-3 rounded-circle avatar-xs"
                            alt="user-pic"
                          />
                          <div class="flex-grow-1">
                            <h6 class="m-0">David Grasso</h6>
                            <span class="fs-11 mb-0 text-muted"
                              >Web Designer</span
                            >
                          </div>
                        </div>
                      </a>
                      <!-- item -->
                      <a
                        href="javascript:void(0);"
                        class="dropdown-item notify-item py-2"
                      >
                        <div class="d-flex">
                          <img
                            src="../assets-dashboard/images/users/avatar-5.jpg"
                            class="me-3 rounded-circle avatar-xs"
                            alt="user-pic"
                          />
                          <div class="flex-grow-1">
                            <h6 class="m-0">Mike Bunch</h6>
                            <span class="fs-11 mb-0 text-muted"
                              >React Developer</span
                            >
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>

                  <div class="text-center pt-3 pb-1">
                    <a
                      href="pages-search-results.html"
                      class="btn btn-primary btn-sm"
                      >View All Results <i class="ri-arrow-right-line ms-1"></i
                    ></a>
                  </div>
                </div>
              </form>
            </div>

            <div class="d-flex align-items-center">
              <div class="dropdown d-md-none topbar-head-dropdown header-item">
                <button
                  type="button"
                  class="btn btn-icon btn-topbar material-shadow-none btn-ghost-secondary rounded-circle"
                  id="page-header-search-dropdown"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="bx bx-search fs-22"></i>
                </button>
                <div
                  class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                  aria-labelledby="page-header-search-dropdown"
                >
                  <form class="p-3">
                    <div class="form-group m-0">
                      <div class="input-group">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Search ..."
                          aria-label="Recipient's username"
                        />
                        <button class="btn btn-primary" type="button">
                          <i class="mdi mdi-magnify"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>

              <div class="ms-1 header-item d-none d-sm-flex">
                <button
                  type="button"
                  class="btn btn-icon btn-topbar material-shadow-none btn-ghost-secondary rounded-circle"
                  data-toggle="fullscreen"
                >
                  <i class="bx bx-fullscreen fs-22"></i>
                </button>
              </div>

              <div class="ms-1 header-item d-none d-sm-flex">
                <button
                  type="button"
                  class="btn btn-icon btn-topbar material-shadow-none btn-ghost-secondary rounded-circle light-dark-mode"
                >
                  <i class="bx bx-moon fs-22"></i>
                </button>
              </div>

              <div
                class="dropdown topbar-head-dropdown ms-1 header-item"
                id="notificationDropdown"
              >
                <button
                  type="button"
                  class="btn btn-icon btn-topbar material-shadow-none btn-ghost-secondary rounded-circle"
                  id="page-header-notifications-dropdown"
                  data-bs-toggle="dropdown"
                  data-bs-auto-close="outside"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="bx bx-bell fs-22"></i>
                  <span
                    class="position-absolute topbar-badge fs-10 translate-middle badge rounded-pill bg-danger"
                    >3<span class="visually-hidden">unread messages</span></span
                  >
                </button>
              </div>

              <div class="dropdown ms-sm-3 header-item topbar-user">
                <button
                  type="button"
                  class="btn material-shadow-none"
                  id="page-header-user-dropdown"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <span class="d-flex align-items-center">
                    <img
                      class="rounded-circle header-profile-user"
                      src=""
                      alt="Header Avatar"
                    />
                    <span class="text-start ms-xl-2">
                      <span
                        class="d-none d-xl-inline-block ms-1 fw-medium user-name-text"
                        >Admin</span
                      >
                      <span
                        class="d-none d-xl-block ms-1 fs-12 user-name-sub-text"
                        >Judge</span
                      >
                    </span>
                  </span>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                  <!-- item-->
                  <h6 class="dropdown-header">Welcome Admin!</h6>
                  <a class="dropdown-item" href=""
                    ><i
                      class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"
                    ></i>
                    <span class="align-middle">Profile</span></a
                  >

                  <div class="dropdown-divider"></div>

                  <a class="dropdown-item" href=""
                    ><i
                      class="mdi mdi-logout text-muted fs-16 align-middle me-1"
                    ></i>
                    <span class="align-middle" data-key="t-logout"
                      >Logout</span
                    ></a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>

      <!-- removeNotificationModal -->
      <div
        id="removeNotificationModal"
        class="modal fade zoomIn"
        tabindex="-1"
        aria-hidden="true"
      >
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
                id="NotificationModalbtn-close"
              ></button>
            </div>
            <div class="modal-body">
              <div class="mt-2 text-center">
                <lord-icon
                  src="https://cdn.lordicon.com/gsqxdxog.json"
                  trigger="loop"
                  colors="primary:#f7b84b,secondary:#f06548"
                  style="width: 100px; height: 100px"
                ></lord-icon>
                <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                  <h4>Are you sure ?</h4>
                  <p class="text-muted mx-4 mb-0">
                    Are you sure you want to remove this Notification ?
                  </p>
                </div>
              </div>
              <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                <button
                  type="button"
                  class="btn w-sm btn-light"
                  data-bs-dismiss="modal"
                >
                  Close
                </button>
                <button
                  type="button"
                  class="btn w-sm btn-danger"
                  id="delete-notification"
                >
                  Yes, Delete It!
                </button>
              </div>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      <!-- ========== App Menu ========== -->
      <div class="app-menu navbar-menu">
        <!-- LOGO -->
        <div class="navbar-brand-box">
          <!-- Dark Logo-->
          <a href="index.php" class="logo logo-dark">
            <span class="logo-sm">
              <img src="../assets-dashboard/images/logo-sm.png" alt="" height="22" />
            </span>
            <span class="logo-lg">
              <img src="../assets-dashboard/images/logo-dark.png" alt="" height="17" />
            </span>
          </a>
          <!-- Light Logo-->
          <a href="index.php" class="logo logo-light">
            <span class="logo-sm">
              <img src="../assets-dashboard/images/logo-sm.png" alt="" height="22" />
            </span>
            <span class="logo-lg">
              <img src="../assets-dashboard/images/logo-light.png" alt="" height="17" />
            </span>
          </a>
          <button
            type="button"
            class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover"
          >
            <i class="ri-record-circle-line"></i>
          </button>
        </div>

        <div class="dropdown sidebar-user m-1 rounded">
          <button
            type="button"
            class="btn material-shadow-none"
            id="page-header-user-dropdown"
            data-bs-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >
            <span class="d-flex align-items-center gap-2">
              <img
                class="rounded header-profile-user"
                src="../assets-dashboard/images/users/avatar-1.jpg"
                alt="Header Avatar"
              />
              <span class="text-start">
                <span class="d-block fw-medium sidebar-user-name-text"
                  >Anna Adame</span
                >
                <span class="d-block fs-14 sidebar-user-name-sub-text"
                  ><i
                    class="ri ri-circle-fill fs-10 text-success align-baseline"
                  ></i>
                  <span class="align-middle">Online</span></span
                >
              </span>
            </span>
          </button>
          <div class="dropdown-menu dropdown-menu-end">
            <!-- item-->
            <h6 class="dropdown-header">Welcome Anna!</h6>
            <a class="dropdown-item" href="pages-profile.html"
              ><i
                class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"
              ></i>
              <span class="align-middle">Profile</span></a
            >
            <a class="dropdown-item" href="apps-chat.html"
              ><i
                class="mdi mdi-message-text-outline text-muted fs-16 align-middle me-1"
              ></i>
              <span class="align-middle">Messages</span></a
            >
            <a class="dropdown-item" href="apps-tasks-kanban.html"
              ><i
                class="mdi mdi-calendar-check-outline text-muted fs-16 align-middle me-1"
              ></i>
              <span class="align-middle">Taskboard</span></a
            >
            <a class="dropdown-item" href="pages-faqs.html"
              ><i
                class="mdi mdi-lifebuoy text-muted fs-16 align-middle me-1"
              ></i>
              <span class="align-middle">Help</span></a
            >
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="pages-profile.html"
              ><i class="mdi mdi-wallet text-muted fs-16 align-middle me-1"></i>
              <span class="align-middle">Balance : <b>$5971.67</b></span></a
            >
            <a class="dropdown-item" href="pages-profile-settings.html"
              ><span class="badge bg-success-subtle text-success mt-1 float-end"
                >New</span
              ><i
                class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"
              ></i>
              <span class="align-middle">Settings</span></a
            >
            <a class="dropdown-item" href="auth-lockscreen-basic.html"
              ><i class="mdi mdi-lock text-muted fs-16 align-middle me-1"></i>
              <span class="align-middle">Lock screen</span></a
            >
            <a class="dropdown-item" href="auth-logout-basic.html"
              ><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i>
              <span class="align-middle" data-key="t-logout">Logout</span></a
            >
          </div>
        </div>
        <div id="scrollbar">
          <div class="container-fluid">
            <div id="two-column-menu"></div>
            <ul class="navbar-nav" id="navbar-nav">
              <li class="menu-title"><span data-key="t-menu">Menu</span></li>
              <li class="nav-item">
                <a
                  class="nav-link menu-link"
                  href="index.php"
                  role="button"
                  aria-expanded="false"
                  aria-controls="sidebarDashboards"
                >
                  <i class="ri-dashboard-2-line"></i>
                  <span data-key="t-dashboards">Dashboard</span>
                </a>
              </li>
              <!-- end Dashboard Menu -->
              <li class="nav-item">
                <a
                  class="nav-link menu-link"
                  href="#sidebarApps"
                  data-bs-toggle="collapse"
                  role="button"
                  aria-expanded="false"
                  aria-controls="sidebarApps"
                >
                  <i class="ri-file-list-3-line"></i>
                  <span data-key="t-apps">Case Type</span>
                </a>
                <div class="collapse menu-dropdown" id="sidebarApps">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a
                        href="#sidebarCalendar"
                        class="nav-link"
                        data-bs-toggle="collapse"
                        role="button"
                        aria-expanded="false"
                        aria-controls="sidebarCalendar"
                        data-key="t-calender"
                      >
                        OS
                      </a>
                      <div class="collapse menu-dropdown" id="sidebarCalendar">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                            <a
                              href="os_moneysuit.html"
                              class="nav-link"
                              data-key="t-main-calender"
                            >
                              OS - Money Suite
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="" class="nav-link" data-key="t-month-grid">
                              OS - 2
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="" class="nav-link" data-key="t-month-grid">
                              OS - 3
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="collapse menu-dropdown" id="sidebarApps">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a
                        href="#sidebarCalendar"
                        class="nav-link"
                        data-bs-toggle="collapse"
                        role="button"
                        aria-expanded="false"
                        aria-controls="sidebarCalendar"
                        data-key="t-calender"
                      >
                        HMOP
                      </a>
                      <div class="collapse menu-dropdown" id="sidebarCalendar">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                            <a
                              href=""
                              class="nav-link"
                              data-key="t-main-calender"
                            >
                              HMOP - 1
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="" class="nav-link" data-key="t-month-grid">
                              HMOP - 2
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="" class="nav-link" data-key="t-month-grid">
                              HMOP - 3
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="collapse menu-dropdown" id="sidebarApps">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a
                        href="#sidebarCalendar"
                        class="nav-link"
                        data-bs-toggle="collapse"
                        role="button"
                        aria-expanded="false"
                        aria-controls="sidebarCalendar"
                        data-key="t-calender"
                      >
                        Others
                      </a>
                      <div class="collapse menu-dropdown" id="sidebarCalendar">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                            <a
                              href=""
                              class="nav-link"
                              data-key="t-main-calender"
                            >
                              Others - 1
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="" class="nav-link" data-key="t-month-grid">
                              Others - 2
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="" class="nav-link" data-key="t-month-grid">
                              Others - 3
                            </a>
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
      <!-- Vertical Overlay-->
      <div class="vertical-overlay"></div>

      <!-- ============================================================== -->
      <!-- Start right Content here -->
      <!-- ============================================================== -->
      <div class="main-content">
        <div class="page-content">
          <div class="container-fluid">
            <div class="row">
              <div class="col">
                <div class="h-100">
                  <div class="row mb-3 pb-1">
                    <div class="col-12">
                      <div
                        class="d-flex align-items-lg-center flex-lg-row flex-column"
                      >
                        <div class="flex-grow-1">
                          <h4 class="fs-16 mb-1">Good Morning, Admin!</h4>
                          <p class="text-muted mb-0">வாய்மையே வெல்லும்</p>
                        </div>
                      </div>
                      <!-- end card header -->
                    </div>
                    <!--end col-->
                  </div>
                </div>
                <!-- end .h-100-->
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <h4 class="card-title mb-0">Case Type : OS (Money Suite)</h4>
              </div>
              <!-- end card header -->
              <div class="card-body form-steps">
                <form id="osMoneySuit" class="vertical-navs-step">
                  <div class="row gy-5">
                    <div class="col-lg-3">
                      <div
                        class="nav flex-column custom-nav nav-pills"
                        role="tablist"
                        aria-orientation="vertical"
                      >
                        <button
                          class="nav-link active"
                          id="v-pills-bill-info-tab"
                          data-bs-toggle="pill"
                          data-bs-target="#v-pills-bill-info"
                          type="button"
                          role="tab"
                          aria-controls="v-pills-bill-info"
                          aria-selected="false"
                          data-position="0"
                          tabindex="-1"
                        >
                          <span class="step-title me-2">
                            <i class="ri-close-circle-fill step-icon me-2"></i>
                            Step 1
                          </span>
                          வாதி
                        </button>
                        <button
                          class="nav-link"
                          id="v-pills-bill-address-tab"
                          data-bs-toggle="pill"
                          data-bs-target="#v-pills-bill-address"
                          type="button"
                          role="tab"
                          aria-controls="v-pills-bill-address"
                          aria-selected="true"
                          data-position="-1"
                        >
                          <span class="step-title me-2">
                            <i class="ri-close-circle-fill step-icon me-2"></i>
                            Step 2
                          </span>
                          எதிர்வாதி
                        </button>
                        <button
                          class="nav-link"
                          id="v-pills-payment-tab"
                          data-bs-toggle="pill"
                          data-bs-target="#v-pills-payment"
                          type="button"
                          role="tab"
                          aria-controls="v-pills-payment"
                          aria-selected="false"
                          data-position="2"
                          tabindex="-1"
                        >
                          <span class="step-title me-2">
                            <i class="ri-close-circle-fill step-icon me-2"></i>
                            Step 3
                          </span>
                          தீர்ப்புரை
                        </button>
                        <button
                          class="nav-link"
                          id="v-pills-finish-tab"
                          data-bs-toggle="pill"
                          data-bs-target="#v-pills-finish"
                          type="button"
                          role="tab"
                          aria-controls="v-pills-finish"
                          aria-selected="false"
                          data-position="3"
                          tabindex="-1"
                        >
                          <span class="step-title me-2">
                            <i class="ri-close-circle-fill step-icon me-2"></i>
                            Step 4
                          </span>
                          இறுதி முடிவு
                        </button>
                      </div>
                      <!-- end nav -->
                    </div>
                    <!-- end col-->

                    
                    <div class="col-lg-6 ">
                      <div class="px-lg-4">
                        <div class="tab-content">
                          <div class="tab-pane fade active show complainantTab"
                            id="v-pills-bill-info"
                            role="tabpanel"
                            aria-labelledby="v-pills-bill-info-tab"
                          >
                          <div class="col-sm-6">
                                    <label for="firstName" class="form-label"
                                      >அசல் வழக்கு எண்:</label
                                    >
                                    <input
                                      type="text"
                                      class="form-control realCaseNo" name="realCaseNo"
                                      placeholder="e.g. 001/002"
                                      value="<?php echo $osDetails['case_no']; ?>"
                                      required=""
                                    />
                                    <div class="invalid-feedback">
                                      Please enter அசல் வழக்கு எண்
                                    </div>
                                  </div>

                                  <div class="col-sm-6">
                                    <label for="lastName" class="form-label"
                                      >CNR NO:</label
                                    >
                                    <input
                                      type="text"
                                      class="form-control cnrNo"
                                      name="cnrNo"
                                      placeholder=""
                                      value="<?php echo $osDetails['cnr_no']; ?>"
                                      required=""
                                    />
                                    <div class="invalid-feedback">
                                      Please enter a CNR No
                                    </div>
                                  </div>
                           <!-- vaadhi starts -->
                            <div class="complainant my-3">   
                            <?php
                            if(!empty($osDetails)){
                                    foreach($complainants as $key=> $complainant){
                                ?>
                                    <div class="">
                                        <h5 class="fw-bold">வாதி<span class="complainantCount ms-1"><?php echo ($key+1); ?></span></h5>
                                        <p class="text-muted">
                                        Fill all information below
                                        </p>
                                    </div>
                                
                                    <div class="my-3">
                                        <div class="row g-3">
                                    
                                            <div class="col-md-3">
                                                <label for="cc-number" class="form-label"
                                                >வாதியின் பெயர்:</label
                                                >
                                                <input
                                                type="text"
                                                class="form-control complainantName"
                                                name="complainantName[]"
                                                id="vathi-name"
                                                placeholder=""
                                                required=""
                                                value="<?php echo $complainant['name']; ?>"
                                                />
                                                <div class="invalid-feedback">
                                                வாதியின் பெயர் is required
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <label for="cc-expiration" class="form-label"
                                                >வயது:</label
                                                >
                                                <input
                                                type="text"
                                                class="form-control complainantAge"
                                                name="complainantAge[]"
                                                id="vathi-age"
                                                placeholder=""
                                                required=""
                                                value="<?php echo $complainant['age']; ?>"
                                                />
                                                <div class="invalid-feedback">
                                                வயது is required
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <label for="state" class="form-label"
                                                >Notation</label
                                                >
                                                <select class="form-select complainantNotation" name="complainantNotation[]" id="state">
                                                <option value="" selected></option>
                                                <option value="த/பெ" <?=$complainant['notation'] == 'த/பெ' ? ' selected="selected"' : '';?> >த/பெ</option>
                                                <option value="ம/பெ" <?=$complainant['notation'] == 'ம/பெ' ? ' selected="selected"' : '';?> >ம/பெ</option>
                                                <option value="க/பெ" <?=$complainant['notation'] == 'க/பெ' ? ' selected="selected"' : '';?>>க/பெ</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                Please select a Notation
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="cc-cvv" class="form-label"
                                                >பெயர்:</label
                                                >
                                                <input
                                                type="text"
                                                class="form-control complainantNotationName"
                                                name="complainantNotationName[]"
                                                id="cc-cvv"
                                                placeholder=""
                                                required=""
                                                value="<?php echo $complainant['notationName']; ?>"
                                                />
                                                <div class="invalid-feedback">
                                                பெயர் required
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="state" class="form-label"
                                                >பாலினம்:</label
                                                >
                                                <select class="form-select complainantGender" name="complainantGender[]" id="state">
                                                <option value="" selected></option>
                                                <option value="ஆண்" <?=$complainant['gender'] == 'ஆண்' ? ' selected="selected"' : '';?> >ஆண்</option>
                                                <option value="பெண்" <?=$complainant['gender'] == 'பெண்' ? ' selected="selected"' : '';?> >பெண்</option>
                                                <option value="மற்றவை" <?=$complainant['gender'] == 'மற்றவை' ? ' selected="selected"' : '';?> >மற்றவை</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                பாலினம் is required
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="state" class="form-label"
                                                >மதம்:</label
                                                >
                                                <select class="form-select complainantReligion" name="complainantReligion[]" id="state">
                                                <option value="" selected></option>
                                                <option value="இந்து" <?=$complainant['religion'] == 'இந்து' ? ' selected="selected"' : '';?> >இந்து</option>
                                                <option value="முஸ்லீம்" <?=$complainant['religion'] == 'முஸ்லீம்' ? ' selected="selected"' : '';?> >முஸ்லீம்</option>
                                                <option value="கிறித்தவம்" <?=$complainant['religion'] == 'கிறித்தவம்' ? ' selected="selected"' : '';?>>கிறித்தவம்</option>
                                                <option value="மற்றவை" <?=$complainant['religion'] == 'மற்றவை' ? ' selected="selected"' : '';?> >மற்றவை</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                மதம் is required
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="cc-expiration" class="form-label"
                                                >முகவரி 1:</label
                                                >
                                                <input
                                                type="text"
                                                class="form-control complainantaddress-1"
                                                name="complainantAddress-1[]"
                                                id="vathi-age"
                                                placeholder=""
                                                required=""
                                                value="<?php echo $complainant['address1']; ?>"
                                                />
                                                <div class="invalid-feedback">
                                                முகவரி 1: is required
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="cc-expiration" class="form-label"
                                                >முகவரி 2:</label
                                                >
                                                <input
                                                type="text"
                                                class="form-control complainantAddress-2"
                                                name="complainantAddress-2[]"
                                                id="vathi-age"
                                                placeholder=""
                                                required=""
                                                value="<?php echo $complainant['address2']; ?>"
                                                />
                                                <div class="invalid-feedback">
                                                முகவரி 2: is required
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <label for="state" class="form-label"
                                                >தாலுகா:</label
                                                >
                                                <select class="form-select complainantTaluk" name="complainantTaluk[]" id="state">
                                                <option value="" selected></option>
                                                <option value="திண்டுக்கல்" <?=$complainant['taluk'] == 'திண்டுக்கல்' ? ' selected="selected"' : '';?> >திண்டுக்கல்</option>
                                                <option value="வேடசந்தூர்" <?=$complainant['taluk'] == 'வேடசந்தூர்' ? ' selected="selected"' : '';?> >வேடசந்தூர்</option>
                                                <option value="பழனி" <?=$complainant['taluk'] == 'பழனி' ? ' selected="selected"' : '';?> >பழனி</option>
                                                <option value="நிலக்கோட்டை" <?=$complainant['taluk'] == 'நிலக்கோட்டை' ? ' selected="selected"' : '';?> >நிலக்கோட்டை</option>
                                                <option value="ஒட்டன்சத்திரம்" <?=$complainant['taluk'] == 'ஒட்டன்சத்திரம்' ? ' selected="selected"' : '';?> >ஒட்டன்சத்திரம்</option>
                                                <option value="ஆத்தூர்" <?=$complainant['taluk'] == 'ஆத்தூர்' ? ' selected="selected"' : '';?>>ஆத்தூர்</option>
                                                <option value="நத்தம்" <?=$complainant['taluk'] == 'நத்தம்' ? ' selected="selected"' : '';?> >நத்தம்</option>
                                                <option value="கொடைக்கானல்" <?=$complainant['taluk'] == 'கொடைக்கானல்' ? ' selected="selected"' : '';?> >கொடைக்கானல்</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                தாலுகா is required
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="state" class="form-label"
                                                >மாவட்டம்:</label
                                                >
                                                <select class="form-select complainantDistrict" name="complainantDistrict[]" id="state">
                                                <option value="" selected></option>
                                                <option value="திண்டுக்கல்" <?=$complainant['district'] == 'திண்டுக்கல்' ? ' selected="selected"' : '';?> >திண்டுக்கல்</option>

                                                <option value="சென்னை" <?=$complainant['district'] == 'சென்னை' ? ' selected="selected"' : '';?> >சென்னை</option>

                                                <option value="காஞ்சிபுரம்" <?=$complainant['district'] == 'காஞ்சிபுரம்' ? ' selected="selected"' : '';?> >காஞ்சிபுரம்</option>

                                                <option value="செங்கல்பட்டு" <?=$complainant['district'] == 'செங்கல்பட்டு' ? ' selected="selected"' : '';?> >செங்கல்பட்டு</option>

                                                <option value="திருவள்ளூர்" <?=$complainant['district'] == 'திருவள்ளூர்' ? ' selected="selected"' : '';?> >திருவள்ளூர்</option>

                                                <option value="திருவண்ணாமலை" <?=$complainant['district'] == 'திருவண்ணாமலை' ? ' selected="selected"' : '';?> >திருவண்ணாமலை</option>

                                                <option value="வேலூர்" <?=$complainant['district'] == 'வேலூர்' ? ' selected="selected"' : '';?> >வேலூர்</option>

                                                <option value="விழுப்புரம்" <?=$complainant['district'] == 'விழுப்புரம்' ? ' selected="selected"' : '';?> >விழுப்புரம்</option>

                                                <option value="கள்ளக்குறிச்சி" <?=$complainant['district'] == 'கள்ளக்குறிச்சி' ? ' selected="selected"' : '';?> >கள்ளக்குறிச்சி</option>

                                                <option value="திருப்பத்தூர்" <?=$complainant['district'] == 'திருப்பத்தூர்' ? ' selected="selected"' : '';?> >திருப்பத்தூர்</option>

                                                <option value="இராணிப்பேட்டை" <?=$complainant['district'] == 'இராணிப்பேட்டை' ? ' selected="selected"' : '';?> >இராணிப்பேட்டை</option>

                                                <option value="அரியலூர்" <?=$complainant['district'] == 'அரியலூர்' ? ' selected="selected"' : '';?> >அரியலூர்</option>

                                                <option value="கடலூர்" <?=$complainant['district'] == 'கடலூர்' ? ' selected="selected"' : '';?> >கடலூர்</option>

                                                <option value="மயிலாடுதுறை" <?=$complainant['district'] == 'மயிலாடுதுறை' ? ' selected="selected"' : '';?> >மயிலாடுதுறை</option>

                                                <option value="நாகப்பட்டினம்" <?=$complainant['district'] == 'நாகப்பட்டினம்' ? ' selected="selected"' : '';?> >நாகப்பட்டினம்</option>

                                                <option value="பெரம்பலூர்" <?=$complainant['district'] == 'பெரம்பலூர்' ? ' selected="selected"' : '';?> >பெரம்பலூர்</option>

                                                <option value="புதுக்கோட்டை" <?=$complainant['district'] == 'புதுக்கோட்டை' ? ' selected="selected"' : '';?> >புதுக்கோட்டை</option>

                                                <option value="தஞ்சாவூர்" <?=$complainant['district'] == 'தஞ்சாவூர்' ? ' selected="selected"' : '';?> >தஞ்சாவூர்</option>
                                                
                                                <option value="திருச்சிராப்பள்ளி" <?=$complainant['district'] == 'திருச்சிராப்பள்ளி' ? ' selected="selected"' : '';?> >திருச்சிராப்பள்ளி</option>

                                                <option value="திருவாரூர்" <?=$complainant['district'] == 'திருவாரூர்' ? ' selected="selected"' : '';?> >திருவாரூர்</option>

                                                <option value="தருமபுரி" <?=$complainant['district'] == 'தருமபுரி' ? ' selected="selected"' : '';?> >தருமபுரி</option>

                                                <option value="திண்டுக்கல்" <?=$complainant['district'] == 'திண்டுக்கல்' ? ' selected="selected"' : '';?> >திண்டுக்கல்</option>

                                                <option value="கோயம்புத்தூர்" <?=$complainant['district'] == 'கோயம்புத்தூர்' ? ' selected="selected"' : '';?> >கோயம்புத்தூர்</option>

                                                <option value="கரூர்" <?=$complainant['district'] == 'கரூர்' ? ' selected="selected"' : '';?> >கரூர்</option>

                                                <option value="ஈரோடு" <?=$complainant['district'] == 'ஈரோடு' ? ' selected="selected"' : '';?> >ஈரோடு</option>

                                                <option value="கிருஷ்ணகிரி" <?=$complainant['district'] == 'கிருஷ்ணகிரி' ? ' selected="selected"' : '';?> >கிருஷ்ணகிரி</option>

                                                <option value="நாமக்கல்" <?=$complainant['district'] == 'நாமக்கல்' ? ' selected="selected"' : '';?> >நாமக்கல்</option>

                                                <option value="நீலகிரி" <?=$complainant['district'] == 'நீலகிரி' ? ' selected="selected"' : '';?> >நீலகிரி</option>

                                                <option value="சேலம்" <?=$complainant['district'] == 'சேலம்' ? ' selected="selected"' : '';?>>சேலம்</option>

                                                <option value="திருப்பூர்" <?=$complainant['district'] == 'திருப்பூர்' ? ' selected="selected"' : '';?> >திருப்பூர்</option>

                                                <option value="கன்னியாகுமரி" <?=$complainant['district'] == 'கன்னியாகுமரி' ? ' selected="selected"' : '';?> >கன்னியாகுமரி</option>

                                                <option value="மதுரை" <?=$complainant['district'] == 'மதுரை' ? ' selected="selected"' : '';?> >மதுரை</option>

                                                <option value="இராமநாதபுரம்" <?=$complainant['district'] == 'இராமநாதபுரம்' ? ' selected="selected"' : '';?> >இராமநாதபுரம்</option>

                                                <option value="சிவகங்கை" <?=$complainant['district'] == 'சிவகங்கை' ? ' selected="selected"' : '';?> >சிவகங்கை</option>

                                                <option value="தேனி" <?=$complainant['district'] == 'தேனி' ? ' selected="selected"' : '';?> >தேனி</option>

                                                <option value="தூத்துக்குடி" <?=$complainant['district'] == 'தூத்துக்குடி' ? ' selected="selected"' : '';?> >தூத்துக்குடி</option>

                                                <option value="திருநெல்வேலி" <?=$complainant['district'] == 'திருநெல்வேலி' ? ' selected="selected"' : '';?> >திருநெல்வேலி</option>

                                                <option value="தென்காசி" <?=$complainant['district'] == 'தென்காசி' ? ' selected="selected"' : '';?> >தென்காசி</option>

                                                <option value="விருதுநகர்" <?=$complainant['district'] == 'விருதுநகர்' ? ' selected="selected"' : '';?> >விருதுநகர்</option>

                                                </select>
                                                <div class="invalid-feedback">
                                                மாவட்டம் is required
                                                </div>
                                            </div>

                                    
                                            <div class="col-md-4" style="margin-top: 43px">
                                                <button
                                                type="button"
                                                class="btn btn-success add-btn"
                                                data-bs-toggle="modal"
                                                id="create-btn"
                                                data-bs-target="#showModal"
                                                >
                                                <i
                                                    class="ri-add-line align-bottom me-1"
                                                ></i>
                                                Add
                                                </button>
                                                <button class="btn btn-soft-danger delete-btn">
                                                <i class="ri-delete-bin-2-line"></i> Delete
                                                </button>
                                            </div>
                                        </div>
                                
                                    </div>
                                <?php
                                }
                                }        
                                ?>

                            </div>

                            <!-- vaadhi ends here -->
                            
                              <div class="d-flex align-items-start gap-3 mt-4">
                                <button
                                  type="button"
                                  class="btn btn-success btn-label right ms-auto nexttab nexttab"
                                  data-nexttab="v-pills-bill-address-tab"
                                >
                                  <i
                                    class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"
                                  ></i
                                  >Next
                                </button>
                              </div>
                            
                            
                          </div>
                          <!-- end tab pane -->


                         
                          <div class="tab-pane fade "
                            id="v-pills-bill-address"
                            role="tabpanel"
                            aria-labelledby="v-pills-bill-address-tab"
                          >

                          <!-- edir vaadhi starts here -->
                            <div class="defendant my-3">
                            <?php
                                if(!empty($osDetails)){
                                    foreach($defendants as $key=> $defendant){
                            ?>
                                        <div class="mt-3">
                                            <h5>எதிர்வாதி<span class="defendantCount ms-1"><?php echo ($key+1); ?></span></h5>
                                            <p class="text-muted">
                                            Fill all information below
                                            </p>
                                        </div>

                                        <div>
                                            <div class="row g-3">
                                            <div class="col-md-3">
                                                <label for="cc-number" class="form-label"
                                                >எதிர்வாதி பெயர்:</label
                                                >
                                                <input
                                                type="text"
                                                class="form-control defendantName"
                                                name="defendantName[]"
                                                id="vathi-name"
                                                placeholder=""
                                                required=""
                                                value="<?php echo $defendant['name']; ?>"
                                                />
                                                <div class="invalid-feedback">
                                                எதிர்வாதி பெயர் is required
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <label for="cc-expiration" class="form-label"
                                                >வயது:</label
                                                >
                                                <input
                                                type="text"
                                                class="form-control defendantAge"
                                                name="defendantAge[]"
                                                id="vathi-age"
                                                placeholder=""
                                                required=""
                                                value="<?php echo $defendant['age']; ?>"
                                                />
                                                <div class="invalid-feedback">
                                                வயது is required
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <label for="state" class="form-label"
                                                >Notation</label
                                                >
                                                <select class="form-select defendantNotation" name="defendantNotation[]" id="state">
                                                <option value="" selected></option>

                                                <option value="த/பெ" <?=$defendant['notation'] == 'த/பெ' ? ' selected="selected"' : '';?> >த/பெ</option>
                                                
                                                <option value="ம/பெ" <?=$defendant['notation'] == 'ம/பெ' ? ' selected="selected"' : '';?> >ம/பெ</option>
                                                
                                                <option value="க/பெ" <?=$defendant['notation'] == 'க/பெ' ? ' selected="selected"' : '';?>>க/பெ</option>

                                                </select>
                                                <div class="invalid-feedback">
                                                Please select a Notation
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="cc-cvv" class="form-label"
                                                >பெயர்:</label
                                                >
                                                <input
                                                type="text"
                                                class="form-control defendantNotationName"
                                                name="defendantNotationName[]"
                                                id="cc-cvv"
                                                placeholder=""
                                                required=""
                                                value="<?php echo $defendant['notationName']; ?>"
                                                />
                                                <div class="invalid-feedback">
                                                பெயர் required
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="state" class="form-label"
                                                >பாலினம்:</label
                                                >
                                                <select class="form-select defendantGender" name="defendantGender[]" id="state">
                                                <option value="" selected></option>
                                                <option value="ஆண்" <?=$defendant['gender'] == 'ஆண்' ? ' selected="selected"' : '';?> >ஆண்</option>

                                                <option value="பெண்" <?=$defendant['gender'] == 'பெண்' ? ' selected="selected"' : '';?> >பெண்</option>

                                                <option value="மற்றவை" <?=$defendant['gender'] == 'மற்றவை' ? ' selected="selected"' : '';?> >மற்றவை</option>

                                                </select>
                                                <div class="invalid-feedback">
                                                பாலினம் is required
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="state" class="form-label"
                                                >மதம்:</label
                                                >
                                                <select class="form-select defendantReligion" name="defendantReligion[]" id="state">
                                                <option value="" selected></option>
                                                <option value="இந்து" <?=$defendant['religion'] == 'இந்து' ? ' selected="selected"' : '';?> >இந்து</option>

                                                <option value="முஸ்லீம்" <?=$defendant['religion'] == 'முஸ்லீம்' ? ' selected="selected"' : '';?> >முஸ்லீம்</option>

                                                <option value="கிறித்தவம்" <?=$defendant['religion'] == 'கிறித்தவம்' ? ' selected="selected"' : '';?>>கிறித்தவம்</option>

                                                <option value="மற்றவை" <?=$defendant['religion'] == 'மற்றவை' ? ' selected="selected"' : '';?> >மற்றவை</option>

                                                </select>
                                                <div class="invalid-feedback">
                                                மதம் is required
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="cc-expiration" class="form-label"
                                                >முகவரி 1:</label
                                                >
                                                <input
                                                type="text"
                                                class="form-control defendantAddress-1"
                                                name="defendantAddress-1[]"
                                                id="vathi-age"
                                                placeholder=""
                                                required=""
                                                value=""
                                                />
                                                <div class="invalid-feedback">
                                                முகவரி 1: is required
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="cc-expiration" class="form-label"
                                                >முகவரி 2:</label
                                                >
                                                <input
                                                type="text"
                                                class="form-control defendantAddress-2"
                                                name="defendantAddress-2[]"
                                                id="vathi-age"
                                                placeholder=""
                                                required=""
                                                value="<?php echo $defendant['address2']; ?>"
                                                />
                                                <div class="invalid-feedback">
                                                முகவரி 2: is required
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <label for="state" class="form-label"
                                                >தாலுகா:</label
                                                >
                                                <select class="form-select defendantTaluk" name="defendantTaluk[]" id="state">
                                                <option value="" selected></option>
                                                <option value="திண்டுக்கல்" <?=$defendant['taluk'] == 'திண்டுக்கல்' ? ' selected="selected"' : '';?> >திண்டுக்கல்</option>
                                                <option value="வேடசந்தூர்" <?=$defendant['taluk'] == 'வேடசந்தூர்' ? ' selected="selected"' : '';?> >வேடசந்தூர்</option>
                                                <option value="பழனி" <?=$defendant['taluk'] == 'பழனி' ? ' selected="selected"' : '';?> >பழனி</option>
                                                <option value="நிலக்கோட்டை" <?=$defendant['taluk'] == 'நிலக்கோட்டை' ? ' selected="selected"' : '';?> >நிலக்கோட்டை</option>
                                                <option value="ஒட்டன்சத்திரம்" <?=$defendant['taluk'] == 'ஒட்டன்சத்திரம்' ? ' selected="selected"' : '';?> >ஒட்டன்சத்திரம்</option>
                                                <option value="ஆத்தூர்" <?=$defendant['taluk'] == 'ஆத்தூர்' ? ' selected="selected"' : '';?>>ஆத்தூர்</option>
                                                <option value="நத்தம்" <?=$defendant['taluk'] == 'நத்தம்' ? ' selected="selected"' : '';?> >நத்தம்</option>
                                                <option value="கொடைக்கானல்" <?=$defendant['taluk'] == 'கொடைக்கானல்' ? ' selected="selected"' : '';?> >கொடைக்கானல்</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                தாலுகா is required
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="state" class="form-label"
                                                >மாவட்டம்:</label
                                                >
                                                <select class="form-select defendantDistrict" name="defendantDistrict[]" id="state">
                                                <option value="" selected></option>
                                                
                                                <option value="திண்டுக்கல்" <?=$defendant['district'] == 'திண்டுக்கல்' ? ' selected="selected"' : '';?> >திண்டுக்கல்</option>

                                                <option value="சென்னை" <?=$defendant['district'] == 'சென்னை' ? ' selected="selected"' : '';?> >சென்னை</option>

                                                <option value="காஞ்சிபுரம்" <?=$defendant['district'] == 'காஞ்சிபுரம்' ? ' selected="selected"' : '';?> >காஞ்சிபுரம்</option>

                                                <option value="செங்கல்பட்டு" <?=$defendant['district'] == 'செங்கல்பட்டு' ? ' selected="selected"' : '';?> >செங்கல்பட்டு</option>

                                                <option value="திருவள்ளூர்" <?=$defendant['district'] == 'திருவள்ளூர்' ? ' selected="selected"' : '';?> >திருவள்ளூர்</option>

                                                <option value="திருவண்ணாமலை" <?=$defendant['district'] == 'திருவண்ணாமலை' ? ' selected="selected"' : '';?> >திருவண்ணாமலை</option>

                                                <option value="வேலூர்" <?=$defendant['district'] == 'வேலூர்' ? ' selected="selected"' : '';?> >வேலூர்</option>

                                                <option value="விழுப்புரம்" <?=$defendant['district'] == 'விழுப்புரம்' ? ' selected="selected"' : '';?> >விழுப்புரம்</option>

                                                <option value="கள்ளக்குறிச்சி" <?=$defendant['district'] == 'கள்ளக்குறிச்சி' ? ' selected="selected"' : '';?> >கள்ளக்குறிச்சி</option>

                                                <option value="திருப்பத்தூர்" <?=$defendant['district'] == 'திருப்பத்தூர்' ? ' selected="selected"' : '';?> >திருப்பத்தூர்</option>

                                                <option value="இராணிப்பேட்டை" <?=$defendant['district'] == 'இராணிப்பேட்டை' ? ' selected="selected"' : '';?> >இராணிப்பேட்டை</option>

                                                <option value="அரியலூர்" <?=$defendant['district'] == 'அரியலூர்' ? ' selected="selected"' : '';?> >அரியலூர்</option>

                                                <option value="கடலூர்" <?=$defendant['district'] == 'கடலூர்' ? ' selected="selected"' : '';?> >கடலூர்</option>

                                                <option value="மயிலாடுதுறை" <?=$defendant['district'] == 'மயிலாடுதுறை' ? ' selected="selected"' : '';?> >மயிலாடுதுறை</option>

                                                <option value="நாகப்பட்டினம்" <?=$defendant['district'] == 'நாகப்பட்டினம்' ? ' selected="selected"' : '';?> >நாகப்பட்டினம்</option>

                                                <option value="பெரம்பலூர்" <?=$defendant['district'] == 'பெரம்பலூர்' ? ' selected="selected"' : '';?> >பெரம்பலூர்</option>

                                                <option value="புதுக்கோட்டை" <?=$defendant['district'] == 'புதுக்கோட்டை' ? ' selected="selected"' : '';?> >புதுக்கோட்டை</option>

                                                <option value="தஞ்சாவூர்" <?=$defendant['district'] == 'தஞ்சாவூர்' ? ' selected="selected"' : '';?> >தஞ்சாவூர்</option>
                                                
                                                <option value="திருச்சிராப்பள்ளி" <?=$defendant['district'] == 'திருச்சிராப்பள்ளி' ? ' selected="selected"' : '';?> >திருச்சிராப்பள்ளி</option>

                                                <option value="திருவாரூர்" <?=$defendant['district'] == 'திருவாரூர்' ? ' selected="selected"' : '';?> >திருவாரூர்</option>

                                                <option value="தருமபுரி" <?=$defendant['district'] == 'தருமபுரி' ? ' selected="selected"' : '';?> >தருமபுரி</option>

                                                <option value="திண்டுக்கல்" <?=$defendant['district'] == 'திண்டுக்கல்' ? ' selected="selected"' : '';?> >திண்டுக்கல்</option>

                                                <option value="கோயம்புத்தூர்" <?=$defendant['district'] == 'கோயம்புத்தூர்' ? ' selected="selected"' : '';?> >கோயம்புத்தூர்</option>

                                                <option value="கரூர்" <?=$defendant['district'] == 'கரூர்' ? ' selected="selected"' : '';?> >கரூர்</option>

                                                <option value="ஈரோடு" <?=$defendant['district'] == 'ஈரோடு' ? ' selected="selected"' : '';?> >ஈரோடு</option>

                                                <option value="கிருஷ்ணகிரி" <?=$defendant['district'] == 'கிருஷ்ணகிரி' ? ' selected="selected"' : '';?> >கிருஷ்ணகிரி</option>

                                                <option value="நாமக்கல்" <?=$defendant['district'] == 'நாமக்கல்' ? ' selected="selected"' : '';?> >நாமக்கல்</option>

                                                <option value="நீலகிரி" <?=$defendant['district'] == 'நீலகிரி' ? ' selected="selected"' : '';?> >நீலகிரி</option>

                                                <option value="சேலம்" <?=$defendant['district'] == 'சேலம்' ? ' selected="selected"' : '';?>>சேலம்</option>

                                                <option value="திருப்பூர்" <?=$defendant['district'] == 'திருப்பூர்' ? ' selected="selected"' : '';?> >திருப்பூர்</option>

                                                <option value="கன்னியாகுமரி" <?=$defendant['district'] == 'கன்னியாகுமரி' ? ' selected="selected"' : '';?> >கன்னியாகுமரி</option>

                                                <option value="மதுரை" <?=$defendant['district'] == 'மதுரை' ? ' selected="selected"' : '';?> >மதுரை</option>

                                                <option value="இராமநாதபுரம்" <?=$defendant['district'] == 'இராமநாதபுரம்' ? ' selected="selected"' : '';?> >இராமநாதபுரம்</option>

                                                <option value="சிவகங்கை" <?=$defendant['district'] == 'சிவகங்கை' ? ' selected="selected"' : '';?> >சிவகங்கை</option>

                                                <option value="தேனி" <?=$defendant['district'] == 'தேனி' ? ' selected="selected"' : '';?> >தேனி</option>

                                                <option value="தூத்துக்குடி" <?=$defendant['district'] == 'தூத்துக்குடி' ? ' selected="selected"' : '';?> >தூத்துக்குடி</option>

                                                <option value="திருநெல்வேலி" <?=$defendant['district'] == 'திருநெல்வேலி' ? ' selected="selected"' : '';?> >திருநெல்வேலி</option>

                                                <option value="தென்காசி" <?=$defendant['district'] == 'தென்காசி' ? ' selected="selected"' : '';?> >தென்காசி</option>

                                                <option value="விருதுநகர்" <?=$defendant['district'] == 'விருதுநகர்' ? ' selected="selected"' : '';?> >விருதுநகர்</option>
                                                
                                                </select>
                                                <div class="invalid-feedback">
                                                மாவட்டம் is required
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="margin-top: 43px">
                                                <button
                                                type="button"
                                                class="btn btn-success defendant-add-btn"
                                                data-bs-toggle="modal"
                                                id="create-btn"
                                                data-bs-target="#showModal"
                                                >
                                                <i
                                                    class="ri-add-line align-bottom me-1"
                                                ></i>
                                                Add
                                                </button>
                                                <button class="btn btn-soft-danger defendant-delete-btn">
                                                <i class="ri-delete-bin-2-line"></i> Delete
                                                </button>
                                            </div>
                                            </div>
                                        </div>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                            <div class="d-flex align-items-start gap-3 mt-4">
                              <button
                                type="button"
                                class="btn btn-success btn-label right ms-auto nexttab nexttab"
                                data-nexttab="v-pills-payment-tab"
                              >
                                <i
                                  class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"
                                ></i
                                >Next
                              </button>
                            </div>
                          </div>
                          <!-- end tab pane -->
                          <div
                            class="tab-pane fade"
                            id="v-pills-payment"
                            role="tabpanel"
                            aria-labelledby="v-pills-payment-tab"
                          >
                            <div>
                              <h5>தீர்ப்புரை</h5>
                              <p class="text-muted">
                                Fill all information below
                              </p>
                            </div>

                            <div>
                              <label
                                class="form-label"
                                for="des-info-description-input"
                                >Description</label
                              >
                              <textarea
                                class="form-control judgement"
                                placeholder="Enter Description"
                                nae="judgement"
                                id="judgement"
                                rows="20"
                                required=""
                              ><?php echo $osDetails['judgement']; ?></textarea>
                              <div class="invalid-feedback">
                                Please enter a description
                              </div>
                            </div>

                            <div class="d-flex align-items-start gap-3 mt-4">
                              <button
                                type="button"
                                class="btn btn-light btn-label previestab"
                                data-previous="v-pills-bill-address-tab"
                              >
                                <i
                                  class="ri-arrow-left-line label-icon align-middle fs-16 me-2"
                                ></i>
                                Back
                              </button>
                              <button
                                type="button"
                                class="btn btn-success btn-label right ms-auto nexttab nexttab"
                                data-nexttab="v-pills-finish-tab"
                              >
                                <i
                                  class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"
                                ></i>
                                Next
                              </button>
                            </div>
                          </div>
                          <!-- end tab pane -->
                          <div
                            class="tab-pane fade"
                            id="v-pills-finish"
                            role="tabpanel"
                            aria-labelledby="v-pills-finish-tab"
                          >
                            <div>
                              <h5>இறுதி முடிவு</h5>
                              <p class="text-muted">
                                Fill all information below
                              </p>
                            </div>

                            <div>
                              <label
                                class="form-label"
                                for="des-info-description-input"
                                >Description</label
                              >
                              <textarea
                                class="form-control finalJudgement"
                                placeholder="Enter Description"
                                name="finalJudgement"
                                id="finalJudgement"
                                rows="20"
                                required=""
                              ><?php echo $osDetails['final_judgement']; ?></textarea>
                              <div class="invalid-feedback">
                                Please enter a description
                              </div>
                            </div>

                            <div class="d-flex align-items-start gap-3 mt-4">
                              <button
                                type="button"
                                class="btn btn-light btn-label previestab"
                                data-previous="v-pills-payment-tab"
                              >
                                <i
                                  class="ri-arrow-left-line label-icon align-middle fs-16 me-2"
                                ></i>
                                Back
                              </button>
                              <button
                                type="button"
                                id="submit"
                                class="btn btn-success btn-label right ms-auto nexttab nexttab"
                                data-nexttab="v-pills-finish-tab"
                              >
                                <i
                                  class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"
                                ></i>
                                Update
                              </button>
                            </div>
                          </div>
                          <!-- end tab pane -->
                        </div>
                        <!-- end tab content -->
                      </div>
                    </div>
                    <!-- end col -->

                    <div class="col-lg-3"></div>
                  </div>
                  <!-- end row -->
                </form>
              </div>
            </div>
          </div>

          <!-- container-fluid -->
        </div>

        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-6">
                <script>
                  document.write(new Date().getFullYear());
                </script>
              </div>
              <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block">
                  Design & Develop by Themesbrand
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
      <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->

    <!--start back-to-top-->
    <button
      onclick="topFunction()"
      class="btn btn-danger btn-icon"
      id="back-to-top"
    >
      <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
      <div id="status">
        <div class="spinner-border text-primary avatar-sm" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
      </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- <script src="../assets-dashboard/libs/bootstrap/js/bootstrap.bundle.min.js"></script> -->
    <script src="../assets-dashboard/libs/simplebar/simplebar.min.js"></script>
    <script src="../assets-dashboard/libs/node-waves/waves.min.js"></script>
    <script src="../assets-dashboard/libs/feather-icons/feather.min.js"></script>
    <script src="../assets-dashboard/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="../assets-dashboard/js/plugins.js"></script>

    <!-- form wizard init -->
    <script src="../assets-dashboard/js/pages/form-wizard.init.js"></script>

    <!-- App js -->
    <script src="../assets-dashboard/js/app.js"></script>
    <!-- <script src="../assets-dashboard/libs/bootstrap/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script src="../assets-dashboard/libs/simplebar/simplebar.min.js"></script>
    <script src="../assets-dashboard/libs/node-waves/waves.min.js"></script>
    <script src="../assets-dashboard/libs/feather-icons/feather.min.js"></script>
    <script src="../assets-dashboard/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="../assets-dashboard/js/plugins.js"></script>

    <!-- apexcharts -->
    <script src="../assets-dashboard/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Vector map-->
    <script src="../assets-dashboard/libs/jsvectormap/js/jsvectormap.min.js"></script>
    <script src="../assets-dashboard/libs/jsvectormap/maps/world-merc.js"></script>

    <!--Swiper slider js-->
    <script src="../assets-dashboard/libs/swiper/swiper-bundle.min.js"></script>

    <!-- Dashboard init -->
    <script src="../assets-dashboard/js/pages/dashboard-ecommerce.init.js"></script>

    <!-- App js -->
    <script src="../assets-dashboard/js/app.js"></script>

    <script src="../assets-dashboard/js/pages/toastr.min.js"></script>
    <script src="../assets-dashboard/js/customScript.js"></script>
  </body>
</html>
