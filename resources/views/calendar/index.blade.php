@extends('layouts.master')
@section('title','Calendar')
    
@section('content')
<div class="content-box">
    <div class="element-wrapper">
      <h6 class="element-header">
        Event Calendar
      </h6>
      <div class="element-box">
        <h5 class="form-header">
          Calendar powered by FullCalendar
        </h5>
        <div class="form-desc">
          A JavaScript event calendar. Customizable and open source. Display a full-size drag-n-drop event calendar, leveraging jQuery. <a href="https://fullcalendar.io/" target="_blank">Learn More about FullCalendar</a>
        </div>
        <div id="fullCalendar"></div>
      </div>
    </div><!--------------------
    START - Color Scheme Toggler
    -------------------->

    <!--------------------
    END - Color Scheme Toggler
    --------------------><!--------------------
    START - Demo Customizer
    -------------------->

    <!--------------------
    END - Demo Customizer
    --------------------><!--------------------
    START - Chat Popup Box
    -------------------->

    <!--------------------
    END - Chat Popup Box
    -------------------->
  </div>

  @endsection('content')