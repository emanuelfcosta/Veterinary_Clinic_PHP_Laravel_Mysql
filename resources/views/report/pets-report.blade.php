@extends('layout.main')

@section('body')
<div class="alert alert-success" role="alert">
  <h2>Pets Report</h2>
</div>

<section class="content">
<div class="row">
    <div class="col-md-12">

        <div class="box box-primary">
                    
           
            <br>


            <div class="box-body no-padding">
            <table  class="table table-bordered table-striped">
                <thead>
                    <tr>
                    <th style="width: 10px">#</th>
                    <th style="width: 250px; ">Photo</th>
                    <th>Name</th>
                    <th>Dono</th>
                    <th>Specie</th>
                    <th>gender</th>
                    <th>Birthdate</th>
                   
                    
                    
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach($pets as $pet )
                    
                    <tr>
                    <td>{{$pet->id}}</td>
                    <td ><img src="{{ asset('storage/' . $pet->photo_path ) }}" alt="photo" style="max-width: 70%;"></td>
                    <td>{{$pet->name}}</td>
                    <td>{{$pet->client->name}}</td>
                    <!-- <td><img src="/storage/{{$pet->photo_path}}" alt="photo" style="max-width: 30%;"></td> -->
                    <!-- <td>{{$pet->photo_path}}</td> -->
                    <td>{{$pet->specie}}</td>
                    <td>{{$pet->gender}}</td>
                    <td>{{ \Carbon\Carbon::parse($pet->birth_date)->format('d/m/Y')}}</td>
                    
                  
                    </tr>
                    @endforeach
                    
                </tbody>
                </table>
            </div>
        <!-- /.box-body -->
        </div>
     </div>
</div>   
</section>

@endsection