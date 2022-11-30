<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Article App</title>
    <link rel="stylesheet" 
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="{{ asset('css/style.css')}}">
    @vite(['resources/js/app.js'])


 <style>

    .fa.fa-sign-out{
      color: black;

    }

    .fa.fa-sign-out:hover{
      color: dodgerblue;
    }
 </style>

</head>
<body>

@auth 
<ul><a href="{{url('login')}}" class="nav-name">{{auth()->user()->name}}</a>
<li class=" d-flex align-items-right justify-content-right">
  <a href="{{ route('logout') }}"><i class="fa fa-sign-out fa-2x"></i> </a>

</li>
</ul>

@endauth

        

    


  
    @yield('content')


    </body>
    <script>
      const a=document.querySelectorAll('.invalid')   
        setTimeout(()=>{
    
          a.forEach((e)=>{
              e.style.display="none";
          })
        },3000);
    </script>
</html>