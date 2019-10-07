@extends('layouts.master')

@section('page')
    DashBoard
@stop

@push('css')
    @endpush

@section('content')
    <!-- Small boxes (Stat box) -->
    <div class="row">
        @hasrole('user1')
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>Hr</h3>

                    <p>Hr Module</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        @endhasrole
        <!-- ./col -->

        @hasrole('user2')
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>Production</h3>

                    <p>Module</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        @endhasrole

        @hasrole('admin')
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
                <div class="inner">
                    <h3>User</h3>

                    <p>Manage</p>
                </div>
                <div class="icon">
                    <i class="fa fa-users"></i>
                </div>
                <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        @endhasrole
    </div>
    <!-- /.row -->
@stop

@push('js')
    @endpush