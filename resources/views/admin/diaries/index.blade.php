@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6 col-12">
                    <i class="fas fa-solid fa-book-open"></i>
                    Diaries
                </div>
            </div>
        </div>
        <div class="card-body">

            @if (isset($success))
                <div class="alert alert-success mx-2">
                    {{ $success }}
                </div>
            @endif
            <table class="table table-sm table-hover" id="diaries-table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th> <!-- Moved "Action" to the last column -->
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>

    @include('admin.diaries.partials._datatables-scripts')
@endsection
