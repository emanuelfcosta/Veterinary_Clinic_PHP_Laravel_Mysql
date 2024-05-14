@extends('layout.main')

@section('body')
<div class="alert alert-primary" role="alert">
  <h2>Edit Client</h2>
</div>
<section class="content">
<div class="row">
    <div class="col-md-12">

        <div class="box box-primary">
                    
            
            <br>

            <div class="box-body no-padding">
              <form role="form" action="/client/{{$theClient->id}}" method="post" >
                @csrf
                <div class="box-body">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$theClient->name}}" required  >
                  </div>    
                  
                  <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{$theClient->address}}" required  >
                  </div>

                  <div class="form-group">
                    <label>State( states of Brazil):</label>
                    <select class="form-control" id="state" name="state">
                    <option value="AC" @if ( $theClient->state  == "AC") {{ 'selected' }} @endif>AC</option>
                    <option value="AL" @if ( $theClient->state  == "AL") {{ 'selected' }} @endif>AL</option>
                    <option value="AP" @if ( $theClient->state  == "AP") {{ 'selected' }} @endif>AP</option>
                    <option value="AM" @if ( $theClient->state  == "AM") {{ 'selected' }} @endif>AM</option>
                    <option value="BA" @if ( $theClient->state  == "BA") {{ 'selected' }} @endif>BA</option>
                    <option value="CE" @if ( $theClient->state  == "CE") {{ 'selected' }} @endif>CE</option>
                    <option value="DF" @if ( $theClient->state  == "DF") {{ 'selected' }} @endif>DF</option>
                    <option value="ES" @if ( $theClient->state  == "ES") {{ 'selected' }} @endif>ES</option>
                    <option value="GO" @if ( $theClient->state  == "GO") {{ 'selected' }} @endif>GO</option>
                    <option value="MA" @if ( $theClient->state  == "MA") {{ 'selected' }} @endif>MA</option>
                    <option value="MT" @if ( $theClient->state  == "MT") {{ 'selected' }} @endif>MT</option>

                    <option value="MS" @if ( $theClient->state  == "MS") {{ 'selected' }} @endif>MS</option>
                    <option value="MG" @if ( $theClient->state  == "MG") {{ 'selected' }} @endif>MG</option>
                    <option value="PA" @if ( $theClient->state  == "PA") {{ 'selected' }} @endif>PA</option>
                    <option value="PB" @if ( $theClient->state  == "PB") {{ 'selected' }} @endif>PB</option>
                    
                    <option value="PR" @if ( $theClient->state  == "PR") {{ 'selected' }} @endif>PR</option>
                    <option value="PE" @if ( $theClient->state  == "PE") {{ 'selected' }} @endif>PE</option>
                    <option value="PI" @if ( $theClient->state  == "PI") {{ 'selected' }} @endif>PI</option>
                    <option value="RJ" @if ( $theClient->state  == "RJ") {{ 'selected' }} @endif>RJ</option>
                    <option value="RN" @if ( $theClient->state  == "RN") {{ 'selected' }} @endif>RN</option>
                    <option value="RS" @if ( $theClient->state  == "RS") {{ 'selected' }} @endif>RS</option>
                    <option value="RO" @if ( $theClient->state  == "RO") {{ 'selected' }} @endif>RO</option>
                    <option value="RR" @if ( $theClient->state  == "RR") {{ 'selected' }} @endif>RR</option>
                    <option value="SC" @if ( $theClient->state  == "SC") {{ 'selected' }} @endif>SC</option>
                    <option value="SP" @if ( $theClient->state  == "SP") {{ 'selected' }} @endif>SP</option>
                    <option value="SE" @if ( $theClient->state  == "SE") {{ 'selected' }} @endif>SE</option>
                    <option value="AC" @if ( $theClient->state  == "TO") {{ 'selected' }} @endif>TO</option>
                    
                        
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="birth_date">Birthdate</label>
                    <input type="date" class="form-control" id="birth_date" name="birth_date" value="{{$theClient->birth_date}}" required  >
                  </div>

                  <div class="form-group">
                    <label for="salary">Salary</label>  
                    <input type="number" class="form-control" id="salary" name="salary" step="0.01"  placeholder="0.00" value="{{$theClient->salary}}"  required  >
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