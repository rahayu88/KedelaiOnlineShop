@extends('front_setelah_login.master')
@section('title', 'Toko')
@section('content')
<main role="main">
            <div class="container">
                 <h1 class="display-5">Keranjang Belanja</h1>
                </div>

<table class="table table-striped">
  <thead>
    <tr>
      <th>No</th>
      <th>Gambar Produk</th>
      <th>Nama Produk</th>
      <th>Harga</th>
      <th>Jumlah</th>
    </tr>
  </thead>
  <tbody>
@foreach($cart as $key=>$c)
    <tr>
      <th scope="row">{{++$key}}</th>
      <td><img src=" " /></td>
      <td>{{$c->product->nama_produk}}</td>
      <td>{{$c->product->harga_produk}}</td>
      <td><input type="number" name="qty" value="{{$c->qty}}"></td>
    </tr>

@endforeach
    <tr class="table-danger">
      <td colspan="4">Total Belanja</td>
      <td>Rp. 1.000.000,-</td>
    </tr>
  </tbody>
</table>
<p align="right">
<button class="btn btn-success">Checkout</button>
</p>
@endsection
</main>