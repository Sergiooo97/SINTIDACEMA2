<form method="POST" action="{{ url("almacen/delete/{$d->id}") }}">
    <div class="modal-body">
        @csrf
        @method('DELETE')
        <h5 class="text-center">¿Estas seguro de eliminar este registro
            {{ $d->numero_orden }} ?</h5>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary"
            data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-danger">Si, eliminar registro</button>
    </div>
</form>

