@extends('layout.main')

@section('body')
<div class="alert alert-success" role="alert">
  <h2>Consultations</h2>
</div>

<section class="content">
<div class="row">
    <div class="col-md-12">

        <div class="box box-primary">
                    
            <div class="box-header">
            <a href="/consultation/new" class="btn btn-success">New Consultation</a>
            </div>
            <br>


            <div class="box-body no-padding">
                <table id="tb_default" class="table table-bordered table-striped">
                <thead>
                    <tr>
                    <th style="width: 10px">#</th>
                    <th>Date</th>
                    <th>Pet</th>
                    <th>Client</th>
                    <th>Vet</th>
                    <th>Total(R$)</th>
                    
                    <th style="width: 250px">&nbsp;</th>
                    
                    
                    </tr>
                </thead>
                <tbody>
                    
                @foreach ($consultations as $consultation )
                    
                    <tr>
                    <td>{{$consultation->id}}</td>
                    <td>{{ \Carbon\Carbon::parse($consultation->the_date)->format('d/m/Y')}}</td>    
                    <td>{{$consultation->pet->name ?? ''}}</td>
                    <td>{{$consultation->pet->client->name ?? ''}}</td>
                    <td>{{$consultation->vet->name ?? ''}}</td>
                    <td>{{$consultation->total_cost}}</td>
                    
                    
                    
                     

                    
                    
                    
                    <td>
                        <a href="/consultation/show/{{$consultation->id}}" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Show</a>
                        <a href="/consultation/delete/{{$consultation->id}}" onclick="return confirm('Do you want to delete this record  id = {{$consultation->id}}?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</a>
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