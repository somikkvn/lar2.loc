@extends('layout')
@section('main_content')
    <div id="sgb7">
        <h3>Вызов метода по клику на таблице</h3>
            <table border="1" @click="myMethod()">
                <thead>
                    <th>Id</th>
                    <th>Имя</th>
                </thead>
                <tbody>
                <tr v-for="user in massiv2">
                    <td>@{{user.id}}</td>
                    <td>@{{user.name}}</td>
                </tr>
                </tbody>
            </table><br>
        <h3 @click="myMethod2()">Вызов метода по клику по этому тексту</h3>
    </div>
@endsection

@section('main_content2')
    <script type="text/javascript">
        var app = new Vue({
            el: '#sgb7',
            data: {
                massiv1: ['один', 'два', 'три'],
                massiv2: [
                    {id: 1, name: 'Vasyl'},
                    {id: 2, name: 'Olha'}
                ]
            },
            methods: {
                //Первый способ
                myMethod (){
                    alert('Мой метод')
                },

                //Второй способ
                myMethod2: function (){
                    alert('Мой метод2')
                }
            }
        })
    </script>
@endsection
