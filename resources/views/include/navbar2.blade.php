<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ URL::to('/admin') }}">
          <i class="ti-home menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
          <i class="ti-clipboard menu-icon"></i>
          <span class="menu-title">Creation</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="form-elements">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="{{URL::to('/ajouterjeune')}}">ajouter un jeune</a></li>
            {{-- <li class="nav-item"><a class="nav-link" href="{{URL::to('/ajoutergroupeutilisateur')}}">ajouter groupe utilisateur</a></li>
            <li class="nav-item"><a class="nav-link" href="{{url::to('/ajouterparametrage')}}">ajouter parametrage</a></li>
             --}}
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
          <i class="ti-layout menu-icon"></i>
          <span class="menu-title">Afficher</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="tables">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{URL::to('/jeunes')}}">Jeunes</a></li>
            {{-- <li class="nav-item"> <a class="nav-link" href="{{URL::to('/groupeutilisateurs')}}">Groupe Utilisateur</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{URL::to('/parametrage')}}">Parametrage</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{URL::to('/commandes')}}"> commandes</a></li>
             --}}
          </ul>
        </div>
      </li>
    </ul>
  </nav>
  <!-- partial -->