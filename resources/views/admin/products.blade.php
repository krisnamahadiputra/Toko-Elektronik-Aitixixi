@extends('layouts.dashboard')
@section('content')

<div class="container-fluid">
    <!-- table produk -->
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><strong>Produk</strong></h4>
                    <div class="card-tools">
                        {{-- <a href="/produk" class="btn btn-sm btn-danger">
              More
            </a> --}}
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="table-responsive col-lg-auto">
                        <a href="/admin/products/create" class="btn btn-primary my-3"> Create new product</a>
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $product->product_name }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->stock }}</td>
                                    <td>{{ $product->categories->pluck('category_name')->implode(',') }}</td>
                                    <td>
                                        <a href="/admin/products/{{ $product->id }}"
                                            class="badge bg-info nav-link">Detail</a>
                                        <a href="/admin/products/{{ $product->id }}/edit"
                                            class="badge bg-warning nav-link">Edit</a>
                                        <a href="/admin/images/{{ $product->id }}"
                                            class="badge bg-success nav-link">Image</a>
                                            <form action="/admin/products/{{ $product->id }}" method="post" class="d-inline">
                                              @method('delete')
                                              @csrf
                                              <button class="badge bg-danger nav-link border-0" onclick="return confirm('aru you sure')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
