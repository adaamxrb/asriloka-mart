@extends('layouts.dashboard')

@section('title')
  Asriloka Mart - Dashboard Transaksi Detail
@endsection

@section('content')
<div
            class="section-content section-dashboard-home"
            data-aos="fade-up"
          >
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">#STORE0839</h2>
                <p class="dashboard-subtitle">Detail Transaksi</p>
              </div>
              <div class="dashboard-content" id="transactionDetails">
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-12 col-md-4">
                            <img
                              src="/images/trans-detail.png"
                              alt=""
                              class="w-100 mb-3"
                            />
                          </div>
                          <div class="col-12 col-md-8">
                            <div class="row">
                              <div class="col-12 col-md-6">
                                <div class="product-title">Nama Pembeli</div>
                                <div class="product-subtitle">Tupai</div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">
                                  Anugrah | Kopi Bubuk Robusta
                                </div>
                                <div class="product-subtitle">Anugrah</div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">
                                  Tanggal Transaksi
                                </div>
                                <div class="product-subtitle">
                                  15 Maret, 2023
                                </div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">Status Pembayaran</div>
                                <div class="product-subtitle text-danger">
                                  BELUM DIKIRIM
                                </div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">Total</div>
                                <div class="product-subtitle">Rp. 200.409</div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">Nomor WA</div>
                                <div class="product-subtitle">
                                  +628 2020 11111
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12 mt-4">
                            <h5>Informasi Pengiriman</h5>
                            <div class="row">
                              <div class="col-12 col-md-6">
                                <div class="product-title">Alamat 1</div>
                                <div class="product-subtitle">
                                  Setra Duta Cemara
                                </div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">Alamat 2</div>
                                <div class="product-subtitle">
                                  Blok B2 No. 34
                                </div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">Provinsi</div>
                                <div class="product-subtitle">Jawa Timur</div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">Kota</div>
                                <div class="product-subtitle">Surabaya</div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">Kode Pos</div>
                                <div class="product-subtitle">123999</div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">Negara</div>
                                <div class="product-subtitle">Indonesia</div>
                              </div>
                              <div class="col-12">
                                <div class="row">
                                  <div class="col-md-3">
                                    <div class="product-title">Status Pengiriman</div>
                                    <select
                                      name="status"
                                      id="status"
                                      class="form-control"
                                      v-model="status"
                                    >
                                      <option value="TERTUNDA">Belum Dikirim</option>
                                      <option value="DIKIRIM">Dikirim</option>
                                      <option value="SUKSES">Sukses</option>
                                    </select>
                                  </div>
                                  <template v-if="status == 'DIKIRIM'">
                                    <div class="col-md-3">
                                      <div class="product-title">
                                        Masukkan Resi
                                      </div>
                                      <input
                                        class="form-control"
                                        type="text"
                                        name="resi"
                                        id="openStoreTrue"
                                        v-model="resi"
                                      />
                                    </div>
                                    <div class="col-md-2">
                                      <button
                                        type="submit"
                                        class="btn btn-success btn-block mt-4"
                                      >
                                        Perbarui Resi
                                      </button>
                                    </div>
                                  </template>
                                </div>
                              </div>
                            </div>
                            <div class="row mt-4">
                              <div class="col-12 text-right">
                                <button type="submit" class="btn btn-success btn-lg mt-4">
                                  Simpan
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection

@push('addon-script')
<script src="/vendor/vue/vue.js"></script>
<script>
  var transactionDetails = new Vue({
    el: "#transactionDetails",
    data: {
      status: "DIKIRIM",
      resi: "BDO12308012132",
    },
  });
</script>
@endpush