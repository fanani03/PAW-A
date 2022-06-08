<nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <a class="navbar-brand" href="#">Simple SIAKAD</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Data Mahasiswa') ? 'active': '' }}" href="/mahasiswa">Data Mahasiswa  <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Tambah Mahasiswa') ? 'active': '' }}" href="/mahasiswa/baru">Input Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'About Me') ? 'active': '' }}" href="/mahasiswa/about">About</a>
        </li>
      </ul>
    </div>
  </nav>