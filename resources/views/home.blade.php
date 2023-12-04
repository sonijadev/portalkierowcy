@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Portal Kierowcy') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Gratulacje! Zalogowałeś się do portalu kierowcy. Użyj menu aby zacząć korzystać z aplikacji') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
