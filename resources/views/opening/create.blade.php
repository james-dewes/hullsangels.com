@extends('layouts.master')
@section('title')
    Change Opening Times
@endsection
@section('content')
<form method="POST" action="/opening-times">
      {{csrf_field()}}
      <div class="row text-center">
        <div class="col-md-2">
          Day
        </div>
        <div class="col-md-1">
          Enabled
        </div>
        <div class="col-md-2">
          From Time
        </div>
        <div class="col-md-2">
          To Time
        </div>
      </div>
      <div class="row text-center">
          <div class="col-md-2">
            <label for="mon">Monday</label>
          </div>
          <div class="col-md-1">
            <input type="checkbox" name="mon" id="mon" />
          </div>
          <div class="col-md-2">
            <label for="mon-from">From</label>
            <input type="time" name="mon-from" id="mon-from" step="900">
          </div>
          <div class="col-md-2">
            <label for="mon-to">To</label>
            <input type="time" name="mon-to" id="mon-to step="900">
          </div>
      </div>
      <div class="row text-center">
        <div class="col-md-2">
          <label for="tue">Tuesday</label>
        </div>
        <div class="col-md-1">
          <input type="checkbox" name="tue" id="tue" />
        </div>
        <div class="col-md-2">
          <label for="tue-from">From</label>
          <input type="time" name="tue-from" id="tue-from" step="900">
        </div>
        <div class="col-md-2">
          <label for="tue-to">To</label>
          <input type="time" name="tue-to" id="tue-to step="6900">
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-2">
          <label for="wed">Wednesday</label>
        </div>
        <div class="col-md-1">
          <input type="checkbox" name="wen" id="wen" />
        </div>
        <div class="col-md-2">
          <label for="wed-from">From</label>
          <input type="time" name="wed-from" id="wed-from" step="900">
        </div>
        <div class="col-md-2">
          <label for="wed-to">To</label>
          <input type="time" name="wed-to" id="wed-to" step="900">
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-2">
          <label for="thu">Thursday</label>
        </div>
        <div class="col-md-1">
          <input type="checkbox" name="thu" id="thu" />
        </div>
        <div class="col-md-2">
          <label for="thu-from">From</label>
          <input type="time" name="thu-from" id="thu-from" step="900">
        </div>
        <div class="col-md-2">
          <label for="thu-to">To</label>
          <input type="time" name="thu-to" id="thu-to" step="900">
        </div>
      </div>
      <div class="row text-center">
        <label for="fri">Friday</label>
        <input type="checkbox" name="fri" id="fri" />
        <label for="fri-from">From</label>
        <input type="time" name="fri-from" id="fri-from" step="900">
        <label for="fri-to">To</label>
        <input type="time" name="fri-to" id="fri-to" step="900">
      </div>
      <div class="row text-center">
        <label for="sat">Saturday</label><input type="checkbox" name="sat" id="sat" />
        <label for="sat-from">From</label><input type="time" name="sat-from" id="sat-from" step="900">
        <label for="sat-to">To</label><input type="time" name="sat-to" id="sat-to" step="900">
      </div>
      <div class="row text-center">
        <label for="sun">Sunday</label>
        <input type="checkbox" name="sun" id="sun" />
        <label for="-from">From</label>
        <input type="time" name="sun-from" id="sun-from" step="900">
        <label for="-to">To</label>
        <input type="time" name="sun-to" id="sun-to" step="900">
      </div>
</form>
@endsection('')