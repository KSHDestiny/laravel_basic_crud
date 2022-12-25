@extends('layouts/master')

@section('Content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">
                            Create User
                        </h5>
                        <form action="{{route('create')}}" method="post">
                            @csrf
                            <div class="my-2">
                                <label for="name">Name</label>
                                <input type="text" name="userName" id="name" class="form-control" placeholder="Enter User Name">
                            </div>
                            <div class="my-2">
                                <label for="phone">Phone</label>
                                <input type="text" name="userPhone" id="phone" class="form-control" placeholder="Enter User Phone Number">
                            </div>
                            <div class="my-2">
                                <label for="email">Email</label>
                                <input type="text" name="userEmail" id="email" class="form-control" placeholder="Enter User email Number">
                            </div>
                            <button type="submit" class="btn btn-secondary float-end px-5">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
