@extends('layout.main')

@section('body') 
 
 <div class="alert alert-success text-center" role="alert">
  <h2>Vet Clinic</h2>
</div>
 <div class="container">
    <div class="row">
        <div class="col-12">
            <img class="mx-auto d-block" src="{{url('/main-image.jpg')}}" style="max-width: 95%;">  
        </div>
    </div>
</div>


@endsection