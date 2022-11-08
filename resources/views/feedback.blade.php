@extends('layout')


@section('content')

    <h1 class="mt-3 ms-2 text-light">Feedback</h1>

    <section class="text-light p-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card bg-dark p-5">
                        <div class="card-header text-start h2 mb-2">Your Feedback is valued</div>
                        <div class="card_body">
                            @if(Session::has("message_sent"))
                                <div class= "alert alert-success" role="alert">
                                    {{Session::get("message_sent")}}
                                </div>
                            @else
                            <form name = "myform" id="myform" action= "{{route('storeFeedback')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div>Personal Info</div>
                                <fieldset style="border: 2px solid white" class="mb-3">
                                    <div class="form-group m-3 col-6 float-left">
                                        <label for="first_name">First Name</label>
                                        <input type="text" name="first_name" id="first_name"  class="form-control" />
                                        <span id="fname-error" class="text-danger"></span>
                                    </div>
                                    <div class="form-group m-3 col-6">
                                        <label for="last_name">Last Name</label>
                                        <input type="text" name="last_name" id="last_name" class="form-control" />
                                        <span id="lname-error" class="text-danger"></span>
                                    </div>
                                    <div class="form-group m-3 col-6">
                                        <p>Gender:<p>
                                        <input type="radio" id="genderM" name="gender"  value="male"  class="form-check-input"/>
                                        <label for="name">Male</label>
                                        <input type="radio" id="genderF" name="gender"  value="female" class="form-check-input" />
                                        <label for="name">Female</label>
                                        <span id="gender-error" class="text-danger"></span>
                                    </div>
                                    <div class="form-group m-3">
                                        <label for="name">Email</label>
                                        <input type="text" name="email" id="email" class="form-control" />
                                        <span id="email-error" class="text-danger"></span>
                                    </div>
                                    <div class="form-group m-3">
                                        <label for="name">phone</label>
                                        <input type="text" name="phone" id="phone" class="form-control" />
                                        <span id="phone-error" class="text-danger"></span>
                                    </div>
                                    <div class="form-group m-3">
                                        <label for="name">Country</label>
                                        <select name="country" id="country" class="form-select" aria-label="Default select example">
                                            <option selected value=""></option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="United State">United State</option>
                                            <option value="United Kindom">United Kindom</option>
                                            <option value="Germany">Germany</option>
                                            <option value="UAE">United Arab Emirates</option>
                                            <option value="Japan">Japan</option>
                                        </select>
                                        <span id="country-error" class="text-danger"></span>
                                    </div>
                                    <div class="form-group m-3">
                                        <label for="name">State</label>
                                        <input type="text" name="state" id="state" class="form-control" />
                                        <span id="state-error" class="text-danger"></span>
                                    </div>
                                    <div class="form-group m-3">
                                        <label for="name">City</label>
                                        <input type="text" name="city" id="city" class="form-control" />
                                        <span id="city-error" class="text-danger"></span>
                                    </div>
                                    <div class="form-group m-3">
                                        <label for="name">Adress</label>
                                        <input type="text" name="address" id="address" class="form-control" />
                                        <span id="address-error" class="text-danger"></span>
                                    </div>
                                </fieldset>
                                <div>Feedback</div>
                                <fieldset style="border: 2px solid white" class="mb-3">
                                    <div class="form-group m-3">
                                        <p>Message Categories</P>
                                        <label for="name">Complaint</label>
                                        <input type="checkbox" id ="complaint" name="Categories[]"  value="complaint" class="form-check-input me-2">
                                        <label for="name">suggestion</label>
                                        <input type="checkbox" id ="suggestion" name="Categories[]"  value="suggestion" class="form-check-input me-2">
                                        <label for="name">Tech Support</label>
                                        <input type="checkbox" id ="support" name="Categories[]"  value="support" class="form-check-input">
                                        <span id="cat-error" class="text-danger"></span>
                                    </div>
                                    
                                    <div class="form-group m-3">
                                        <label for="name">Subject</label>
                                        <input type="text" name="subject" id="subject" class="form-control">
                                        <span id="subject-error" class="text-danger"></span>
                                    </div>
                                    <div class="form-group m-3">
                                        <label for="msg">Message</label>
                                        <textarea name="msg" id="msg" class="form-control"></textarea>
                                        <span id="msg-error" class="text-danger"></span>
                                    </div>
                                </fieldset>
                                <div class="text-center mb-3">
                                    <button type="submit" class="btn btn-primary postion-center">Submit</button>
                                    <div id="submit-error" class="text-danger"></div>
                                </div>
                            </form>
                            @endif
                       
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
      
@endsection

@push('js')
    <script src="{{ asset('js/validation.js') }}"></script>
@endpush  

