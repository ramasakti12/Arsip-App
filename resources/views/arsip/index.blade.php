@extends('master.master')
@section('content')

    @include('master.head')

    <!-- Container Fluid-->
    <div class="d-sm-flex align-items-center justify-content-between">
        <h1 class="h3 mb-0 text-gray-800">Arsip Surat</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Arsip</a></li>
        </ol>
    </div>

    <div class="row">
        <div class="col-lg-12 mb-4">
            <p>Berikut ini adalah surat - surat yang telah terbit dan diarsipkan.
                <br>Klik "lihat" pada kolom aksi untuk melihat surat.
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-2">
            <a href="arsip-tambah" style="text-decoration: none"><button class="btn btn-block btn-success"
                    style="height: 70px">Arsipkan Surat</button></a>
        </div>
        <div class="col-lg-10 mb-4">
            <div class="card" style="background: transparent; height: 70px;">
                <div class="card-body">
                    <form action="{{ route('arsip') }}" method="GET">
                        {{-- @csrf --}}
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label text-right" style="">Cari surat :
                            </label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3"><i
                                                class="fas fa-search"></i></span>
                                    </div>
                                    <input type="text" class="form-control col-md-6" aria-describedby="basic-addon3"
                                        name="cari">
                                    <button class="btn btn-success" type="submit">Cari</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 mb-4">
            <!-- Simple Tables -->
            <div class="card">
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th>Nomor Surat</th>
                                <th>Kategori</th>
                                <th>Judul</th>
                                <th>Waktu Pengarsipan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($dataCount < 1)
                                <tr>
                                    <td colspan="5" class="text-center">
                                        <a class="text-center">
                                            Data yang anda cari tidak tersedia <br>
                                        </a>
                                        <a href="/" type="button" class="btn btn-sm btn-warning">Kembali</a>
                                    </td>
                                </tr>
                            @else
                                @foreach ($data as $item)
                                    <tr>
                                        <td><a href="" id="no_surat">{{ $item->nomor_surat }}</a></td>
                                        <td><a href="" id="kategori_surat"></a>{{ $item->kategori_surat }}</td>
                                        <td><a href=""
                                                id="judul_surat"></a>{{ Str::limit($item->judul_surat, 49, '...') }}</td>
                                        <td><a href=""
                                                id="waktu_pengarsipan"></a>{{ \Carbon\Carbon::parse($item->waktu_pengarsipan)->format('d-m-Y H:i:s') }}
                                        </td>
                                        <td>
                                            <a href="{{ route('arsip-hapus', $item->id) }}"
                                                onclick="return confirm('Apakah anda yakin?')"
                                                class="btn btn-sm btn-danger">Hapus</a>
                                            <a href="{{ route('arsip-download', $item->id) }}"
                                                class="btn btn-sm btn-warning">Unduh</a>
                                            <a href="{{ route('arsip-detail', $item->id) }}"
                                                class="btn btn-sm btn-primary">Lihat</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    {!! $data->onEachSide(4)->links('pagination::bootstrap-4') !!}
                </div>
            </div>
        </div>
    </div>
    <!--Row-->
@endsection

@push('notify')
    <script src="{{ asset('js/notify.min.js') }}"></script>

    @if (Session::has('success'))
        <script>
            $(document).ready(function() {
                $.notify("{{ Session::get('success') }}", "success");
            });
        </script>
    @endif
@endpush
