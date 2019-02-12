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
    <h1>Test3</h1>
    <!--
    <h3>vue test22:</h3>
    -->
    <div id="hello">
        <p>Length: @{{ length }}</p>
        <ul>
            <li v-for="item in list">
            id: @{{ item.id }}, ,name= @{{ item.name }}
            </li>
        </ul>
    </div>
    <!-- -->
    <script>
  var app = new Vue({
    el: '#hello',
    data: { 
       length: 0,
       pages: [] ,
       list: [],
    },
    created: function(){
        axios
        .get('./api_test3')
        .then(response =>{ 
            // success
            this.length = response.data.length;
            for(var i = 0; i < response.data.length; i++) {
//                console.log(response.data[i].id );
                this.list.push(response.data[i] );
            }
        })
    }
  });
    </script>    
@endsection
