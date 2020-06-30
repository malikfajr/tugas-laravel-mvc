@extends('layouts.main')

@section('title', 'Register Form')

@section('main')
  <div>
    <h1 style="font-size: 2em;">Selamat Datang, {{$name}}!</h1>
    <strong style="font-size: 1.25em">Terima kasih telah bergabung di Sanberbook. Social media kita bersama!</strong>
    <br/> <br/>

    <p style="margin-bottom: .5px; font-size: 1.25em;">
      Periksa kembali data yang anda masukkan : <br>
      Nama : {{$name}} <br>
      Jenis Kelamin : {{$gender}} <br>
      Kebangsaan : {{$nationality}} <br/>
      Bio : {{$bio}} <br>
      Bahasa yang digunakan : <br>
      <ol style="margin-top: .5px;font-size: 1.15em;">
        @foreach ($language as $spoke)
        <li>{{$spoke}}</li>
        @endforeach
      </ol>
    </p>
  </div>

@endsection
