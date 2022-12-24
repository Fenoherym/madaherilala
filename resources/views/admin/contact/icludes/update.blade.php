   <!-- Button trigger modal -->
   <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#update">
       <i class="fa fa-gear"></i> Modification contacts
   </button>


   <!-- Modal -->
   <div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
       aria-hidden="true">
       <div class="modal-dialog" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Modifier les contacts</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>
               <form action="{{ route('admin.contact.update', $contact->id) }}" method="POST"
                   enctype="multipart/form-data">
                   <div class="modal-body">
                       @csrf
                       <div class="form-group">
                           <label for="name">Adresse</label>
                           <input type="adresse" class="form-control" id="name" name="adresse"
                               value="{{ $contact->adresse }}">
                       </div>
                       <div class="form-group">
                           <label for="tel">Telephone</label>
                           <input type="tel" class="form-control" id="tel" name="telephone"
                               value="{{ $contact->telephone }}">
                       </div>
                       <div class="form-group">
                           <label for="name">Email</label>
                           <input type="email" class="form-control" id="email" name="email"
                               value="{{ $contact->email }}">
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
