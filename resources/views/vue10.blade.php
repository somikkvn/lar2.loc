@extends('layout')
@section('main_content')
    <div id="sgb10">
        <h3>Загрузка с URL</h3>
        <h3>@{{textSearch}} (длина: @{{textSearch.length}})</h3>
        <input type="text" size="50" v-model="textSearch">
    </div>
@endsection

@section('main_content2')
    <script type="text/javascript">
        var app = new Vue({
            el: '#sgb10',
            data: {
             textSearch: '',
            },
            watch: {
                textSearch: function (){
                    if(this.textSearch.length > 3){
                        this.textSearch = 'меняем соодержимое поля из кода';
                    }
                }
            },
            methods: {

            }
        })
    </script>
@endsection
