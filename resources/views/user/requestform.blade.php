@extends('layouts.public')

@section('title', 'Appointment App | Request ')



<div class="container-fluid">
    <div class="row">
      <div class=".col">
        <div class="card-sidebar">
            <div class=" mb-5 pt-5 pl-3"><a href="#">
                <img  src="{{ asset('img/icon.png')}}" alt="icon"/>
               </a>
            </div>
              <div class="mb-5 pl-3 text-white">
                 <p class="cta-text" > Hi, {{  Auth::user()->firstname }}!</p>
              </div>
             <div class="nav">
              <ul class="list-unstyled">
                <li class="mb-5 pl-3"><a class="text-white text-decoration-none" href="{{ asset('mainpage')}}">Home</a></li>
                <li class="mb-5 pl-3"><a class="text-white text-decoration-none" href="">Appointment</a></li>
                <li class="mb-5 pl-3"><a class="text-white text-decoration-none" href="">Settings</a></li>
                <li class="mb-5 pl-3"><a class="text-white text-decoration-none" href="{{ route('logout')}}">Logout</a></li>
              </ul>
             </div>
        </div>
       </div>

       <div class="container">
        <div class="bg-white shadow-sm rounded mt-5 m-5 p-3">
            <div class="row">
                <div class="col-md-11 m-auto">
                    <div class="mt-4 mb-4">
                        <p class="cta-text font-weight-bold">Request Form</p>
                      </div>

                      <form  class="cta-form">
                        @csrf
                        <div class="row my-5">
                            <div class="col-md-3 mb-3">
                                <label for="firstname" class="form-label text-dark">First Name:</label>
                                <input type="text" class="form-control  form-control-lg" name="firstname" value="{{ Auth::user()->firstname  }}" enbabled  />
                            </div>

                            <div class="col-md-3 mb-3">
                                <label for="middlename" class="form-label text-dark">Middle Name:</label>
                                <input type="text" class="form-control  form-control-lg" name="middlename" value="{{ Auth::user()->middlename }}" enabled />
                            </div>

                            <div class="col-md-3 mb-3">
                                <label for="lastname" class="form-label text-dark">Last Name:</label>
                                <input type="text" class="form-control  form-control-lg" name="lastname" value="{{ Auth::user()->lastname }}" enabled />
                            </div>

                            <div class="col-md-3 mb-3">
                                <label for="phonenumber" class="form-label text-dark">Phone Number:</label>
                                <input type="text" class="form-control  form-control-lg" name="phonenumber"  placeholder="+63" value="{{(Auth::user()->phonenumber)}}"  enabled/>
                            </div>
                            </div>

                            <div class="cta--form">
                                <select id="select-option" name="typesofrequirements">
                                    <option value="">Please choose one option:</option>
                                      <option value="Transcript of Record">Transcript of Record</option>
                                    <option value="COR">COR</option>
                                    <option value="Certitification of Unit Earn">Certitification of Unit Earn</option>
                                    <option value="Speacial Order">Special Order  </option>
                                    <option value="Certificate of Graduate">Certificate of Graduate</option>
                                    <option value="Diploma">Diploma</option>
                                  </select>
                            </div>

                            <div class="form-group mt-3 pt-4">
                                <label for="image">Choose a file / Image:</label>
                                <input type="file" class="form-control-file" id="image" name="image" accept=".jpg, .jpeg, .png" />
                            </div>
                            <button type="submit" class="btn--cta btn-lg">Upload</button>

                            <div class="form-floating mt-4">
                                <label for="floatingTextarea2">Purpose:</label>
                                <textarea class="form-control"   name="purpose" style="height: 180px"></textarea>
                              </div>

                              <div class="mt-5 text-right mx-5 mb-3">
                                <button type="submit" class="btn--cta  btn-lg" onclick="submitForm()">Submit</button>
                            </div>
                      </form>
                </div>
            </div>
        </div>
       </div>
  </div>
</div>




