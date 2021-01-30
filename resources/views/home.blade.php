@extends('layouts.app')

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Dashboard</h3>
                <p class="text-subtitle text-muted">Anda dapat mendownload file2 dibawah ini.</p>
            </div>
        </div>
    </div>
    <!-- Basic card section start -->
    <section id="content-types">
        <div class="row">
            @foreach($files as $file)
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <h4 class="card-title">{{ $file->name }}</h4>
                            <p class="card-text">
                                ...
                            </p>
                        </div>
                        <img class="img-fluid w-100" src="/assets/images/samples/banana.jpg"
                            alt="Card image cap">
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <span>12 Mb</span>
                        <a class="btn btn-light-primary">Download</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</div>
@endsection
