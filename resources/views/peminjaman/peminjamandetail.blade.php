@extends('adminLayouts.main')
@section('title')
    Detail Data Peminjaman
@endsection
@section('peminjaman', 'active')
@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Detail Data Peminjaman </h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Settings 1</a>
                                        </li>
                                        <li><a href="#">Settings 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <ul class="list-unstyled timeline">
                                <div class="col-md-6">
                                    <li>
                                        <div class="block">
                                            <div class="tags">
                                                <a href="" class="tag">
                                                    <span>Kode Sewa</span>
                                                </a>
                                            </div>
                                            <div class="block_content">
                                                <h2 class="title">
                                                    <a>{{ $peminjaman->kode_peminjaman }}</a>
                                                </h2>
                                            </div>
                                            <br>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="block">
                                            <div class="tags">
                                                <a href="" class="tag">
                                                    <span>Penyewa</span>
                                                </a>
                                            </div>
                                            <div class="block_content">
                                                <h2 class="title">
                                                    <a>{{ $peminjaman->member->nama }}</a>
                                                </h2>
                                            </div>
                                            <br>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="block">
                                            <div class="tags">
                                                <a href="" class="tag">
                                                    <span>Produk</span>
                                                </a>
                                            </div>
                                            <div class="block_content">
                                                <h2 class="title">
                                                    <a>{{ $peminjaman->produk->nama_produk }}</a>
                                                </h2>
                                            </div>
                                            <br>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="block">
                                            <div class="tags">
                                                <a href="" class="tag">
                                                    <span>Jumlah Sewa</span>
                                                </a>
                                            </div>
                                            <div class="block_content">
                                                <h2 class="title">
                                                    <a>{{ $peminjaman->jumlah_pinjam }}</a>
                                                </h2>
                                            </div>
                                            <br>
                                        </div>
                                    </li>
                                </div>
                                <div class="col-md-6">
                                    <li>
                                        <div class="block">
                                            <div class="tags">
                                                <a href="" class="tag">
                                                    <span>Tanggal Sewa</span>
                                                </a>
                                            </div>
                                            <div class="block_content">
                                                <h2 class="title">
                                                    <a>{{ \Carbon\Carbon::parse($peminjaman->tgl_pinjam)->isoFormat('D MMMM YYYY') }}</a>
                                                </h2>
                                            </div>
                                            <br>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="block">
                                            <div class="tags">
                                                <a href="" class="tag">
                                                    <span>Lama Sewa</span>
                                                </a>
                                            </div>
                                            <div class="block_content">
                                                <h2 class="title">
                                                    <a>{{ $peminjaman->lama_pinjam }} {{$peminjaman->produk->satuan}}</a>
                                                </h2>
                                            </div>
                                            <br>
                                        </div>
                                    </li>
                                <li>
                                    <div class="block">
                                        <div class="tags">
                                            <a href="" class="tag">
                                                <span>Harga Total</span>
                                            </a>
                                        </div>
                                        <div class="block_content">
                                            <h2 class="title">
                                                <a>
                                                    @if ($peminjaman->total_harga != null)
                                                        Rp{{number_format($peminjaman->total_harga)}}
                                                    @else
                                                        Rp{{ number_format(($peminjaman->produk->harga)*($peminjaman->lama_pinjam)*($peminjaman->jumlah_pinjam)) }}
                                                    @endif
                                                </a>
                                            </h2>
                                        </div>
                                        <br>
                                    </div>
                                </li>
                                <li>
                                    <div class="block">
                                        <div class="tags">
                                            <a href="" class="tag">
                                                <span>Petugas</span>
                                            </a>
                                        </div>
                                        <div class="block_content">
                                            <h2 class="title">
                                                <a>{{ $peminjaman->nama_petugas }}</a>
                                            </h2>
                                        </div>
                                        <br>
                                    </div>
                                </li>
                            </div>
                                <div class="form-group">
                                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback-left">
                                        <br><br>
                                        <a class="btn btn-primary" href="{{ route('peminjaman.index') }}"><i class="fa fa-home"></i> Kembali</a>
                                    </div>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
