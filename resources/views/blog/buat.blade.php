@extends('layouts.super')

@section('judul', 'buat artikel gan')

@section('konten')


  {{-- buat cek error gan semua nya dibikin list --}}
  {{-- @if (count($errors) > 0)
    <ul>
      @foreach ($errors->all() as $error)
        <li>
          {{ $error }}
        </li>
      @endforeach
    </ul>
  @endif --}}

  <h1>Buat artikel gan</h1>

  <form action="/blog" method="post">

    <input type="text" name="judul" value="{{ old('judul') }}"> <br>

    @if($errors->has('judul'))
      <p> {{ $errors->first('judul') }} </p>
    @endif

    <textarea name="deskripsi" rows="8" cols="80"> {{ old('deskripsi') }} </textarea> <br>

    @if($errors->has('deskripsi'))
      <p> {{ $errors->first('deskripsi') }} </p>
    @endif

    <input type="submit" name="submit" value="buat">
    {{ csrf_field() }}
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
