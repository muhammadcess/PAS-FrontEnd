@extends('layouts.app')

@section('content')
    <div class="container p-4">
        <div class="row g-5">
            <div class="col-md-12">
                <article class="blog-post">
                    <h4 class="display-5 link-body-emphasis mb-1" style="font-style:normal;">{{ $berita->judul }}</h4>
                    <p class="blog-post-meta">{{ $berita->created_at }} by <a href="#">PorBe</a></p>
                    <img src="{{ asset('img/gambar/' . $berita->gambar) }}" class="mb-3 bd-placeholder-img card-img-top" style="border-radius: 2px;" alt="">
                    {!! $berita->isi !!}
                </article>

                <nav class="blog-pagination" aria-label="Pagination" style="border-radius: 0%;">
                    <a class="btn btn-outline-primary rounded-pill" href="/">Kembali</a>
                    <!-- <a class="btn btn-outline-secondary rounded-pill disabled" aria-disabled="true">Newer</a> -->
                </nav>

            </div>
        </div>
    </div>
@endsection
