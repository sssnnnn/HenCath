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
                                @foreach($clients as $client => $value)
                               <tr>
                                  <td>{{ ++$i }}</td>
                                  <td>{{ $value->nom }}</td>
                                  <td>{{ $value->prenom }}</td>
                                  <td>{{ $value->email }}</td>
                                  <td>
                                  <form action="{{ route('clients.destroy',$value->id) }}" method="POST">   
                     
                    <a class="btn btn-info"  href="{{ route('clients.edit',$value->id) }}">
                    <i class="fa fa-pencil-alt" aria-hidden="true"></i>
                    </a>   
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
                      

                

                </div>

  
 


      

        <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>

    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>





        <!-- Custom scripts for all pages-->
        <script src="{{asset('assets/js/sb-admin-2.js')}}"></script>

       
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>

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

</body>

</html>
