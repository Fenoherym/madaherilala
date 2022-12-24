   <!-- Button trigger modal -->
   <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#create">
       <i class="fa fa-plus"></i> Ajouter un point fort pour ce circuit
   </button>


   <!-- Modal -->
   <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
       aria-hidden="true">
       <div class="modal-dialog" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Ajout d'un nouveau circuit</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>
               <form action="{{ route('admin.circuit.points.store') }}" method="POST">
                   <div class="modal-body ">
                       @csrf
                       <div class="form-group">
                           <input type="text" class="form-control" id="circuit" name="circuit_id"
                               value="{{ $circuit->name }}" disabled>
                           <input type="text" name="circuit_id" value="{{ $circuit->id }}" hidden>
                       </div>
                       <div class="form-group">
                           <label for="name">Point fort</label>
                           <input type="text" class="form-control" id="name" name="name">
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
