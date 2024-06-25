@extends('layout.main')

@section('body')
<div class="alert alert-success" role="alert">
  <h2>Consultations Report</h2>
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
                    <th>Date</th>
                    <th>Pet</th>
                    <th>Client</th>
                    <th>Vet</th>
                    <th>Total($)</th>
                    
                   
                    
                    
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