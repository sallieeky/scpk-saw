@extends("layouts.base")
@section("css")
<style>
  table tr th,
  table tr td {
    padding: .3rem !important;
  }
</style>
@endsection
@section("content")
  <div class="container-fluid">
    <div class="page-header">
      <div class="row">
        @if(session('pesan'))
          <div class="col-md-12">
            <div class="alert alert-success">
              {{session('pesan')}}
            </div>
          </div>
        @endif
        <div class="col-sm-6">
          <h3>Beranda Dashboard</h3>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid starts-->
  <div class="container-fluid general-widget">
    <div class="row">
      
      <div class="col-sm-6 col-xl-4 col-lg-6">
        <div class="card o-hidden border-0">
          <div class="bg-primary b-r-4 card-body">
            <div class="media static-top-widget">
              <div class="align-self-center text-center"><i data-feather="user"></i></div>
              <div class="media-body"><span class="m-0">Total User</span>
                <h4 class="mb-0 counter">{{ $user }}</h4><i class="icon-bg" data-feather="user"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-xl-4 col-lg-6">
        <div class="card o-hidden border-0">
          <div class="bg-warning b-r-4 card-body">
            <div class="media static-top-widget">
              <div class="align-self-center text-center"><i data-feather="check-square"></i></div>
              <div class="media-body"><span class="m-0">Total Pendaftar</span>
                <h4 class="mb-0 counter">{{ $mahasiswa }}</h4><i class="icon-bg" data-feather="check-square"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      @if (Auth::user()->role == 'user')
      <div class="col-sm-6 col-xl-4 col-lg-6">
        <div class="card o-hidden border-0">
          <div class="bg-info b-r-4 card-body">
            <div class="media static-top-widget">
              <div class="align-self-center text-center"><i data-feather="info"></i></div>
              <div class="media-body"><span class="m-0">Status</span>
                <h4 class="mb-0 counter">{{ Auth::user()->mahasiswa->status }}</h4><i class="icon-bg" data-feather="info"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      @else
      <div class="col-sm-6 col-xl-4 col-lg-6">
        <div class="card o-hidden border-0">
          <div class="bg-info b-r-4 card-body">
            <div class="media static-top-widget">
              <div class="align-self-center text-center"><i data-feather="info"></i></div>
              <div class="media-body"><span class="m-0">Belum Diverifikasi</span>
                <h4 class="mb-0 counter">{{ $belumDiverifikasi }}</h4><i class="icon-bg" data-feather="info"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endif

    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-6 xl-100 box-col-12">
        <div class="card">
          <div class="cal-date-widget card-body">
            <div class="row">
              <div class="col-xl-6 col-xs-12 col-md-6 col-sm-6">
                <div class="cal-info text-center">
                  <div>
                    <h2>02</h2>
                    <div class="d-inline-block"><span class="b-r-dark pe-3">Juli</span><span class="ps-3">2022</span></div>
                    <p class="f-16">Pendaftaran beasiswa balikpapan tuntas akan ditutup</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-xs-12 col-md-6 col-sm-6">
                <div class="cal-datepicker">
                  <div class="datepicker-here float-sm-end" data-language="en">           </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header pb-0">
            <h5>Pantau 10 Teratas</h5><span>ranking penerima beasiswa balikpapan tuntas</span>
          </div>
          <div class="card-body">

            <div class="table-responsive">
              <table class="table table-striped table-bordered zero-configuration">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Strata</th>
                    <th>Jenis Perguruan Tinggi</th>
                    <th>Perguruan Tinggi</th>
                    <th>Program Studi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $dt)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $dt["mahasiswa"]->nama }}</td>
                      <td>{{ $dt["mahasiswa"]->strata }}</td>
                      <td>{{ $dt["mahasiswa"]->jenis_ptn }}</td>
                      <td>{{ $dt["mahasiswa"]->ptn }}</td>
                      <td>{{ $dt["mahasiswa"]->prodi }}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Container-fluid Ends-->
@endsection