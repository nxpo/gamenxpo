

        @extends('layouts.app')

@section('content')
<div id="app" class="bg">
            <test1-component></test1-component>
        </div>
@endsection


<style>


.bg {
  /* The image used */
  background-image: url("images/bg.png");

  /* Full height */
  height: 100%; 
  position: fixed;
  width: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}


.bgstart {
  /* The image used */
  background-image: url("images/bgstart.png");
  position: fixed;
  width: 100%;

  /* Full height */
  height: 99%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>