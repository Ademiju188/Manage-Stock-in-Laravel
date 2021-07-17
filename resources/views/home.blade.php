@extends('layouts.dash')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="wrapper">
    <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card card-transparent card-block card-stretch card-height border-none">
                        <div class="card-body p-0 mt-lg-2 mt-0">
                            <h3 class="mb-3">Hi {{ Auth::user()->name }},   
                                {{$greetings}}
                                
                            </h3>
                            <p class="mb-0 mr-4">Your dashboard gives you views of key performance or business process.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="card card-block card-stretch card-height">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-4 card-total-sale">
                                        <div class="icon iq-icon-box-2 bg-info-light">
                                            <img src="{{asset('assets/images/product/1.png')}}" class="img-fluid" alt="image">
                                        </div>
                                        <div>
                                            <p class="mb-2">Total Stock</p>
                                            <h4>{{$numStock}}</h4>
                                        </div>
                                    </div>
                                    <div class="iq-progress-bar mt-2">
                                        <span class="bg-info iq-progress progress-1" data-percent="85">
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if (Auth::user()->is_admin == 1)

                        <div class="col-lg-4 col-md-4">
                            <div class="card card-block card-stretch card-height">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-4 card-total-sale">
                                        <div class="icon iq-icon-box-2 bg-danger-light">
                                            <img src="{{asset('assets/images/product/2.png')}}" class="img-fluid" alt="image">
                                        </div>
                                        <div>
                                            <p class="mb-2">Total Supplier</p>
                                            <h4>{{$numSupplier}}</h4>
                                        </div>
                                    </div>
                                    <div class="iq-progress-bar mt-2">
                                        <span class="bg-danger iq-progress progress-1" data-percent="70">
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="card card-block card-stretch card-height">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-4 card-total-sale">
                                        <div class="icon iq-icon-box-2 bg-success-light">
                                            <img src="{{asset('assets/images/product/3.png')}}" class="img-fluid" alt="image">
                                        </div>
                                        <div>
                                            <p class="mb-2">Total User</p>
                                            <h4>{{$numUser}}</h4>
                                        </div>
                                    </div>
                                    <div class="iq-progress-bar mt-2">
                                        <span class="bg-success iq-progress progress-1" data-percent="75">
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        
                        

                    </div>
                    <div class="card card-block card-stretch card-height">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Top Products</h4>
                            </div>
                           
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled row top-product mb-0">
                                @if (!empty($items))
                                    
                                @forelse($items as $data)
                                <li class="col-lg-3 m-0">
                                    <div class="card m-0">
                                        <div class="card-body">
                                            <div class="bg-warning-light rounded">
                                                <img src="{{ asset('/storage/stock/' . $data->stock_img) }}" class="style-img img-fluid m-auto p-3 m-0" alt="image">
                                            </div>
                                            <div class="style-text text-left mt-3">
                                                <h5 class="mb-1">{{$data->name}}</h5>
                                                <p class="mb-0">{{$data->stock_alert}} Item</p>
                                            </div>
                                            @empty
                                            No Product Found!
                                        </div>
                                    </div>
                                </li>
                               @endforelse
                               
                               @endif
                            </ul>
                        </div>
                    </div> 
                </div>
                
                   
                
            </div>
            <!-- Page end  -->
        </div>
    </div>
</div>
@endsection
