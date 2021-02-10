@extends('layouts.index')


@section('title')
Tambah Bandara
@endsection

@section('content')
<div class="row clearfix">
  <div class="col-md-12">
      <div class="card">
          <div class="header">
              <h2>Tambah Bandara</h2>
          </div>
          <div class="body">
              <form method="post" action="{{ url('bandara/store') }}" enctype="multipart/form-data">
              @csrf
              @include('bandara._form')
              </form>
          </div>
      </div>
  </div>
</div>
@endsection
