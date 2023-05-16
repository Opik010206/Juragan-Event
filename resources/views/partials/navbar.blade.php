<nav class="navbar navbar-expand-lg navbar-dark bg-danger bg-gradient py-3 sticky-top shadow">
  <div class="container">
    <a class="navbar-brand fw-bold" href="/">JURAGAN</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link {{ $tittle === 'Event' ? 'active' : '' }}" href="/event">Event</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $tittle === 'Tentang' ? 'active' : '' }}" href="/tentang">Tentang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $tittle === 'Galeri' ? 'active' : '' }}" href="/galeri">Galeri</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $tittle === 'Blog' ? 'active' : '' }}" href="/blog">Berita</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $tittle === 'Hubungi Kami' ? 'active' : '' }}" href="/hubungiKami">Hubungi Kami</a>
        </li>
      </ul>
      <form class="d-flex width-search-navbar mb-3 mb-lg-0" role="search">
        <div class="input-group">
          <input type="search" class="form-control" placeholder="Cari event disini..." style="border-radius: 2rem 0 0 2rem">
          <button class="btn btn-outline-light pe-3" type="button" id="button-addon2" style="border-radius: 0 2rem 2rem 0">Cari</button>
        </div>
      </form>
      <button type="button" class="btn btn-outline-light ms-lg-3 rounded-5 px-3">Danger</button>
      <button type="button" class="btn btn-light ms-lg-2 rounded-5 px-3">Danger</button>
    </div>
  </div>
</nav>