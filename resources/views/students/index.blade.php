@extends('layouts.app')

@section('content')
<h2>Students</h2>
<table class="table table-striped">
  <thead><tr><th>ID</th><th>Name</th><th>Section</th><th>Year Level</th></tr></thead>
  <tbody>
    @foreach($students as $s)
      <tr>
        <td>{{ $s->id }}</td>
        <td>{{ $s->name }}</td>
        <td>{{ $s->section }}</td>
        <td>{{ $s->year_level }}</td>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection
