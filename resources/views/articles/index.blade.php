<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Henry Cath</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

      <link href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('assets/css/sb-admin-2.css')}}" rel="stylesheet">
    <link href="{{asset('assets/font/flaticon.css')}}" rel="stylesheet">

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
                            <h2 class="table-title">Vue D'ensemble</h2>
                        </div>
                        <div class="col-md-12 text-right">
                            <button type="button" class="actions-btn mb-2" id="new-article" data-toggle="modal">
                                <i class="fas fa-plus"></i>
                                <span>Ajouter une commande</span>
                            </button>
                            <button class="actions-btn">
                                <i class="fas fa-sort-amount-down-alt"></i>
                                <span>Filter</span>
                            </button>
                        </div>



                    </div>

                    <br>



                    <!-- Modal -->
                    <div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title form-title" id="exampleModalLabel">Information sur Le produit</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                  
                                    
                                    <div class="row">

                                    </div>
                                        <div class="mb-3 options">
                                            <input type="text" class="form-control"  id="nom" placeholder="Nom">
                                        </div>
                                        <div class="mb-3 options">
                                            <input type="text" class="form-control"  id="description" placeholder="Description">
                                        </div>


                                        <div class="col-md-12 text-center">
                                            <button type="submit" class="submit-btn mt-4 ">Création</button>
                                            <br>
                                            <br>
                                        </div>


                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
<div class="alert alert-success">
<p id="msg">{{ $message }}</p>
</div>
@endif
                    <div class="table-responsive">

                        <table class="table  table-stripped text-center">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($articles as $article)
                                <tr id="article_id_{{ $article->id }}">
                                <td>{{ $article->id }}</td>
                                <td>{{ $article->nom_article }}</td>
                                <td>{{ $article->description_technique }}</td>

                                <td>
     <form action="{{ route('articles.destroy',$article->id) }}" method="POST">
     <a href="javascript:void(0)" class="btn btn-success" id="edit-article" data-toggle="modal" data-id="{{ $article->id }}"><i class="fas fa-pencil-alt"></i></a>
               <meta name="csrf-token" content="{{ csrf_token() }}">
               <a id="delete-article" data-id="{{ $article->id }}" class="btn btn-danger delete-user"><i class="fas fa-trash"></i></a>
              
      </td>
               </form>
               </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

<!-- Add and Edit customer modal -->
<div class="modal fade" id="crud-modal" aria-hidden="true" >
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="articleCrudModal"></h4>
</div>
<div class="modal-body">
<form name="custForm" action="{{ route('articles.store') }}" method="POST">
<input type="hidden" name="art_id" id="art_id" >
@csrf
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Name:</strong>
<input type="text" name="nom_article" id="nom_article" class="form-control" placeholder="Name"  >
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Description:</strong>
<input type="text" name="description_technique" id="description_technique" class="form-control" placeholder="Description" >
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<button type="submit" id="btn-save" name="btnsave" class="btn btn-primary" disabled>Sauvegarder</button>
<a href="{{ route('articles.index') }}" class="btn btn-danger">Annuler</a>
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

        <script>
$(document).ready(function () {
/* When click New customer button */
$('#new-article').click(function () {
$('#btn-save').val("create-article");
$('#article').trigger("reset");
$('#articleCrudModal').html("Add New Article");
$('#crud-modal').modal('show');
});
/* Edit customer */
$('body').on('click', '#edit-article', function () {
var article_id = $(this).data('id');
$.get('articles/'+article_id+'/edit', function (data) {
$('#articleCrudModal').html("Edit article");
$('#btn-update').val("Update");
$('#btn-save').prop('disabled',false);
$('#crud-modal').modal('show');
$('#art_id').val(data.id);
$('#nom_article').val(data.nom_article);
$('#description_technique').val(data.description_technique);

})
});
/* Show customer */
$('body').on('click', '#show-article', function () {
$('#articleCrudModal-show').html("Article Details");
$('#crud-modal-show').modal('show');
});
/* Delete customer */
$('body').on('click', '#delete-article', function () {
var article_id = $(this).data("id");
var token = $("meta[name='csrf-token']").attr("content");
confirm("Are You sure want to delete !");
$.ajax({
type: "DELETE",
url: "/todolist/public/articles/"+article_id,
data: {
"id": article_id,
"_token": token,
},
success: function (data) {
$('#msg').html('Article entry deleted successfully');
$("#article_id_" + article_id).remove();
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