@extends('layout')
@section('main_content')
    <div id="sgb8">
        <h3>Клик по кнопке с ипользованием this </h3>
            <button @click="high()">Counter равен: @{{ counter }}</button>
    </div>
@endsection

@section('main_content2')
    <script type="text/javascript">
        var app = new Vue({
            el: '#sgb8',
            data: {
                counter: 1
            },
            methods: {
                high(){
                    this.counter++
                }
            }
        })
    </script>
@endsection
