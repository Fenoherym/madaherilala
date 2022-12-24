   <!-- Button trigger modal -->
   <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#pwd">
       <i class="fa fa-key"></i> Changer mot de passe
   </button>


   <!-- Modal -->
   <div class="modal fade" id="pwd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
       aria-hidden="true">
       <div class="modal-dialog" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Changer mot de passe</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>
               <form action="{{ route('profil.password.update', auth()->user()->id) }}" method="POST">
                   @csrf
                   <div class="modal-body ">
                       <div class="form-group">
                           <label for="password">Ancien mot de passe:</label>
                           <input type="password" class="form-control" id="old_password" name="old_password">
                       </div>
                       <div class="form-group">
                           <label for="password">Nouveau mot de passe:</label>
                           <input type="password" class="form-control" id="password" name="password">
                       </div>
                       <div class="form-group">
                           <label for="password">Confirmer mot de passe:</label>
                           <input type="password" class="form-control" id="confirm_password" name="confirm_password">
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
