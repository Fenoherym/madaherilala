   <!-- Button trigger modal -->
   <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#message{{ $message->id }}">
       Consulter
   </button>


   <!-- Modal -->
   <div class="modal fade" id="message{{ $message->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
       aria-hidden="true">
       <div class="modal-dialog" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Message</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>
               <div class="modal-body">
                   <p>Nom: {{ $message->name }}</p>
                   <p>email: {{ $message->email }}</p>
                   <p>Message: <br> {{ $message->content }}</p>
               </div>

               <div class="modal-footer">
                   <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
               </div>
           </div>
       </div>
   </div>
