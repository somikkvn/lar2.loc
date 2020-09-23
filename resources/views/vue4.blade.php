@extends('layout')
@section('main_content')
    <div id="sgb4">
        <template v-if="status == 1">
        <h1>Заголовок 1</h1>
        <p>Описание 1</p>
        </template>

        <template v-else>
            <h1>Заголовок 2</h1>
            <p>Описание 2</p>
        </template>
    </div>
@endsection

@section('main_content2')
    <script type="text/javascript">
        var app = new Vue({
            el: '#sgb4',
            data: {
                status: 1
            },
        })
    </script>
@endsection
