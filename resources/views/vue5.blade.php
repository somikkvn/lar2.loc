@extends('layout')
@section('main_content')
    <div id="sgb5">
        <h1 :style="{color: 'red'}">
            Текст
        </h1>
        <h1 :style="{color: 'green'}">
            Текст
        </h1>
    </div>
@endsection

@section('main_content2')
    <script type="text/javascript">
        var app = new Vue({
            el: '#sgb5',
            data: {

            }
        })
    </script>
@endsection
