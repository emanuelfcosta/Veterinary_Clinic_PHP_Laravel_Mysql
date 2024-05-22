@extends('layout.main')

@section('body')

<script>

// pets

function close_modal_pets(){
    $('#modalPets').modal('hide');    
    }


function add_pet(element) {



document.getElementById("id_pet").value = document.getElementById("grid_pet").rows[element.parentNode.parentNode.rowIndex].cells[0].innerHTML;
document.getElementById("pet_name").value = document.getElementById("grid_pet").rows[element.parentNode.parentNode.rowIndex].cells[1].innerHTML;
document.getElementById("client").value =  document.getElementById("grid_pet").rows[element.parentNode.parentNode.rowIndex].cells[2].innerHTML;
document.getElementById("specie").value =  document.getElementById("grid_pet").rows[element.parentNode.parentNode.rowIndex].cells[3].innerHTML;

close_modal_pets();

}


//vet

function close_modal_vets(){
    $('#modalVets').modal('hide');    
    }


function add_vet(element) {



document.getElementById("id_vet").value = document.getElementById("grid_vet").rows[element.parentNode.parentNode.rowIndex].cells[0].innerHTML;
document.getElementById("vet_name").value = document.getElementById("grid_vet").rows[element.parentNode.parentNode.rowIndex].cells[1].innerHTML;

close_modal_vets();

}

// procedures

function close_modal_procedures(){
    $('#modalProcedures').modal('hide');    
    }


function add_procedure(element) {



 document.getElementById("id_pet").value = document.getElementById("grid_procedure").rows[element.parentNode.parentNode.rowIndex].cells[0].innerHTML;
document.getElementById("pet_name").value = document.getElementById("grid_procedure").rows[element.parentNode.parentNode.rowIndex].cells[1].innerHTML;
document.getElementById("client").value =  document.getElementById("grid_procedure").rows[element.parentNode.parentNode.rowIndex].cells[2].innerHTML;
document.getElementById("specie").value =  document.getElementById("grid_procedure").rows[element.parentNode.parentNode.rowIndex].cells[3].innerHTML; 

close_modal_procedures();

}

// add procedures
function add_procedures_consultation(element) {
  
  

  var table = document.getElementById("grid");
  var row = table.insertRow(1);
  
  var cell_id = row.insertCell(0);
  var cell_name = row.insertCell(1);
  var cell_price = row.insertCell(2);
  var cell_actions = row.insertCell(3);   
  
  cell_id.innerHTML = document.getElementById("grid_procedure").rows[element.parentNode.parentNode.rowIndex].cells[0].innerHTML;
  cell_name.innerHTML = document.getElementById("grid_procedure").rows[element.parentNode.parentNode.rowIndex].cells[1].innerHTML;
  cell_price.innerHTML = document.getElementById("grid_procedure").rows[element.parentNode.parentNode.rowIndex].cells[2].innerHTML;
         
      
      cell_actions.innerHTML = '<button type="button"  class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="top"  onclick= remove_procedure_consultation(this)>' +
  '<i class="fa fa-trash"></i> Delete</button>'; 
  
     // updates (increases) the quantity of sale items
  
   document.getElementById("qte_procedure_consultation").innerHTML = 
       
      //  parseInt(document.getElementById("qte_procedure_consultation").innerHTML) + parseInt(document.getElementById("qtde"+document.getElementById("gridproducts").rows[element.parentNode.parentNode.rowIndex].cells[0].innerHTML).value);

      parseInt(document.getElementById("qte_procedure_consultation").innerHTML) + 1;
       

       
      // UPDATE(INCREASE) THE VALUE OF THE SALE
  
  //     document.getElementById("consultation_value").innerHTML = 
  // (parseFloat(document.getElementById("consultation_value").innerHTML) +
  // parseFloat(document.getElementById("gridproducts").rows[element.parentNode.parentNode.rowIndex].cells[2].innerHTML * convert_decimal_value(document.getElementById("qtde"+document.getElementById("gridproducts").rows[element.parentNode.parentNode.rowIndex].cells[0].innerHTML).value))).toFixed(2);     
  
        document.getElementById("consultation_value").innerHTML = 
  parseFloat(document.getElementById("consultation_value").innerHTML) +
  parseFloat(document.getElementById("grid_procedure").rows[element.parentNode.parentNode.rowIndex].cells[2].innerHTML) ;     
      
  //total value 

  document.getElementById("total_value").value = document.getElementById("consultation_value").innerHTML;

  close_modal_procedures();
  
  }

    function close_modal_procedures(){
      $('#modalProcedures').modal('hide');    
      }

      function remove_procedure_consultation(element) {
  
  // UPDATE(DECREASE) QUANTITY OF SALE ITEMS        
document.getElementById("qte_procedure_consultation").innerHTML = 
   parseFloat(document.getElementById("qte_procedure_consultation").innerHTML) - 1 ;



// UPDATE(DECREASE) THE SALE AMOUNT        
    

document.getElementById("consultation_value").innerHTML = (parseFloat(document.getElementById("consultation_value").innerHTML) -
parseFloat(document.getElementById("grid").rows[element.parentNode.parentNode.rowIndex].cells[2].innerHTML)).toFixed(2);    


//total value 

document.getElementById("total_value").value = document.getElementById("consultation_value").innerHTML;

// DELETE ROW
     
document.getElementById("grid").deleteRow(element.parentNode.parentNode.rowIndex);
    

}  

function check_fields() {




    //Vet
    if (!$("#vet_name").val()) {
      alert('The Consultation must have a vet!');
  return false;
  }

  //Pet
  if (!$("#pet_name").val()) {
      alert('The Consultation must have a Pet!');
  return false;
  }

  //procedures

   //products
  
   if (document.getElementById("grid").rows.length < 2){
  
    alert('The Consultation must have Procedures!');

  return false;

}

// generate json of procedures

var i;
    var  my_json = '[';
   
    var  qty_commas = document.getElementById("grid").rows.length -2;
     // -2 because the fisrt row has the name of the fields

// read all the procedures
    
    var table_procedures_consultation = document.getElementById("grid");
   
   document.getElementById('memo_procedures').value= '';
   
    for (var i = 1, row; row = table_procedures_consultation.rows[i]; i++) {

          my_json = my_json + '{"IDPROCEDURE":' + table_procedures_consultation.rows[i].cells[0].innerHTML + '}';
          
          

          if (qty_commas > 0){
              my_json = my_json + ',';
              qty_commas = qty_commas -1;
            } 

        }
   
    my_json = my_json + ']';
   
   document.getElementById('memo_procedures').value= my_json;



}

</script>

               <!-- BEGIN -  Modal Test -->
                <!-- Modal -->
                <div class="modal fade " id="modalPets" tabindex="-1" aria-labelledby="modalPetsLabel" aria-hidden="true" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalPetsLabel">Pets</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
        <table class="table table-bordered table-striped table-hover" id="grid_pet">
            <thead>
              <tr>
                <th style="width: 10px">#</th>
                <th>Name</th>
                <th>Dono</th>
                <th>Specie</th>
                <th>gender</th>
                
                <th style="width: 140px">&nbsp;</th>
              </tr>
            </thead>
            <tbody >
              
              @foreach($pets as $pet )
              <tr>
                <td>{{$pet->id}}</td>
                <td>{{$pet->name}}</td>
                <td>{{$pet->client->name}}</td>
                <!-- <td><img src="/storage/{{$pet->photo_path}}" alt="photo" style="max-width: 30%;"></td> -->
                <!-- <td>{{$pet->photo_path}}</td> -->
                <td>{{$pet->specie}}</td>
                <td>{{$pet->gender}}</td>
                



                <td>
                  <button type="button" class="btn btn-xs btn-primary" data-toggle="tooltip" data-placement="top"   onclick="add_pet(this)">
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

<!-- --------------- MODAL VET ------------------ -->
             <!-- BEGIN -  Modal VET -->
                <!-- Modal -->
                <div class="modal fade " id="modalVets" tabindex="-1" aria-labelledby="modalVetsLabel" aria-hidden="true" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalVetsLabel">Vets</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
        <table class="table table-bordered table-striped table-hover" id="grid_vet">
            <thead>
              <tr>
                <th style="width: 10px">#</th>
                <th>Name</th>
               
                
                <th style="width: 140px">&nbsp;</th>
              </tr>
            </thead>
            <tbody >
              
              @foreach($vets as $vet )
              <tr>
                <td>{{$vet->id}}</td>
                <td>{{$vet->name}}</td>
                
           
                <td>
                  <button type="button" class="btn btn-xs btn-primary" data-toggle="tooltip" data-placement="top"   onclick="add_vet(this)">
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
                <!-- END -  Modal VET -->

<!-- --------------- FIM -  MODAL VET ------------------ -->

<!-------------------- Modal Procedure ------------------>

           <!-- BEGIN -  Modal Test -->
                <!-- Modal -->
                <div class="modal fade " id="modalProcedures" tabindex="-1" aria-labelledby="modalProceduresLabel" aria-hidden="true" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalProceduresLabel">Procedures</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
        <table class="table table-bordered table-striped table-hover" id="grid_procedure">
            <thead>
              <tr>
                <th style="width: 10px">#</th>
                <th>Name</th>
                <th>Price</th>
                
                
                <th style="width: 140px">&nbsp;</th>
              </tr>
            </thead>
            <tbody >
              
              @foreach($procedures as $procedure )
              <tr>
                <td>{{$procedure->id}}</td>
                <td>{{$procedure->name}}</td>
                <td>{{$procedure->price}}</td>
                

                <td>
                  <button type="button" class="btn btn-xs btn-primary" data-toggle="tooltip" data-placement="top"   onclick="add_procedures_consultation(this)">
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




<!-------------------- FIM - Modal Procedure ------------------>



<div class="alert alert-primary" role="alert">
<h2>New Consultation</h2>
</div>

<section class="content">
<div class="row">
    <div class="col-md-12">

        <div class="box box-primary">
                               
            <br>
            <div class="box-body no-padding">
              <form role="form" action="/consultation" method="post" 
                 onsubmit="return check_fields()" >
                @csrf

                <div class="form-group">
                    <label for="consultation_date">Date</label>
                    <input type="date" class="form-control" id="consultation_date" name="consultation_date" required 
                    oninvalid="this.setCustomValidity('Required')"
                    onchange="try{setCustomValidity('')}catch(e){}" >
                  </div>
            
                <h3 class="text-success">VET:</h3>

                     <!-- Button trigger modal -->
                     <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalVets">
                      Select Vet
                    </button>

                  <div class="form-group " >
                    <input    class="form-control" id="id_vet" name="id_vet"  readonly >
                  </div>

                  <div class="form-group">
                    <label for="vet_name">Name:</label>
                    <input type="text" class="form-control" id="vet_name" name="vet_name" required  readonly  >
                  </div>



                <h3 class="text-danger">PET:</h3>

                <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalPets">
                      Select Pet
                    </button>

                <div class="box-body">
                 
                  <div class="form-group " >
                    <input    class="form-control" id="id_pet" name="id_pet"  readonly >
                  </div>

                  <div class="form-group">
                    <label for="pet_name">Name:</label>
                    <input type="text" class="form-control" id="pet_name" name="pet_name"  readonly>
                  </div>
                  <div class="form-group">
                    <label for="specie">Specie:</label>
                    <input type="text" class="form-control" id="specie" name="specie" readonly  >
                  </div>

                  <div class="form-group">
                    <label for="client">Client:</label>
                    <input type="text" class="form-control" id="client" name="client" readonly  >
                  </div> 

                  <br>

                  <div class="form-group">
                    <label for="total_value">total value:</label>
                    <input type="text" class="form-control" id="total_value" name="total_value" readonly  >
                  </div> 
                  
                  <div class="form-group ">
                    <label  for="memo_procedures">Memo procedures:</label>
                    <input type="text" class="form-control" id="memo_procedures" name="memo_procedures" >
                  </div>


                  <h3 class="text-success">PROCEDURES:</h3>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalProcedures">
                    Select Procedure
                    </button>  
                    
                    <table id="grid" class="table  table-bordered table-striped table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Price</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      
                    </table>

                    <div class="row justify-content-end">

                        <div class="col-md-3 col-sm-6 col-xs-12">
                          
                              <h5>
                                <span class="text-primary">Quantity</span>
                                <span class="text-primary" id="qte_procedure_consultation">0</span>
                              </h5>
                            
                            <!-- /.info-box-content -->
                          

                          <!-- /.info-box -->
                        </div>
                    
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <h5>
                            <span class="text-danger">Total</span>
                            <span class="text-danger" id="consultation_value">0.0</span>
                          </h5>
                        
                        <!-- /.info-box -->
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