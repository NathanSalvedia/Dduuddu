@extends('layouts.public')

@section('title', 'Appointment App |  View Request ')




    <div class="container">
       <div class="bg-white shadow-sm rounded  mt-5 m-5 p-3">
         <div class="row">
            <div class="col-md-11 m-auto">
                <div class="mt-4 mb-4">
                    <p class="cta-text font-weight-bold">Request Form</p>
                  </div>

                  <form class="cta-form">
                    @csrf
                    <div class="row my-5">
                        <div class="col-lg-3 mb-3">
                            <label for="firstName" class="form-label">First Name:</label>
                            <input type="text" class="form-control form-control-lg bg-white" id="firstName" value="{{ Auth::user()->firstname }}" readonly>
                        </div>

                        <div class="col-lg-3 mb-3">
                            <label for="firstName" class="form-label">Middle Name:</label>
                            <input type="text" class="form-control form-control-lg bg-white" id="middleName" value="{{ Auth::user()->middlename}}" readonly>
                        </div>

                        <div class="col-lg-3 mb-3">
                            <label for="lastname" class="form-label text-dark">Last Name:</label>
                            <input type="text" class="form-control form-control-lg bg-white" id="lastName" value="{{ Auth::user()->lastname}}" readonly>
                        </div>

                        <div class="col-lg-3 mb-3">
                            <label for="phone" class="form-label text-dark">Phone Number:</label>
                            <input type="text" readonly class="form-control form-control-lg bg-white form-control-lg"  value="{{ Auth::user()->phonenumber}}" id="phone" />
                        </div>
                        </div>

                        <div class="cta--form">

                        </div>

                        <div class="form-group mt-3 pt-4">

                         </div>

                       <div class="form-floating mt-5">

                      </div>

                      <div class="mb-5 pt-5  text-right mx-3">
                        <a class="btn btn--cta  btn-lg text-white text-decoration-none" href="" role="button">Back</a>
                        <a class="btn btn--cta  btn-lg text-white text-decoration-none mx-3" href="" role="button">Edit</a>
                       </div>
                   </div>
                  </form>
            </div>
         </div>
    </div>


