 <!--sidebar-wrapper-->
 <div class="wrapper">
    <div class="sidebar-wrapper" data-simplebar="true">
        <div class="sidebar-header">
            <div class="">
                <img src="assets/images/logo-icon.png" class="logo-icon-2" alt="" />
            </div>
            <div>
                <h4 class="logo-text">My CRM</h4>
            </div>
            <a href="javascript:;" class="toggle-btn ml-auto"> <i class="bx bx-menu"></i>
            </a>
        </div>
        <!--navigation-->
        <ul class="metismenu" id="menu">
            <li>
                <a href="{{ url('/') }}" class="has-arrow">
                    <div class="parent-icon"><i class="bx bx-home-alt"></i>
                    </div>
                    <div class="menu-title">Dashboard</div>
                </a>

            </li>

            <li>
                <a href="{{ route('client.index') }}">
                    <div class="parent-icon"><i class="bx bx-envelope"></i>
                    </div>
                    <div class="menu-title">Clients</div>
                </a>
            </li>
            <li>
                <a href="{{ route('stage.index') }}">
                    <div class="parent-icon"> <i class="bx bx-conversation"></i>
                    </div>
                    <div class="menu-title">Stages</div>
                </a>
            </li>
            <li>
                <a href="{{ route('service.index') }}">
                    <div class="parent-icon"><i class="bx bx-archive"></i>
                    </div>
                    <div class="menu-title">Services</div>
                </a>
            </li>

        </ul>
        <!--end navigation-->
    </div>
    <!--end sidebar-wrapper-->
    <!--header-->
    <header class="top-header">
        <nav class="navbar navbar-expand">
            <div class="left-topbar d-flex align-items-center">
                <a href="javascript:;" class="toggle-btn">  <i class="bx bx-menu"></i>
                </a>
            </div>
            <div class="flex-grow-1 search-bar">
                <form action="{{ url('search') }}" method="get">
                    <div class="input-group">
                        <div class="input-group-prepend search-arrow-back">
                            <button class="btn btn-search-back" type="button"><i class="bx bx-arrow-back"></i>
                            </button>
                        </div>
                        <input type="text" class="form-control" name="query" placeholder="Search" />
                        <div class="input-group-append">
                            <button class="btn btn-search" type="submit"><i class="lni lni-search-alt"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="right-topbar ml-auto">
                <ul class="navbar-nav">
                    <li class="nav-item search-btn-mobile">
                        <a class="nav-link position-relative" href="javascript:;">  <i class="bx bx-search vertical-align-middle"></i>
                        </a>
                    </li>


                    <li class="nav-item dropdown dropdown-user-profile">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-toggle="dropdown">
                            <div class="media user-box align-items-center">
                                <div class="media-body user-info">
                                    <p class="user-name mb-0">Jessica Doe</p>
                                    <p class="designattion mb-0">Available</p>
                                </div>
                                <img src="https://via.placeholder.com/110x110" class="user-img" alt="user avatar">
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                        </div>
                    </li>
                    <li class="nav-item dropdown dropdown-language">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-toggle="dropdown">
                            <div class="lang d-flex">
                                <div><i class="flag-icon flag-icon-um"></i>
                                </div>
                                <div><span>En</span>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item" href="javascript:;"><i
                                    class="flag-icon flag-icon-de"></i><span>German</span></a>
                            <a class="dropdown-item" href="javascript:;"><i
                                    class="flag-icon flag-icon-fr"></i><span>French</span></a>
                            <a class="dropdown-item" href="javascript:;"><i
                                    class="flag-icon flag-icon-um"></i><span>English</span></a>
                            <a class="dropdown-item" href="javascript:;"><i
                                    class="flag-icon flag-icon-in"></i><span>Hindi</span></a>
                            <a class="dropdown-item" href="javascript:;"><i
                                    class="flag-icon flag-icon-cn"></i><span>Chinese</span></a>
                            <a class="dropdown-item" href="javascript:;"><i
                                    class="flag-icon flag-icon-ae"></i><span>Arabic</span></a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!--end header-->
    <!--start overlay-->
		<div class="overlay toggle-btn-mobile"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<!--footer -->

		<!-- end footer -->
 </div>

 <!--start switcher-->
 <div class="switcher-wrapper">

    <div class="switcher-body">
        <h6 class="mb-0 text-uppercase">Theme Customizer</h6>
        <hr/>
        <p class="mb-0">Gaussian Texture</p>
          <hr>

          <ul class="switcher">
            <li id="theme1"></li>
            <li id="theme2"></li>
            <li id="theme3"></li>
            <li id="theme4"></li>
            <li id="theme5"></li>
            <li id="theme6"></li>
          </ul>
           <hr>
          <p class="mb-0">Gradient Background</p>
          <hr>

          <ul class="switcher">
            <li id="theme7"></li>
            <li id="theme8"></li>
            <li id="theme9"></li>
            <li id="theme10"></li>
            <li id="theme11"></li>
            <li id="theme12"></li>
          </ul>
    </div>
</div>
<!--end switcher-->
