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
                <h2 class="dashboard-title">Produk ku</h2>
                <p class="dashboard-subtitle">
                  Kelola dengan baik dan dapatkan penghasilan
                </p>
              </div>
              <div class="dashboard-content">
                <div class="row">
                  <div class="col-12">
                    <a
                      href="/dashboard-products-create.html"
                      class="btn btn-success"
                      >Tambah produk baru</a
                    >
                  </div>
                </div>
                <div class="row mt-4">
                  <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a
                      class="card card-dashboard-product d-block"
                      href="/dashboard-products-details.html"
                    >
                      <div class="card-body">
                        <img src="/images/myp1.png" alt="" class="w-100 mb-2" />
                        <div class="product-title">
                          Rubath | Kopi Bubuk Arabika
                        </div>
                        <div class="product-category">Minuman</div>
                      </div>
                    </a>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a
                      class="card card-dashboard-product d-block"
                      href="/dashboard-products-details.html"
                    >
                      <div class="card-body">
                        <img src="/images/myp2.png" alt="" class="w-100 mb-2" />
                        <div class="product-title">
                          Anugrah | Kopi Bubuk Robusta
                        </div>
                        <div class="product-category">Minuman</div>
                      </div>
                    </a>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a
                      class="card card-dashboard-product d-block"
                      href="/dashboard-products-details.html"
                    >
                      <div class="card-body">
                        <img src="/images/myp3.png" alt="" class="w-100 mb-2" />
                        <div class="product-title">Tea Red Ginger</div>
                        <div class="product-category">Minuman</div>
                      </div>
                    </a>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a
                      class="card card-dashboard-product d-block"
                      href="/dashboard-products-details.html"
                    >
                      <div class="card-body">
                        <img src="/images/myp4.png" alt="" class="w-100 mb-2" />
                        <div class="product-title">Samsi Madu 150ml</div>
                        <div class="product-category">Madu</div>
                      </div>
                    </a>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a
                      class="card card-dashboard-product d-block"
                      href="/dashboard-products-details.html"
                    >
                      <div class="card-body">
                        <img src="/images/myp5.png" alt="" class="w-100 mb-2" />
                        <div class="product-title">Qriuk | Keripik Pisang</div>
                        <div class="product-category">Camilan</div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection