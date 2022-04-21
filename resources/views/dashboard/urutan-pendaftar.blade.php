@extends("layouts.base")
@section("content")

<div class="container-fluid">
  <div class="row">
    <!-- Zero Configuration  Starts-->
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>Ranking Pendaftar Beasiswa Balikpapan Tuntas Berdasarkan Nilai</h5>
          <span>Berikut ini adalah ranking mahasiswa yang melakukan pendaftaran pada beasiswa balikpapan tuntas.</span>
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
                  <th>Nilai</th>
                </tr>
              </thead>
              <tbody>
                @foreach($pendaftar as $pd)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $pd["mahasiswa"]->nama }}</td>
                  <td>{{ $pd["mahasiswa"]->strata }}</td>
                  <td>{{ $pd["mahasiswa"]->jenis_ptn }}</td>
                  <td>{{ $pd["mahasiswa"]->ptn }}</td>
                  <td>{{ $pd["mahasiswa"]->prodi }}</td>
                  <td><a href="/profile/{{ $pd["mahasiswa"]->id }}" target="_blank" class="btn btn-link btn-sm">Lihat Profile</a></td>
                  <td>{{ $pd["nilai"] }}</td>
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