@extends('layout')
@section('main_content')
    <div id="sgb">
        @{{ message }}
        <label for="" :title="getDate">Проверка времени</label>
    </div>
@endsection

@section('main_content2')
    <script type="text/javascript">
        var app = new Vue({
            el: '#sgb',
            data: {
                message: 'Hello Vue!',
                getDate: new Date()
            }
        })
    </script>
@endsection
