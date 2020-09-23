@extends('layout')
@section('main_content')
    <div id="sgb3">
        <h1 v-if="status">Условие истинно</h1>
        <h2 v-else>Условие ложно</h2>
    </div>
@endsection

@section('main_content2')
    <script type="text/javascript">
        var app = new Vue({
            el: '#sgb3',
            data: {
                status: true
            }
        })
    </script>
@endsection
