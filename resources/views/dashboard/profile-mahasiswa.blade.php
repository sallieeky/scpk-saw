@extends("layouts.base")
@section("content")
<div class="container-fluid">
  <div class="page-header">
    <div class="row">
      <div class="col-sm-6">
        <h3>Profile</h3>
      </div>
    </div>
  </div>
</div>
<!-- Container-fluid starts-->
<div class="container-fluid">
  <div class="edit-profile">
    <div class="row">
      <div class="col-xl-12">
        <div class="card">
          <div class="card-header pb-0">
            <h4 class="card-title mb-0">Profile Saya</h4>
            <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
          </div>
          <div class="card-body">
            <div class="row mb-2">
              <div class="profile-title">
                <div class="media">
                  @if(!$mahasiswa->foto)
                    <img class="img-70 rounded-circle" style="width: 100px; height:70px; object-fit: cover" id="gambar-preview" src="/template/assets/images/user/7.jpg">
                  @else
                    <img class="img-70 rounded-circle" style="width: 100px; height:70px; object-fit: cover" id="gambar-preview" src="/storage/foto/{{ $mahasiswa->foto }}">
                  @endif
                  <div class="media-body">
                    <h3 class="mb-1 f-20 txt-primary">{{ $mahasiswa->nama }}</h3>
                    <p class="f-12">Mahasiswa</p>
                  </div>
                  <a href="/cek-pendaftar"><span class="badge rounded-pill px-3 py-2 bg-success"><i data-feather="chevrons-left"></i> Kembali</span></a>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <form>
                  <div class="mb-3">
                    <label class="form-label"><strong>Email Address</strong></label>
                    <p>{{ $mahasiswa->user->email }}</p>
                  </div>
                  <div class="mb-3">
                    <label class="form-label"><strong>NIK</strong></label>
                    <p>{{ $mahasiswa->nik }}</p>
                  </div>
                  <div class="mb-3">
                    <label class="form-label"><strong>Alamat</strong></label>
                    <p>{{ $mahasiswa->alamat }}</p>
                  </div>
                  <div class="mb-3">
                    <label class="form-label"><strong>Nomor Telepon</strong></label>
                    <p>{{ $mahasiswa->no_telp }}</p>
                  </div>
                  <div class="mb-3">
                    <label class="form-label"><strong>Tempat Lahir</strong></label>
                    <p>{{ $mahasiswa->tempat_lahir }}</p>
                  </div>
                  <div class="mb-3">
                    <label class="form-label"><strong>Tanggal Lahir</strong></label>
                    <p>{{ date("d M Y", strtotime($mahasiswa->tanggal_lahir)) }}</p>
                  </div>
                </form>
              </div>
              <div class="col-md-4">
                <div class="mb-3">
                  <label class="form-label"><strong>NIM</strong></label>
                  <p>{{ $mahasiswa->nim }}</p>
                </div>
                <div class="mb-3">
                  <label class="form-label"><strong>Strata</strong></label>
                  <p>{{ $mahasiswa->strata }}</p>
                </div>
                <div class="mb-3">
                  <label class="form-label"><strong>Jenis Perguruan Tinggi</strong></label>
                  <p>{{ $mahasiswa->jenis_ptn }}</p>
                </div>
                <div class="mb-3">
                  <label class="form-label"><strong>Perguruan Tinggi</strong></label>
                  <p>{{ $mahasiswa->ptn }}</p>
                </div>
                <div class="mb-3">
                  <label class="form-label"><strong>Program Studi</strong></label>
                  <p>{{ $mahasiswa->prodi }}</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="mb-3">
                  <label class="form-label"><strong>Akreditasi Perguruan Tinggi</strong></label>
                  <p>{{ $mahasiswa->akre_ptn }}</p>
                </div>
                <div class="mb-3">
                  <label class="form-label"><strong>Akreditasi Program Studi</strong></label>
                  <p>{{ $mahasiswa->akre_prodi }}</p>
                </div>
                <div class="mb-3">
                  <label class="form-label"><strong>IPK</strong></label>
                  <p>{{ $mahasiswa->ipk }}</p>
                </div>
                <div class="mb-3">
                  <label class="form-label"><strong>UKT</strong></label>
                  <p>Rp. {{ number_format($mahasiswa->ukt,2,",",".") }}</p>
                </div>
                <div class="mb-3">
                  <label class="form-label"><strong>Pekerjaan Orang Tua/Wali</strong></label>
                  <p>{{ $mahasiswa->pekerjaan_ortu }}</p>
                </div>
                <div class="mb-3">
                  <label class="form-label"><strong>Prestasi</strong></label>
                  <p>{{ $mahasiswa->prestasi }}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      
    </div>
  </div>
</div>
<!-- Container-fluid Ends-->
@endsection