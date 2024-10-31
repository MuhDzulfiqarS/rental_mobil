
<!-- ADMIN -->
@if($user->level == 1)

<li class="nav-item">
  <a class="nav-link {{ Request::is('home') ? '':'collapsed' }}" href="{{ url('home') }}">
  
      <span>Dashboard</span>
  </a>
</li>

<li class="nav-heading">Master Data</li>

<li class="nav-item">
  <a class="nav-link {{ Request::is('data_user') ? '' : 'collapsed' }}" href="{{ url('data_user') }}">
    <i class="fa-solid fa-user"></i><span>Data User</span>
  </a>
</li>

<li class="nav-item">
  <a class="nav-link {{ Request::is('data_mobil') ? '' : 'collapsed' }}" href="{{ url('data_mobil') }}">
    <i class="fa-solid fa-car"></i><span>Data Mobil</span>
  </a>
</li>

<li class="nav-heading">Daftar Peminjaman Mobil</li>

<li class="nav-item">
  <a class="nav-link {{ Request::is('daftar_peminjaman_mobil_admin') ? '' : 'collapsed' }}" href="{{ url('daftar_peminjaman_mobil_admin') }}">
    <i class="fa-regular fa-rectangle-list"></i><span>Daftar Peminjaman Mobil</span>
  </a>
</li>

<li class="nav-item">
  <a class="nav-link {{ Request::is('daftar_pengembalian_mobil_admin') ? '' : 'collapsed' }}" href="{{ url('daftar_pengembalian_mobil_admin') }}">
    <i class="fa-regular fa-rectangle-list"></i><span>Daftar Pengembalian Mobil</span>
  </a>
</li>


<!-- USER -->
@elseif($user->level == 2)
<li class="nav-item">
  <a class="nav-link {{ Request::is('home_user') ? '':'collapsed' }}" href="{{ url('home_user') }}">
      <span>Dashboard</span>
  </a>
</li>

<li class="nav-heading">Peminjaman Mobil</li>
<li class="nav-item">
  <a class="nav-link {{ Request::is('peminjaman_mobil') ? '' : 'collapsed' }}" href="{{ url('peminjaman_mobil') }}">
    <i class="fa-solid fa-car"></i><span>Form Peminjaman Mobil</span>
  </a>
</li>

<li class="nav-item">
  <a class="nav-link {{ Request::is('daftar_sewa') ? '' : 'collapsed' }}" href="{{ url('daftar_sewa') }}">
    <i class="fa-regular fa-rectangle-list"></i><span>Daftar Peminjaman Mobil</span>
  </a>
</li>

<li class="nav-heading">Pengembalian Mobil</li>
<li class="nav-item">
  <a class="nav-link {{ Request::is('pengembalian_mobil') ? '' : 'collapsed' }}" href="{{ url('pengembalian_mobil') }}">
    <i class="fa-solid fa-retweet"></i><span>Pengembalian Mobil</span>
  </a>
</li>

<li class="nav-item">
  <a class="nav-link {{ Request::is('daftar_pengembalian_mobil') ? '' : 'collapsed' }}" href="{{ url('daftar_pengembalian_mobil') }}">
    <i class="fa-regular fa-rectangle-list"></i><span>Daftar Pengembalian Mobil</span>
  </a>
</li>
@endif