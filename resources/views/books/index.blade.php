@extends('layouts.base')

@section('title', 'タスク一覧')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            タスク一覧
        </div>
        <div class="panel-body">
            <table class="table table-striped task-table">
                <thead>
                    <th>タスク名</th>
                    <!--
                    <th>完了</th>
                        -->
                    <th>編集</th>
                    <th>削除</th>
                </thead>
                <tbody>
                    @foreach ($books as $book )
                        <tr>
                            <td class="table-text">
                                {{ link_to_route('books.show', $book->title, $book->id) }}
                            </td>
                            <td class="table-text">
                                {{ link_to_route('books.edit', '編集', $book->id, ['class' => 'btn btn-sm btn-default']) }}
                            </td>
                            <td class="table-text">
                                {{ Form::open(['route' => ['books.destroy', $book->id], 'method' => 'delete']) }}
                                    {{ Form::hidden('id', $book->id) }}
                                    {{ Form::submit('削除', ['class' => 'btn btn-sm btn-default']) }}
                                {{ Form::close() }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <br />
            [page:] <br />
            {{$books->links() }}
            <br />
            new : <br />
            {{ link_to_route('books.create', '[ create ]' ) }}
            <br />
            <br />
            <a href="make/"  class="btn btn-primary ">詳細はこちら </a>
        </div>
    </div>

@endsection
