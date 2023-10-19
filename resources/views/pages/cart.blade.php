@extends('layouts.app')

@section('title')
  Asriloka Mart - Keranjang
@endsection

@section('content')
<div class="page-content page-cart">
    <section
      class="store-breadcrumbs"
      data-aos="fade-down"
      data-aos-delay="100"
    >
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                  Keranjang
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section>
    <section class="store-cart">
      <div class="container">
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-12 table-responsive">
            <table
              class="table table-borderless table-cart"
              aria-describedby="Cart"
            >
              <thead>
                <tr>
                  <th scope="col">Gambar</th>
                  <th scope="col">Nama &amp; Penjual</th>
                  <th scope="col">Harga</th>
                  <th scope="col">Menu</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 25%">
                    <img src="/images/pic.png" alt="" class="cart-image" />
                  </td>
                  <td style="width: 35%">
                    <div class="product-title">Durian Asriloka</div>
                    <div class="product-subtitle">by Galih Pratama</div>
                  </td>
                  <td style="width: 35%">
                    <div class="product-title">Rp. 80.000</div>
                    <div class="product-subtitle"></div>
                  </td>
                  <td style="width: 20%">
                    <a href="#" class="btn btn-remove-cart"> Hapus </a>
                  </td>
                </tr>
                <tr>
                  <td style="width: 25%">
                    <img
                      src="/images/pic (1).png"
                      alt=""
                      class="cart-image"
                    />
                  </td>
                  <td style="width: 25%">
                    <div class="product-title">
                      Anugrah | Kopi Bubuk Robusta
                    </div>
                    <div class="product-subtitle">by Anugrah</div>
                  </td>
                  <td style="width: 25%">
                    <div class="product-title">Rp. xx.xxx</div>
                    <div class="product-subtitle"></div>
                  </td>
                  <td style="width: 25%">
                    <a href="#" class="btn btn-remove-cart"> Hapus </a>
                  </td>
                </tr>
                <tr>
                  <td style="width: 25%">
                    <img
                      src="/images/pic (2).png"
                      alt=""
                      class="cart-image"
                    />
                  </td>
                  <td style="width: 25%">
                    <div class="product-title">Tea Red Ginger</div>
                    <div class="product-subtitle">by Addictex</div>
                  </td>
                  <td style="width: 25%">
                    <div class="product-title">Rp. xx.xxx</div>
                    <div class="product-subtitle"></div>
                  </td>
                  <td style="width: 25%">
                    <a href="#" class="btn btn-remove-cart"> Hapus </a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="150">
          <div class="col-12">
            <hr />
          </div>
          <div class="col-12">
            <h2 class="mb-4">Detail Pengiriman</h2>
          </div>
        </div>
        <div class="row mb-2" data-aos="fade-up" data-aos-delay="200">
          <div class="col-md-6">
            <div class="form-group">
              <label for="addressOne">Alamat 1</label>
              <input
                type="text"
                class="form-control"
                id="addressOne"
                aria-describedby="emailHelp"
                name="addressOne"
                value="Setra Duta Cemara"
              />
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="addressTwo">Alamat 2</label>
              <input
                type="text"
                class="form-control"
                id="addressTwo"
                aria-describedby="emailHelp"
                name="addressTwo"
                value="Blok B2 No. 34"
              />
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="province">Provinsi</label>
              <select name="province" id="province" class="form-control">
                <option value="Jawa Timur">Jawa Timur</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="city">Kota</label>
              <select name="city" id="city" class="form-control">
                <option value="Surabaya">Surabaya</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="postalCode">Kode Pos</label>
              <input
                type="text"
                class="form-control"
                id="postalCode"
                name="postalCode"
                value="40512"
              />
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="country">Negara</label>
              <input
                type="text"
                class="form-control"
                id="country"
                name="country"
                value="Indonesia"
              />
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="mobile">Nomor WA</label>
              <input
                type="text"
                class="form-control"
                id="mobile"
                name="mobile"
                value="+628 2020 11111"
              />
            </div>
          </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="150">
          <div class="col-12">
            <hr />
          </div>
          <div class="col-12">
            <h2>Informasi Pembayaran</h2>
          </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="200">
          <div class="col-4 col-md-2">
            <div class="product-title">Rp. 1.750</div>
            <div class="product-subtitle">PPN</div>
          </div>
          <div class="col-4 col-md-3">
            <div class="product-title">Rp. 8.000</div>
            <div class="product-subtitle">Asuransi Produk</div>
          </div>
          <div class="col-4 col-md-2">
            <div class="product-title">Rp. 27.000</div>
            <div class="product-subtitle">Pengiriman</div>
          </div>
          <div class="col-4 col-md-2">
            <div class="product-title text-success">Rp. 50.000</div>
            <div class="product-subtitle">Total</div>
          </div>
          <div class="col-8 col-md-3">
            <a
              href="/success.html"
              class="btn btn-success mt-4 px-4 btn-block"
            >
              Bayar Sekarang
            </a>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection