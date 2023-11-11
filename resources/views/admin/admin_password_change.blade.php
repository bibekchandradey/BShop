@extends('admin.admin_master')
@section('admin')



<div class="page-content">
    <div class="container-flude">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Update Password</h4>
                        @if (count($errors))
                            @foreach ($errors->all() as $error)
                                <p class="alert alert-danger alert-disamissible fade show">
                                    {{$error}}
                                </p>
                            @endforeach
                        @endif

                        <form method="post" action="{{route('update.password')}}" >
                           @csrf
                           <br><br>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Old Password</label>
                                <div class="col-sm-10">
                                    <input name="oldpassword" class="form-control" type="password"  placeholder="" id="oldpassword">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">New Password</label>
                                <div class="col-sm-10">
                                    <input name="newpassword" class="form-control" type="password"  placeholder="" id="newpassword">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Confirm Password</label>
                                <div class="col-sm-10">
                                    <input name="confirm_password" class="form-control" type="password"  placeholder="" id="confirm_password">
                                </div>
                            </div>


                            <input type="submit" class="btn btn-primary waves-effect waves-light" value="Update Password">

                        </form>
                        <!-- end row -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
