@extends('layout.main')

@section('body')
<div class="alert alert-success" role="alert">
  <h2>Vets Report</h2>
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
                    <th>Email</th>
                    <th>Cell phone</th>
                    <th>Address</th>
                    <th>State</th>
                   
                    
                    
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach($vets as $vet )
                    
                    <tr>
                    <td>{{$vet->id}}</td>
                    <td>{{$vet->name}}</td>
                    <td>{{$vet->email}}</td>
                    <td>{{$vet->cell_phone}}</td>
                    <td>{{$vet->adress}}</td>
                    <td>{{$vet->state}}</td>
                    
                    
                    
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