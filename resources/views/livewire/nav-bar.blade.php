<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a wire:navigate class="{{request()->is('counter')?'nav-link active':'nav-link'}}" href="/counter">Counter</a>
          </li>
          <li class="nav-item">
            <a wire:navigate class="{{request()->is('dropdown')?'nav-link active':'nav-link'}}" href="/dropdown">Dropdown</a>
          </li>
          <li class="nav-item">
            <a wire:navigate class="{{request()->is('register')?'nav-link active':'nav-link'}}" href="/register-user">Register</a>
          </li>
          <li class="nav-item">
            <a wire:navigate class="{{request()->is('file-upload')?'nav-link active':'nav-link'}}" href="/file-upload">Upload File</a>
          </li>
          <li class="nav-item">
            <a wire:navigate class="{{request()->is('all-products')?'nav-link active':'nav-link'}}" href="/all-products">Products</a>
          </li>
        </ul>
        <span class="text-xs m-10"><livewire:polling></span>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
