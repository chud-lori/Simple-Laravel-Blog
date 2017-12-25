@extends('layouts.super')

@section('judul', 'buat ubah gan')

@section('konten')

  <h1>Silahkan ubah gan</h1>

  <form action="/blog/{{ $ubah->id }}" method="post">

    <input type="text" name="judul" value="{{ $ubah->judul }}"> <br>
    <textarea name="deskripsi" rows="8" cols="80">{{ $ubah->deskripsi }}</textarea> <br>

    <input type="submit" name="submit" value="ubah">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="put">
  </form>



@endsection





















{{-- // belajar --}}
{{-- <h2>Data Orang:</h2>
@foreach ($orang as $dataOrang)
  <li>
    {{ $dataOrang->nama. ' '. $dataOrang->pass }}
  </li>
@endforeach

{{-- {!! $alert !!} --}}

{{-- @if (count($orang) > 3)
  <p>Usernya lebih dari 3</p>

  @else
    <p>Usernya tidak lebih dari 3</p>

@endif --}}
