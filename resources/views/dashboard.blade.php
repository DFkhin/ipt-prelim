@extends('base')

@extends('navbar')

@section('title', 'Dashboard')

@section('content')

<body>
    <div class="container">
        <h1>Welcome to Dashboard!!</h1>
    </div>  
</body>
   

@endsection

<style>
    body {
        height: 100%;
        background-image: url("images/background.jpeg");
        background-position: center;
        background-repeat: no-repeat;
    }
    
    h1 {
       margin-left: 500px;
       color: rgb(255, 211, 66);
    }
</style>
