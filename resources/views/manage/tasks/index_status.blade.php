@extends('layouts.manage')
@section('content')
  <div class="row">
    <div class="col-xl-12">
      <div class="page-title-box">
        <h4 class="page-title float-left">Status</h4>
        <ol class="breadcrumb float-right">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ route('task.index') }}">Tasks</a></li>
          <li class="breadcrumb-item active">Status</li>
        </ol>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
@endsection
@push('plugins')
@endpush
@push('scripts')
@endpush