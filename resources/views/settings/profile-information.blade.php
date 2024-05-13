@extends('layouts.public')

@section('title', 'Appointment App | Settings ')

<div class="container-fluid">
 <div class="row">
      <div class=".col">
        <div class="card-sidebar">
            <div class=" mb-5 pt-5 pl-3"><a href="#">
              <img  src="{{ asset('img/icon.png')}}" alt="icon"/>
             </a></div>
            <div class="mb-5 pl-3 text-white">
               <p class="cta-text">  Hi, {{  Auth::user()->firstname }}!</p>
            </div>
           <div class="nav">
            <ul class="list-unstyled">
              <li class="mb-5 pl-3"><a class="text-white text-decoration-none" href="{{ asset('mainpage')}}">Home</a></li>
              <li class="mb-5 pl-3"><a class="text-white text-decoration-none" href="status">Appointment</a></li>
              <li class="mb-5 pl-3"><a class="text-white text-decoration-none" href="">Settings</a></li>
              <li class="mb-5 pl-3"><a class="text-white text-decoration-none" href="" id="loginLink">Logout</a></li>
            </ul>
           </div>
        </div>
      </div>

       <div class="container">
        <div class="row">
            <div class="mt-5">
                <h1>Settings</h1>
            </div>

            <div class="col-md-12">
                <div class="btn-iimg text-center  pt-5 mt-5 pl-5 ">
                          <img class="icon" alt="" src="{{ asset('img/icon.png')}}" />
                     </div>


                      <div class="mt-5 text-right">
                       <a class="btn bnt-lg btn--cta text-white text-decoration-none" href="user.profile" role="button">Change Profile</a>
                        <!--<button  type="submit" class="btn  btn-lg">Change Profile</button>-->
                       </div>
                       <form class="form--cta cta-form pl-5 mt-5" action="{{ route('user-profile-information.update')}}" method="POST">
                        @csrf

                        @method('PUT')
                        <div class="row my-5 pt-5">

                            @if (session('status') === 'profile-information-updated')
                            <div class="alert alert-success">Profile has been updated.</div>
                            @endif

                            <div class="col-md-4 mb-3">
                                <label for="firstName" class="form-label">First Name:</label>
                                <input type="text" class="form-control form-control-lg @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname', $user->firstname)}}" id="firstName">

                                @error('firstname')
                               <div class="invalid-feedback">{{ $message }}</div>
                               @enderror
                            </div>

                            <div class="col-md-4 mb-3">
                                <label for="middlename" class="form-label">Middle Name:</label>
                                <input type="text" class="form-control form-control-lg  @error('middlename') is-invalid @enderror" name="middlename" value="{{ old('middlename', $user->middlename)}}" id="middleName" >

                                @error('middlename')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-4 mb-3">
                                <label for="lastname" class="form-label text-dark">Last Name:</label>
                                <input type="text" class="form-control form-control-lg  @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname', $user->lastname)}}" id="lastName" >

                                @error('lastname')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                          </div>

                         <label for="username" class="form-label">User Name:</label>
                          <div class="input-group mb-5">
                            <input type="text" class="form-control form-control-lg @error('username') is-invalid @enderror" name="username" value="{{ old('username', $user->username)}}"  id="userName" >

                            @error('lastname')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>

                         <label for="email" class="form-text form-label"> Email:</label>
                         <div class="input-group mb-5">
                            <input type="text" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email', $user->email)}}" id="email">

                            @error('lastname')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                         </div>

                         <label for="Phone" class="form-text form-label ">Contact Number:</label>
                         <div class="input-group" >
                            <input type="text" class="form-control form-control-lg @error('phonenumber') is-invalid @enderror" name="phonenumber"  value="{{ old('phonenumber', $user->phonenumber)}}" id="phoneNumber" >


                            @error('phonenumber')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                         </div>


                         <div class="mt-5 text-right">
                            <!--<a class="btn bnt-lg btn--cta text-white text-decoration-none" href="" role="button">Update Profile</a>-->
                            <button  type="submit" class="btn btn-lg btn--cta text-white text-decoration-none">Update Profile</button>
                          </div>
                       </form>
            </div>
        </div>
       </div>
    </div>
 </div>

