@extends('main')

@section('title', 'Order')

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
                    <a href="/order" class="btn btn-primary">Order</a>
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
                            <th>Product_name</th>
                            <th>Quantity</th>
                            <th>Summ</th>
                        </tr>
                        <tr>
                            <th>{{$models->id}}</th>
                            <td>
                                @foreach ($datas as $data)
                                    @if ($data->id == $models->product_id)
                                        {{$data->name}}
                                    @endif
                                @endforeach
                            </td>
                            <td>{{$models->quantity}}</td>
                            <td>{{$models->summ}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection