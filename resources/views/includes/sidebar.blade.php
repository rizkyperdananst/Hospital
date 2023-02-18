<div class="nav-left-sidebar sidebar-dark">
  <div class="menu-list">
      <nav class="navbar navbar-expand-lg navbar-light">
          <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav flex-column">
                  <li class="nav-item mb-2">
                      <a class="nav-link {{ ($title == 'Dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}"><i class="fa-solid fa-gauge"></i>Dashboard</a>
                  </li>
                  <li class="nav-item ">
                      <a class="nav-link {{ ($title == 'Profile') ? 'active' : '' }}" href="{{ route('profile.index') }}"><i class="fa-sharp fa-solid fa-user"></i>Profile</a>
                  </li>
                  <li class="nav-item ">
                      <a class="nav-link {{ ($title == 'News') ? 'active' : '' }}" href="{{ route('news.index') }}"><i class="fa-solid fa-newspaper"></i>Berita</a>
                  </li>
                  <li class="nav-item ">
                      <a class="nav-link {{ ($title == 'Officer') ? 'active' : '' }}" href="{{ route('officer.index') }}"><i class="fa-solid fa-user-shield"></i>Petugas</a>
                  </li>
                  <li class="nav-item ">
                      <a class="nav-link {{ ($title == 'Nurse') ? 'active' : '' }}" href="{{ route('nurse.index') }}"><i class="fa-solid fa-user-nurse"></i></i>Perawat</a>
                  </li>
                  <li class="nav-item ">
                     <a class="nav-link {{ ($title == 'Doctor') ? 'active' : '' }}" href="{{ route('doctor.index') }}"><i class="fa-solid fa-user-doctor"></i>Dokter</a>
                  </li>
                  <li class="nav-item ">
                     <a class="nav-link {{ ($title == 'Poly') ? 'active' : '' }}" href="{{ route('poly.index') }}"><i class="fa-solid fa-person-shelter"></i>Poli</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ ($title == 'Name Room') ? 'active' : '' }}" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fa-solid fa-people-roof"></i>Ruangan</a>
                    <div id="submenu-5" class="collapse submenu" style="">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('nameroom.index') }}">Nama Ruangan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('classroom.index') }}">Kelas Ruangan</a>
                            </li>
                        </ul>
                    </div>
                </li>
                  {{-- <li class="nav-divider mb-0">
                      Setting
                  </li> --}}
                  <li class="nav-item">
                      <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6"><i class="fa-solid fa-lock"></i> MASTER ADMIN </a>
                      <div id="submenu-6" class="collapse submenu" style="">
                          <ul class="nav flex-column">
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('admin.index') }}">Admin</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('durg.index') }}">Obat</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('registration.index') }}">Registrasi</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('patient.index') }}">Pasien</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('paymentinvoice.index') }}">Faktur Pembayaran</a>
                              </li>
                          </ul>
                      </div>
                  </li>
              </ul>
          </div>
      </nav>
  </div>
</div>