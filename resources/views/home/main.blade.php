@extends('layouts.home')

@section('content')

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Welcome</h1>
                </div>
            </div>
        </div>

@endsection

@section('javascript')

    <script src="{{ asset('js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/coreui-chartjs.bundle.js') }}"></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
@endsection
