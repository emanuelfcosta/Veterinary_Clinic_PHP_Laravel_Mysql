@extends('layout.main')

@section('body')
<div class="alert alert-warning" role="alert">
  <h2>Edit Vet</h2>
</div>
<section class="content">
<div class="row">
    <div class="col-md-12">

        <div class="box box-primary">
                    
            
            <br>

            <div class="box-body no-padding">
              <form role="form" action="/vet/{{$theVet->id}}" method="post" >
                @csrf
                <div class="box-body">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$theVet->name}}" required  >
                  </div>    
                  
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{$theVet->email}}"   >
                  </div>  

                  <div class="form-group">
                    <label for="cell_phone">Cell phone</label>
                    <input type="text" class="form-control" id="cell_phone" name="cell_phone" value="{{$theVet->cell_phone}}" >
                  </div> 

                  <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{$theVet->address}}"    >
                  </div>  

                  <div class="form-group">
                    <label>State( states of Brazil):</label>
                    <select class="form-control" id="state" name="state">
                    <option value="AC" @if ( $theVet->state  == "AC") {{ 'selected' }} @endif>AC</option>
                    <option value="AL" @if ( $theVet->state  == "AL") {{ 'selected' }} @endif>AL</option>
                    <option value="AP" @if ( $theVet->state  == "AP") {{ 'selected' }} @endif>AP</option>
                    <option value="AM" @if ( $theVet->state  == "AM") {{ 'selected' }} @endif>AM</option>
                    <option value="BA" @if ( $theVet->state  == "BA") {{ 'selected' }} @endif>BA</option>
                    <option value="CE" @if ( $theVet->state  == "CE") {{ 'selected' }} @endif>CE</option>
                    <option value="DF" @if ( $theVet->state  == "DF") {{ 'selected' }} @endif>DF</option>
                    <option value="ES" @if ( $theVet->state  == "ES") {{ 'selected' }} @endif>ES</option>
                    <option value="GO" @if ( $theVet->state  == "GO") {{ 'selected' }} @endif>GO</option>
                    <option value="MA" @if ( $theVet->state  == "MA") {{ 'selected' }} @endif>MA</option>
                    <option value="MT" @if ( $theVet->state  == "MT") {{ 'selected' }} @endif>MT</option>

                    <option value="MS" @if ( $theVet->state  == "MS") {{ 'selected' }} @endif>MS</option>
                    <option value="MG" @if ( $theVet->state  == "MG") {{ 'selected' }} @endif>MG</option>
                    <option value="PA" @if ( $theVet->state  == "PA") {{ 'selected' }} @endif>PA</option>
                    <option value="PB" @if ( $theVet->state  == "PB") {{ 'selected' }} @endif>PB</option>
                    
                    <option value="PR" @if ( $theVet->state  == "PR") {{ 'selected' }} @endif>PR</option>
                    <option value="PE" @if ( $theVet->state  == "PE") {{ 'selected' }} @endif>PE</option>
                    <option value="PI" @if ( $theVet->state  == "PI") {{ 'selected' }} @endif>PI</option>
                    <option value="RJ" @if ( $theVet->state  == "RJ") {{ 'selected' }} @endif>RJ</option>
                    <option value="RN" @if ( $theVet->state  == "RN") {{ 'selected' }} @endif>RN</option>
                    <option value="RS" @if ( $theVet->state  == "RS") {{ 'selected' }} @endif>RS</option>
                    <option value="RO" @if ( $theVet->state  == "RO") {{ 'selected' }} @endif>RO</option>
                    <option value="RR" @if ( $theVet->state  == "RR") {{ 'selected' }} @endif>RR</option>
                    <option value="SC" @if ( $theVet->state  == "SC") {{ 'selected' }} @endif>SC</option>
                    <option value="SP" @if ( $theVet->state  == "SP") {{ 'selected' }} @endif>SP</option>
                    <option value="SE" @if ( $theVet->state  == "SE") {{ 'selected' }} @endif>SE</option>
                    <option value="AC" @if ( $theVet->state  == "TO") {{ 'selected' }} @endif>TO</option>
                    
                        
                    </select>
                  </div>

      
                </div>
                <!-- /.box-body -->

                <br>
                <div class="box-footer">
                  <button type="submit" class="btn btn-success">Save</button>
                </div>
              </form>
                
            </div>
        <!-- /.box-body -->
        </div>
     </div>
</div>   
</section>



@endsection