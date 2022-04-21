@extends("layouts.base")
@section("content")

<div class="container-fluid">
  <div class="row">
    <!-- Zero Configuration  Starts-->
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>Data Pendaftar Beasiswa Balikpapan Tuntas</h5>
          <span>Berikut ini adalah daftar mahasiswa yang melakukan pendaftaran pada beasiswa balikpapan tuntas. Silakan verifikasi pendaftar terlebih dahulu agar sistem akan mencatat nilai yang diperoleh oleh pendaftar.</span>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="display" id="basic-1">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Strata</th>
                  <th>Jenis Perguruan Tinggi</th>
                  <th>Perguruan Tinggi</th>
                  <th>Program Studi</th>
                  <th>Lihat Profile</th>
                  <th>Verifikasi</th>
                </tr>
              </thead>
              <tbody>
                @foreach($pendaftarBelumVerifikasi as $pdbv)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $pdbv->nama }}</td>
                  <td>{{ $pdbv->strata }}</td>
                  <td>{{ $pdbv->jenis_ptn }}</td>
                  <td>{{ $pdbv->ptn }}</td>
                  <td>{{ $pdbv->prodi }}</td>
                  <td><a href="/profile/{{ $pdbv->id }}" target="_blank" class="btn btn-link btn-sm">Lihat Profile</a></td>
                  <td>
                    <a href="/verifikasi/{{ $pdbv->id }}" class="btn btn-secondary btn-sm"><i data-feather="check-circle"></i></a>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- Zero Configuration  Ends-->
  </div>
</div>

@endsection
@section("script")
<script src="/template/assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
<script src="/template/assets/js/datatable/datatables/datatable.custom.js"></script>
@endsection