
@extends('base')

@section('content')

<style>
    body, html {
  height: 100%;
}

* {
}



.bg-text {
 
  color: white;
  font-weight: bold;
  
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
  font-family:monospace;
}
body{
  background: url(sportcar.jpg);
}
</style>

<div class="bg-text">
    <h1>My Favorite Place</h1>
    <h2>I want to go Adventure!!</h2>
    <p>Just click here to <a class="text-white" href="/register">Register Account!</a></p>
  </div>