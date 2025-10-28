@extends('layouts.app')

@section('content')
<h2>Attendance Records</h2>
<table class="table table-striped table-hover">
  <thead>
    <tr><th>ID</th><th>Date</th><th>Student</th><th>Subject</th><th>Status</th></tr>
  </thead>
  <tbody>
    @foreach($attendances as $a)
      <tr>
        <td>{{ $a->id }}</td>
        <td>{{ $a->date }}</td>
        <td>{{ $a->student->name ?? 'N/A' }}</td>
        <td>{{ $a->subject->subject_name ?? 'N/A' }}</td>
        <td>{{ $a->status }}</td>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection
