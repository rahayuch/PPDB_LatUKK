@extends('siswas.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Siswa</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('siswas.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('siswas.update',$siswa->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>NIS:</strong>
                    <input type="text" name="nis" value="{{ $siswa->nis }}" class="form-control" placeholder="NIS">
                </div>
            
            
                <div class="form-group">
                    <strong>Nama:</strong>
                    <input type="text" name="nama" value="{{ $siswa->nama }}" class="form-control" placeholder="Nama">
                </div>
            
            
                <div class="form-group">
                    <strong>Jenis Kelamin:</strong>
                <select class="form-control" data-validate = "Jenis Kelamin" value="{{ $siswa->jk }}" name="jk" id="jk">
                            <option value=""disable selected > Pilih Opsi  </option>
                            <option value="Laki-Laki" @if($siswa ->jk == 'Laki-Laki') selected @endif>Laki-Laki</option>
                            <option value="Perempuan" @if($siswa ->jk == 'Perempuan') selected @endif>Perempuan</option>
                </select>
                </div>
            
            
                <div class="form-group">
                    <strong>Tempat Lahir:</strong>
                    <input type="text" name="tempat_lahir" value="{{ $siswa->tempat_lahir }}" class="form-control" placeholder="Tempat Lahir">
                </div>
            
            
                <div class="form-group">
                    <strong>Tanggal Lahir:</strong>
                    <input type="date" name="tgl_lahir" value="{{ $siswa->tgl_lahir }}" class="form-control" placeholder="Tanggal Lahir">
                </div>
            
            
                <div class="form-group">
                    <strong>Alamat:</strong>
                    <textarea class="form-control" style="height:150px" name="alamat" placeholder="Alamat">{{ $siswa->alamat }}</textarea>
                </div>
            
            
                <div class="form-group">
                    <strong>Asal Sekolah:</strong>
                    <input type="text" name="asal_sekolah" value="{{ $siswa->asal_sekolah }}" class="form-control" placeholder="Asal Sekolah">
                </div>
            
            
                <div class="form-group">
                    <strong>Kelas:</strong>
                    <input type="text" name="kelas" value="{{ $siswa->kelas }}" class="form-control" placeholder="Kelas">
                </div>
            
            
                <div class="form-group">
                    <strong>Jurusan:</strong>
                      
                <select class="form-control" data-validate = "Pilih Jurusan" value="{{ $siswa->kelas }}" name="jurusan" id="jurusan">
                            <option value=""disable selected > Pilih jurusan  </option>
                            <option value="Rekayasa Perangkat Lunak" @if($siswa ->jurusan == 'Rekayasa Perangkat Lunak') selected @endif>Rekayasa Perangkat Lunak</option>
                            <option value="Teknik Komputer Jaringan" @if($siswa ->jurusan == 'Teknik Komputer Jaringan') selected @endif>Teknik Komputer Jaringan</option>
                            <option value="Bisnis Daring Pemasaran" @if($siswa ->jurusan == 'Bisnis Daring Pemasaran') selected @endif >Bisnis Daring Pemasaran</option>
                            <option value="Tata Boga" @if($siswa ->jurusan == 'Tata Boga') selected @endif >Tata Boga</option>
                            <option value="Multimedia" @if($siswa ->jurusan == 'Multimedia') selected @endif >Multimedia</option>
                            <option value="Otomatisasi Tata Kelola Perkantoran" @if($siswa ->jurusan == 'Otomatisasi Tata Kelola Perkantoran') selected @endif >Otomatisasi Tata Kelola Perkantoran</option>
                            <option value="Perhotelan" @if($siswa ->jurusan == 'Perhotelan') selected @endif >Perhotelan</option>
                     </select>
                </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection