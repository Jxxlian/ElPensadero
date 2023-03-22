
<h1 style="margin-bottom: 1.5rem;" class="section-title">Calendario</h1>

        <div class="row">
            <div class="col"></div>
            <div class="col-7"> <div id="CalendarioWeb"></div></div>
            <div class="col"></div>
        </div>
        
    
  
<!-- Modal ( ADD, DELETE, MODIFICATION )-->
<div class="modal fade" id="modalAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="titleEvent">Evento</h1>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            

            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
          <input type="hidden" id="txtID" />
          <input type="hidden" id="txtDate" name="txtDate" />
        
        <div class="form-row">                 
            <div class="form-group col-md-6">
                <label>Título:</label><br>
                <input type="text" id="txtTitle" class="form-control"  autocomplete="off"/>
            </div>
            <div class="form-group col-md-4">
                <label>Hora:</label><br>
                <div class="input-group clockpicker" data-autoclose="true">
                    <input type="text" id="txtHour" value="10:30" class="form-control" />
                </div>
            </div>
            <div class="form-group col-md-2">
                <label>Color:</label><br>
                <input type="color" value="#5f81b8" id="txtColor" class="form-control" style="height: 50%;"/>
            </div>  
        </div>

        <div class="form-row">
            <div class="form-group col-md-12">
                <label>Descripción: </label> 
                <textarea row="3" id="txtDescription" class="form-control"></textarea>
             </div>
             
        </div>
        </div>

        <!-- Button from modal -->
        <div class="modal-footer">
            <button type="button" id="btnAdd" class="btn btn-success">Agregar</button>
            <button type="button" id="btnModify" class="btn btn-success">Modificar</button>
            <button type="button" id="btnDelete" class="btn btn-danger">Eliminar</button>            
        </div>
      </div>
    </div>
  </div>

