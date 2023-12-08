@extends('layouts.app')

@section('content')
<div class="container">
<!-- Carousel -->
  <br>
  <div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://cdnstatic.detik.com/live/2023/12/3in1/bri/231206-umkm-2-970x250.jpg" class="d-block w-100"
          alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://cdnstatic.detik.com/live/2023/12/3in1/bri/231206-umkm-2-970x250.jpg" class="d-block w-100"
          alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://cdnstatic.detik.com/live/2023/12/3in1/bri/231206-umkm-2-970x250.jpg" class="d-block w-100"
          alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

<!-- Card Berita -->
<div class="container mt-3">
  <div class="row">
    @foreach ($allBerita as $item)
    <div class="col-lg-4 col-md-6 mt-3">
      <div class="card ">
        <img src="{{ asset('img/gambar/' . $item->gambar) }}" class="bd-placeholder-img card-img-top" alt="">
        <div class="card-body">
          <div class="card-title h5 fw-bold">{{ Str::limit($item->judul, 25, '...') }}</div>
          <p class="card-text">{!! Str::words($item->isi, 30, '...') !!}</p>
          <div class="d-flex justify-content-between align-items-center">
            <a href="{{ route('detail', $item->id) }}" class="btn btn-md btn-outline-secondary">Lebih Lengkap</a>
            <span class="fw-bold">{{ $item->kategori->nama_kategori }}</span></small>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection