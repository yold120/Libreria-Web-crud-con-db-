
<!-- Modal -->
<div class="modal fade" id="insertarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header ext4">
        <h5 class="ex4" id="exampleModalLabel">CONTACTO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
          <form id="frminsert" onsubmit="return insertarDatos()" method="post">


              <div class="row">
              <div class="col-5">
                <div class="form-group">
                    <label></label>
                    <input placeholder = "Fecha Actual" type="date" id="fecha" name="fecha" class="form-control form-control-sm" required="" maxlength="20" minlength="3"> 
                </div>
              </div>
              <div class="col-7">
                <div class="form-group">
                    <label></label>
                    <input placeholder = "Correo Electronico" type="email" id="correo" name="correo" class="form-control form-control-sm" required="">

                </div>
              </div>
              <div class="col-5" >
                <div class="form-group" >
                    
                    <label></label>
                    <input placeholder = "Nombre"  type="text" id="nombre" name="nombre" class="form-control form-control-sm">
   
                </div>
              </div>
              <div class="col-7">
                <div class="form-group">
                  
                    <label></label>
                    <input placeholder = "Apellido" type="text" id="apellido" name="apellido" class="form-control form-control-sm">
                    
                </div>
              </div>
            </div>
                <div class="form-group">
                    <label></label>
                    <input placeholder = "Asunto" type="text" id="asunto" name="asunto" class="form-control form-control-sm">
                    
                </div>
                <div class="form-group">
                    <label>Comentario:</label>
                    <textarea placeholder = "Introduzca un Comentario (Max. 500 letras)" id="comentario" name="comentario" class="form-control form-control-sm" required id="message" rows="5"></textarea>
                    
                </div>
                <input type="submit" value="Enviar" class="btn btn-primary">

        
          </form>


      </div>
      
    </div>
  </div>
</div>


