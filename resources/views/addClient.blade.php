@extends('layouts.app')

@section('content')

   <!--end header-->
        <!--page-wrapper-->
        <div class="page-wrapper">
            <!--page-content-wrapper-->
            <div class="page-content-wrapper">
                <div class="page-content">

                <div class="card radius-15">
                        <div class="card-body">
                            <div class="card-title">
                                <h4 class="mb-0">Enter client info</h4>
                            </div>
                            @if (session('status'))
                                <div class="alert alert-success">
                                    <i class="fas fa-check"></i> {{ session('status') }}
                                </div>
                            @endif
                            <hr>
                            <form action="{{ route('client.store') }}" method="post">
                                @csrf
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="name" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                    <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="phone_number" placeholder="Phone" aria-label="Phone" aria-describedby="basic-addon1">
                                </div>
                                    <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="company_name" placeholder="Company name" aria-label="Company name" aria-describedby="basic-addon1">
                                </div>


                               <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01">Service Type</label>
                                    </div>
                                    <select class="custom-select" name="service_id" id="inputGroupSelect01">
                                        <option selected="">Choose...</option>
                                        @foreach ($services as $service)
                                            <option value="{{ $service->id }}">{{ $service->service_type }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01">Stage</label>
                                    </div>
                                    <select class="custom-select" name="stage_id" id="inputGroupSelect01">
                                        <option selected="">Choose...</option>
                                        @foreach ($stages as $stage)
                                            <option value="{{ $stage->id }}">{{ $stage->stage_type }}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="input-group">
                                    <div class="input-group-prepend">   <span class="input-group-text">Enter comments</span>
                                    </div>
                                    <textarea class="form-control" name="comments" aria-label="With textarea"></textarea>
                                </div><br>
                                <div class="btn-group" style="width: 150px;">
                                    <button type="submit" class="btn btn-light">Submit</button>
                                </div>
                            </form>
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

@endsection
