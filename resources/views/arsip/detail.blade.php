@extends('master.master')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Arsip</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Arsip</a></li>
            <li class="breadcrumb-item">Detail</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-lg-12 mb-4">
            <p>Nomor : {{ $arsip->nomor_surat }}
                <br>Kategori : {{ $arsip->kategori_surat }}
                <br>Judul : {{ $arsip->judul_surat }}
                <br>Waktu unggah : {{ \Carbon\Carbon::parse($arsip->waktu_pengarsipan)->format('d-m-Y H:i:s') }}
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="row g-0">
                    <div class="col-md-9">
                        <iframe class="m-2" src="{{ asset('../storage/files/' . $arsip->file_surat) }}" align="top"
                            height="700px" width="100%" frameborder="0" scrolling="auto"></iframe>
                    </div>
                    <div class="col-md-3">
                        <a href="/arsip" class="btn btn-warning btn-block mt-2"><i class="fas fa-arrow-circle-left"></i>
                            Kembali</a>
                        <a href="{{ route('arsip-download', $arsip->id) }}" class="btn btn-success btn-block mt-2"><i
                                class="fas fa-arrow-circle-down"></i>
                            Unduh</a>
                            <a href="{{ route('arsip-edit', $arsip->id) }}" class="btn btn-success btn-block mt-2"><i
                                class="fas fa-solid fa-pencil"></i>
                            Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
