@extends('layouts.frontend')

@section('content')

<!-- Header-->
<header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Sewa Motor No 1</h1>
                <p class="lead fw-normal text-white-50 mb-0">
                    Membantu Aktivitas Berkendara Anda
                </p>
            </div>
        </div>
    </header>
    
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <h3 class="text-center mb-5">Daftar Motor</h3>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach($motor as $motor)
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge badge-custom {{ $motor->status == 'tersedia' ? 'bg-success' : 'bg-warning' }} text-white position-absolute" style="top: 0; right: 0">
                            {{ $motor->status }}
                        </div>

                        <!-- Product image-->
                        <img class="card-img-top" src="{{ Storage::url($motor->gambar) }}" alt="{{ $motor->nama_motor }}" />

                        <!-- Product details-->
                        <div class="card-body card-body-custom pt-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">{{ $motor->nama_motor }}</h5>
                                <!-- Product price-->
                                <div class="rent-price mb-3">
                                    <span class="text-primary">Rp.{{ number_format ($motor->harga_sewa) }}/</span>3 day
                                </div>
                                <ul class="list-unstyled list-style-group">
                                    <li class="border-bottom p-2 d-flex justify-content-between">
                                        <span>Bahan bakar</span>
                                        <span style="font-weight: 600">{{ $motor->bahan_bakar }}</span>
                                    </li>
                                    <li class="border-bottom p-2 d-flex justify-content-between">
                                        <span>Jumlah Kursi</span>
                                        <span style="font-weight: 600">{{ $motor->jumlah_kursi }}</span>
                                    </li>
                                    <li class="border-bottom p-2 d-flex justify-content-between">
                                        <span>Transmisi</span>
                                        <span style="font-weight: 600">{{ $motor->transmisi }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer border-top-0 bg-transparent">
                            <div class="text-center">
                                <a class="btn btn-primary mt-auto" href="https://wa.me/628992134053" target="_blank">Sewa</a>
                                <a class="btn btn-info mt-auto text-white" href="{{ route('detail', $motor->slug) }}">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>

@endsection