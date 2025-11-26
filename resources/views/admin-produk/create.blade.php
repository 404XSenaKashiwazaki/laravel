@extends('layouts.admin')

{{-- Customize layout sections --}}

@section('subtitle', 'Produk')
@section('content_header_title', 'Produk')
@section('content_header_subtitle', 'Tambah Produk')

{{-- Content body: main page content --}}

@section('content_body')
    <p>Halaman Tambah Produk</p>
    <div>My admin panel</div>
    <form action="" method="post">
        <input type="text" class="">
    </form>
@stop

{{-- Push extra CSS --}}

@push('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@endpush

{{-- Push extra scripts --}}

@push('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@endpush
