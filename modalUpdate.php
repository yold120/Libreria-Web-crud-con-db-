<!-- Modal -->
<div class="modal fade" id="actualizarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form id="frminsertu" onsubmit="return actualizarDatos()" method="post">
            <input type="text" id="id" name="id" hidden="">
              <label>Fecha</label>
              <input type="text" id="fechau" name="fechau" class="form-control form-control-sm" required="">
              <label>Correo</label>
              <input type="text" id="correou" name="correou" class="form-control form-control-sm" required="">
              <label>Nombre</label>
              <input type="text" id="nombreu" name="nombreu" class="form-control form-control-sm">
              <label>Apellido</label>
              <input type="text" id="apellidou" name="apellidou" class="form-control form-control-sm">
              <label>Asunto</label>
              <input type="text" id="asuntou" name="asuntou" class="form-control form-control-sm">
              <label>Comentario</label>
              <input type="text" id="comentariou" name="comentariou" class="form-control form-control-sm">
              <br>
               <input type="submit" value="Actualizar" class="btn btn-warning">
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>
