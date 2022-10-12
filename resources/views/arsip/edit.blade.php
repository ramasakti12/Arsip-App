@extends('master.master')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Arsip</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./">Arsip</a></li>
        <li class="breadcrumb-item">Edit Arsip</li>
    </ol>
</div>

<div class="row">
    <div class="col-lg-12 mb-4">
        <p>Unggah surat yang telah terbit pada form ini untuk diarsipkan. <br>
        Catatan :
        <ul>
            <li>Gunakan file berformat PDF</li>
        </ul>
        </p>
    </div>
</div>

<div class="card mb-4">
    <div class="card-body">
        <form action="{{ route('arsip-update',['id'=>$data]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label for="nomorSurat" class="col-sm-3 col-form-label">Nomor Surat</label>
                <div class="col-sm-9">
                    <input type="text" value="{{ $data->nomor_surat }}" class="form-control" id="nomorSurat" required name="nomor_surat">
                </div>
            </div>
            <div class="form-group row">
                <label for="kategori" class="col-sm-3 col-form-label">Kategori</label>
                <div class="col-sm-9">
                    <select class="form-control mb-3" name="kategori_surat" required>
                        <option selected disabled>-- Pilih --</option>
                        <option value="Nota Dinas" @if (old('kategori_surat', $data->kategori_surat) == 'Nota Dinas') selected @endif>Nota Dinas</option>
                        <option value="Pemberitahuan" @if (old('kategori_surat', $data->kategori_surat) == 'Pemberitahuan') selected @endif>Pemberitahuan</option>
                        <option value="Pengumuman" @if (old('kategori_surat', $data->kategori_surat) == 'Pengumuman') selected @endif>Pengumuman</option>
                        <option value="Undangan" @if (old('kategori_surat', $data->kategori_surat) == 'Undangan') selected @endif>Undangan</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="judulSurat" class="col-sm-3 col-form-label">Judul</label>
                <div class="col-sm-9">
                    <input type="text" value={{ "$data->judul_surat" }} class="form-control" id="judulSurat" required name="judul_surat">
                </div>
            </div>
            <div class="form-group row">
                <label for="judulSurat" class="col-sm-3 col-form-label">File Surat (PDF)</label>
                <div class="custom-file col-sm-8">
                    <input type="file" value="{{ $data->file_surat }}" class="form-control-file" name="file_surat" accept="application/pdf" >
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-10">
                    <a href="{{ route('arsip') }}" class="btn btn-warning"><i class="fas fa-arrow-circle-left"></i> Kembali</a>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
