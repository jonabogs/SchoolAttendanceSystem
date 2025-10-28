@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-8 offset-md-2">
    <h1 class="mb-3">School Attendance System</h1>

    <h4>Mission</h4>
    <p>To provide reliable attendance tracking for students and subjects, supporting efficient management and data-driven decisions.</p>

    <h4>Vision</h4>
    <p>To become the school's trusted digital attendance system — simple, accurate, and accessible.</p>

    <div class="mt-3">
      <a href="{{ route('attendances.index') }}" class="btn btn-primary">View Attendances</a>
      <a href="{{ route('students.index') }}" class="btn btn-secondary">View Students</a>
    </div>
  </div>
</div>
@endsection
