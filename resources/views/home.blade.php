
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
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-text mx-3">HENRY CATH</div>
            </a>



            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="flaticon-home"></i>
                    <span>Résumé</span>
                </a>

            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="flaticon-bar-chart"></i>
                    <span>Statistiques</span>
                </a>

            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="flaticon-envelope"></i>
                    <span>Requêtes</span>
                     <!-- Counter - Alerts -->
                     <span class="badge badge-danger badge-counter requests">7</span>
                </a>

            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="flaticon-user"></i>
                    <span>Utilisateurs</span>
                </a>

            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="flaticon-chat"></i>
                    <span>Discussions</span></a>
            </li>


            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="flaticon-information"></i>
                    <span>Support & Aide</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="flaticon-settings"></i>
                    <span>Paramètres</span>
                </a>

            </li>

            <br>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="search" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="far fa-bell"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="flaticon-envelope"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg" alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg" alt="">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg" alt="">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                                <span class="ml-3 d-none d-lg-inline nav-profile-name ">{{ Auth::user()->name }}</span>
                                <i class="fas fa-angle-down ml-3"></i>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
    
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-12 text-left">
                            <h2 class="table-title">Vue D'ensemble</h2>
                        </div>
                        <div class="col-md-12 text-right">
                            <button type="button" class="actions-btn mb-2" data-bs-toggle="modal" data-bs-target="#add">
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

                        <table class="table  table-stripped text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Réf</th>
                                    <th scope="col">Client</th>
                                    <th scope="col">Clé</th>
                                    <th scope="col">Article</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Ville</th>
                                    <th scope="col">Livraison</th>
                                    <th scope="col">Etat</th>


                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                @foreach($commandes as $commande => $value)
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
                                    @endforeach
                                </tr>

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





        <!-- Custom scripts for all pages-->
        <script src="{{asset('assets/js/sb-admin-2.js')}}"></script>
      


</body>

</html>