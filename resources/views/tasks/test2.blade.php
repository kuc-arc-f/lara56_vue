@extends('layouts.base2')

@section('title', 'タスク一覧')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            一覧
        </div>
        <div class="panel-body">
        </div>
    </div>
    <hr />
    <div>
    <!-- vue -->
    <h1>vue test22:</h1>
    <div id="app_test2">
        こんにちは @{{ name }}.<br />
        <ul>
            <li v-for="(item, i) in list" :key="item">@{{ item }}
                <button @click="list.splice(i, 1)">remove</button>
            </li>
        </ul>        
        <!--
        <button @click="addItem">add</button>
        -->
        <button class="btn btn-primary" v-on:click="addItem">登録-2</button>
    </div>
    <!-- -->
    <script>
    var app = new Vue({
        el: '#app_test2',
        data: {
            name: 'World 355',
            message: 'msg, 123',
            counter: 0,
            list: ['Apple', 'Banana', 'Strawberry'],            
        },
        methods: {
            addItem: function() {
                this.list.push('Orange' + (++this.counter).toString())
            }
        },        
    });
    </script>    
@endsection
