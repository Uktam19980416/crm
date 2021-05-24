@extends('layouts.app')

@section('content')
        <!-- wrapper -->
        <div class="wrapper">

            <!--page-wrapper-->
            <div class="page-wrapper">
                <!--page-content-wrapper-->
                <div class="page-content-wrapper">
                    <div class="page-content">
                        <div class="card-body">

                                        <!--end row-->

                                        <h5>Clients statistics</h5>
                                        <div class="row mt-3">
                                            @foreach ($menus as $menu)
                                                <div class="col-12 col-lg-4">
                                                    <div class="card shadow-none border">
                                                        <div class="card-body">
                                                            <div class="d-flex align-items-center">
                                                                <div class="font-30"><i class="bx bxs-folder"></i>
                                                                </div>
                                                                <div class="user-groups ml-auto">
                                                                    <img src="https://via.placeholder.com/110x110" class="rounded-circle" alt="" width="35" height="35">
                                                                    <img src="https://via.placeholder.com/110x110" class="rounded-circle" alt="" width="35" height="35">
                                                                </div>
                                                                <div class="user-plus">+</div>
                                                            </div>
                                                            <h6 class="mb-0">{{ $menu->stage_type }}</h6>
                                                            {{count( $menu->clients) }}
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <!--end row-->
                                        </div>
                                    </div>

                    </div>
                </div>
                <!--end page-content-wrapper-->
            </div>
            <!--end page-wrapper-->
            <!--start overlay-->
            <div class="overlay toggle-btn-mobile"></div>
            <!--end overlay-->
            <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
            <!--End Back To Top Button-->
            <!--footer -->

            <!-- end footer -->
        </div>
        <!-- end wrapper -->
        <!--start switcher-->
        <div class="switcher-wrapper">

            <div class="switcher-body">
                <h5 class="mb-0 text-uppercase">Theme Customizer</h5>
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

        <script>
        console.log({{$clients}})
        </script>
 @endsection

