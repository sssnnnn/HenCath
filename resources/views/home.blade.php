
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
                            <h2 class="table-title">Tableau de bord</h2>
                        </div>
                        <div class="col-md-12 text-right">
                            <button type="button" class="actions-btn mb-2"  data-bs-toggle="modal" data-bs-target="#add">
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
                                
                                 <form action="{{ route('commandes.store') }}" method= "POST">
                                    {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-sm-12 col-md-4 mb-3">
                                               
                                                <input type="text" class="form-control" id="reference" name="reference"  placeholder="Reference">
                                            </div>

                                            <div class="col-sm-12 col-md-4  mb-3">

                                            <select name="client_id" class="form-control">
                                               
                                                    <option>Select Client</option>
                                                    @foreach($clients as $client)
                                                        <option value="{{ $client->id }}">{{ $client->nom }}</option>
                                                    @endforeach
                                            </select>
                                               
                                            </div>

                                            <div class="col-sm-12 col-md-4">

                                            <select name="article_id" class="form-control">
                                               
                                               <option>Select Article</option>
                                               @foreach($articles as $article)
                                               <option value="{{ $article->id }}">{{ $article->nom_article }}</option>
                                               @endforeach
                                       </select>

                                            </div>



                                        </div>
                                        <div class="row options">
                                            <div class="col-sm-12 col-md-4  mb-3">
                                                <input type="text" class="form-control" id="quantite" name="quantite" placeholder="Quantité">
                                            </div>

                                            <div class="col-sm-12 col-md-4  mb-3">

                                                <input type="text" class="form-control" id="Livraison" placeholder="Livraison">
                                            </div>

                                            <div class="col-sm-12 col-md-4">

                                                <input type="date" class="form-control" id="livraison_prevue" name="livraison_prevue" placeholder="Livraison Preuve">

                                            </div>



                                        </div>



                                        <div class="mb-3 options">
                                            <input type="text" class="form-control" id="description" name="description" placeholder="Description de produit">
                                        </div>

                                        <div class="row options">
                                            <div class="col-6">
                                                
                                                <input type="text" class="form-control" id="pays" name="pays" placeholder="Pays">
                                            </div>

                                            <div class="col-6">
                                                
                                                <input type="text" class="form-control" id="ville_pose" name="ville_pose" placeholder="Ville">
                                            </div>

                                        </div>

                                        <div class="row options">
                                            <div class="col-6">

                                                <select name="etat_id" class="form-select" aria-label="Default select example">
                                                    <option selected>Sélectionner l'état</option>
                                                    @foreach($etats as $etat)
                                               <option value="{{ $etat->id }}">{{ $etat->nom_etat }}</option>
                                               @endforeach
                                                </select>
                                            </div>
                                            <div class="col-6">

                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customSwitches" name="plan" 
                                                        value="1" {{ old('plan') ? 'checked="checked"' : '' }}>
                                                    <label class="custom-control-label" for="customSwitches">Cette
                                                        Demande nécessite un plan?</label><br>
                                                </div>
                                            </div>


                                        </div>

                                        <div class="row options">
                                            <div class="col-6">

                                                <select name="type" class="form-select" aria-label="Default select example">
                                                    <option selected>Sélectionner type</option>
                                                    
                                               <option value="Showroom"> Showroom </option>
                                               <option value="Client"> Client </option>
                                               <option value="Sous-traitant"> Sous-traitant </option>
                                                </select>
                                            </div>
        


                                        </div>

                                        <div class="col-md-12 text-center">
                                            <button type="submit" class="submit-btn mt-4 ">Création.....</button>
                                            <br>
                                            <div class="comments mt-2">
                                                <span>En Cliquant sur créer une commande vérifier soigneusement</span>
                                                <br>
                                                <span>Les informations relative sur la fiche atelier</span>
                                            </div>
                                        </div>


                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    
                    <div class="table-responsive">

                        <table class="table table-stripped text-center">
                            <thead>
                                <tr>
                                    <th>Réf</th>
                                    <th>Client</th>
                                    <th>Clé</th>
                                    <th>Article</th>
                                    <th>Description</th>
                                    <th>Ville</th>
                                    <th>Livraison</th>
                                    <th>Etat</th>


                                </tr>
                            </thead>
                            <tbody>
                            @foreach($commandes as $commande => $value)
                                <tr>
                                
                                    <td>{{ $value->reference }}</td>
                                    <td >
                                        <span>{{ $value->client->nom }}</span>
                                        <br>
                                        <small>{{ $value->type }}</small>

                                    </td>
                                    
                                    <td>{{ $value->quantite }}</td>
                                    <td>
                                        <span>{{ $value->article->nom_article }}</span>
                                        
                                    </td>
                                    <td >
                                        <span>{{ $value->description }}</span>
                                        <br>
                                        <small>Nettoyage ,polissage,Vernis de la bande lation</small>

                                    </td>
                                    <td>{{ $value->ville_pose }}</td>
                                    <td>{{ $value->livraison_prevue }}</td>
                                    <td>{{ $value->etat->nom_etat }}</td>
                                    
                                </tr>
                                @endforeach
                                <!-- <tr>
                                    <td>F6-A</td>
                                    <td>CLM ambassade</td>
                                    <td>2</td>
                                    <td>Su332 Existante
                                        <small class="client">layla</small>
                                    </td>
                                    <td >
                                        Regarder le Description de produit ici 
                                        <i class="fas fa-eye"  data-bs-toggle="modal" data-bs-target="#show"></i>

                                    </td>
                                    <td>Casablanca</td>
                                    <td>12/02/2020</td>
                                    <td>En Production</td>

                                </tr> -->

                            </tbody>
                        </table>
                    </div>


                

                </div>

  
 
                <!-- End of Main Content -->

                <!-- Footer -->
                <!-- <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2020</span>
                </div>
            </div>
        </footer> -->
                <!-- End of Footer -->

            <!-- </div>
            <!-- End of Content Wrapper -->

        <!-- </div> --> 
        <!-- End of Page Wrapper -->


   


        <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>

    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>



        <!-- Custom scripts for all pages-->
        <script src="{{asset('assets/js/sb-admin-2.js')}}"></script>
      
        @if(Session::has('commande_added'))
<script>
  toastr.success(' {{Session::get('commande_added')}} ');
</script>
@endif

</body>

</html>