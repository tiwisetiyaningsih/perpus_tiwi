@extends('admin-lte/app')
@section('title', 'Dashboard')
@section('active-dashboard', 'active')


@section('content')
    <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info" style="background: linear-gradient(to bottom right, #c0d8f5, #167fe7);">
              <div class="inner">
                <h3>{{$count_buku}}</h3>

                <p>Buku</p>
              </div>
              <div class="icon">
                <i class="fas fa-book"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success" style="background: linear-gradient(to bottom right, #98e4d0, #0c7a06);">
              <div class="inner">
                <h3>{{$count_user}}</h3>

                <p>Peminjam</p>
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning" style="background: linear-gradient(to bottom right, #f9ed90, #ffc928);">
              <div class="inner">
                <h3>{{$count_kategori}}</h3>

                <p>Kategori Buku</p>
              </div>
              <div class="icon">
                 <i class="far fas fa-bookmark"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger" style="background: linear-gradient(to bottom right, #f56767, #af0d0d);">
              <div class="inner">
                <h3>{{$count_rak}}</h3>

                <p>Rak</p>
              </div>
              <div class="icon">
                <i class="fas fa-list"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <h5>Buku Terbaru</h5>
                 <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Judul</th>
                      <th>Tanggal</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($buku as $item)
                        <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->judul}}</td>
                        <td>{{$item->created_at->diffForHumans()}}</td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <h5>User Terbaru</h5>
                 <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Nama</th>
                      <th>Tanggal</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($user as $item)
                        <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->created_at->diffForHumans()}}</td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
@endsection