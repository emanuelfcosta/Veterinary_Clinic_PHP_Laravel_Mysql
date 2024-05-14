@extends('layout.main')

@section('body')
<!-- <h1>Procedimentos</h1> -->

<div class="alert alert-success" role="alert">
  <h2>Procedimentos</h2>
</div>

<section class="content">
<div class="row">
    <div class="col-md-12">

        <div class="box box-primary">
                    
            <div class="box-header">
            <a href="/procedure/new" class="btn btn-success">Novo Procedimento</a>
            </div>
            <br>


            <div class="box-body no-padding">
                <table id="tb_default" class="table table-bordered table-striped">
                <thead>
                    <tr>
                    <th style="width: 10px">#</th>
                    <th>Nome</th>
                    <th style="width: 150px">Valor(R$)</th>
                    <th style="width: 250px">&nbsp;</th>
                    
                    
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach($procedures as $procedure )
                    
                    <tr>
                    <td>{{$procedure->id}}</td>
                    <td>{{$procedure->name}}</td>
                    <td>{{$procedure->price}}</td>
                  
                    
                    <td>
                        <a href="/procedure/edit/{{$procedure->id}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Edit</a>
                        <a href="/procedure/delete/{{$procedure->id}}" onclick="return confirm('Do you want to delete this record  id = {{$procedure->id}}?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</a>
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