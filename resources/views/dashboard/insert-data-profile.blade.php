@extends("layouts.base")
@section("content")
<div class="container-fluid">
  <div class="page-header">
    <div class="row">
      <div class="col-sm-12">
        <h3>Formulir Pendaftaran Beasiswa Balikpapan Tuntas</h3>
      </div>
    </div>
  </div>
</div>
<!-- Container-fluid starts-->
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header pb-0">
          <h5>Formulir Pendaftaran</h5>
          <span>Isi formulir dengan sejujur-jujurnya agar dapat di verifikasi oleh petugas</span>
          <hr>
        </div>

        <div class="card-body">
          <div class="stepwizard">
            <div class="stepwizard-row setup-panel">
              <div class="stepwizard-step"><a class="btn btn-primary" href="#step-1">1</a>
                <p>Data Pribadi</p>
              </div>
              <div class="stepwizard-step"><a class="btn btn-light" href="#step-2">2</a>
                <p>Data Kampus</p>
              </div>
              <div class="stepwizard-step"><a class="btn btn-light" href="#step-3">3</a>
                <p>Bahan Pertimbangan</p>
              </div>
              <div class="stepwizard-step"><a class="btn btn-light" href="#step-4">4</a>
                <p>Selesai</p>
              </div>
            </div>
          </div>
          <form action="/insert-data-profile" method="POST">
            @csrf
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            <div class="setup-content" id="step-1">
              <div class="col-xs-12">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-md-4">
                      <label class="text-hitam">NAMA <strong class="text-danger">*</strong></label>
                      <input id="nama" type="text" class="form-control " name="nama" required>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="text-hitam">NO. INDUK KEPENDUDUKAN (NIK) <strong class="text-danger">*</strong></label>
                        <input type="text" class="form-control " name="nik" minlength="16" maxlength="16" id="nik" required>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="text-hitam">ALAMAT <strong class="text-danger">*</strong></label>
                        <input type="text" class="form-control" name="alamat" id="alamat" required>
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <div class="col-md-4">
                      <label class="text-hitam">NOMOR TELEPON <strong class="text-danger">*</strong></label>
                      <input id="no_telp" type="text" class="form-control " name="no_telp" required>
                      <small class="text-info">contoh: +6281234567890</small>
                    </div>
                    <div class="col-md-4">
                      <label class="text-hitam">TEMPAT LAHIR <strong class="text-danger">*</strong></label>
                      <input id="tempat_lahir" type="text" class="form-control " name="tempat_lahir"  required>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="text-hitam">TANGGAL LAHIR <strong class="text-danger">*</strong></label>
                        <input type="date" class="form-control " name="tanggal_lahir" id="tanggal_lahir" required>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="setup-content" id="step-2">
              <div class="col-xs-12">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="text-hitam">NO. INDUK MAHASISWA (NIM) <strong class="text-danger">*</strong></label>
                        <input id="nim" type="text" class="form-control " name="nim" required>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <label class="text-hitam">STRATA <strong class="text-danger">*</strong></label>
                      <select name="strata" id="strata" class="form-control " required>
                        <option >--Pilih Strata--</option>
                        <option value="D-III">D-III</option>
                        <option value="D-IV">D-IV</option>
                        <option value="S1">S1</option>
                      </select>
                      <small class="text-info">Sesuai Strata Profesi yang terdaftar di BAN-PT</small>
                    </div>
                    <div class="col-md-4">
                      <label class="text-hitam">JENIS PERGURUAN TINGGI <strong class="text-danger">*</strong></label>
                      <select name="jenis_ptn" class="form-control " id="jenisptn" required>
                        <option >--Pilih Jenis Perguruan Tinggi--</option>
                        <option value="Luar Negeri">Luar Negeri</option>
                        <option value="Politekkes">Politekkes</option>
                        <option value="Universitas">Universitas</option>
                        <option value="Poltekkes">Poltekkes</option>
                        <option value="Institut">Institut</option>
                        <option value="Politeknik">Politeknik</option>
                        <option value="Akademi">Akademi</option>
                        <option value="Sekolah Tinggi">Sekolah Tinggi</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="text-hitam">PERGURUAN TINGGI <strong class="text-danger">*</strong></label>
                        <input id="ptn" type="text" class="form-control" name="ptn" required>
                        <small class="text-info">Nama ptn lengkap dangunakan huruf kapital</small>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="text-hitam">PROGRAM STUDI <strong class="text-danger">*</strong></label>
                        <input id="prodi" type="text" class="form-control" name="prodi" required>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="setup-content" id="step-3">
              <div class="col-xs-12">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="text-hitam">AKREDITASI PERGURUAN TINGGI <strong class="text-danger">*</strong></label>
                      <select name="akre_ptn" id="akre_ptn" class="form-control " required>
                        <option >--Pilih Akreditasi PTN--</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="KHUSUS">KHUSUS</option>
                      </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="text-hitam">AKREDITASI PROGRAM STUDI <strong class="text-danger">*</strong></label>
                      <select name="akre_prodi" id="akre_prodi" class="form-control " required>
                        <option >--Pilih Akreditasi Program Studi--</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="KHUSUS">KHUSUS</option>
                      </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="text-hitam">IPK <strong class="text-danger">*</strong></label>
                        <input id="ipk" type="text" class="form-control" name="ipk" required>
                        <small class="text-info">IPK 3.00 - 4.00</small>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="text-hitam">UKT <strong class="text-danger">*</strong></label>
                        <div class="input-group">
                          <span class="input-group-text">Rp.</span>
                          <input class="form-control" name="ukt" type="text" aria-label="Amount (to the nearest rupiah)">
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <div class="col-md-6">
                      <label class="text-hitam">PILIH GOLONGAN PEKERJAAN ORANG TUA/WALI</label>
                      <table class="table">
                        <thead>
                          <tr class="text-center">
                            <th>GOLONGAN</th>
                            <th>KETERANGAN</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>GOL 1</td>
                            <td>Pejabat Tinggi Negara, Rektor, Anggota Legislatif, Guru Besar, Perwira Tinggi, Professional, Pejabat Eselon I, Kepala Daerah, Pengusaha Besar dan Menengah, Direksi, Manager.</td>
                          </tr>
                          <tr>
                            <td>GOL 2</td>
                            <td>Pejabat Eselon II, Dekan, Asisten Manager, Kepala Dinas, Perwira Menengah, Pengusaha Kecil.</td>
                          </tr>
                          <tr>
                            <td>GOL 3</td>
                            <td>Pejabat Eselon III, Supervisor, Kabiro, Kabag, PNS Gol IV, Perwira Pertama, Pengusaha Mikro.</td>
                          </tr>
                          <tr>
                            <td>GOL 4</td>
                            <td>Pejabat Eselon IV, Bintara Tinggi, Kasubag, PNS Gol III, Pensiunan PNS Gol IV</td>
                          </tr>
                          <tr>
                            <td>GOL 5</td>
                            <td>Bintara, PNS Gol II, Kaur, Kasi, Pensiunan PNS Gol III</td>
                          </tr>
                          <tr>
                            <td>GOL 6</td>
                            <td>Tamtama, PNS Gol I, Pensiunan PNS Gol II, Pengemudi</td>
                          </tr>
                          <tr>
                            <td>GOL 7</td>
                            <td>Anak Yatim Piatu, Ibu Rumah Tangga, Kuli Bangunan, Tukang Parkir, Buruh Tani, Tukang Becak, Pekerja Sektor Informal, Pensiunan PNS Gol I.</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="col-md-6">
                      <label class="text-hitam">PILIH GOLONGAN PRESTASI JIKA ADA <strong class="text-info">*JIKA ADA</strong></label>
                      <table class="table">
                        <thead>
                          <tr class="text-center">
                            <th>GOLONGAN</th>
                            <th>KETERANGAN</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>GOL 1</td>
                            <td>Sertifikat Prestasi Minimal Tingkat Kabupaten yang Diselenggarakan Oleh Pemerintah dan/atau Masyarakat</td>
                          </tr>
                          <tr>
                            <td>GOL 2</td>
                            <td>Sertifikat Prestasi Tingkat Nasional Finalis 10 Besar</td>
                          </tr>
                          <tr>
                            <td>GOL 3</td>
                            <td>Sertifikat Tingkat Nasional Juara 1, 2, 3</td>
                          </tr>
                          <tr>
                            <td>GOL 4</td>
                            <td>Sertifikat Tingkat Internasional Finalis 10 Besar</td>
                          </tr>
                          <tr>
                            <td>GOL 5</td>
                            <td>Sertifikat Tingkat Internasional Juara 1, 2, 3</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="text-hitam">PEKERJAAN ORANG TUA/WALI <strong class="text-danger">*</strong></label>
                        <select name="pekerjaan_ortu" id="pekerjaan_ortu" class="form-control " required>
                          <option >--Pilih Golongan Pekerjaan Orang Tua--</option>
                          <option value="GOL 1">Gol 1</option>
                          <option value="GOL 2">Gol 2</option>
                          <option value="GOL 3">Gol 3</option>
                          <option value="GOL 4">Gol 4</option>
                          <option value="GOL 5">Gol 5</option>
                          <option value="GOL 6">Gol 6</option>
                          <option value="GOL 7">Gol 7</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="text-hitam">PRESTASI <strong class="text-info">*JIKA ADA</strong></label>
                        <select name="prestasi" id="prestasi" class="form-control">
                          <option value="-">--Pilih Golongan Prestasi--</option>
                          <option value="GOL 1">Gol 1</option>
                          <option value="GOL 2">Gol 2</option>
                          <option value="GOL 3">Gol 3</option>
                          <option value="GOL 4">Gol 4</option>
                          <option value="GOL 5">Gol 5</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  {{-- <button class="btn btn-primary nextBtn pull-right" type="button">Next</button> --}}
                </div>
              </div>
            </div>
            <div class="setup-content" id="step-4">
              <div class="col-xs-12">
                <div class="col-md-12">
                  <div class="form-group row">
                    <label>Mohon untuk dapat mengecek kembali data yang telah anda masukkan sebelum mengirim data <br> apabila telah yakin dengan data anda tekan tombol kirim.</label>
                  </div>
                  <button class="btn btn-secondary pull-right" type="submit">Kirim</button>
                </div>
              </div>
            </div>
          </form>
        </div>

        <div class="row p-5">
            <div class="col-lg-12">
              <hr>
              <div class="row">
                <div class="col-md-6">
                  <small>Butuh bantuan hubungi <a href="mailto:help@gmail.com" target="_blank">help@gmail.com</a></small>
                </div>
              </div>
            </div>
        </div>

      </div>
    </div>
  </div>
</div>



@endsection
@section("script")
<script src="/template/assets/js/form-wizard/form-wizard-two.js"></script>
@endsection