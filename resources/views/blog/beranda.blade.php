@extends('layouts.super')


@section('judul', 'Blog nya Lori')

@section('konten')
  <h1>Selamat datang di Beranda blog</h1>

  <hr>

  @foreach ($blogs as $isiBlog)
    <li>
      Judul : <a href="/blog/{{ $isiBlog->id }}"> {{ $isiBlog->judul }} </a>

      <form action="/blog/{{ $isiBlog->id }}" method="post">
        <input type="submit" name="submit" value="hapus">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="delete">
      </form>

    </li>
  @endforeach

  {{ $blogs->appends(Request::input())->render() }}

@endsection
