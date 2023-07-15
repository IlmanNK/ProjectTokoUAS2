@extends('template/admin/index')

@section('content')
<div style="margin-top: 10px">
<a href="{{ route('produk.create') }}" class="btn btn-primary mb-3">Tambah Produk</a>
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Kode</th>
        <th scope="col">Nama Produk</th>
        <th scope="col">Harga</th>
        <th scope="col">Stok</th>
        <th scope="col">Min Stok</th>
        <th scope="col">Deskripsi</th>
        {{-- <th scope="col">Kategori</th> --}}
        <th scope="col">Action</th>

      </tr>
    </thead>
    <tbody>
        @php $number = 1;  @endphp
        @foreach($produk as $product)
        <tr>
            <td>{{ $number }}</td>
            <td>{{ $product->kode }}</td>
            <td>{{ $product->nama_produk }}</td>
            <td>{{ $product->harga_produk }}</td>
            <td>{{ $product->stok_produk }}</td>
            <td>{{ $product->min_stok }}</td>
            <td>{{ $product->deskripsi_produk }}</td>
            {{-- <td>{{ $product->kategori_produk_id }}</td> --}}
            <td>
            <a href="{{ route('produk.edit', $product) }}" class="btn btn-primary">Edit</a>
              <form action="{{ route('produk.destroy', $product) }}" method="POST" style="display: inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-danger">Delete</button>
              </form>
            </td>
        </tr>
        @php  $number++ @endphp
        @endforeach
        
    </tbody>
</table>
@endsection