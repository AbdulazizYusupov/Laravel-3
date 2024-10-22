@extends('main')

@section('title', 'Category')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Category</h1>
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
                            <th>Name</th>
                        </tr>
                         @foreach ($models as $model)
                        <tr>
                            <th>{{$model->id}}</th>
                            <td>{{$model->name}}</td>
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