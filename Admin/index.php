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
    <title>Court Dashboard</title>
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
      href="../assets-dashboard-dashboard/libs/jsvectormap/css/jsvectormap.min.css"
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
                <a href="index.html" class="logo logo-dark">
                  <span class="logo-sm">
                    <img src="../assets-dashboard/images/logo-sm.png" alt="" height="22" />
                  </span>
                  <span class="logo-lg">
                    <img src="../assets-dashboard/images/logo-dark.png" alt="" height="17" />
                  </span>
                </a>

                <a href="index.html" class="logo logo-light">
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
              <form class="app-search d-none d-md-block">
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
                        href="index.html"
                        class="btn btn-soft-secondary btn-sm rounded-pill"
                        >how to setup <i class="mdi mdi-magnify ms-1"></i
                      ></a>
                      <a
                        href="index.html"
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
                            src="../../assets-dashboard/images/users/avatar-3.jpg"
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
                            src="../../assets-dashboard/images/users/avatar-5.jpg"
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
                        <button class="btn btn-primary" type="submit">
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
          <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
              <img src="../assets-dashboard/images/logo-sm.png" alt="" height="22" />
            </span>
            <span class="logo-lg">
              <img src="../assets-dashboard/images/logo-dark.png" alt="" height="17" />
            </span>
          </a>
          <!-- Light Logo-->
          <a href="index.html" class="logo logo-light">
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
                  href="index.html"
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
                              href="os_moneysuit.php"
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
                  <!--end row-->

                  <div class="row">
                    <div class="col-xl-3 col-md-6">
                      <!-- card -->
                      <div class="card card-animate">
                        <div class="card-body">
                          <div class="d-flex align-items-center">
                            <div class="flex-grow-1 overflow-hidden">
                              <p
                                class="text-uppercase fw-medium text-muted text-truncate mb-0"
                              >
                                Total Cases
                              </p>
                            </div>
                            <!-- <div class="flex-shrink-0">
                              <h5 class="text-success fs-14 mb-0">
                                <i
                                  class="ri-arrow-right-up-line fs-13 align-middle"
                                ></i>
                                +16.24 %
                              </h5>
                            </div> -->
                          </div>
                          <div
                            class="d-flex align-items-end justify-content-between mt-4"
                          >
                            <div>
                              <h4 class="fs-22 fw-semibold ff-secondary mb-4">
                                <span class="counter-value" data-target="1000"
                                  >0</span
                                >
                              </h4>
                              <a href="#" class="text-decoration-underline"
                                >View all cases</a
                              >
                            </div>
                            <div class="avatar-sm flex-shrink-0">
                              <span
                                class="avatar-title bg-success-subtle rounded fs-3"
                              >
                                <i class="bx bx-dollar-circle text-success"></i>
                              </span>
                            </div>
                          </div>
                        </div>
                        <!-- end card body -->
                      </div>
                      <!-- end card -->
                    </div>
                    <!-- end col -->

                    <div class="col-xl-3 col-md-6">
                      <!-- card -->
                      <div class="card card-animate">
                        <div class="card-body">
                          <div class="d-flex align-items-center">
                            <div class="flex-grow-1 overflow-hidden">
                              <p
                                class="text-uppercase fw-medium text-muted text-truncate mb-0"
                              >
                                Pending
                              </p>
                            </div>
                            <!-- <div class="flex-shrink-0">
                              <h5 class="text-danger fs-14 mb-0">
                                <i
                                  class="ri-arrow-right-down-line fs-13 align-middle"
                                ></i>
                                -3.57 %
                              </h5>
                            </div> -->
                          </div>
                          <div
                            class="d-flex align-items-end justify-content-between mt-4"
                          >
                            <div>
                              <h4 class="fs-22 fw-semibold ff-secondary mb-4">
                                <span class="counter-value" data-target="500"
                                  >0</span
                                >
                              </h4>
                              <a href="#" class="text-decoration-underline"
                                >View all pending cases</a
                              >
                            </div>
                            <div class="avatar-sm flex-shrink-0">
                              <span
                                class="avatar-title bg-info-subtle rounded fs-3"
                              >
                                <i class="bx bx-shopping-bag text-info"></i>
                              </span>
                            </div>
                          </div>
                        </div>
                        <!-- end card body -->
                      </div>
                      <!-- end card -->
                    </div>
                    <!-- end col -->

                    <div class="col-xl-3 col-md-6">
                      <!-- card -->
                      <div class="card card-animate">
                        <div class="card-body">
                          <div class="d-flex align-items-center">
                            <div class="flex-grow-1 overflow-hidden">
                              <p
                                class="text-uppercase fw-medium text-muted text-truncate mb-0"
                              >
                                Ongoing
                              </p>
                            </div>
                            <!-- <div class="flex-shrink-0">
                              <h5 class="text-success fs-14 mb-0">
                                <i
                                  class="ri-arrow-right-up-line fs-13 align-middle"
                                ></i>
                                +29.08 %
                              </h5>
                            </div> -->
                          </div>
                          <div
                            class="d-flex align-items-end justify-content-between mt-4"
                          >
                            <div>
                              <h4 class="fs-22 fw-semibold ff-secondary mb-4">
                                <span class="counter-value" data-target="180"
                                  >0</span
                                >
                              </h4>
                              <a href="#" class="text-decoration-underline"
                                >View all ongoing cases</a
                              >
                            </div>
                            <div class="avatar-sm flex-shrink-0">
                              <span
                                class="avatar-title bg-warning-subtle rounded fs-3"
                              >
                                <i class="bx bx-user-circle text-warning"></i>
                              </span>
                            </div>
                          </div>
                        </div>
                        <!-- end card body -->
                      </div>
                      <!-- end card -->
                    </div>
                    <!-- end col -->

                    <div class="col-xl-3 col-md-6">
                      <!-- card -->
                      <div class="card card-animate">
                        <div class="card-body">
                          <div class="d-flex align-items-center">
                            <div class="flex-grow-1 overflow-hidden">
                              <p
                                class="text-uppercase fw-medium text-muted text-truncate mb-0"
                              >
                                Completed
                              </p>
                            </div>
                            <!-- <div class="flex-shrink-0">
                              <h5 class="text-muted fs-14 mb-0">+0.00 %</h5>
                            </div> -->
                          </div>
                          <div
                            class="d-flex align-items-end justify-content-between mt-4"
                          >
                            <div>
                              <h4 class="fs-22 fw-semibold ff-secondary mb-4">
                                <span class="counter-value" data-target="700"
                                  >0</span
                                >
                              </h4>
                              <a href="#" class="text-decoration-underline"
                                >View all completed cases</a
                              >
                            </div>
                            <div class="avatar-sm flex-shrink-0">
                              <span
                                class="avatar-title bg-primary-subtle rounded fs-3"
                              >
                                <i class="bx bx-wallet text-primary"></i>
                              </span>
                            </div>
                          </div>
                        </div>
                        <!-- end card body -->
                      </div>
                      <!-- end card -->
                    </div>
                    <!-- end col -->
                  </div>
                  <!-- end row-->

                  <!-- end row-->

                  <div class="col-xl-8">
                    <div class="card">
                      <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">
                          Recent Cases
                        </h4>
                        <div class="flex-shrink-0">
                          <button
                            type="button"
                            class="btn btn-soft-info btn-sm material-shadow-none"
                          >
                            <i class="ri-file-list-3-line align-middle"></i>
                            Generate Report
                          </button>
                        </div>
                      </div>
                      <!-- end card header -->

                      <div class="card-body">
                        <div class="table-responsive table-card">
                          <table
                            class="table table-borderless table-centered align-middle table-nowrap mb-0"
                          >
                            <thead class="text-muted table-light">
                              <tr>
                                <th scope="col">Case ID</th>
                                <th scope="col">Vathi</th>
                                <th scope="col">Ethir Vathi</th>
                                <th scope="col">Status</th>
                                <th scope="col">Date</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>001</td>
                                <td>Ramesh and 2 Others</td>
                                <td>Suresh</td>
                                <td>
                                  <span class="text-success">Completed</span>
                                </td>
                                <td>20.20.2023</td>
                                <td>
                                  <div class="hstack gap-3 flex-wrap">
                                    <a
                                      href="javascript:void(0);"
                                      class="link-success fs-15"
                                      ><i class="ri-edit-2-line"></i
                                    ></a>
                                    <a
                                      href="javascript:void(0);"
                                      class="link-danger fs-15"
                                      ><i class="ri-delete-bin-line"></i
                                    ></a>
                                  </div>
                                </td>
                              </tr>

                              <!-- end tr -->
                            </tbody>
                            <!-- end tbody -->
                          </table>
                          <!-- end table -->
                        </div>
                      </div>
                    </div>
                    <!-- .card-->
                  </div>
                  <!-- end row-->
                </div>
                <!-- end .h-100-->
              </div>
              <!-- end col -->

              <!-- end col -->
            </div>
          </div>
          <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

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
    <script src="../assets-dashboard/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
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
  </body>
</html>
