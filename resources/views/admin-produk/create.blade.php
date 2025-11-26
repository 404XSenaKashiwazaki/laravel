@extends('layouts.admin')

{{-- Customize layout sections --}}

@section('subtitle', 'Produk')
@section('content_header_title', 'Produk')
@section('content_header_subtitle', 'Tambah Produk')

{{-- Content body: main page content --}}

@section('content_body')
    <p>Halaman Tambah Produk</p>
<div class="space-y-2 w-50">
    <form action="{{ }}" method="post">
<x-adminlte-input name="nama" type="text" label="Nama" placeholder="Masukan nama produk"/>
<x-adminlte-input name="deskripsi" type="text" label="Deskripsi" placeholder="Masukan deskripsi produk"/>
<x-adminlte-input name="harga" type="number" label="Harga" placeholder="Masukan harga produk"/>
<x-adminlte-input-file name="file" label="Gambar" />
    <x-adminlte-button type="submit" label="Simpan" theme="primary" icon="fas fa-paper-plane"/>
</form>
</div>





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
