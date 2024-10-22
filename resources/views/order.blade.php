@extends('main')

@section('title', 'Order')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Order</h1>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col">
                    <table class="table table-dark table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Product_name</th>
                            <th>Quantity</th>
                            <th>Summ</th>
                        </tr>
                        @foreach ($models as $model)
                            <tr>
                                <th>{{$model->id}}</th>
                                <td>
                                    @foreach ($datas as $data)
                                        @if ($data->id == $model->product_id)
                                            {{$data->name}}
                                        @endif
                                    @endforeach
                                </td>
                                <td>{{$model->quantity}}</td>
                                <td>
                                    @foreach ($datas as $data)
                                        @if ($data->id == $model->id)
                                            {{($model->quantity * $data->price)}}
                                        @endif
                                    @endforeach
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection