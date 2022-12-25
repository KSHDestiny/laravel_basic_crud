@extends('layouts/master')

@section('Content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered col-12">
                            <tr>
                                <th class="col-1 text-center">Id</th>
                                <th class="col-1 text-center">Name</th>
                                <th class="col-2 text-center">Email</th>
                                <th class="col-2 text-center">Phone</th>
                                <th class="col-2 text-center">Created at</th>
                                <th class="col-2 text-center">Updated at</th>
                                <th class='col-2 text-center'>Update & Delete</th>
                            </tr>
                            @foreach ($datas as $data)
                            <tr>
                                <td class="col-1 text-center">{{$data->id}}</td>
                                <td class="col-1">{{$data->name}}</td>
                                <td class="col-2">{{$data->email}}</td>
                                <td class="col-2">{{$data->phone}}</td>
                                <td class="col-2 text-center">{{$data->created_at->format('d-F-Y')}}</td>
                                <td class="col-2 text-center">{{$data->updated_at->format('d-F-Y')}}</td>
                                <td class='col d-flex justify-content-around'>
                                    <a href='{{route('update#page',[$data->id])}}'><span class='btn text-primary'>Update</span></a>
                                    <a href='{{route('delete',[$data->id])}}'><span class='btn text-primary'>Delete</span></a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
