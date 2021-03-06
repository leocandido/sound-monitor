
@extends('layouts.app')

@push('scripts')
    <script src="{{ asset('js/require.js') }}"
        data-main="{{ asset('js/monitors/show-main.js') }}"></script>
@endpush

@section('content')

<style>
    .img-responsive {
        margin: 0 auto;
        margin-bottom: 16px;
    }
</style>

<div class="row">
    <div class="col-md-12">
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation">
                <a href="#setup" aria-controls="setup" role="tab"
                    data-toggle="tab" id="tab-setup">
                    Configurar
                </a>
            </li>			
            <li role="presentation">
                <a href="#test" aria-controls="view" role="tab"
                    data-toggle="tab">
                    Testar
                </a>
            </li>
			<li role="presentation">
                <a href="#level" aria-controls="level" role="tab"
                    data-toggle="tab" id="tab-level">
                    Alterar Limite
                </a>
            </li>
            <li role="presentation" class="active">
                <a href="#view" aria-controls="view" role="tab"
                    data-toggle="tab">
                    Valores
                </a>
            </li>
			<li role="presentation">
                <a href="#historico" aria-controls="historico" role="tab"
                    data-toggle="tab" id="tab-historico">
                    Histórico
                </a>
            </li>
        </ul>
    </div>
</div>

<p>
    <input type="hidden" id="id" value="{{ $monitor->id }}" />
    <input type="hidden" id="type" value="{{ $monitor->data['type'] }}" />
</p>

<div class="tab-content">
    <div role="tabpanel" class="tab-pane" id="setup">
        @include('monitors.show.setup', ['auth_json' => $auth_json, 'example_send' => $example_send])		
    </div>	
    <div role="tabpanel" class="tab-pane" id="test">
        @include('monitors.show.test', ['login_cmd' => $login_cmd, 'send_cmd' => $send_cmd])
    </div>
	<div role="tabpanel" class="tab-pane" id="level">
        @include('monitors.show.level')
    </div>
    <div role="tabpanel" class="tab-pane active" id="view">
        @include('monitors.show.view')
    </div>
	<div role="tabpanel" class="tab-pane" id="historico">
        @include('monitors.show.historico')
    </div>
</div>
@endsection
