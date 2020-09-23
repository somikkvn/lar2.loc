@extends('layout')
@section('main_content')
    <div id="sgb2">
        <h1 @click="tutorialDemo">Click@{{ counter }}</h1>
        <a href="#" @click="tutorialDemo">Click my</a>
    </div>
@endsection

@section('main_content2')
    <script type="text/javascript">
        var app = new Vue({
            el: '#sgb2',
            data: {
                getDate: new Date(),
                counter: 0
            },
            methods: {
                tutorialDemo: function (){
                    this.counter++
                    console.log( this.counter)
                }
            }
        })
    </script>
@endsection
