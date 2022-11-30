@vite(['resources/js/app.js'])

<style>

body{
   background-color: #ececec;
}
  .btn-close{
    background-size: 0.7em;
  }


  .container-title{
    width: 500px ;
    
        box-shadow: 11px 11px 30px #c9c9c9, -11px -11px 30px #ffffff;
     padding: 30px
  }

  .submit-btn{
    border: none;
    font-weight: bold;
  box-shadow: -5px -5px 20px #fff, 5px 5px 20px #babecc;
    transition: all 0.2s ease-in-out;
    cursor:pointer;
    background-color: #ececec;
    padding: 10px 10px;
    font-size: 18px;
    opacity: .9;
    border-radius: 15px;
    width: 100%;
  }

  .submit-btn:hover{
      box-shadow: -2px -2px 5px #fff, 2px 2px 5px #babecc;
      opacity:1;

  }


  .invalid-feedback{
    font-size: 16px;
  }


  input{
    width: 100%;
  border: none;
  outline: none;
  background: none;
  font-size: 18px;
  color: #555;
  padding: 8px 20px;
  border-radius: 15px;
  background: #ececec;

          box-shadow: inset 5px 5px 8px #d2d2d2, inset -5px -5px 8px #ffffff;
  }

  .icon{

          box-shadow: 7px 7px 14px #9c9c9c, -7px -7px 14px #ffffff;
          border-radius: 50%;
          
  }




</style>
<div class="container container-title mt-5" >
  <div class="title mb-2">
    <img src="{{ asset("build/assets/images/windows10.png")}}" class="icon" alt="IconImage"> <br>
    <span class="titlename">Login</span>
  </div>

  @if(session()->has('fail'))
  <div class="alert alert-danger alert-dismissible py-1 invalid" role="alert">
    {{ session()->get('fail') }}
    <button type="button" class="btn-close" style="padding: 10px" data-bs-dismiss="alert" aria-label="Close"></button>

    </div>
      @endif

<form action="{{ route('loginuser') }}" method="post" >
  @csrf
    <div class="mb-3">
      <label for="email" class="form-label">Email Address</label>
      <input type="email" name="email" class="  @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div class="invalid-feedback invalid">
        @error('email')
            {{ $message }}
      @enderror
      </div>
    </div>
    <div class="mb-3">
      <label for="Password" class="form-label">Password</label>
      <input type="password" name="password" class="  @error('password') is-invalid @enderror" id="exampleInputPassword1">
      <div class="invalid-feedback invalid">
        @error('password')
    {{ $message }}
      @enderror
      </div>
    </div>

    <button type="submit" class="submit-btn  mt-4" style="border-radius: 10px">Login</button>

    <p class="mt-3 text-center">Dont Have an Account? <span><a href="{{ route('signup') }}"> SignUp</a></span></p>
  </form>
</div>
<script>
  const a=document.querySelectorAll('.invalid')   
    setTimeout(()=>{

      a.forEach((e)=>{
          e.style.display="none";
      })
    },3000);
</script>


