   <!-- Button trigger modal -->
   <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#exampleModal">
       <i class="fa fa-plus"></i> Ajouter un circuit
   </button>


   <!-- Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
       aria-hidden="true">
       <div class="modal-dialog" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Ajout d'un nouveau circuit</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>
               <form action="{{ route('admin.circuit.store') }}" method="POST" enctype="multipart/form-data">
                   <div class="modal-body">
                       @csrf
                       <div class="form-group">
                           <label for="name">Nom du circuit</label>
                           <input type="text" class="form-control" id="name" name="name">
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
