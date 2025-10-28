@extends('layouts.app')

@section('content')
<h2>Subjects</h2>
<table class="table table-striped">
  <thead><tr><th>ID</th><th>Subject</th><th>Teacher</th></tr></thead>
  <tbody>
    @foreach($subjects as $sub)
      <tr>
        <td>{{ $sub->id }}</td>
        <td>{{ $sub->subject_name }}</td>
        <td>{{ $sub->teacher_name }}</td>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection
