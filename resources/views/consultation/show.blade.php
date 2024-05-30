@extends('layout.main')

@section('body')
<div class="alert alert-warning" role="alert">
  <h2>Consultation Details</h2>
</div>

<section class="content">
<div class="row">
    <div class="col-md-12">

        <div class="box box-primary">
                    
            <div class="box-header">
            <a href="/consultation" class="btn btn-success">Consultations</a>
            </div>
            <br>


            <div class="box-body no-padding">
              
                <h4 class="text-primary">Consultation</h4>

                <table class="table table-bordered table-striped">
                <thead>
                    <tr  class="table-primary">
                    <th style="width: 50px">#</th>
                    <th>Date</th>
                    <th>Total Cost ($)</th>
                    </tr>
                </thead>
                <tbody>
                          
                    <tr>
                    <td>{{$theConsultation->id}}</td>    
                    <td> {{ \Carbon\Carbon::parse($theConsultation->the_date)->format('d/m/Y')}}</td>
                    <td>{{$theConsultation->total_cost}}</td>
                    
                   
                    </tr>
                          
                </tbody>
                </table>

                <h4 class="text-primary">Pet</h4>

                <table  class="table table-bordered table-striped">
                <thead>
                    <tr class="table-warning">
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
                   
                    <tr>
                    <td>{{$theConsultation->pet->id}}</td>
                    <td ><img src="{{ asset('storage/' . $theConsultation->pet->photo_path ) }}" alt="photo" style="max-width: 70%;"></td>
                    <td>{{$theConsultation->pet->name}}</td>
                    <td>{{$theConsultation->pet->client->name}}</td>
                    <td>{{$theConsultation->pet->specie}}</td>
                    <td>{{$theConsultation->pet->gender}}</td>
                    <td>{{ \Carbon\Carbon::parse($theConsultation->pet->birth_date)->format('d/m/Y')}}</td>
                                   
                    </tr>
                  
                    
                </tbody>
                </table>

                <h4 class="text-danger">Procedures</h4>
                <table  class="table table-bordered table-striped">
                <thead>
                    <tr class="table-danger">
                    <th style="width: 10px">#</th>
                    <th>Name</th>
                    <th>Price($)</th>
                    
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach($theConsultation->Procedures as $consultation )
                    
                    <tr>
                    <td>{{$consultation->id}}</td>    
                    <td>{{$consultation->name}}</td>
                    <td>{{$consultation->price}}</td>
                    
                   
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