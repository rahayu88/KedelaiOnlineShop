 <nav class="navbar navbar-expand-md navbar-dark" style="background-color: #125876">
  <a class="navbar-brand" href="#"><img src="{{url('images/logo.png')}}" style="width:42px;height:42px;border:0;" ></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('shop')}}">Toko</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Kategori
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{route('kedelai')}}">Kedelai</a>
          <a class="dropdown-item" href="{{route('ragi')}}">Ragi</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('loginn')}}">Login</a>
      </li>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('daftar')}}">Daftar</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" method="POST" action="{{route('search')}}">
      @csrf
      <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
    </form>
  </div>
</nav>