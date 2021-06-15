@extends('templates.backDashboard')

@section('title')
Create Product
@endsection

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Create Product</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item">Panel</li>
          <li class="breadcrumb-item active"><a href="{{route('back.product')}}">Product</a></li>
          <li class="breadcrumb-item active">Create</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">

        @if ($message = Session::get('success'))
        <div class="alert alert-success">
          {{ $message }}
        </div>
        @endif
        @if ($message = Session::get('danger'))
        <div class="alert alert-danger">
          {{ $message }}
        </div>
        @endif

        @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
          {{ $error }}
        </div>
        @endforeach

        <div class="card card-secondary">
          <div class="card-header">
            <h3 class="card-title">Form Produk</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" method="post" action="{{route('back.product.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label>Pilih Kategori *</label>
                <select name="category" class="form-control" required>
                  @foreach($categories as $category)
                  <option value="{{$category->id}}">{{$category->category_name}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="title">Kode Product *</label>
                <input type="text" class="form-control" name="code" placeholder="kode product" required>
              </div>
              <div class="form-group">
                <label for="title">Judul Product *</label>
                <input type="text" class="form-control" name="title" placeholder="judul product" required>
              </div>
              <div class="form-group">
                <label for="description">Description Product</label>
                <textarea class="form-control" rows="3" name="description" placeholder="description product"></textarea>
              </div>
              <div class="form-group">
                <label for="description">Harga Product *</label>
                <input type="number" class="form-control" name="price" placeholder="harga product" required>
              </div>
              <div class="form-group">
                <label>Status Tukar</label>
                <select class="form-control" name='trade_status'>
                  <option value='1'>Active</option>
                  <option value='0'>Inactive</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Thumbnail Banner *</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image" id="image" required>
                    <label class="custom-file-label" for="image">Choose file</label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Foto Banner 2</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image2" id="image">
                    <label class="custom-file-label" for="image">Choose file</label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Foto Banner 3</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image3" id="image">
                    <label class="custom-file-label" for="image">Choose file</label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Foto Banner 4</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image4" id="image">
                    <label class="custom-file-label" for="image">Choose file</label>
                  </div>
                </div>
              </div>

              <p style="font-size:12px; color:blue;">
                  ukurang maksimal 2mb
                  <br />
                  dengan format jpg/png
                  <br />
                  dengan ukuran 440px X 440px
                </p>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary float-right">Create</button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</section>
@endsection