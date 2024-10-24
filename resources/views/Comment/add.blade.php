@extends('main')

@section('title', 'Comment')

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
                    <a href="/comment" class="btn btn-primary">Comment</a>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <form action="/comment" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <textarea name="body" class="form-control" placeholder="Enter body"></textarea><br>
                                <select class="form-select form-select-sm" aria-label="Default select example" name="post_id">
                                    @foreach ($models as $model)
                                        <option value="{{$model->id}}">{{$model->title}}</option>
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