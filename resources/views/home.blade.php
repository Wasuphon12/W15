@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>{{ __('You are logged in!') }}</p>
                    <div class="mt-3 d-flex gap-2">
                        <a href="{{ route('blog2') }}" class="btn btn-primary">จัดการบทความ</a>
                        <a href="{{ route('create') }}" class="btn btn-success">เขียนบทความใหม่</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
