@extends('layouts.plantilla', ['class' => 'off-canvas-sidebar', 'activePage' => 'home','titlePage' => __('Pedido')])


@section('content')
    <div class="container">
        <br>
        <div class="row">
            <div class="clod-md-4"></div>
            <div class="clod-md-6">
            <div class="row">
                @if(session()->has('msj'))
                <div class="alert alert-success" role="alert">
                {{ session('msj') }}
                </div>
                @endif
                <form action="{{ route('importar') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="clo-md-6" style="margin-top: -1%; margin-left: -10%">
                        <input type="file" name="documento">
                    </div>
                    <div class="clo-md-6">
                        <button class="btn btn-primary" type="submit" name="importar" style="margin-top: 2%; margin-left: -10%">Importar</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-2">
            <form action="{{ url('pedidos/exportar') }}" enctype="multipart/form-data">
                <button class="btn btn-success" style="margin-top: 4%; margin-left: -68%">Exportar</button>
            </form>   
        </div>
    </div>
    @auth()
            <form id="logout-form" style="margin-top: -20%" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            @include('layouts.page_templates.auth')
        @endauth
</div>  
@endsection