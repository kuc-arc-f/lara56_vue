@extends('layouts.base')

@section('title', 'タスク一覧')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            タスク一覧
        </div>
        <div class="panel-body">
            <form>
              <input name="text" id="txt_1" value="123" ></input>
            </form>

            <br />
            new:<br />
            {{ link_to_route('tasks.create', '[ create ]' ) }}
            <br />
            <br />
            <a href="make/"  class="btn btn-primary ">詳細はこちら </a><br />
        </div>
    </div>
    <hr />
    <div>
    <!-- vue -->
    <h1>vue test22:</h1>
    こんにちは @{{ name }}.<br />
    message=  @{{ message }}.<br />
    <button >change</button>
    <!-- -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
    <script>
    var app = new Vue({
        el: '#app',
        data: {
            name: 'World 344',
            message: 'msg, 123',
        },
    });
    </script>

@endsection
