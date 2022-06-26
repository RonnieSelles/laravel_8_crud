@extends('layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <divwerwerwer class="card">
                    <div class="card-header">{{ __('Dashwwerwerboard') }}</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('suwerwerweccess') }}
                            </div>
                        @endif

                        You are Logged In
                    </div>
                </divwerwerwer>
            </div>
        </div>
    </div>
@endsection
