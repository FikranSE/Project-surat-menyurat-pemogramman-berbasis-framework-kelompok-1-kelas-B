@extends('layout.main')
@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Transaction</a></li>
      <li class="breadcrumb-item active" aria-current="page">Surat Masuk</li>
  </ol>
</nav>
<div class="card mb-4">
  <div class="card-header pb-0">
      <div class="d-flex justify-content-between flex-column flex-sm-row">
          <div class="card-title">
              <h5 class="text-nowrap mb-0 fw-bold">REF12345</h5>
              <small class="text-black">
                  Pengirim Contoh |
                  <span class="text-secondary">{{ __('Nomor Agenda') }}:</span> AGENDA67890 |
                  Tipe Klasifikasi Contoh
              </small>
          </div>
          <div class="card-title d-flex flex-row">
              <div class="d-inline-block mx-2 text-end text-black">
                  <small class="d-block text-secondary">{{ __('Tanggal Surat') }}</small>
                  15 April 2024
              </div>
              <div class="mx-3">
                  <a href="#" class="btn bg-blue text-white btn">Disposisi <span>(5)</span></a>
              </div>
              <div class="dropdown d-inline-block">
                  <button class="btn p-0" type="button" id="dropdown-incoming-123" data-bs-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">
                      <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-incoming-123">
                      <a class="dropdown-item" href="#">Lihat</a>
                      <a class="dropdown-item" href="#">Edit</a>
                      <span class="dropdown-item cursor-pointer btn-delete">Hapus</span>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <hr style="border-top: 2px solid #d9d9d9;">
  <div class="card-body">
      <p>Deskripsi surat dummy</p>
      <div class="d-flex justify-content-between flex-column flex-sm-row">
          <small class="text-secondary">Catatan dummy</small>
          <div>
              <a href="#" target="_blank"><i class="bx bxs-file-pdf display-6 cursor-pointer text-primary"></i></a>
              <a href="#" target="_blank"><i class="bx bxs-file-jpg display-6 cursor-pointer text-primary"></i></a>
              <a href="#" target="_blank"><i class="bx bxs-file-png display-6 cursor-pointer text-primary"></i></a>
          </div>
      </div>
  </div>
</div>
<div class="card mb-4">
  <div class="card-header pb-0">
      <div class="d-flex justify-content-between flex-column flex-sm-row">
          <div class="card-title">
              <h5 class="text-nowrap mb-0 fw-bold">REF12345</h5>
              <small class="text-black">
                  Pengirim Contoh |
                  <span class="text-secondary">{{ __('Nomor Agenda') }}:</span> AGENDA67890 |
                  Tipe Klasifikasi Contoh
              </small>
          </div>
          <div class="card-title d-flex flex-row">
              <div class="d-inline-block mx-2 text-end text-black">
                  <small class="d-block text-secondary">{{ __('Tanggal Surat') }}</small>
                  15 April 2024
              </div>
              <div class="mx-3">
                  <a href="#" class="btn bg-blue text-white btn">Disposisi <span>(5)</span></a>
              </div>
              <div class="dropdown d-inline-block">
                  <button class="btn p-0" type="button" id="dropdown-incoming-123" data-bs-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">
                      <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-incoming-123">
                      <a class="dropdown-item" href="#">Lihat</a>
                      <a class="dropdown-item" href="#">Edit</a>
                      <span class="dropdown-item cursor-pointer btn-delete">Hapus</span>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <hr style="border-top: 2px solid #d9d9d9;">
  <div class="card-body">
      <p>Deskripsi surat dummy</p>
      <div class="d-flex justify-content-between flex-column flex-sm-row">
          <small class="text-secondary">Catatan dummy</small>
          <div>
              <a href="#" target="_blank"><i class="bx bxs-file-pdf display-6 cursor-pointer text-primary"></i></a>
              <a href="#" target="_blank"><i class="bx bxs-file-jpg display-6 cursor-pointer text-primary"></i></a>
              <a href="#" target="_blank"><i class="bx bxs-file-png display-6 cursor-pointer text-primary"></i></a>
          </div>
      </div>
  </div>
</div>
<div class="card mb-4">
  <div class="card-header pb-0">
      <div class="d-flex justify-content-between flex-column flex-sm-row">
          <div class="card-title">
              <h5 class="text-nowrap mb-0 fw-bold">REF12345</h5>
              <small class="text-black">
                  Pengirim Contoh |
                  <span class="text-secondary">{{ __('Nomor Agenda') }}:</span> AGENDA67890 |
                  Tipe Klasifikasi Contoh
              </small>
          </div>
          <div class="card-title d-flex flex-row">
              <div class="d-inline-block mx-2 text-end text-black">
                  <small class="d-block text-secondary">{{ __('Tanggal Surat') }}</small>
                  15 April 2024
              </div>
              <div class="mx-3">
                  <a href="#" class="btn bg-blue text-white btn">Disposisi <span>(5)</span></a>
              </div>
              <div class="dropdown d-inline-block">
                  <button class="btn p-0" type="button" id="dropdown-incoming-123" data-bs-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">
                      <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-incoming-123">
                      <a class="dropdown-item" href="#">Lihat</a>
                      <a class="dropdown-item" href="#">Edit</a>
                      <span class="dropdown-item cursor-pointer btn-delete">Hapus</span>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <hr style="border-top: 2px solid #d9d9d9;">
  <div class="card-body">
      <p>Deskripsi surat dummy</p>
      <div class="d-flex justify-content-between flex-column flex-sm-row">
          <small class="text-secondary">Catatan dummy</small>
          <div>
              <a href="#" target="_blank"><i class="bx bxs-file-pdf display-6 cursor-pointer text-primary"></i></a>
              <a href="#" target="_blank"><i class="bx bxs-file-jpg display-6 cursor-pointer text-primary"></i></a>
              <a href="#" target="_blank"><i class="bx bxs-file-png display-6 cursor-pointer text-primary"></i></a>
          </div>
      </div>
  </div>
</div>
<div class="card mb-4">
  <div class="card-header pb-0">
      <div class="d-flex justify-content-between flex-column flex-sm-row">
          <div class="card-title">
              <h5 class="text-nowrap mb-0 fw-bold">REF12345</h5>
              <small class="text-black">
                  Pengirim Contoh |
                  <span class="text-secondary">{{ __('Nomor Agenda') }}:</span> AGENDA67890 |
                  Tipe Klasifikasi Contoh
              </small>
          </div>
          <div class="card-title d-flex flex-row">
              <div class="d-inline-block mx-2 text-end text-black">
                  <small class="d-block text-secondary">{{ __('Tanggal Surat') }}</small>
                  15 April 2024
              </div>
              <div class="mx-3">
                  <a href="#" class="btn bg-blue text-white btn">Disposisi <span>(5)</span></a>
              </div>
              <div class="dropdown d-inline-block">
                  <button class="btn p-0" type="button" id="dropdown-incoming-123" data-bs-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">
                      <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-incoming-123">
                      <a class="dropdown-item" href="#">Lihat</a>
                      <a class="dropdown-item" href="#">Edit</a>
                      <span class="dropdown-item cursor-pointer btn-delete">Hapus</span>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <hr style="border-top: 2px solid #d9d9d9;">
  <div class="card-body">
      <p>Deskripsi surat dummy</p>
      <div class="d-flex justify-content-between flex-column flex-sm-row">
          <small class="text-secondary">Catatan dummy</small>
          <div>
              <a href="#" target="_blank"><i class="bx bxs-file-pdf display-6 cursor-pointer text-primary"></i></a>
              <a href="#" target="_blank"><i class="bx bxs-file-jpg display-6 cursor-pointer text-primary"></i></a>
              <a href="#" target="_blank"><i class="bx bxs-file-png display-6 cursor-pointer text-primary"></i></a>
          </div>
      </div>
  </div>
</div>
@endsection