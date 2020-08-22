@extends('layout')

@section('content')


<section id="form"><!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-sm-offset-1">
                <div class="login-form"><!--login form-->
                    <h1>Thanks for ordering!</h1>
                    <h2>we'll contact you very soon.</h2>
                </div><!--/login form-->
            </div>
            
            <div class="col-sm-3">
                <img src="{{URL::to('frontend/images/home/handshake.jpg')}}" style="width: 350px; height: 200px;">
            </div>
        </div>
    </div>
</section><!--/form-->


@endsection