@extends('main')

@section('title', 'Category')

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
                    <a href="/" class="btn btn-primary">Category</a>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <form action="/category" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter name">
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