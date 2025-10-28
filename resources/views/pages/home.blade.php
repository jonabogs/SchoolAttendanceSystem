@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-8 offset-md-2">
    <h1 class="mb-3">Welcome to Pink University!</h1>

    <h4>Mission</h4>
    <p>To provide reliable attendance tracking for students and subjects, supporting efficient management and data-driven decisions.</p>

    <h4>Vision</h4>
    <p>To become the school's trusted digital attendance system — simple, accurate, and accessible.</p>

    <div class="mt-3">
      <!-- Dark pink (Bootstrap danger) -->
      <a href="{{ route('attendances.index') }}" class="btn btn-danger">View Attendances</a>

      <!-- Light pink (Bootstrap light) -->
      <a href="{{ route('students.index') }}" class="btn btn-light text-danger border-danger">View Students</a>
    </div>
  </div>
</div>
@endsection
