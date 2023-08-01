@extends('layouts.admin')

@section('content')

<h1>hello diaries</h1>

<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6 col-12">Diaries</div>
                <div class="col-md-6 col-12">

                </div>
            </div>
        </div>
        <div class="card-body">
            <table  class="table table-hover">
                <caption>List of users</caption>
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Action</th>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Supervisor</th>
                    <th scope="col">Status</th>

                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>
                        <a href="" class ="btn btn-sm btn-danger">Delete</a>
                    </td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td><span class="badge badge-primary">Pending</span></td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>@mdo</td>
                    <td><span class="badge badge-success">Approved</span></td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>@mdo</td>
                    <td><span class="badge badge-danger">Reject</span></td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>
</div>


@endsection
