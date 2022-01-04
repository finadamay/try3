@extends('templates.master')

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Produk</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>ID</th>
                <th>Produk</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              
              @foreach ($getProduk as $item)
                
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->product }}</td>
                    <td>{{ $item->harga }}</td>
                    <td>{{ $item->jumlah }}</td>
                    <td>
                        <a class="btn btn-danger" href="{{route('productDelete', $item->id)}}"> Delete </a>
                    </td>
                </tr>
               
              @endforeach
  
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
    
@endsection