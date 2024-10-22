@extends('main')

@section('title', 'Like')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Like_or_dislike</h1>
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
                            <th>Post_title</th>
                            <th>Active</th>
                        </tr>
                        @foreach ($models as $model)
                            <tr>
                                <th>{{$model->id}}</th>
                                <td>
                                    @foreach ($datas as $data)
                                        @if ($data->id == $model->post_id)
                                            {{$data->title}}
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    @if ($model->is_active == 1)
                                        {{'True'}}
                                    @else
                                        {{'False'}}
                                    @endif
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