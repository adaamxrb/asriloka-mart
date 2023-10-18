@extends('layouts.app')

@section('title')
  Asriloka Mart
@endsection

@section('content')
<div class="page-content page-home">
  <section class="store-carousel">
    <div class="container">
      <div class="row">
        <div class="col-lg-12" data-aos="zoom-in">
          <div id="storeCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#storeCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#storeCarousel" data-slide-to="1"></li>
              <li data-target="#storeCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="/images/banner.jpg" class="d-block w-100" alt="Carousel Image" />
              </div>
              <div class="carousel-item">
                <img src="/images/banner2.jpg" class="d-block w-100" alt="Carousel Image" />
              </div>
              <div class="carousel-item">
                <img src="/images/banner3.jpg" class="d-block w-100" alt="Carousel Image" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="store-trend-categories">
    <div class="container">
      <div class="row">
        <div class="col-12" data-aos="fade-up">
          <h5>Kategori Populer</h5>
        </div>
      </div>
      <div class="row">
        <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="100">
          <a class="component-categories d-block" href="#">
            <div class="categories-image">
              <img src="/images/categories1.svg" alt="Gadgets Categories" class="w-100" />
            </div>
            <p class="categories-text">Buah</p>
          </a>
        </div>
        <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="200">
          <a class="component-categories d-block" href="#">
            <div class="categories-image">
              <img src="/images/categories2.svg" alt="Furniture Categories" class="w-100" />
            </div>
            <p class="categories-text">Bibit</p>
          </a>
        </div>
        <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="300">
          <a class="component-categories d-block" href="#">
            <div class="categories-image">
              <img src="/images/categories3.svg" alt="Makeup Categories" class="w-100" />
            </div>
            <p class="categories-text">Madu</p>
          </a>
        </div>
        <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="400">
          <a class="component-categories d-block" href="#">
            <div class="categories-image">
              <img src="/images/categories4.svg" alt="Sneaker Categories" class="w-100" />
            </div>
            <p class="categories-text">Camilan</p>
          </a>
        </div>
        <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="500">
          <a class="component-categories d-block" href="#">
            <div class="categories-image">
              <img src="/images/categories5.svg" alt="Tools Categories" class="w-100" />
            </div>
            <p class="categories-text">Minuman</p>
          </a>
        </div>
        <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="600">
          <a class="component-categories d-block" href="#">
            <div class="categories-image">
              <img src="/images/categories6.svg" alt="Baby Categories" class="w-100" />
            </div>
            <p class="categories-text">Lainnya</p>
          </a>
        </div>
      </div>
    </div>
  </section>
  <section class="store-new-products">
    <div class="container">
      <div class="row">
        <div class="col-12" data-aos="fade-up">
          <h5>Produk Baru</h5>
        </div>
      </div>
      <div class="row">
        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
          <a class="component-products d-block" href="/details.html">
            <div class="products-thumbnail">
              <div class="products-image" style="background-image: url('/images/pic.png')"></div>
            </div>
            <div class="products-text">Durian Asriloka (? kg)</div>
            <div class="products-price">Rp. 80.000</div>
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">
          <a class="component-products d-block" href="/details.html">
            <div class="products-thumbnail">
              <div class="products-image" style="background-image: url('/images/pic\ \(1\).png')"></div>
            </div>
            <div class="products-text">Rubath | Kopi Bubuk Arabika</div>
            <div class="products-price">Rp.xx.xxx</div>
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="300">
          <a class="component-products d-block" href="/details.html">
            <div class="products-thumbnail">
              <div class="products-image" style="background-image: url('/images/pic\ \(2\).png')"></div>
            </div>
            <div class="products-text">Tea Red Ginger</div>
            <div class="products-price">Rp. xx.xxx</div>
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="400">
          <a class="component-products d-block" href="/details.html">
            <div class="products-thumbnail">
              <div class="products-image" style="background-image: url('/images/pic\ \(3\).png')"></div>
            </div>
            <div class="products-text">Tea Red Ginger</div>
            <div class="products-price">Rp. xx.xxx</div>
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="500">
          <a class="component-products d-block" href="/details.html">
            <div class="products-thumbnail">
              <div class="products-image" style="background-image: url('/images/pic\ \(4\).png')"></div>
            </div>
            <div class="products-text">Qriuk | Keripik Pisang</div>
            <div class="products-price">Rp. xx.xxx</div>
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="600">
          <a class="component-products d-block" href="/details.html">
            <div class="products-thumbnail">
              <div class="products-image" style="background-image: url('/images/pic\ \(5\).png')"></div>
            </div>
            <div class="products-text">Anugrah | Kopi Bubuk Robusta</div>
            <div class="products-price">Rp. xx.xxx</div>
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="700">
          <a class="component-products d-block" href="/details.html">
            <div class="products-thumbnail">
              <div class="products-image" style="background-image: url('/images/pic\ \(6\).png')"></div>
            </div>
            <div class="products-text">Samsi Madu 650ml</div>
            <div class="products-price">Rp. xx.xxx</div>
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800">
          <a class="component-products d-block" href="/details.html">
            <div class="products-thumbnail">
              <div class="products-image" style="background-image: url('/images/pic\ \(7\).png')"></div>
            </div>
            <div class="products-text">Samsi Madu 150ml</div>
            <div class="products-price">Rp. xx.xxx</div>
          </a>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection