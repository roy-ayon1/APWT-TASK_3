@extends('layouts.app')

@section('content')
<div id="login">
        <div class="container" style="margin-top: 5%;">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form class="form" action="{{route('registrationCheck')}}" method="post">
                        {{csrf_field()}}
                        <h3 class="text-center text-info">Registration</h3>
                            <div class="mb-3 form-group">
                                <label for="userid" class="text-info">User_id:</label><br>
                                <input type="text" name="userid" id="userid" value="{{old('userid')}}" class="form-control">
                                @error('userid')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3 form-group">
                                <label for="useremail" class="text-info">Email:</label><br>
                                <input type="email" name="useremail" id="useremail" value="{{old('useremail')}}" class="form-control">
                                @error('useremail')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3 form-group">
                                <label for="userpassword" class="text-info">Password:</label><br>
                                <input type="password" name="userpassword" id="userpassword" value="{{old('userpassword')}}" class="form-control">
                                @error('userpassword')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3 form-group">
                                <label for="com_password" class="text-info">Comfirm Password:</label><br>
                                <input type="password" name="com_password" id="com_password" value="{{old('com_password')}}" class="form-control">
                                @error('com_password')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3 form-group">
                                <label for="usertype" class="text-info">User_type:</label><br>
                                <input type="text" name="usertype" id="usertype" value="{{old('usertype')}}" class="form-control">
                                @error('usertype')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3 form-group ">
                                <input type="submit" name="submit" class="btn btn-primary col-md-12 mx-auto" value="submit">
                            </div>
                            <div id="register-link" class="text-center">
                                <a href="{{route('loginCheck')}}" class="text-info">Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
