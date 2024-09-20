@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if(auth()->user()->isAdmin == 1)
										@include('admin')
                    @elseif(auth()->user()->isAdmin == 2)
                    @include('companyPage')
                    @else
                    @include('userProfile')
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
