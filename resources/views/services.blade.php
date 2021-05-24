@extends('layouts.app')

@section('content')

    <!--page-wrapper-->
		<div class="page-wrapper">
			<!--page-content-wrapper-->
			<div class="page-content-wrapper">
				<div class="page-content">
					<!--breadcrumb-->
					<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
						<div class="breadcrumb-title pr-3">Services</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Services</li>
								</ol>
							</nav>
						</div>

					</div>
					<!--end breadcrumb-->
					<div class="container">
                        @if (session('status'))
                            <div class="alert alert-success">
                                <i class="fas fa-check"></i> {{ session('status') }}
                            </div>
                        @endif
						<div class="card">
							<div class="card-body">
								<h4 class="mb-0">Services</h4>
								<hr/>
								<form action="{{ route('service.store') }}" method="post">
                                    @csrf
                                    <div class="form-row">
                                        <div class="col-md-10">
                                            <div class="form-group mb-2">
                                                <input id="todo-input" type="text" name="service" class="form-control" value="">
                                            </div>
                                        </div>
                                        <div class="col-md text-right">
                                            <button type="submit" onclick="CreateTodo();" class="btn btn-block btn-light">Add Service</button>
                                        </div>
                                    </div>
                                </form>
								<div class="form-row mt-3">
									<div class="col-12">
										<div class="pb-3 todo-item">
                                            @foreach ($services as $service)
                                            <form action="{{ url('service/' . $service->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <input type="checkbox" aria-label="Checkbox for following text input">
                                                            </div>
                                                        </div>
                                                        <input type="text" class="form-control" aria-label="Text input with checkbox" value="{{ $service->service_type }}">
                                                        <div class="input-group-append">
                                                            <button type="submit" onclick="return confirm('Are you sure to delete it?')" class="btn btn-light" id="button-addon2 ">X</button>
                                                        </div>
                                                    </div>
                                                </form><br>
                                                @endforeach
                                        </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--end page-content-wrapper-->
		</div>
		<!--end page-wrapper-->

@endsection
