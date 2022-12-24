   <!-- Button trigger modal -->
   <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#update">
       <i class="fa fa-user"></i> Editer profil
   </button>


   <!-- Modal -->
   <div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
       aria-hidden="true">
       <div class="modal-dialog" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Modifier infos admin</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>
               <form action="{{ route('profil.update', auth()->user()->id) }}" method="POST">
                   @csrf
                   <div class="modal-body ">
                       <div class="form-group">
                           <label for="name">Nom:</label>
                           <input type="text" class="form-control" id="name" name="name"
                               value="{{ auth()->user()->name }}">
                       </div>
                       <div class="form-group">
                           <label for="email">Email:</label>
                           <input type="text" class="form-control" id="email" name="email"
                               value="{{ auth()->user()->email }}">
                       </div>
                       <div class="form-group">
                           <label for="password">Mot de passe:</label>
                           <input type="password" class="form-control" id="password" name="password">
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
