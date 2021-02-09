
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-text mx-3">HENRY CATH</div>
            </a>



            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('commandes.index') }}" 
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
                <a class="nav-link collapsed" href="{{ route('articles.index') }}" 
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="flaticon-bar-chart"></i>
                    <span>Articles</span>
                     <!-- Counter - Alerts -->
            
                </a>

            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('clients.index') }}" 
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="flaticon-user"></i>
                    <span>Clients</span>

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