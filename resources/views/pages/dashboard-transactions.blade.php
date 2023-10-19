@extends('layouts.dashboard')

@section('title')
  Asriloka Mart - Dashboard Transaksi
@endsection

@section('content')
<div
            class="section-content section-dashboard-home"
            data-aos="fade-up"
          >
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">Transaksi</h2>
                <p class="dashboard-subtitle">
                  Hasil yang besar dimulai dari hal yang kecil
                </p>
              </div>
              <div class="dashboard-content">
                <ul class="nav nav-pills" id="myTab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <a
                      class="nav-link active"
                      id="sell-tab"
                      data-toggle="tab"
                      href="#sell"
                      role="tab"
                      aria-controls="sell"
                      aria-selected="true"
                      >Produk Terjual</a
                    >
                  </li>
                  <li class="nav-item" role="presentation">
                    <a
                      class="nav-link"
                      id="buy-tab"
                      data-toggle="tab"
                      href="#buy"
                      role="tab"
                      aria-controls="buy"
                      aria-selected="false"
                      >Produk Dibeli</a
                    >
                  </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                  <div
                    class="tab-pane fade show active"
                    id="sell"
                    role="tabpanel"
                    aria-labelledby="sell-tab"
                  >
                    <div class="row mt-3">
                      <div class="col-12 mt-2">
                        <a
                          class="card card-list d-block"
                          href="/dashboard-transactions-details.html"
                        >
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-1">
                                <img
                                  src="/images/produk-transaksi1.png"
                                  alt=""
                                />
                              </div>
                              <div class="col-md-4">
                                Anugrah | Kopi Bubu Robusta
                              </div>
                              <div class="col-md-3">Budi</div>
                              <div class="col-md-3">12 Januari, 2020</div>
                              <div class="col-md-1 d-none d-md-block">
                                <img
                                  src="/images/dashboard-arrow-right.svg"
                                  alt=""
                                />
                              </div>
                            </div>
                          </div>
                        </a>
                        <a
                          class="card card-list d-block"
                          href="/dashboard-transactions-details.html"
                        >
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-1">
                                <img
                                  src="/images/produk-transaksi2.png"
                                  alt=""
                                />
                              </div>
                              <div class="col-md-4">
                                Rubath | Kopi Bubuk Arabika
                              </div>
                              <div class="col-md-3">Masayoshi</div>
                              <div class="col-md-3">11 January, 2020</div>
                              <div class="col-md-1 d-none d-md-block">
                                <img
                                  src="/images/dashboard-arrow-right.svg"
                                  alt=""
                                />
                              </div>
                            </div>
                          </div>
                        </a>
                        <a
                          class="card card-list d-block"
                          href="/dashboard-transactions-details.html"
                        >
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-1">
                                <img
                                  src="/images/produk-transaksi3.png"
                                  alt=""
                                />
                              </div>
                              <div class="col-md-4">Samsi Madu 150ml</div>
                              <div class="col-md-3">Shayna</div>
                              <div class="col-md-3">11 January, 2020</div>
                              <div class="col-md-1 d-none d-md-block">
                                <img
                                  src="/images/dashboard-arrow-right.svg"
                                  alt=""
                                />
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div
                    class="tab-pane fade"
                    id="buy"
                    role="tabpanel"
                    aria-labelledby="buy-tab"
                  >
                    <div class="row mt-3">
                      <div class="col-12 mt-2">
                        <a
                          class="card card-list d-block"
                          href="/dashboard-transactions-details.html"
                        >
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-1">
                                <img
                                  src="/images/produk-transaksi3.png"
                                  alt=""
                                />
                              </div>
                              <div class="col-md-4">Samsi Madu 150ml</div>
                              <div class="col-md-3">Angga Risky</div>
                              <div class="col-md-3">12 Januari, 2020</div>
                              <div class="col-md-1 d-none d-md-block">
                                <img
                                  src="/images/dashboard-arrow-right.svg"
                                  alt=""
                                />
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection