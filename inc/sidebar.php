<?php
  $current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>K.M.A Log System</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport"/>
    <link rel="icon" href="assets/img/logo_kma.png" type="image/x-icon"/>

    <!-- Fonts and icons -->
    <script src="assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["assets/css/fonts.min.css"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/plugins.min.css" />
    <link rel="stylesheet" href="../assets/css/kaiadmin.min.css" />
  </head>

  <body>
  <div class="wrapper">
      <!-- Sidebar -->
      <div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <a href="index.php" class="logo"></a>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
            <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button>
          </div>
        </div>
        <!-- End Logo Header -->
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <ul class="nav nav-secondary">
              <!-- Dashboard -->
              <li class="nav-item <?php if($current_page == 'index.php'){ echo 'active'; } ?>">
                <a href="index.php">
                  <i class="fas fa-home"></i>
                  <p>Dashboard</p>
                </a>
              </li>

              <!-- Faded "Departments" Text -->
              <li class="nav-item">
                <p style="color: #a0a0a0; margin-left: 15px; margin-top: 15px;">Departments</p>
              </li>

              <!-- Planning Department -->
              <li class="nav-item">
                <a data-toggle="collapse" href="#planning" class="collapsed" aria-expanded="false">
                  <i class="fas fa-building"></i>
                  <p>Planning</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="planning">
                  <ul class="nav nav-collapse">
                    <li class="<?php if($current_page == 'profile.php'){ echo 'active'; } ?>">
                      <a href="profile.php">
                        <span class="sub-item">Profile</span>
                      </a>
                    </li>
                    <li class="<?php if($current_page == 'AddNew.php'){ echo 'active'; } ?>">
                      <a href="AddNew.php">
                        <span class="sub-item">New Log</span>
                      </a>
                    </li>
                    <li class="<?php if($current_page == 'files.php'){ echo 'active'; } ?>">
                      <a href="files.php">
                        <span class="sub-item">Logs</span>
                      </a>
                    </li>
                    <li class="<?php if($current_page == 'print.php'){ echo 'active'; } ?>">
                      <a href="print.php">
                        <span class="sub-item">Print Log</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>

              <!-- Budget Department -->
              <li class="nav-item">
                <a data-toggle="collapse" href="#budget" class="collapsed" aria-expanded="false">
                  <i class="fas fa-chart-line"></i>
                  <p>Budget</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="budget">
                  <ul class="nav nav-collapse">
                    <li class="<?php if($current_page == 'profile.php'){ echo 'active'; } ?>">
                      <a href="profile.php">
                        <span class="sub-item">Profile</span>
                      </a>
                    </li>
                    <li class="<?php if($current_page == 'AddNew.php'){ echo 'active'; } ?>">
                      <a href="AddNew.php">
                        <span class="sub-item">New Log</span>
                      </a>
                    </li>
                    <li class="<?php if($current_page == 'files.php'){ echo 'active'; } ?>">
                      <a href="files.php">
                        <span class="sub-item">Logs</span>
                      </a>
                    </li>
                    <li class="<?php if($current_page == 'print.php'){ echo 'active'; } ?>">
                      <a href="print.php">
                        <span class="sub-item">Print Log</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>

              <!-- Records Department -->
              <li class="nav-item">
                <a data-toggle="collapse" href="#records" class="collapsed" aria-expanded="false">
                  <i class="fas fa-folder"></i>
                  <p>Records</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="records">
                  <ul class="nav nav-collapse">
                    <li class="<?php if($current_page == 'profile.php'){ echo 'active'; } ?>">
                      <a href="profile.php">
                        <span class="sub-item">Profile</span>
                      </a>
                    </li>
                    <li class="<?php if($current_page == 'AddNew.php'){ echo 'active'; } ?>">
                      <a href="AddNew.php">
                        <span class="sub-item">New Log</span>
                      </a>
                    </li>
                    <li class="<?php if($current_page == 'files.php'){ echo 'active'; } ?>">
                      <a href="files.php">
                        <span class="sub-item">Logs</span>
                      </a>
                    </li>
                    <li class="<?php if($current_page == 'print.php'){ echo 'active'; } ?>">
                      <a href="print.php">
                        <span class="sub-item">Print Log</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>

              <!-- Metro Chief Executive's Office -->
              <li class="nav-item">
                <a data-toggle="collapse" href="#mce_office" class="collapsed" aria-expanded="false">
                  <i class="fas fa-user-tie"></i>
                  <p>Metro Chief Executive's Office</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="mce_office">
                  <ul class="nav nav-collapse">
                    <li class="<?php if($current_page == 'profile.php'){ echo 'active'; } ?>">
                      <a href="profile.php">
                        <span class="sub-item">Profile</span>
                      </a>
                    </li>
                    <li class="<?php if($current_page == 'AddNew.php'){ echo 'active'; } ?>">
                      <a href="AddNew.php">
                        <span class="sub-item">New Log</span>
                      </a>
                    </li>
                    <li class="<?php if($current_page == 'files.php'){ echo 'active'; } ?>">
                      <a href="files.php">
                        <span class="sub-item">Logs</span>
                      </a>
                    </li>
                    <li class="<?php if($current_page == 'print.php'){ echo 'active'; } ?>">
                      <a href="print.php">
                        <span class="sub-item">Print Log</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>

              <!-- Metro Coordinating Director -->
              <li class="nav-item">
                <a data-toggle="collapse" href="#mcd" class="collapsed" aria-expanded="false">
                  <i class="fas fa-user-shield"></i>
                  <p>Metro Coordinating Director</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="mcd">
                  <ul class="nav nav-collapse">
                    <li class="<?php if($current_page == 'profile.php'){ echo 'active'; } ?>">
                      <a href="profile.php">
                        <span class="sub-item">Profile</span>
                      </a>
                    </li>
                    <li class="<?php if($current_page == 'AddNew.php'){ echo 'active'; } ?>">
                      <a href="AddNew.php">
                        <span class="sub-item">New Log</span>
                      </a>
                    </li>
                    <li class="<?php if($current_page == 'files.php'){ echo 'active'; } ?>">
                      <a href="files.php">
                        <span class="sub-item">Logs</span>
                      </a>
                    </li>
                    <li class="<?php if($current_page == 'print.php'){ echo 'active'; } ?>">
                      <a href="print.php">
                        <span class="sub-item">Print Log</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>

            </ul>
          </div>
        </div>
      </div>
      <!-- End Sidebar -->
    </div>
  </body>
  <style>
    .nav-item {
      transition: transform 0.2s ease-in-out;
    }

    .nav-item:hover {
      transform: translateX(5px); /* Moves the item slightly to the right */
    }

    .nav-item.active {
      background-color: #1a2035; /* Adjust this color as per your theme */
      font-weight: bold;
    }

    .nav-item.active a {
      color: #ffffff; /* Ensures active page text is visible */
    }

    .sub-item {
      padding-left: 30px; /* Indents sub-items */
    }
  </style>
</html>
