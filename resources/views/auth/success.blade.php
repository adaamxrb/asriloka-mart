@extends('layouts.success')

@section('title')
  Asriloka Mart - Sukses
@endsection

@section('content')

    <!-- Page Content -->
    <div class="page-content page-success">
        <div class="section-success" data-aos="zoom-in">
          <div class="container">
            <div class="row align-items-center row-login justify-content-center">
              <div class="col-lg-6 text-center">
                <img src="/images/success.svg" alt="" class="mb-4" />
                <h2>Selamat Datang di asrilokamart</h2>
                <p>
                  Kamu sudah berhasil terdaftar <br />
                  bersama kami. Mari beli produk-produk asrilokamart!
                </p>
                <div>
                  <a class="btn btn-success w-50 mt-4" href="/dashboard.html">
                    Dashboard ku
                  </a>
                  <a class="btn btn-signup w-50 mt-2" href="/index.html">
                    Mulai ke asrilokamart
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection