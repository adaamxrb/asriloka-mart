@extends('layouts.dashboard')

@section('title')
  Asriloka Mart - Dashboard Produk
@endsection

@section('content')
<div
            class="section-content section-dashboard-home"
            data-aos="fade-up"
          >
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">Produk Saya</h2>
                <p class="dashboard-subtitle">
                  Kelola dengan baik dan dapatkan penghasilan
                </p>
              </div>
              <div class="dashboard-content">
                <div class="row">
                  <div class="col-12">
                    <a
                      href="{{ route('dashboard-products-create') }}"
                      class="btn btn-success"
                      >Tambah produk baru</a
                    >
                  </div>
                </div>
                <div class="row mt-4">
                  @foreach ($products as $product)
                  <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a
                      class="card card-dashboard-product d-block"
                      href="{{ route('dashboard-products-details', $product->id) }}"
                    >
                      <div class="card-body">
                        <img src="{{ Storage::url($product->galleries->first()->photos ?? '') }}" alt="" class="w-100 mb-2" />
                        <div class="product-title">
                          {{ $product->name }}
                        </div>
                        <div class="product-category">
                          {{ $product->category->name }}</div>
                      </div>
                    </a>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
@endsection