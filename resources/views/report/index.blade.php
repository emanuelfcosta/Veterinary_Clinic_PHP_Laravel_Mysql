@extends('layout.main')

@section('body')
<div class="alert alert-success" role="alert">
  <h2>Reports</h2>
</div>

<section class="content">
<div class="row">
    <div class="col-md-12">

        <div class="box box-primary">
    
            <div class="box-body no-padding">
            

                <h4 class="text-primary">Select a Report:</h4>

                <form role="form" action="/report/show" method="post" >
                @csrf
                <div class="box-body">

                 
                  <div class="radio">
                  <label class="fs-4" >
                    <input type="radio" name="report_type" id="report_clients" value="clients" checked>
                    Clients
                  </label>
                </div>
                <div class="radio">
                  <label class="fs-4" >
                    <input type="radio" name="report_type" id="report_pets" value="pets">
                    Pets
                  </label>
                </div>
                <div class="radio">
                  <label class="fs-4">
                    <input type="radio" name="report_type" id="report_procedures" value="procedures">
                    Procedures
                  </label>
                </div>
                <div class="radio">
                  <label class="fs-4">
                    <input type="radio" name="report_type" id="report_vets" value="vets">
                    Vets
                  </label>
                </div>
                <div class="radio">
                  <label class="fs-4">
                    <input type="radio" name="report_type" id="report_consultations" value="consultations">
                    Consultations
                  </label>
                </div>
      
                </div>
                <!-- /.box-body -->

                <br>
                <div class="box-footer">
                  <button type="submit" class="btn btn-warning">Show</button>
                </div>
              </form>
                


            </div>
        <!-- /.box-body -->
        </div>
     </div>
</div>   
</section>

@endsection