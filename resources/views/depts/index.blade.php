@extends('layouts.base')

@section('title', 'タスク一覧')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Depts 一覧
        </div>
        <div class="panel-body">
            <!--
            <table class="table table-striped task-table">
             -->
            <table class="table table-striped">
                <thead>
                    <th>タスク名</th>
                    <!--
                    <th>完了</th>
                        -->
                    <th>編集</th>
                    <th>削除</th>
                </thead>
                <tbody>
                    @foreach ($depts as $dept )
                        <tr>
                            <td class="table-text">
                                {{ link_to_route('depts.show', $dept->name , $dept->id) }}
                            </td>
                            <td class="table-text">
                                {{ link_to_route('depts.edit', '編集', $dept->id, ['class' => 'btn btn-sm btn-default']) }}
                            </td>
                            <td class="table-text">
                                {{ Form::open(['route' => ['depts.destroy', $dept->id], 'method' => 'delete']) }}
                                    {{ Form::hidden('id', $dept->id) }}
                                    {{ Form::submit('削除', ['class' => 'btn btn-sm btn-default']) }}
                                {{ Form::close() }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <br />
            new:<br />
            {{ link_to_route('depts.create', '[ create ]' ) }}
            <br />
            <br />
            <a href="make/"  class="btn btn-primary ">詳細はこちら </a>
        </div>
    </div>

@endsection
