@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="row-cols-1 card-body" style="alignment: center; text-align: center;">
                        <div class="card text-white bg-secondary mr-3 d-inline-block"
                             style="max-width: 10rem; max-height: 10rem;">
                            <div class="card-header shadow">
                                <input id="btnfile"  type="file" class="btn btn-outline-dark embed-responsive">
                            </div>
                            <div class="card-body">
                                <p class="card-text text-white">Faca o uploado do arquivo Json.</p>
                            </div>
                        </div>
                        <div class="card text-white bg-info mr-3 d-inline-block"
                             style="max-width: 10rem; max-height: 10rem;">
                            <div class="card-header shadow">
{{--                                <button id="btncreate" name="btncreate" style=" width: 95px; height: 35px;" class="ml-5 mt-2 mb-2 btn btn-info">Preencher</button>--}}
                                <button id="btnmodelo1" name="btnmodelo1" class="btn btn-outline-dark embed-responsive" ">Modelo 1</a>
                            </div>
                            <div class="card-body">

                                <p class="card-text text-white" style="align-items: center">Exemplo de Mapa dinamico em 2D.</p>
                            </div>
                        </div>
                        <div class="card text-white bg-warning mr-3 d-inline-block"
                             style="max-width: 10rem; max-height: 10rem;">
                            <div class="card-header shadow">
                                <button id="btnmodelo2" name="btnmodelo2" class="btn btn-outline-dark embed-responsive" ">Modelo 2</a>
                            </div>
                            <div class="card-body">
                                <p class="card-text text-white" style="align-items: center">Exemplo de Mapa dinamico em 3D.</p>
                            </div>
                        </div>

                    </div>

                    <div class="row card-body ml-2" style="alignment: center; text-align: center;">

                        <div class="card text-white bg-danger mr-3 d-inline-block"
                        <p name="result" id="result" class="card-text text-white" style=" width: 100%; height: 400px;">Resultado</p>
                        <a>Texto de reflexo</a>
                        <br>
                        <a>Texto de reflexo</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


<script>

    $('#btnmodelo1').on('click', function () {

        var value = $(this).val();
        console.log('ResultValue', value);
        var action = '{{route('modelo1')}}';
        var target = $('#result');
        var data = { _token: "{{ csrf_token() }}", getfilter: value};
        var controller = $.ajax({
            type: "POST",
            url: action,
            data: data,
            async: false
        });

        controller.done(function (msg) {
            console.log('ResultValue', value);
            target.empty().append(msg);
            // $('#showfiltro').formSelect();
        });
        controller.fail(function (msg) {
            // console.log(msg);
        });

    });

    $('#btnmodelo2').on('click', function () {

        var value = $(this).val();
        console.log('ResultValue', value);
        var action = '{{route('modelo2')}}';
        var target = $('#result');
        var data = { _token: "{{ csrf_token() }}", getfilter: value};
        var controller = $.ajax({
            type: "POST",
            url: action,
            data: data,
            async: false
        });

        controller.done(function (msg) {
            console.log('ResultValue', value);
            target.empty().append(msg);
            // $('#showfiltro').formSelect();
        });
        controller.fail(function (msg) {
            // console.log(msg);
        });

    });

</script>

@endsection
