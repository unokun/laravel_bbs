@extends('layouts.default')
 
@section('title', $title)
 
@section('content')
    <h1>{{ $title }}</h1>
    <form method="post" action="{{ url('/messages') }}">
        @csrf
        @error('name')
            @foreach ($errors->get('name') as $error)
                <div style="color:red;">{{ $error }}</div>
            @endforeach
        @enderror
        @error('body')
            @foreach ($errors->get('body') as $error)
                <div style="color:red;">{{ $error }}</div>
            @endforeach
        @enderror
        <div>
            <label>
                名前:
                <input type="text" name="name" class="name_field" placeholder="お名前を入力" value="{{ old('name') }}">
            </label>
        </div>
        <div>
            <label>
                コメント：
                <input type="text" name="body" class="comment_field" placeholder="コメントを入力" value="{{ old('body') }}">
            </label>
        </div>
        <div>
            <input type="submit" value="投稿">
        </div>
    </form>
    <ul>
        @forelse($messages as $message)
            <li>{{ $message->name }}: {{ $message->body }}  {{ $message->created_at }}</li>
        @empty
            <li>メッセージはありません。</li>
        @endforelse
    </ul>
@endsection