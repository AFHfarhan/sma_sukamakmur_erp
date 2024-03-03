@extends('layouts.master')
@section('page_title', 'Pendaftaran Siswa Baru')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Pendaftaran Siswa Baru</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Formulir Peserta Didik</h6>
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('daftar_siswa_baru') }}">
                @csrf
                <!-- row header -->
                <div class="row">
                    <div class="col-lg-6">
                        <label for="inputTanggal" class="form-label">Tanggal</label>
                        <div class="input-group" id="inputTanggal">
                            <input type="text" class="form-control" placeholder="Tanggal" name="formgruptanggal" id="formgruptanggal" aria-label="Tanggal">
                            <span class="input-group-text form-control" style="display:inline-block;">/</span>
                            <input type="text" class="form-control" placeholder="Bulan" name="formgrupbulan" id="formgrupbulan" aria-label="Bulan">
                            <span class="input-group-text form-control" style="display:inline-block;">/</span>
                            <input type="text" class="form-control" placeholder="Tahun" name="formgruptahun" id="formgruptahun" aria-label="Tahun">
                        </div>
                        <div class="row" style="margin-top:20px;">
                            <div class="col-lg-6">
                                <label for="inputTingkat" class="form-label">Tingkat</label>
                                <input type="text" class="form-control" name="inputTingkat" id="inputTingkat">
                            </div>
                            <div class="col-lg-6">
                                <label for="inputProgram" class="form-label">Program</label>
                                <input type="text" class="form-control" name="inputProgram" id="inputProgram">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                            <label for="inputReg" class="form-label">REG</label>
                        <div class="input-group mb-3" id="inputReg">
                            <input type="text" class="form-control" placeholder="Reg" name="formgrupReg1" id="formgrupReg1" aria-label="Reg1">
                            <span class="input-group-text form-control" style="display:inline-block;">/</span>
                            <input type="text" class="form-control" placeholder="Reg" name="formgrupReg2" id="formgrupReg2" aria-label="Reg2">
                            <span class="input-group-text form-control" style="display:inline-block;">/</span>
                            <input type="text" class="form-control" placeholder="Reg" name="formgrupReg3" id="formgrupReg3" aria-label="Reg3">
                        </div>
                    </div>
                </div>
                <hr></hr>
                <h7 class="m-0 font-weight-bold text-primary">Identitas Peserta Didik (WAJIB DI ISI)</h7>
                <hr></hr>     
                <!-- row biodata -->
                <div class="row">
                    <div class="col-lg-6" >
                        <label for="inputNama" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="inputNamaSiswa" id="inputNama" >

                        <label for="inputJenisKelamin" class="form-label" style="margin-top:20px;">Jenis Kelamin</label>
                        <select class="form-select form-select-lg form-control" name="inputJenisKelamin" id="inputJenisKelamin"  aria-label="Pilih Jenis Kelamin">
                            <option selected disabled>Pilih salah satu</option>
                            <option value="laki">Laki - laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>

                        <label for="inputTTL" class="form-label" style="margin-top:20px;">Tempat, Tanggal Lahir</label>
                        <div class="input-group" id="inputTTL">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="formgrupTTLTempat" id="formgrupTTLTempat" >
                                </div>
                                <div class="input-group col-md-8">
                                    <input type="text" class="form-control" placeholder="tgl" name="formgrupTTLTanggal" id="formgrupTTLTanggal" aria-label="Tanggal">
                                    <span class="input-group-text form-control" style="display:inline-block;">/</span>
                                    <input type="text" class="form-control" placeholder="bln" name="formgrupTTLBulan" id="formgrupTTLBulan" aria-label="Bulan">
                                    <span class="input-group-text form-control" style="display:inline-block;">/</span>
                                    <input type="text" class="form-control" placeholder="thn" name="formgrupTTLTahun" id="formgrupTTLTahun" aria-label="Tahun">    
                                </div>
                            </div>
                        </div>

                        <label for="inputAgama" class="form-label" style="margin-top:20px;">Agama</label>
                        <select class="form-select form-select-lg form-control" name="inputAgama" id="inputAgama"  aria-label="Pilih Agama">
                            <option selected disabled>Pilih salah satu</option>
                            <option value="islam">Islam</option>
                            <option value="kristen">Kristen</option>
                            <option value="katholik">Katholik</option>
                            <option value="hindu">Hindu</option>
                            <option value="budha">Budha</option>
                            <option value="konguchu">Konguchu</option>
                        </select>

                        <label for="inputKks" class="form-label" style="margin-top:20px;">No.KKS</label><span style="display:inline-block; margin-left:50px;font-weight: 200;font-size: small;font-style: italic;">*KKS : Kartu Keluarga Sejahtera</span>
                        <input type="text" class="form-control" name="inputKks" id="inputKks" >

                        <label for="radiobuttonKPS" class="form-label" style="margin-top:20px;">Apakah Penerima KPS </label><span style="display:inline-block; margin-left:50px;font-weight: 200;font-size: small;font-style: italic;">*KPS : Kartu Perlindungan Sosial</span>
                        <div id="radiobuttonKPS" class="row form-check">
                            <div class="form-check col-md-6">
                                <input class="form-check-input " type="radio" name="rbKpsYa" id="rbKpsYa">
                                <label class="form-check-label " for="rbKpsYa">
                                    Ya
                                </label>
                            </div>
                            <div class="form-check  col-md-6">
                                <input class="form-check-input " type="radio" name="rbKpsTidak" id="rbKpsTidak" checked>
                                <label class="form-check-label " for="rbKpsTidak">
                                    Tidak
                                </label>
                            </div>
                        </div>

                        <label for="inputKps" class="form-label" style="margin-top:20px;">No.KPS</label>
                        <input type="text" class="form-control" name="inputKps" id="inputKps" >

                        <label for="radiobuttonKIP" class="form-label" style="margin-top:20px;">Apakah Penerima KIP</label><span style="display:inline-block; margin-left:50px;font-weight: 200;font-size: small;font-style: italic;">*KIP : Kartu Indonesia Pintar</span>
                        <div id="radiobuttonKIP" class="row form-check">
                            <div class="form-check col-md-6">
                                <input class="form-check-input " type="radio" name="rbKipYa" id="rbKipYa">
                                <label class="form-check-label " for="rbKipYa">
                                    Ya
                                </label>
                            </div>
                            <div class="form-check  col-md-6">
                                <input class="form-check-input " type="radio" name="rbKipTidak" id="rbKipTidak" checked>
                                <label class="form-check-label " for="rbKipTidak">
                                    Tidak
                                </label>
                            </div>
                        </div>

                        <label for="inputNoKip" class="form-label" style="margin-top:20px;">No.KIP</label>
                        <input type="text" class="form-control" name="inputNoKip" id="inputNoKip" >

                        <label for="inputNamaKip" class="form-label" style="margin-top:20px;">Nama KIP</label>
                        <input type="text" class="form-control" name="inputNamaKip" id="inputNamaKip" >

                    </div>
                    <div class="col-lg-6">
                        <label for="inputSekolahAsal" class="form-label">Nama Sekolah Asal</label>
                        <input type="text" class="form-control" name="inputSekolahAsal" id="inputSekolahAsal" >

                        <label for="inputTempatTinggal" class="form-label" style="margin-top:20px;">Alamat Tempat Tinggal</label>
                        <textarea class="form-control" placeholder="" name="inputTempatTinggal" id="inputTempatTinggal"></textarea>

                        <label for="inputNoTelp" class="form-label" style="margin-top:20px;">No Telp Rumah</label>
                        <input type="text" class="form-control" name="inputNoTelp" id="inputNoTelp" >

                        <label for="inputNoHp" class="form-label" style="margin-top:20px;">No. HP</label>
                        <input type="text" class="form-control" name="inputNoHp" id="inputNoHp" >

                        <label for="inputEmail" class="form-label" style="margin-top:20px;">Email Pribadi</label>
                        <input type="email" class="form-control" name="inputEmail" id="inputEmail" >
                    </div>
                </div>
                <hr></hr>
                <h7 class="m-0 font-weight-bold text-primary">Identitas Ayah dan Ibu Kandung (WAJIB DI ISI)</h7>
                <hr></hr>     
                <!-- row biodata orang tua-->
                <div class="row">
                    <div class="col-lg-6">
                        <label for="inputNamaAyah" class="form-label">Nama Ayah</label>
                        <input type="text" class="form-control" name="inputNamaAyah" id="inputNamaAyah">

                        <label for="inputTLAyah" class="form-label" style="margin-top:20px;">Tahun Lahir</label>
                        <input type="text" class="form-control" name="inputTLAyah" id="inputTLAyah">

                        <label for="inputPendidikanAyah" class="form-label" style="margin-top:20px;">Pendidikan</label>
                        <input type="text" class="form-control" name="inputPendidikanAyah" id="inputPendidikanAyah">
                    </div>
                    <div class="col-lg-6">
                        <label for="inputPekerjaanAyah" class="form-label">Pekerjaan</label>
                        <input type="text" class="form-control" name="inputPekerjaanAyah" id="inputPekerjaanAyah">

                        <label for="inputPBAyah" class="form-label" style="margin-top:20px;">Penghasilan Bulanan</label>
                        <input type="text" class="form-control" name="inputPBAyah" id="inputPBAyah">

                    </div>
                </div>
                <br><br><hr><br><br>
                <div class="row">
                    <div class="col-lg-6">
                        <label for="inputNamaIbu" class="form-label">Nama Ibu</label>
                        <input type="text" class="form-control" name="inputNamaIbu" id="inputNamaIbu">

                        <label for="inputTLIbu" class="form-label" style="margin-top:20px;">Tahun Lahir</label>
                        <input type="text" class="form-control" name="inputTLIbu" id="inputTLIbu">

                        <label for="inputPendidikanIbu" class="form-label" style="margin-top:20px;">Pendidikan</label>
                        <input type="text" class="form-control" name="inputPendidikanIbu" id="inputPendidikanIbu">
                    </div>
                    <div class="col-lg-6">
                        <label for="inputPekerjaanIbu" class="form-label">Pekerjaan</label>
                        <input type="text" class="form-control" name="inputPekerjaanIbu" id="inputPekerjaanIbu">

                        <label for="inputPBIbu" class="form-label" style="margin-top:20px;">Penghasilan Bulanan</label>
                        <input type="text" class="form-control" name="inputPBIbu" id="inputPBIbu">

                    </div>
                </div>
                <hr></hr>
                <h7 class="m-0 font-weight-bold text-primary">Identitas Wali</h7>
                <hr></hr> 
                <div class="row">
                    <div class="col-lg-6">
                        <label for="inputNamaWali" class="form-label">Nama Wali</label>
                        <input type="text" class="form-control" name="inputNamaWali" id="inputNamaWali">

                        <label for="inputTLWali" class="form-label" style="margin-top:20px;">Tahun Lahir</label>
                        <input type="text" class="form-control" name="inputTLWali" id="inputTLWali">

                        <label for="inputPendidikanWali" class="form-label" style="margin-top:20px;">Pendidikan</label>
                        <input type="text" class="form-control" name="inputPendidikanWali" id="inputPendidikanWali">
                    </div>
                    <div class="col-lg-6">
                        <label for="inputPekerjaanWali" class="form-label">Pekerjaan</label>
                        <input type="text" class="form-control" name="inputPekerjaanWali" id="inputPekerjaanWali">

                        <label for="inputPBWali" class="form-label" style="margin-top:20px;">Penghasilan Bulanan</label>
                        <input type="text" class="form-control" name="inputPBWali" id="inputPBWali">

                    </div>
                </div>
                <hr></hr>
                <h7 class="m-0 font-weight-bold text-primary">Data Periodik (WAJIB DIISI)</h7>
                <hr></hr>
                <div class="row">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Jenis Prestasi</th>
                                    <th>Tingkat</th>
                                    <th>Nama Prestasi</th>
                                    <th>Tahun</th>
                                    <th>Penyelenggaraan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="text" class="form-control" name="jenisPrestasi1" id="jenisPrestasi1"></td>
                                    <td><input type="text" class="form-control" name="tingkatPrestasi1" id="tingkatPrestasi1"></td>
                                    <td><input type="text" class="form-control" name="namaPrestasi1" id="namaPrestasi1"></td>
                                    <td><input type="text" class="form-control" name="tahunPrestasi1" id="tahunPrestasi1"></td>
                                    <td><textarea class="form-control" id="penyelenggaraPrestasi1" rows="2" cols="5"></textarea></td>
                                </tr>
                                <tr>
                                <td><input type="text" class="form-control" name="jenisPrestasi2" id="jenisPrestasi2"></td>
                                    <td><input type="text" class="form-control" name="tingkatPrestasi2" id="tingkatPrestasi2"></td>
                                    <td><input type="text" class="form-control" name="namaPrestasi2" id="namaPrestasi2"></td>
                                    <td><input type="text" class="form-control" name="tahunPrestasi2" id="tahunPrestasi2"></td>
                                    <td><textarea class="form-control" name="penyelenggaraPrestasi2" id="penyelenggaraPrestasi2" rows="2" cols="5"></textarea></td>
                                </tr>
                                <tr>
                                    <td><input type="text" class="form-control" name="jenisPrestasi3" id="jenisPrestasi3"></td>
                                    <td><input type="text" class="form-control" name="tingkatPrestasi3" id="tingkatPrestasi3"></td>
                                    <td><input type="text" class="form-control" name="namaPrestasi3" id="namaPrestasi3"></td>
                                    <td><input type="text" class="form-control" name="tahunPrestasi3" id="tahunPrestasi3"></td>
                                    <td><textarea class="form-control" name="penyelenggaraPrestasi3" id="penyelenggaraPrestasi3" rows="2" cols="5"></textarea></td>
                                </tr>
                                <tr>
                                    <td><input type="text" class="form-control" name="jenisPrestasi4" id="jenisPrestasi4"></td>
                                    <td><input type="text" class="form-control" name="tingkatPrestasi4" id="tingkatPrestasi4"></td>
                                    <td><input type="text" class="form-control" name="namaPrestasi4" id="namaPrestasi4"></td>
                                    <td><input type="text" class="form-control" name="tahunPrestasi4" id="tahunPrestasi4"></td>
                                    <td><textarea class="form-control" name="penyelenggaraPrestasi4" id="penyelenggaraPrestasi4" rows="2" cols="5"></textarea></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <hr></hr>
                <h7 class="m-0 font-weight-bold text-primary">Lain - Lain</h7>
                <hr></hr> 
                <div class="row">
                    <div class="col-lg-6">
                        <label for="checkboxPersyaratan" class="form-label" style="margin-top:20px;">Persyaratan Pendaftaran : </label>
                        <div id="checkboxPersyaratan" class="row form-check">
                            <div class="form-check col-md-6">
                                <input class="form-check-input " type="checkbox" name="cbdft1" id="cbdft1">
                                <label class="form-check-label " for="cbdft1">
                                    1. Mengisi Formulir
                                </label>
                            </div>
                            <div class="form-check  col-md-6">
                                <input class="form-check-input " type="checkbox" name="cbdft2" id="cbdft2">
                                <label class="form-check-label " for="cbdft2">
                                    2. Fotokopi KK 
                                </label>
                            </div>
                            <div class="form-check  col-md-6">
                                <input class="form-check-input " type="checkbox" name="cbdft3" id="cbdft3">
                                <label class="form-check-label " for="cbdft3">
                                    3. Fotokopi KTP Orang Tua
                                </label>
                            </div>
                            <div class="form-check  col-md-8">
                                <input class="form-check-input " type="checkbox" name="cbdft4" id="cbdft4">
                                <label class="form-check-label " for="cbdft4">
                                    4. Foto Warna 3x4, 4 Lembar
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label for="checkboxReferensi" class="form-label" style="margin-top:20px;">Referensi Dari : </label>
                        <div id="checkboxReferensi" class="row form-check">
                            <div class="form-check col-md-6">
                                <input class="form-check-input " type="checkbox" name="cbdrf1" id="cbdrf1">
                                <label class="form-check-label " for="cbdrf1">
                                    Website
                                </label>
                            </div>
                            <div class="form-check  col-md-6">
                                <input class="form-check-input " type="checkbox" name="cbdrf2" id="cbdrf2">
                                <label class="form-check-label " for="cbdrf2">
                                    Facebook
                                </label>
                            </div>
                            <div class="form-check  col-md-6">
                                <input class="form-check-input " type="checkbox" name="cbdrf3" id="cbdrf3">
                                <label class="form-check-label " for="cbdrf3">
                                    Spanduk
                                </label>
                            </div>
                            <div class="form-check  col-md-6">
                                <input class="form-check-input " type="checkbox" name="cbdrf4" id="cbdrf4">
                                <label class="form-check-label " for="cbdrf4">
                                    Brosur
                                </label>
                            </div>
                            <div class="form-check  col-md-8">
                                <input class="form-check-input " type="checkbox" name="cbdrf5" id="cbdrf5">
                                <label class="form-check-label " for="cbdrf5">
                                    Guru
                                </label> <input type="text" class="form-control" id="inputGuruRef" name="inputGuruRef" value="">
                            </div>
                            <div class="form-check  col-md-8">
                                <input class="form-check-input " type="checkbox" name="cbdrf6" id="cbdrf6">
                                <label class="form-check-label " for="cbdrf6">
                                    Teman
                                </label><input type="text" class="form-control" id="inputTemanRef" name="inputTemanRef" value="">
                            </div>
                            <div class="form-check  col-md-6">
                                <input class="form-check-input " type="checkbox" name="cbdrf7" id="cbdrf7">
                                <label class="form-check-label " for="cbdrf7">
                                    Lainnya
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <hr></hr>
                <div class="row">
                    <button type="submit" class="btn btn-primary mb-3 form-control">Kirim</button>
                    <a href="/daftar_siswa" class="btn btn-danger mb-3 form-control">Batal</a>
                </div>
                <hr></hr> 
            </form>
        </div>
    </div>
</div>
@endsection