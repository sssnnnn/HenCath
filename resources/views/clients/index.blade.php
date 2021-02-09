<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Henry Cath</title>
   
   

    <link href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('assets/css/sb-admin-2.css')}}" rel="stylesheet">

    <link href="{{asset('assets/font/flaticon.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>

<body id="page-top">


    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('layouts.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('layouts.navbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-12 text-left">
                            <h2 class="table-title">Liste des clients</h2>
                        </div>

                        <div class="col-md-12 text-right">
                            <button type="button" class="actions-btn mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="fas fa-plus"></i>
                                <span>Ajouter un nouveau client</span>
                            </button>
                            <button class="actions-btn">
                                <i class="fas fa-sort-amount-down-alt"></i>
                                <span>Filter</span>
                            </button>
                        </div>

                  



                    </div>

                    <br>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Fiche client</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
      <form action="{{ route('clients.store') }}" method= "POST">

         {{ csrf_field() }}
                                    <input type="hidden" name="client_id" id="client_id">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-4 mb-3">
                                               
                                            <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom">
                                            </div>

                                            <div class="col-sm-12 col-md-4  mb-3">

                                                
                                            <input class="form-control" id="prenom" name="prenom" placeholder="Prenom" >
                                            </div>

                                            <div class="col-sm-12 col-md-4">

                                            <input class="form-control" id="email" name="email" placeholder="Email" >

                                            </div>
                                            <div class="col-sm-12 col-md-4">

                                            <input class="form-control" id="telephone" name="telephone" placeholder="Telephone" >

                                            </div>                                     

                                        </div>
                       



                                        <div class="mb-3 options">
                                            <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Adresse">
                                        </div>

                                        <div class="row options">
                                            <div class="col-6">
                                                
                                                <input type="text" class="form-control" id="pays" name="pays" placeholder="Pays">
                                            </div>

                                            <div class="col-6">
                                                
                                                <input type="text" class="form-control" id="ville" name="ville" placeholder="Ville">
                                            </div>


                                        </div>

                                        <div class="row options">
                                          
                                            <div class="col-6">
                                                
                                                <input type="text" class="form-control" id="code_postal" name="code_postal" placeholder="Code Postal">
                                            </div>

                                    </div>
 
                                   
                                   
      </div>
     

        <div class="col-md-12 text-center">
              
                 <button type="submit" class="submit-btn mt-4 ">Sauvegarder</button>
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ANNULER</button>
                 <br>
                <br>
              
         </div>
        
   
      </form>
    </div>
  </div>
</div>

                
                    <div class="table-responsive">
  
                        <table  class="table  table-stripped text-center">
                            <thead>
                                <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Email</th>
                                <th>Actions</th>
  
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                @foreach($clients as $client )
                               <tr id="client_id_{{ $client->id }}">
                                  <td>{{ $client->id }}</td>
                                  <td>{{ $client->nom }}</td>
                                  <td>{{ $client->prenom }}</td>
                                  <td>{{ $client->email }}</td>
                                  <td>


  <form action="{{ route('clients.destroy',$client->id) }}" method="POST">   
     <a href="javascript:void(0)" class="btn btn-success" id="edit-client" data-toggle="modal" data-id="{{ $client->id }}"><i class="fa fa-pencil-alt" aria-hidden="true"></i> </a>
               <meta name="csrf-token" content="{{ csrf_token() }}">                  
                     
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                    </button>
                </form>
                                  </td>
                                
                               </tr>
                               @endforeach

                                </tr>

       

                            </tbody>
                        </table>
                       
                       
                    </div>
    
 <!--Edit Modal -->
<div class="modal fade" id="crud-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Fiche client</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
      <form action="{{ route('clients.store') }}" method= "POST">

         {{ csrf_field() }}
                                    <input type="hidden" name="client_id" id="client_id">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-4 mb-3">
                                               
                                            <input type="text" class="form-control" id="e-nom" name="nom" placeholder="Nom">
                                            </div>

                                            <div class="col-sm-12 col-md-4  mb-3">

                                                
                                            <input class="form-control" id="e-prenom" name="prenom" placeholder="Prenom" >
                                            </div>

                                            <div class="col-sm-12 col-md-4">

                                            <input class="form-control" id="e-email" name="email" placeholder="Email" >

                                            </div>
                                            <div class="col-sm-12 col-md-4">

                                            <input class="form-control" id="e-telephone" name="telephone" placeholder="Telephone" >

                                            </div>                                     

                                        </div>
                       



                                        <div class="mb-3 options">
                                            <input type="text" class="form-control" id="e-adresse" name="adresse" placeholder="Adresse">
                                        </div>

                                        <div class="row options">
                                            <div class="col-6">
                                                
                                                <input type="text" class="form-control" id="e-pays" name="pays" placeholder="Pays">
                                            </div>

                                            <div class="col-6">
                                                
                                                <input type="text" class="form-control" id="e-ville" name="ville" placeholder="Ville">
                                            </div>


                                        </div>

                                        <div class="row options">
                                          
                                            <div class="col-6">
                                                
                                                <input type="text" class="form-control" id="e-code_postal" name="code_postal" placeholder="Code Postal">
                                            </div>

                                    </div>
 
                                   
                                   
      </div>
     

        <div class="col-md-12 text-center">
              
                 <button type="submit" class="submit-btn mt-4 ">Sauvegarder</button>
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ANNULER</button>
                 <br>
                <br>
              
         </div>
        
   
      </form>
    </div>
  </div>
</div>
 <!--And Edit Modal -->
                  
<!-- Add and Edit customer modal -->
<div class="modal fade" id="crud-modal" aria-hidden="true" >
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="clientCrudModal"></h4>
</div>
<div class="modal-body">
<form name="cltForm" action="{{ route('clients.store') }}" method="POST">
<input type="hidden" name="clt_id" id="clt_id" >
@csrf
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Name:</strong>
<input type="text" name="nom" id="e-nom" class="form-control" placeholder="Nom" onchange="validate()" >
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Prenom:</strong>
<input type="text" name="prenom" id="e-prenom" class="form-control" placeholder="Prenom" onchange="validate()">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<button type="submit" id="btn-save" name="btnsave" class="btn btn-primary" disabled>Submit</button>
<a href="{{ route('clients.index') }}" class="btn btn-danger">Cancel</a>
</div>
</div>
</form>
</div>
</div>
</div>
</div>



                

                </div>

  
 


      

        <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>

    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>





        <!-- Custom scripts for all pages-->
        <script src="{{asset('assets/js/sb-admin-2.js')}}"></script>

       



@if(Session::has('client_added'))
<script>
  toastr.success(' {{Session::get('client_added')}} ');
</script>
@endif

     
@if ($message = Session::get('client_deleted'))
<script>
  toastr.error(' {{Session::get('client_deleted')}} ');
</script>
    @endif



    <script>
$(document).ready(function () {
/* When click New customer button */
$('#new-client').click(function () {
$('#btn-save').val("create-client");
$('#client').trigger("reset");
$('#clientCrudModal').html("Add New Article");
$('#crud-modal').modal('show');
});
/* Edit customer */
$('body').on('click', '#edit-client', function () {
var client_id = $(this).data('id');
$.get('clients/'+client_id+'/edit', function (data) {
$('#clientCrudModal').html("Edit client");
$('#btn-update').val("Update");
$('#btn-save').prop('disabled',false);
$('#crud-modal').modal('show');
$('#clt_id').val(data.id);
$('#e-nom').val(data.nom);
$('#e-prenom').val(data.prenom);
$('#e-email').val(data.email);
$('#e-adresse').val(data.adresse);
$('#e-pays').val(data.pays);
$('#e-ville').val(data.ville);
$('#e-code_postal').val(data.code_postal);
$('#e-telephone').val(data.telephone);

})
});

/* Delete customer */
$('body').on('click', '#delete-client', function () {
var article_id = $(this).data("id");
var token = $("meta[name='csrf-token']").attr("content");
confirm("Are You sure want to delete !");
$.ajax({
type: "DELETE",
url: "/todolist/public/clients/"+client_id,
data: {
"id": article_id,
"_token": token,
},
success: function (data) {
$('#msg').html('Article entry deleted successfully');
$("#client_id_" + client_id).remove();
},
error: function (data) {
console.log('Error:', data);
}
});
});
});
</script>


</body>

</html>
