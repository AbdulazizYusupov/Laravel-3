@extends('main')

@section('title', 'Product')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Show</h1>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-6 mt-2">
                    <a href="/product" class="btn btn-primary">Product</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <table class="table table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Category_name</th>
                            <th>Price</th>
                            <th>Count</th>
                        </tr>
                        <tr>
                            <th>{{$models->id}}</th>
                            <td>{{$models->name}}</td>
                            <td>
                                @foreach ($datas as $data)
                                    @if ($data->id == $models->category_id)
                                        {{$data->name}}
                                    @endif
                                @endforeach
                            </td>
                            <td>{{$models->price}}</td>
                            <td>{{$models->count}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection