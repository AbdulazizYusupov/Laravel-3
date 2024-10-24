@extends('main')

@section('title', 'Product')

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
                    <a href="/product" class="btn btn-primary">Product</a>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <form action="/product" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Name"><br>
                                <input type="number" name="price" class="form-control" placeholder="Price"><br>
                                <input type="number" name="count" class="form-control" placeholder="Count"><br>
                                <select class="form-select form-select-sm" aria-label="Default select example" name="category_id">
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