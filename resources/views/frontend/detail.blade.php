@extends('layouts.frontend')

@section('content')

<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Detail Mobil</h1>
        </div>
    </div>
</header>

<!-- Section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="{{ Storage::url($motor->gambar) }}" alt="{{ $motor->nama_motor }}" />
                    <!-- Product details-->
                    <div class="card-body card-body-custom pt-4">
                        <div>
                            <!-- Product name-->
                            <h3 class="fw-bolder text-primary">Deskripsi</h3>
                            <p>
                                {{ $motor->deskripsi }}
                            </p>
                            <div class="mobil-info-list border-top pt-4">
                                <ul class="list-unstyled">
                                    <li>
                                        @if($motor->charger)
                                        <i class="ri-checkbox-circle-line"></i>
                                        <span>CHARGER</span>
                                        @else
                                        <i class="ri-close-circle-line text-secondary"></i>
                                        <span>CHARGER</span>
                                        @endif
                                    </li>

                                    <li>
                                        @if($motor->hybrid)
                                        <i class="ri-checkbox-circle-line"></i>
                                        <span>HYBRID</span>
                                        @else
                                        <i class="ri-close-circle-line text-secondary"></i>
                                        <span>HYBRID</span>
                                        @endif
                                    </li>

                                    <li>
                                        @if($motor->tumbler_space)
                                        <i class="ri-checkbox-circle-line"></i>
                                        <span>TUMBLER SPACE</span>
                                        @else
                                        <i class="ri-close-circle-line text-secondary"></i>
                                        <span>TUMBLER SPACE</span>
                                        @endif
                                    </li>

                                    <li>
                                        @if($motor->GPS)
                                        <i class="ri-checkbox-circle-line"></i>
                                        <span>GPS</span>
                                        @else
                                        <i class="ri-close-circle-line text-secondary"></i>
                                        <span>GPS</span>
                                        @endif
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 mb-5">
                <div class="card">
                    <!-- Product details-->
                    <div class="card-body card-body-custom pt-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="fw-bolder">{{ $motor->nama_motor }}</h5>
                                <div class="rent-price mb-3">
                                    <span style="font-size: 1rem" class="text-primary">Rp.{{ number_format ($motor->harga_sewa) }}/</span>day
                                </div>
                            </div>
                            <ul class="list-unstyled list-style-group">
                                <li class="border-bottom p-2 d-flex justify-content-between">
                                    <span>Bahan Bakar</span>
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
                            <a class="btn d-flex align-items-center justify-content-center btn-primary mt-auto" href="https://wa.me/628992134053" style="column-gap: 0.4rem" target="_blank">Sewa Motor <i class="ri-whatsapp-line"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection