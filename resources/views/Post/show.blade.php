@extends('main')

@section('title', 'Post')

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
                    <a href="/post" class="btn btn-primary">Post</a>
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
                            <th>Category_name</th>
                            <th>Title</th>
                            <th>Body</th>
                            <th>Likes</th>
                            <th>Dislike</th>
                        </tr>
                        <tr>
                            <th>{{$models->id}}</th>
                            <td>
                                @foreach ($datas as $data)
                                    @if ($data->id == $models->category_id)
                                        {{$data->name}}
                                    @endif
                                @endforeach
                            </td>
                            <td>{{$models->title}}</td>
                            <td>{{$models->body}}</td>
                            <td>{{$models->likes}}</td>
                            <td>{{$models->dislikes}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection