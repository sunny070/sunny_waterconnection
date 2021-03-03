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
                    {{ __('You are logged in!') }}
                    @if ( auth()->user()->designation == 'Kisok')
                        <p><a href = "/cscpage">CONTINUE </a> </p>
                    @elseif ( auth()->user()->designation == 'ExecutiveEngineer')
                        <p><a href = "/forwardere">CONTINUE </p>
                    @elseif ( auth()->user()->designation == 'JuniorEngineer')
                        <p><a href = "/forwarderj">CONTINUE </p> 
                        @elseif ( auth()->user()->designation == 'SupritendentEngineer')
                        <p><a href = "/forwarders">CONTINUE </p> 
                        @elseif ( auth()->user()->designation == 'SectionClerk')
                        <p><a href = "/forwarderc">CONTINUE </p> 
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
