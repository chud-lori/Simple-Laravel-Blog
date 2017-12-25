@extends('layouts.super')

@section('judul', 'Ini blog Lori')

@section('konten')

  <h1>Selamat datang di Beranda blog ini gan</h1>
  <h2> {{ $blog->judul }} gan</h2>
  <hr>
  <p>
    {{ $blog->deskripsi }}
  </p>


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
