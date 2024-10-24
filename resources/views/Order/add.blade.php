@extends('main')

@section('title', 'Order')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Create</h1>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-6 mt-2">
                    <a href="/order" class="btn btn-primary">Order</a>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <form action="/order" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <input type="number" name="quantity" class="form-control" placeholder="Quantity"><br>
                                <input type="number" name="summ" class="form-control" placeholder="Summ"><br>
                                <select class="form-select form-select-sm" aria-label="Default select example" name="product_id">
                                    @foreach ($models as $model)
                                        <option value="{{$model->id}}">{{$model->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection