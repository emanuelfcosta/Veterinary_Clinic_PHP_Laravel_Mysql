@extends('layout.main')

@section('body')
<div class="alert alert-success" role="alert">
  <h2>Vets</h2>
</div>

<section class="content">
<div class="row">
    <div class="col-md-12">

        <div class="box box-primary">
                    
            <div class="box-header">
            <a href="/vet/new" class="btn btn-success">New Vet</a>
            </div>
            <br>


            <div class="box-body no-padding">
                <table id="tb_default" class="table table-bordered table-striped">
                <thead>
                    <tr>
                    <th style="width: 10px">#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Cell phone</th>
                    <th>Address</th>
                    <th>State</th>
                    <th style="width: 250px">&nbsp;</th>
                    
                    
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach($vets as $vet )
                    
                    <tr>
                    <td>{{$vet->id}}</td>
                    <td>{{$vet->name}}</td>
                    <td>{{$vet->email}}</td>
                    <td>{{$vet->cell_phone}}</td>
                    <td>{{$vet->address}}</td>
                    <td>{{$vet->state}}</td>
                    
                    
                    <td>
                        <a href="/vet/edit/{{$vet->id}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Edit</a>
                        <a href="/vet/delete/{{$vet->id}}" onclick="return confirm('Do you want to delete this record  id = {{$vet->id}}?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</a>
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