@extends('layouts.index')

@section('title')
Daftar Bandara
@endsection

@section('content')
    <div class="col-sm-12">  
        <a href="{{ url('bandara/create') }}"><button class="btn btn-success">Tambah</button></a>
    </div>
    <br/>
    
    <div class="col-sm-12">
        <table class="table table-bordered">
            <tr>
                <td>Kode</td>
                <td>Nama</td>
                <td>Alamat</td>
            </tr>
            @foreach($datas as $key=>$value)
                <tr>
                    <td>{{ $value->kode_bandara }}</td>
                    <td>{{ $value->nama_bandara }}</td>
                    <td>{{ $value->alamat_bandara }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection