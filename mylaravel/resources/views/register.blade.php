@extends('layouts.default')

@section('content')
<div class="register-page">
<div class="register-box">
    <div class="register-logo">
      <a href="../index2.html"><b>Admin</b>LTE</a>
    </div>
    <!-- /.register-logo -->
    <div class="card">
      <div class="card-body register-card-body">
        <p class="register-box-msg">Register a new membership</p>
        <form action="{{ url('register') }}" onsubmit="return validate()" method="post">
          @csrf
          <div class="input-group mb-3">
            <input type="text" name="name" id="name" class="form-control" placeholder="Full Name" />
            <div class="input-group-text"><span class="bi bi-person"></span></div>
            <div class="valid-feedback" id="valid-name">
            </div>
            <div class="invalid-feedback" id="invalid-name">
              Can't be blank.
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="email" name="email" id="email" class="form-control" placeholder="Email" />
            <div class="input-group-text"><span class="bi bi-envelope"></span></div>
            <div class="valid-feedback" id="valid-email">
            </div>
            <div class="invalid-feedback" id="invalid-email">
              Incorrect email.
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" id="pass" class="form-control" placeholder="Password" />
            <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
            <div class="valid-feedback" id="valid-password">
            </div>
            <div class="invalid-feedback" id="invalid-password">
              Password should contain <br>
              -Atleast one number (0-9) <br>
              -Atleast one Lowercase letter (a-z) <br>
              -Atleast one Uppercase letter (A-Z) 
            </div>
          </div>
          <!--begin::Row-->
          <div class="row">
            <div class="col-8">
              <div class="form-check">
                <input class="form-check-input" id="mycheckbox" type="checkbox" value="" id="flexCheckDefault" />
                <label class="form-check-label" for="flexCheckDefault">
                  I agree to the <a href="#">terms</a>
                </label>
                <div class="valid-feedback" id="valid-checkbox">
                </div>
                <div class="invalid-feedback" id="invalid-checkbox">
                  You must agree before submitting.
                </div>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" onclick="validate()">Sign In</button>
              </div>
            </div>
            <!-- /.col -->
          </div>
          <!--end::Row-->
        </form>
        {{-- <button class="btn" onclick="clickme()">Click Me</button>  --}}
        <p class="mb-0">
          <a href="login.html" class="text-center"> I already have a membership </a>
        </p>
      </div>
      <!-- /.register-card-body -->
    </div>
  </div>
</div>
@endsection

@section('scripts')
  {{-- <script>
    console.log("Hello World!")
    // ALERT("Hello World!")
  </script> --}}
  <script>
    /* alert("Hello World!")
    let myval
    var mtval2
    const PI=3.14
    pi = 2
    console.log(PI,pi)
    let myarry = Array(1,2,3);
    // let myarry = [];
    // let myarry = arry() 
    myarry[0] = 1
    myarry["1"] = 2
    myarry.push(3)
    myarry.push(4)
    console.log(myarry)
    myarry.pop()
    console.log(myarry)
    for(a=1; a<10 ; a++){
      console.log(a);
    } */
    function validate(){
      /* let name = document.getElementById('name')
      let email = document.getElementById('email')
      let password = document.getElementById('pass')
      let checkbox = document.getElementById('mycheckbox')
          name.value = "new test"
          name = $('#name'),val("new with jquery")
          $('#name').addClass('is-invalid') //error
          $('#name').addClass('is-valid') //ok
          //email format @[a-z].[a-z]
          //password format [0-9][a-z][A-Z]
      console.log("Hello!",name.value)
      console.log(name.val(), email.val(), password.val(), checkbox.prop('checked')) */

      let name = $('#name');
      let email = $('#email');
      let password = $('#pass');
      let checkbox = $('#mycheckbox');

      let isValid = true;

      if(name.val().length === 0){
        name.addClass('is-invalid');
        isValid = false;
      }else{
        name.removeClass('is-invalid');
      }
      if(!(email.val().includes("@") && email.val().includes("."))){
        email.addClass('is-invalid');
        isValid = false;
      }else{
        email.removeClass('is-invalid');
      }
      if(!(/\d/.test(password.val()) && /[a-z]/.test(password.val()) && /[A-Z]/.test(password.val()))){
        password.addClass('is-invalid');
        isValid = false;
      }else{
        password.removeClass('is-invalid');
      }
      if(!checkbox.prop('checked')){
        checkbox.addClass('is-invalid');
        isValid = false;
      }else{
        checkbox.removeClass('is-invalid');
      }
      return isValid;
    }
    /* $(document).ready(function(){
      // alert("Hello World")
    }) */
  </script>
  @endsection