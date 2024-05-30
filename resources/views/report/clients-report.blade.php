@extends('layout.main')

@section('body')
<div class="alert alert-success" role="alert">
  <h2>Clients Report</h2>
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
                    <th>Name</th>
                    <th>Address</th>
                    <th>State</th>
                    <th>Birthdate</th>
                    <th>Salary</th>
                    
                    
                    
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach($clients as $client )
                    
                    <tr>
                    <td>{{$client->id}}</td>
                    <td>{{$client->name}}</td>
                    <td>{{$client->address}}</td>
                    <td>{{$client->state}}</td>
                    <td>{{ \Carbon\Carbon::parse($client->birth_date)->format('d/m/Y')}}</td>
                    <td>{{$client->salary}}</td>
                  
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