<!-- Modal -->
<div class="modal fade" id="editModal{{ $circuit->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajout d'un nouveau circuit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('admin.circuit.update') }}" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <input type="text" name="id" value="{{ $circuit->id }}" hidden>
                    <div class="form-group">
                        <label for="name">Nom du circuit</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ $circuit->name }}">
                    </div>
                    <div class="form-group">
                        <label for="formFile" class="form-label">Photo</label>
                        <input class="form-control" type="file" id="formFile" name="photoUrl">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</div>
