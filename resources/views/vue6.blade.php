@extends('layout')
@section('main_content')
    <div id="sgb6">
        <h3>Одномерный массив</h3>
        <ul>
            <li v-for="item in massiv1">@{{item}}</li>
        </ul>

        <ul>
            <li v-for="(item, index) in massiv1">index@{{index}}: @{{item}}</li>
        </ul>
        <h3>Ассоциативный массив</h3>
        <ul>
            <li v-for="user in massiv2">@{{user}}</li>
        </ul>

        <ul>
            <li v-for="user in massiv2">@{{user.id}} : @{{user.name}}</li>
        </ul>
        <div container>
            <table border="1">
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
            </table>
        </div>

    </div>
@endsection

@section('main_content2')
    <script type="text/javascript">
        var app = new Vue({
            el: '#sgb6',
            data: {
                massiv1: ['один', 'два', 'три'],
                massiv2: [
                    {id: 1, name: 'Vasyl'},
                    {id: 2, name: 'Olha'}
                ]
            }
        })
    </script>
@endsection
