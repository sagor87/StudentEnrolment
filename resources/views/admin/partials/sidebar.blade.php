   <!-- partial -->
   <div class="container-fluid page-body-wrapper">
    <div class="row row-offcanvas row-offcanvas-right">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="user-info">
          <div class="profile">
            <img src="http://via.placeholder.com/47x47" alt="">
          </div>
          <div class="details">
            <p class="user-name">Dave Mattew</p>
            <p class="designation">Developer</p>
          </div>
        </div>
        <ul class="nav">
          <!--main pages start-->
          <li class="nav-item nav-category">
            <span class="nav-link">Main</span>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="mdi mdi-gauge menu-icon"></i>
              <span class="menu-title">All Student</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('add.student')}}">
              <i class="mdi mdi-puzzle menu-icon"></i>
              <span class="menu-title">Add Student</span>
              <span class="badge badge-danger badge-pill ml-auto">New</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#layoutsSubmenu" aria-expanded="false" aria-controls="layoutsSubmenu">
              <i class="mdi mdi-arrow-expand-all menu-icon"></i>
              <span class="menu-title">Student Information</span>
              <i class="mdi mdi-chevron-down menu-arrow"></i>
            </a>
            <div class="collapse" id="layoutsSubmenu">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="pages/layout/boxed-layout.html">Boxed</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/layout/rtl-layout.html">Rtl</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/layout/horizontal-menu.html">Horizontal Menu</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#sidebar_layouts" aria-expanded="false" aria-controls="sidebar_layouts">
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              <span class="menu-title">Course</span>
              <i class="mdi mdi-chevron-down menu-arrow"></i>
            </a>
            <div class="collapse" id="sidebar_layouts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="pages/layout/compact-menu.html">Compact menu</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/layout/sidebar-collapsed.html">Icon menu</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/layout/sidebar-hidden.html">Sidebar Hidden</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/layout/sidebar-hidden-overlay.html">Sidebar Overlay</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/layout/sidebar-fixed.html">Sidebar Fixed</a>
                </li>
              </ul>
            </div>
          </li>
          <!--main pages end-->
          <!--sample pages start-->

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#errorSubmenu" aria-expanded="false" aria-controls="errorSubmenu">
              <i class="mdi mdi-alert-circle-outline menu-icon"></i>
              <span class="menu-title">Teacher</span>
              <i class="mdi mdi-chevron-down menu-arrow"></i>
            </a>
            <div class="collapse" id="errorSubmenu">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/error-404.html">
                    404
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/error-500.html">
                    500
                  </a>
                </li>
              </ul>
            </div>
          </li>


              </ul>
            </div>
          </li>

        </ul>
      </nav>
      <!-- partial -->
