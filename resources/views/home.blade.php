@extends('layouts.layout')

@section('content')
<script>
setTimeout(function(){
   window.location.reload(1);
}, 120000);
</script>
<div class="container-fluid text-light">
    <div class="row justify-content-around">
        <div class="col p-2">
            <div class="container-fluid pt-2">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card bg-dark border-secondary">
                            <div class="card-header bg-secondary font-weight-bold">{{ __('Dashboard') }}</div>

                            <div class="card-body">
                                <p> Hi {{ Auth::user()->name }},</p>
                                <p><span class="text-info">Welcome to the Netsolid Admin portal!</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col p-2">
            <div class="card bg-dark border-secondary">
                <div class="card-header bg-secondary font-weight-bold">Subscribers</div>

                <div class="card-body">
                @foreach($subscriber_names as $sub)
                    <p>{{ $sub->name }}</p>
                @endforeach
                </div>
                <div class="card-footer text-right">
                    <p>Total: {{ $subscriber_count }}</p>
                </div>
            </div>
        </div>

        <div class="col p-2">
            <div class="card bg-dark text-light border-secondary" style="width:425px">
                <div class="card-header bg-secondary text-center font-weight-bold">Netsolid Team</div>
                <div class="card-body pt-0">
                    <div class="row text-center border-bottom border-secondary">
                        <div class="col-5 px-2">Name</div>
                        <div class="col-2 px-2">Ext</div>
                        <div class="col-5 px-2">Status</div>
                    </div>
                    @foreach($employee_statuses as $employee_status)
                    @php
                        $color = '';
                        $msg = '';
                    @endphp
                        @switch($employee_status->status)
                            @case('office')
                                @php 
                                    $color = 'text-success';
                                    $btn = 'btn-outline-success';
                                    $msg = 'In the office';
                                @endphp
                                @break
                            @case('home')
                                @php 
                                    $color = 'text-info';
                                    $btn = 'btn-outline-info';
                                    $msg = 'Working @ home';
                                @endphp
                                @break
                            @case('road')
                                @php 
                                    $color = 'text-light';
                                    $btn = 'btn-outline-light';
                                    $msg = 'On the road';
                                @endphp
                                @break
                            @case('sick')
                                @php 
                                    $color = 'text-warning';
                                    $btn = 'btn-outline-warning';
                                    $msg = 'Out sick';
                                @endphp
                                @break
                            @default
                                @php 
                                    $color = 'text-danger';
                                    $btn = 'btn-outline-danger';
                                    $msg = 'Out'
                                @endphp
                        @endswitch
                        <form action="{{ route('home.update', $employee_status->id) }}" method="post">
                        @csrf
                        @method('PUT')
                            <div class="row font-weight-bold border-bottom border-secondary p-0">
                                    <div class="col-1 pt-2">
                                        <span class="spinner-border spinner-border-sm {{ $color }}" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-4 pt-2 text-light">{{ $employee_status->name }}</div>
                                    <div class="col-2 text-light">
                                        <a class="btn btn-outline-info border-0" data-toggle="collapse" data-target="#{{ $employee_status->id }}cell" aria-expanded="false" aria-controls="{{ $employee_status->id }}cell">{{ $employee_status->ext }} </a>
                                    </div>
                                    <div class="col-5 text-center">
                                        <a class="btn {{ $btn }} border-0" data-toggle="collapse" data-target="#{{ $employee_status->id }}" aria-expanded="false" aria-controls="{{ $employee_status->id }}">{{ $msg }}</a>
                                    </div>
                                    <div class="col-12 text-center collapse multi-collapse py-2" id="{{ $employee_status->id }}cell">
                                        <button type="button" class="btn btn-outline-info disabled mr-2" aria-disabled="true">Email: {{ $employee_status->email }}</a>
                                        <button type="button" class="btn btn-outline-info disabled " aria-disabled="true">Cell: {{ $employee_status->cell }}</a>
                                    </div>
                                    <div class="col-12 text-center collapse multi-collapse py-2" id="{{ $employee_status->id }}">
                                        <button name="status" type="submit" value="office" class="btn btn-outline-success">Office</button>
                                        <button name="status" type="submit" value="home" class="btn btn-outline-info">Home</button>
                                        <button name="status" type="submit" value="road" class="btn btn-outline-light">Road</button>
                                        <button name="status" type="submit" value="sick" class="btn btn-outline-warning">Sick</button>
                                        <button name="status" type="submit" value="out" class="btn btn-outline-danger">Out</button>
                                    </div>
                            </div>
                        </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection