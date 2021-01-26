
        @extends('layouts.app')

@section('content')
<div id="app" class="bg">
<test2-component></test2-component>
        </div>
@endsection



<style>


.bg {
  /* The image used */
  background-image: url("images/bg.png");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: fixed;
  width: 100%;
}


.bgstart {
  /* The image used */
  background-image: url("images/bgstart.png");

  /* Full height */
  height: 99%; 
  position: fixed;
  width: 100%;
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>