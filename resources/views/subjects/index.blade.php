@extends('layouts.app')

@section('content')
<div class="container my-5">
  <h2 class="mb-4 text-center">Subjects</h2>

  <div class="card shadow-lg rounded-4 overflow-hidden">
    <div class="card-header text-white fw-bold" style="background-color: #ff69b4;">
      Subject Records
    </div>
    <div class="card-body p-0">
      <table class="table table-striped table-hover mb-0">
        <thead class="table-light">
          <tr>
            <th>ID</th>
            <th>Subject</th>
            <th>Teacher</th>
          </tr>
        </thead>
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
    </div>
  </div>
</div>

<style>
  h2 {
    font-weight: 700;
    color: #333;
  }

  .card {
    border: none;
    border-radius: 1rem;
  }

  .card-header {
    font-size: 1.1rem;
    padding: 1rem 1.5rem;
  }

  .table thead th {
    background-color: #ffe4f2;
    color: #333;
  }

  .table tbody tr:hover {
    background-color: #fff5fa;
    transition: background-color 0.3s ease;
  }
</style>
@endsection
