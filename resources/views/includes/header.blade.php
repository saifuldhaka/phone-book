<div class="container">
  <div class="row">

    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ asset('images/phonebook_icon.png') }}" alt="Logo" >
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item {{ request()->routeIs('phonebook.index') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('phonebook.index') }}">Phonebook </a>
          </li>
          <li class="nav-item {{ request()->routeIs('phonebook.create') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('phonebook.create') }}">Create New</a>
          </li>
        </ul>
      </div>
    </nav>

  </div>
</nav>

<script>
    $(document).ready(function(){
      $(".navbar-toggler").click(function(){
        $("body").toggleClass("mobile-menu-open");
      });
    });
  </script>
