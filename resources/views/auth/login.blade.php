@extends('layouts.auth-master')
@section('content')
<form action="/login" method="POST">
        <!-- no olvidar ponerle name al input -->
        @csrf
        <h1>Login</h1>
        @include('layouts.partials.messages')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Usuario o Email</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
        <div class="mb-3">
            <a href="/register">Create Account</a>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
    
    