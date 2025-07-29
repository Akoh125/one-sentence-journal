@extends('layouts.app')

@section('content')

    <div class="prose ml-4">
        <h2 class="text-lg">ひとこと日記一覧</h2>
    </div>

    @if (isset($diaries))
        <table class="table table-zebra w-full my-4">
            <thead>
                <tr>
                    <th>id</th>
                    <th>内容</th>
                    <th>投稿日</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($diaries as $diary)
                <tr>
                    <td><a class="link link-hover text-info" href="#">{{ $diary->id }}</a></td>
                    <td>{{ $diary->content }}</td>
                    <td>{{ $diary->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif

@endsection