@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard ssss</div>

                <div class="card-body">
                    @if (session('status'))
                       <h3>ssssssssssssssssss</h3>
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as user!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
