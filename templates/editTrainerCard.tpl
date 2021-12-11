<div class="container">
    <h2 class="mt-4">Agregar Carta - Entrenador</h2>
    <form action="editTrainerCard" method="POST" autocomplete="off">
        <div class="row">
            <div class="col">
                <input type="text" class="form-control" placeholder="Descripción" name="description" required>
                <input type="hidden" name="card_id" value="{$card_id}">
            </div>
        </div>

    <!-- Button trigger modal -->
    {* <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
      Launch demo modal
    </button> *}

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Volver</button>
            <button type="submit" class="btn btn-danger">Guardar cambios</button>
          </div>
        </div>
      </div>
    </div>

    <button type="submit" class="btn btn-primary mt-2" data-toggle="modal" data-target="#exampleModal">Agregar</button>
    </form>
</div>
<script src="./
js/jquery.min.js"></script>
<script src="./
js/bootstrap.min.js"></script>
<script src="./
js/scripts.js"></script>
