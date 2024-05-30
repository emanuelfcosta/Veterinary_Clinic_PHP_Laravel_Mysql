@extends('layout.main')

@section('body')
<div class="alert alert-success" role="alert">
  <h2>Procedures Report</h2>
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
                    <th>Nome</th>
                    <th style="width: 150px">Valor(R$)</th>
                   
                    
                    
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach($procedures as $procedure )
                    
                    <tr>
                    <td>{{$procedure->id}}</td>
                    <td>{{$procedure->name}}</td>
                    <td>{{$procedure->price}}</td>
                  
                    
                  
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