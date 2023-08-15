@extends('layouts.admin')

@section('content')

 <div class="card shadow mb-4">
    <div class="card-header">

        <div class="row">
            <div class="col-md-6 col-12">
                <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-solid fa-images"></i> Documentations</h6>
            </div>
            <div class="col-md-6 col-12 text-right">
                <a href="" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#newDocumentations">+ Add New</a>
            </div>
        </div>

    </div>
    <div class="card-body row">
        @if(isset($docs) && $docs->count() > 0)
            @foreach ($docs as $doc)
                <div class="col-md-3 col-sm-4 col-12 shadow-sm position-static mt-3">
                    <a href="{{ asset('storage/upload/images/'.$doc->image) }}" data-lightbox="lightbox-img" data-title="{{ $doc->caption }}" data-alt="{{ $doc->caption }}">
                        <img src="{{ asset('storage/upload/images/'.$doc->image) }}" alt="{{ $doc->caption }}" class="img-fluid">
                    </a>
                </div>
            @endforeach
        @else
            <div class="alert alert-danger">Sorry, there are no files or documentations at the moment</div>
        @endif
    </div>

{{-- @if(isset($uploadSuccess))
    <div class="alert alert-success">
        <strong>Upload successful:</strong> {{$uploadSuccess}}
    </div>
@endif --}}
</div>

 {{-- <div class="image-gallery row">
    <!-- Check if there are any documents available -->
    @if(isset($docs) && $docs->count() > 0)
        <!-- Loop through each document -->
        @foreach ($docs as $doc)
            <div class="col-md-3 col-sm-4 col-12 image-card mt-3 shadow-sm position-static">
                <a href="{{ asset('storage/upload/images/'.$doc->image) }}" data-lightbox="lightbox-img" data-title="{{ $doc->caption }}" data-alt="{{ $doc->caption }}">
                    <!-- Display the image with the caption as alt text -->
                    <img src="{{ asset('storage/upload/images/'.$doc->image) }}" alt="{{ $doc->caption }}" class="img-fluid">
                </a>
                <!-- Display the caption below the image -->
                <div class="caption">{{ $doc->caption }}</div>
            </div>
        @endforeach
    @else
        <!-- Display a message if there are no documents -->
        <div class="col-12">
            <div class="alert alert-danger border border-danger">Sorry, there are no files or documentations at the moment.</div>
        </div>
    @endif
</div> --}}







{{-- <div class="card">
    <div class="class-header">

    </div>
    <form action="{{ route('documentations.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="class-card">
            <div class="card-header">
                <button class="btn btn primary btn-sm">
                    <div class="row">

                        <div class="col-md-8">
                            <h1>Documentations</h1>
                        </div>
                    </div>

                </button>


            </div>
        </div>
    </form>
</div> --}}


@include('admin.documentations.partials._modal')
@include('admin.documentations.partials._script')
@endsection



