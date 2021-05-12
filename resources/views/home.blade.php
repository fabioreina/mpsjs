@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                        {{--                    <img src="uploads/{{ Session::get('file') }}">--}}
                    @endif

                    @if (count($errors) > 0)
                        <div class="col alert alert-danger">
                            <strong>ERROR  </strong>

                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>Verifique se o arquivo esta no formato correto. </li>
                                    <li>JSON</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <div class=" mt-2 col" style="alignment: center; text-align: center;">
                        <form action="{{ route('fileupload') }}" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                        <div  style=" width: 200px;" class="card text-white bg-secondary mr-3 d-inline-block"
                             style="max-width: 10rem; max-height: 10rem;">
                            <div class="card-header shadow">
                                <input id="btnfile" name="btnfile" type="file" class="btn btn-outline-dark embed-responsive">
                            </div>
                            <div class="card-body">
                                <button id="btnprocess" type="submit" class="btn btn-info" disabled>Processar</button>
                            </div>
                        </div>
                        </form>

                        <div  class=" mt-3 card text-white bg-info mr-3 d-inline-block"
                             style="max-width: 10rem; max-height: 10rem;" >
                            <div class="card-header shadow">
                                <button id="btnmodelo1" name="btnmodelo1" class="btn btn-success embed-responsive" disabled>LoadMap Makers</a>
                            </div>
                            <div class="card-body">
                                <p class="card-text text-white" style="align-items: center">Mapa dinamico em 2D.</p>
                            </div>
                        </div>
                    </div>

                         <div class="row card-body ml-2" style="alignment: center; text-align: center;">

                        <div class="card text-white bg-danger mr-3 d-inline-block"
                        <p name="result" id="result" class="card-text text-white" style=" width: 100%; height: 300px;">Resultado</p>
                        </div>



                </div>
            </div>
        </div>
    </div>


<script>

    $('#btnfile').on('click', function () {

        document.getElementById('btnprocess').disabled = false;
        document.getElementById('btnmodelo1').disabled = false;

    });


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
        var target = $('#result2');
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
