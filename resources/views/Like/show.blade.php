@extends('main')

@section('title', 'Like')

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
                    <a href="/like" class="btn btn-primary">Like</a>
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
                            <th>Post_title</th>
                            <th>Active</th>
                        </tr>
                        <tr>
                            <th>{{$models->id}}</th>
                            <td>
                                @foreach ($datas as $data)
                                    @if ($data->id == $models->post_id)
                                        {{$data->title}}
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                @if ($models->is_active == 1)
                                    {{'True'}}
                                @else
                                    {{'False'}}
                                @endif
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection