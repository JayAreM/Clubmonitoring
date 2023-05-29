@extends('layouts.app')

@section('content')
<body style="background-color: #252e40; color: white; padding-top: 50px; padding-bottom: 50px;">
<p style="text-align:center;"><img src ="{{ asset('images/cetlogo.png') }}" width= "240" height= "240" alt="Login Image"/> </p>
<button class="modal-btn btn1" style="margin-left:41%; margin-top:5%;">LOG IN</button>
    <div class="container" >
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div id="modal" class="modal">
                <div class="modal-content">
                 <span class="close-btn"></span>
                <div class="card" style="background-color: #252e40">
                    <div class="card-header">{{ __('HCDC Club Monitoring - Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    
                                    <button type="submit" class="btn btn-block" style="background-color: #3d4654; color: white;">
                                        {{ __('Login') }}
                                    </button>
                                    
                                    
                                </div>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    // Get the modal
const modal = document.getElementById("modal");

// Get the button that opens the modal
const modalBtns = document.querySelectorAll(".modal-btn");

// Get the <span> element that closes the modal
const closeBtn = document.querySelector(".close-btn");

// When the user clicks on the button, open the modal
modalBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    modal.style.display = "block";
  });
});

// When the user clicks on <span> (x), close the modal
closeBtn.addEventListener("click", () => {
  modal.style.display = "none";
});

// When the user clicks anywhere outside of the modal, close it
window.addEventListener("click", (event) => {
  if (event.target == modal) {
    modal.style.display = "none";
  }
});
    </script>

<style>
    .modal-content {
  background-color: #fefefe;
  margin: 10% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 40%;
  max-width: 80%;
  text-align: center;
  position: relative;
  animation-name: modalopen;
  animation-duration: 0.5s;
  margin-top: 8%;
  border-radius: 10px;
}

@keyframes modalopen {
  from {
    top: -300px;
    opacity: 0;
  }
  to {
    top: 0;
    opacity: 1;
  }
}
.container {
  text-align: center;
  margin-top: 50px;
}
.btn1 {
  background-color:#3e6b87;
  border: none;
  color: white;
  padding: 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  font-weight: bold;
  margin: 10px 5px;
  border-radius: 5px;
  cursor: pointer;
  width: 280px;
  height: 100px;
}
.modal-btn {
  border: none;
  color: white;
  padding: 30px 20px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 24px;
  margin: 10px;
  cursor: pointer;
  border-radius: 10px;
}

button.modal-btn:hover {
  background-color: inherit;
  color: orange;
  transition: all 0.2s ease-in-out;
  border: 1px solid;
  box-shadow: initial;
}
.card,.modal-content{
    background-color:#252e40;
}

</style>


@endsection
