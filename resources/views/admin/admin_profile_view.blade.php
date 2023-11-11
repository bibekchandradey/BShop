@extends('admin.admin_master')
@section('admin')



<div class="page-content">
    <div class="container-flude">
        <div class="col-lg-6">
            <div class="card">
                <br>
                <br>
                <center>
                    <img class="rounded-circle avatar-xl" src="{{
                        (!empty($adminData->profile_image)) ? url('upload/admin_images/'.
                        $adminData->profile_image): url('upload/noimage.png') }}" alt="Card image cap">
                </center>
                <div class="card-body">
                    <center>
                        <h4 class="card-title">Name : {{$adminData->name}}</h4>
                        <hr>
                        <h4 class="card-title">User Email  : {{$adminData->email}}</h4>
                        <hr>
                        <h4 class="card-title">User Name : {{$adminData->username}}</h4>
                        <hr>

                        <a href="{{route('edit.profile')}}" class="btn btn-primary btn-rounded waves-effect waves-light">Edit Profile</a>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
