@extends('layouts.master')
@section('title')
    Change Opening Times
@endsection
@section('content')
<form method="POST" action="/opening-times">
      {{csrf_field()}}
      <div>
        <label for="mon">Monday</label><input type="checkbox" name="mon" id="mon" />
        <label for="mon-from">From</label><input type="time" name="mon-from" id="mon-from" step="900">
        <label for="mon-to">To</label><input type="time" name="mon-to" id="mon-to step="900">
      </div>
      <div>
        <label for="tue">Tuesday</label><input type="checkbox" name="tue" id="tue" />
        <label for="tue-from">From</label><input type="time" name="tue-from" id="tue-from" step="900">
        <label for="tue-to">To</label><input type="time" name="tue-to" id="tue-to step="6900">
      </div>
      <div>
        <label for="wed">Wednesday</label><input type="checkbox" name="wen" id="wen" />
        <label for="wed-from">From</label><input type="time" name="wed-from" id="wed-from" step="900">
        <label for="wed-to">To</label><input type="time" name="wed-to" id="wed-to" step="900">
      </div>
      <div>
        <label for="thu">Thursday</label><input type="checkbox" name="thu" id="thu" />
        <label for="thu-from">From</label><input type="time" name="thu-from" id="thu-from" step="900">
        <label for="thu-to">To</label><input type="time" name="thu-to" id="thu-to" step="900">
      </div>
      <div>
        <label for="fri">Friday</label><input type="checkbox" name="fri" id="fri" />
        <label for="fri-from">From</label><input type="time" name="fri-from" id="fri-from" step="900">
        <label for="fri-to">To</label><input type="time" name="fri-to" id="fri-to" step="900">
      </div>
      <div>
        <label for="sat">Saturday</label><input type="checkbox" name="sat" id="sat" />
        <label for="sat-from">From</label><input type="time" name="sat-from" id="sat-from" step="900">
        <label for="sat-to">To</label><input type="time" name="sat-to" id="sat-to" step="900">
      </div>
      <div>
        <label for="sun">Sunday</label><input type="checkbox" name="sun" id="sun" />
        <label for="-from">From</label><input type="time" name="sun-from" id="sun-from" step="900">
        <label for="-to">To</label><input type="time" name="sun-to" id="sun-to" step="900">
      </div>
</form>
@endsection('')