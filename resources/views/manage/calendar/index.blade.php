@extends('layouts.manage')
@section('title', __('Calendar Management'))
@section('content')
  <div class="row">
    <div class="col-xl-12">
      <div class="page-title-box">
        <h4 class="page-title float-left">Calendar</h4>
        <ol class="breadcrumb float-right">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ route('task.index') }}">Tasks</a></li>
          <li class="breadcrumb-item active">Calendar</li>
        </ol>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
  <div id="section_content">
    <full-calendar :events="fcEvents" locale="en"></full-calendar>
  </div>
@endsection
@push('styles')
<!--calendar css-->
{{--  <link href="{{ asset('plugins/fullcalendar/dist/fullcalendar.css') }}" rel="stylesheet" />--}}
  <link href="{{ asset('css/pluginsList.css') }}" rel="stylesheet" type="text/css" />
@endpush
@push('plugins')
<script src="{{ asset('js/pluginsList.js') }}"></script>
{{--<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>--}}
<script src="{{ asset('plugins/moment/moment.js') }}"></script>
{{--<script src='{{ asset('plugins/fullcalendar/dist/fullcalendar.min.js') }}'></script>--}}
{{--<script src="{{ asset('pages/jquery.fullcalendar.js') }}"></script>--}}
@endpush
@push('scripts')
@endpush