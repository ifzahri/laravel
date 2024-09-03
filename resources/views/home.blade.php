@extends('layouts.app')

@section('title')

@section('content')
    <h2>PBKK</h2>
    <p>This is the content of the home page.</p>

    @php
        $status = true;
        $nama = 'Iftala';
    @endphp

    @if($status)
        <p>halo, {{ $nama }}!</p>
    @else
        <p>kamu bukan {{ $nama }}.</p>
    @endif
    
@endsection
