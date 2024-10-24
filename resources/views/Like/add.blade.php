@extends('main')

@section('title', 'Like')

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
                    <a href="/like" class="btn btn-primary">Like</a>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <form action="/like" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <select class="form-select form-select-sm" aria-label="Default select example"
                                    name="post_id">
                                    @foreach ($models as $model)
                                        <option value="{{$model->id}}">{{$model->title}}</option>
                                    @endforeach
                                </select><br>
                                <input type="checkbox" name="is_active">Activation true if you check,false if you not 
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