@extends('layout.main')

@section('body')
<div class="alert alert-success" role="alert">
  <h2>Clients</h2>
</div>

<section class="content">
<div class="row">
    <div class="col-md-12">

        <div class="box box-primary">
                    
            <div class="box-header">
            <a href="/client/new" class="btn btn-success">New Client</a>
            </div>
            <br>


            <div class="box-body no-padding">
                <table id="tb_default" class="table table-bordered table-striped">
                <thead>
                    <tr>
                    <th style="width: 10px">#</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>State</th>
                    <th>Birthdate</th>
                    <th>Salary</th>
                    <th style="width: 250px">&nbsp;</th>
                    
                    
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
                  
                    
                    <td>
                        <a href="/client/edit/{{$client->id}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Edit</a>
                        <a href="/client/delete/{{$client->id}}" onclick="return confirm('Do you want to delete this record  id = {{$client->id}}?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</a>
                    </td>
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