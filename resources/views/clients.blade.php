@extends('layouts.app')

@section('content')

    <!--page-wrapper-->
		<div class="page-wrapper">
			<!--page-content-wrapper-->
			<div class="page-content-wrapper">
				<div class="page-content">
					<!--breadcrumb-->
					<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
						<div class="breadcrumb-title pr-3">Clients</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Clients</li>
								</ol>
							</nav>
						</div>
						<div class="ml-auto">
							<div class="btn-group">
								<a href="{{ route('client.create') }}" class="btn btn-light">Add new client</a>
							</div>
						</div>
					</div>
					<!--end breadcrumb-->
					<div class="row">
						@foreach ($stages as $stage)
                            <div class="col-lg-2">
                                <div class="card radius-15">
                                    <div class="card-body text-center">

                                        <h5 class="mb-0 mt-4 text-white">{{ $stage->stage_type }}</h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
					</div>
					<!--end row-->
					<div class="row">
						@foreach ($stages as $stage)
                            <div class="col-lg-2">
                                @foreach ($clients as $id => $client)
                                @if ($stage->id == $id)
                                    @foreach ($client as $item)
                                <div class="card radius-15">
                                    <div class="card-body">
                                        <div class="media align-items-center">

                                            <div class="media-body ml-3">
                                                <h6 class="mb-0">{{ $item->name }}</h6>
                                                <p class="mb-0">{{ $item->company_name }}</p>
                                                <p class="mb-0">{{ $item->phone_number }}</p>
                                                <div class="list-inline contacts-social mt-3">
                                                    <a href="javascript:;" class="list-inline-item"><i class='bx bxl-facebook'></i></a>
                                                    <a href="javascript:;" class="list-inline-item"><i class='bx bxl-twitter'></i></a>
                                                    <a href="javascript:;" class="list-inline-item"><i class='bx bxs-phone'></i></a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @endif
                                @endforeach
                            </div>
                        @endforeach
					</div>
					<!--end row-->
				</div>
			</div>
			<!--end page-content-wrapper-->
		</div>
		<!--end page-wrapper-->

@endsection
