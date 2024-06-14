<x-layout>
    <x-slot name="page_name">Halaman Kelurahan / Create</x-slot>
    <x-slot name="page_content">
        <form class="forms-sample" action="{{url('dashboard/pasien/update', $pasien->id)}}" method="post">
            @csrf
            @method('put')
            <div class="form-group row">
                <label for="kode" class="col-sm-4 col-form-label">kode</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="kode" name="kode" placeholder="Masukkan kode Pasien"
                    value="{{ $pasien->kode }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-4 col-form-label">Nama</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Pasien"
                    value="{{ $pasien->nama }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="tmp_lahir" class="col-sm-4 col-form-label">Tempat Lahir</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir"
                        placeholder="Masukkan Tempat Lahir Pasien" value="{{ $pasien->tmp_lahir }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="tgl_lahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-8">
                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
                        placeholder="Masukkan Tanggal Lahir Pasien" value="{{ $pasien->tgl_lahir }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="gender" class="col-sm-4 col-form-label">Gender</label>
                <div class="col-sm-8">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="genderMale" value="L">
                        <label class="form-check-label" for="genderMale">
                            Laki-laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="genderFemale" value="P">
                        <label class="form-check-label" for="genderFemale">
                            Perempuan
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-sm-4 col-form-label">Email</label>
                <div class="col-sm-8">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email Pasien"
                    value="{{ $pasien->email }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                <div class="col-sm-8">
                    <textarea name="alamat" id="alamat" placeholder="Masukkan Alamat Pasien" class="form-control" value="{{ $pasien->alamat }}">
                    </textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="kel_nama" class="col-sm-4 col-form-label">Nama Kelurahan</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="kel_nama" name="kel_nama"
                        placeholder="Masukkan Faskes Kelurahan" value="{{ $pasien->kel_nama }}">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4"></div>
                <div class="col-sm-8">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </div>
            </div>
        </form>
    </x-slot>
</x-layout>