@extends('main')

@section('title', 'Post')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Post</h1>
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
                            <th>Category_name</th>
                            <th>Title</th>
                            <th>Body</th>
                            <th>Likes</th>
                            <th>Dislike</th>
                        </tr>
                        @foreach ($models as $model)
                            <tr>
                                <th>{{$model->id}}</th>
                                <th>
                                    @foreach ($datas as $data)
                                    @if ($data->id == $model->category_id)
                                        {{$data->name}}
                                    @endif
                                    @endforeach
                                </th>
                                <td>{{$model->title}}</td>
                                <td>{{$model->body}}</td>
                                <td>{{$model->likes}}</td>
                                <td>{{$model->dislikes}}</td>
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