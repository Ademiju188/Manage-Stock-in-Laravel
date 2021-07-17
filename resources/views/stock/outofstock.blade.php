@extends('layouts.dash')
@section('content')
    <div class="wrapper">
        <div class="content-page">
            @if (Auth()->user()->is_admin == 1 || Auth()->user()->is_admin == 3)
            <div class="container-fluid add-form-list">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Out of Stock</h4>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-10">
                                @include('inc.msg')
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example2" class="data-table table table-striped table-bordered mb-0 tbl-server-info">
                                            
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            Item Name
                                                        </th>
                                                        <th>
                                                            Remaining Item
                                                        </th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($outs as $data)
                                                    @if (empty($data->name))
                                                         
                                                    <tr>
                                                        <td colspan="2" style="text-align: center">Items Not Found!</td>
                                                    </tr>
                                                    @else
                                                    <tr>
                                                        <td>
                                                            {{ $data->name }}
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-sm badge-danger">{{$data->stock_alert}}</button>
                                                        </td>
                                                    </tr>
                                                    @endif
                                                       

                                                    @endforeach
                                                </tbody>
                                               
                                            </table>

                                        </div>
                                    </div>
                        </div>
                    </div>
                </div>
                <!-- Page end  -->
            </div>
            @else
       <div class="row">
           <div class="col-md-4"></div>
           <div class="col-md-4">
               <div class="pt-5 text-center">
                   <h3 class="text-danger">
                       Please Login with Admin Credentials!!!
                   </h3>
                   <a class="btn btn-warning btn-xl" href="{{ route('home') }}">Return</a>
               </div>
           </div>
           <div class="col-md-4"></div>
       </div>
   @endif
        </div>
    </div>
@endsection