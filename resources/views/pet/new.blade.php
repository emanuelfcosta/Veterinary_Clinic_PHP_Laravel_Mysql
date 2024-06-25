@extends('layout.main')

@section('body')

<script>

function close_modal(){
    $('#modalClientPet').modal('hide');    
    }


function add_client_to_pet(element) {



document.getElementById("id_client").value = document.getElementById("grid_client_pet").rows[element.parentNode.parentNode.rowIndex].cells[0].innerHTML;
document.getElementById("client_pet").value = document.getElementById("grid_client_pet").rows[element.parentNode.parentNode.rowIndex].cells[1].innerHTML;

close_modal();

}

</script>

               <!-- BEGIN -  Modal Test -->
                <!-- Modal -->
                <div class="modal fade" id="modalClientPet" tabindex="-1" aria-labelledby="modalClientPetLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalClientPetLabel">Clients</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
        <table class="table table-bordered table-striped table-hover" id="grid_client_pet">
            <thead>
              <tr>
                <th style="width: 10px">#</th>
                <th>Name</th>
                <th style="width: 140px">&nbsp;</th>
              </tr>
            </thead>
            <tbody >
              
              @foreach($clients as $client )
              <tr>
                <td>{{$client->id}}</td>
                <td>{{$client->name}}</td>
                <td>
                  <button type="button" class="btn btn-xs btn-primary" data-toggle="tooltip" data-placement="top"  onclick="add_client_to_pet(this)">
                    <i class="fa fa-plus"></i> Select
                  </button>
              
                  
                </td>
              </tr>
              
              @endforeach
            </tbody>
          </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
                <!-- END -  Modal Test -->





<div class="alert alert-primary" role="alert">
  <h2>New Pet</h2>
</div>
<section class="content">
<div class="row">
    <div class="col-md-12">

        <div class="box box-primary">
                    
            
            <br>

            <div class="box-body no-padding">
              <form role="form" action="/pet" method="post" enctype="multipart/form-data">
                @csrf
                <div class="box-body">

                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required  >
                  </div>  

                  <div class="form-group" >
                    <input type="hidden"   class="form-control" id="id_client" name="id_client"  readonly >
                  </div>

                  <div class="form-group">
                    <label for="client_pet">Cliente:</label>
                    <input type="text" class="form-control" id="client_pet" name="client_pet"  onkeydown="return false;" required>
                  </div>

                     
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalClientPet">
                      Select Client
                    </button>

                  
                  

                  
                  <div class="form-group">
                    <label for="photo">Photo</label>
                    <input type="file" class="form-control" id="photo" name="photo"  >
                  </div>   
                  
                  <div class="form-group">
                    <label for="specie">Specie</label>
                    <input type="text" class="form-control" id="specie" name="specie"  >
                  </div>  

                  <div class="form-group">
                    <label for="breed">Breed</label>
                    <input type="text" class="form-control" id="breed" name="breed"  >
                  </div>  

                  <div class="form-group">
                    <label for="color">Color</label>
                    <input type="text" class="form-control" id="color" name="color"  >
                  </div>  

                  <div class="form-group">
                    <label for="height">Height</label>  
                    <input type="number" class="form-control" id="height" name="height" step="0.001" value="0.000" placeholder="0.000"  >
                  </div>

                  <div class="form-group">
                    <label for="weight">Weight</label>  
                    <input type="number" class="form-control" id="weight" name="weight" step="0.001" value="0.000" placeholder="0.000"   >
                  </div>



                  <div class="form-group">
                    <label>Gender:</label>
                    <select class="form-control" id="gender" name="gender">
                      <option value="M">M</option>
                      <option value="F">F</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="birth_date">Birthdate</label>
                    <input type="date" class="form-control" id="birth_date" name="birth_date" required  >
                  </div>


                  <div class="form-group">
                    <label for="father">Father</label>
                    <input type="text" class="form-control" id="father" name="father"  >
                  </div>  

                  <div class="form-group">
                    <label for="mother">Mother</label>
                    <input type="text" class="form-control" id="mother" name="mother"  >
                  </div> 
                  
                  <div class="form-group">
                      <label>Observations:</label>
                      <textarea class="form-control" rows="4" id="observations" name="observations" ></textarea>
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