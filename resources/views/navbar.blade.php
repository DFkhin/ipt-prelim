<nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <img src="{{ asset('images/logo.png') }}" alt="logo" class="img-fluid rounded-circle img-responsive" style="width: 50px; height: 50px; margin-left: 50px">
    <h4>Companies List App</h4>
    <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link text-dark" href="{{ '/' }}">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="{{ '/company' }}">Companies</a>
        </li>
      </ul>
    <div class="collapse navbar-collapse" id="navbarText">
            <a href="{{ '/logout' }}" style="text-decoration: none; margin-right: 10px; color: black; margin-left: 85%"><i class="fa fa-sign-out"></i>&nbsp;Logout</a>
    </div>
</nav>

<style>
  nav {
    margin: auto;
    width: 100vw;
  }
  a{
    margin-left: 40px;
  }
  .navbar-nav {
    font-size: 1.4em;
  }
  .collapse {
    font-size: 1.4em
  }
  h4 {
    margin-left:10px;
    color: rgb(255, 211, 66);

  }
</style>
