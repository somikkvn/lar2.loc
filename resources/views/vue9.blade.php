@extends('layout')
@section('main_content')
    <div id="sgb9">
        <h3>Загрузка с URL</h3>

        <button type="button" @click="getHashtags">Hashtags</button>

    </div>
@endsection

@section('main_content2')
    <script type="text/javascript">
        var app = new Vue({
            el: '#sgb9',
            data: {
            textSearch: '',
            },
            methods: {
                //
            }
        })
    </script>
@endsection
