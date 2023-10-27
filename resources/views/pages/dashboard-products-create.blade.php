@extends('layouts.dashboard')

@section('title')
  Asriloka Mart - Dashboard Produk Detail
@endsection

@section('content')
<div
            class="section-content section-dashboard-home"
            data-aos="fade-up"
          >
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">Tambah Produk Baru</h2>
                <p class="dashboard-subtitle">Buat Produk Anda Sendiri</p>
              </div>
              <div class="dashboard-content">
                <div class="row">
                  <div class="col-12">
                    @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif  
                    <form action="{{ route('dashboard-products-store') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <input type="hidden" name="users_id" value="{{ Auth::user()->id }}">
                      <div class="card">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="name">Nama Produk</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="name"
                                  aria-describedby="name"
                                  name="name"
                                  value=""
                                />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="price">Harga</label>
                                <input
                                  type="number"
                                  class="form-control"
                                  id="price"
                                  aria-describedby="price"
                                  name="price"
                                  value=""
                                />
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="">Kategori</label>
                                <select name="categories_id" class="form-control">
                                  @foreach ($categories as $categories)
                                    <option value="{{ $categories->id }}">{{ $categories->name }}</option>
                                  @endforeach
                                </select>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="description">Deskripsi</label>
                                <textarea
                                  name="description"
                                  id="editor"
                                  cols="30"
                                  rows="4"
                                  class="form-control"
                                ></textarea
                                >
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label>Thumbnails</label>
                                <input type="file" name="photo" class="form-control" />
                                <p class="text-muted">
                                  Kamu dapat memilih lebih dari satu file
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="row mt-2">
                            <div class="col text-right">
                              <button
                                type="submit"
                                class="btn btn-success px-5"
                              >
                                Simpan
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection

@push('addon-script')
<script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
<script>
  ClassicEditor
          .create( document.querySelector( '#editor' ) )
          .then( editor => {
                  console.log( editor );
          } )
          .catch( error => {
                  console.error( error );
          } );
</script>
@endpush