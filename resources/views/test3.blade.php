

        @extends('layouts.app')

@section('content')
<div id="app" class="">
            <test3-component></test3-component>
        </div>
@endsection


<style>


.bg {
  /* The image used */
  background-image: url("images/bggame3.png");
  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: fixed;
}


.bgstart {
  /* The image used */
  background-image: url("images/bgstart.png");

  /* Full height */
  height: 100%;  
  width: 100%;
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: fixed;
}
</style>