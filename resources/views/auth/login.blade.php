@extends('layouts.layout')

@section('title', 'Appointment App | Login ')

<div class="auth-wrapper d-flex pt-5">
    <div class="col-md-4 m-auto p-4">
        <div class="bg-white shadow p-3 mb-4 bg-body-tertiary  rounded">
            <div class="text-center pt-5" >
                <a>
                <img class="logo" alt="" src="img/logo9.png" />
                </a>
            </div>
            <div class=" px-3 pt-3 mx-4 m-3 p-5">
                <h1 class="display-3 text-center  font-weight-bold text-dark">Login</h1>
                <!--<p class="h1 text-center p-5 font-weight-bold  text-black">Login</p>-->
             <form class="form-login" action="{{ route('login')}}" method="POST">
                   @csrf
                 <div class="mb-5 mt-4">
                    <label for="email" class="form-text form-label"></label>
                    <input type="email" placeholder="Email:" class="form-control  form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" />


                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                 </div>
                 <div class="mb-5">
                    <label for="password" class="form-text form-label"></label>
                    <input type="password"  class="form-control form-control-lg @error('password') is-invalid @enderror" placeholder="Password:"  name="password" value="{{ old('password') }}" />

                    @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                 </div>

                 <div class="mb-5 d-flex justify-content-between align-items-center">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="remember" value="true" id="customCheck1">
                        <label class="custom-control-label text-black-50" for="customCheck1">Remember me</label>
                     </div>

                    <a class=" text-dark form-text text-decoration-none" href="{{ route('password.request') }}"> Forgot Password?</a>
                 </div>

                 <div class="mt-2 mb-2 d-grid ">
                    <!--<a class="btn btn-dark btn-block  btn-lg  " href="" role="button">Login</a>-->
                    <button type="submit" class="btn btn-dark btn-block  btn-lg">Login</button>
                 </div>
                 <div class="cta-form text-center py-4 ">
                    Don't have account?
                    <a href="{{ route('register') }}"
                    class="text-dark text-decoration-none">Register</a>
                </div>
             </form>
            </div>
        </div>
    </div>
    </div>


