@extends('layouts.app')

@section('content')
<div class="container my-5">
  <h2 class="mb-4 text-center" style="font-weight: bold">Attendance Records</h2>

  @php
    // Group attendances by status
    $grouped = $attendances->groupBy('status');
  @endphp

  <!-- Color-coded Tabs -->
  <ul class="nav nav-tabs justify-content-center mb-4 border-0" id="attendanceTabs" role="tablist">
    @foreach($grouped as $status => $records)
      @php
        // Assign colors per status
        $colors = [
          'Present' => '#28a745',
          'Absent' => '#dc3545',
          'Late' => '#ffc107',
          'Excused' => '#17a2b8',
        ];
        $bg = $colors[$status] ?? '#ff69b4';
      @endphp

      <li class="nav-item me-2" role="presentation">
        <button
          class="nav-link text-white fw-semibold {{ $loop->first ? 'active' : '' }}"
          id="{{ $status }}-tab"
          data-bs-toggle="tab"
          data-bs-target="#{{ $status }}"
          type="button"
          role="tab"
          aria-controls="{{ $status }}"
          aria-selected="{{ $loop->first ? 'true' : 'false' }}"
          style="background-color: {{ $bg }}; border-radius: 8px; border: none;"
        >
          {{ ucfirst($status) }} ({{ $records->count() }})
        </button>
      </li>
    @endforeach
  </ul>

  <!-- Tab Content -->
  <div class="tab-content" id="attendanceTabsContent">
    @foreach($grouped as $status => $records)
      @php
        $headerColor = $colors[$status] ?? '#ff69b4';
      @endphp

      <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="{{ $status }}" role="tabpanel" aria-labelledby="{{ $status }}-tab">
        <div class="card shadow mb-4 border-0 rounded-4">
          <div class="card-header text-white fw-bold rounded-top-4" style="background-color: {{ $headerColor }}">
            {{ ucfirst($status) }} Records
          </div>
          <div class="card-body p-0">
            <table class="table table-striped table-hover mb-0">
              <thead class="table-light">
                <tr>
                  <th>ID</th>
                  <th>Date</th>
                  <th>Student</th>
                  <th>Subject</th>
                </tr>
              </thead>
              <tbody>
                @foreach($records as $a)
                  <tr>
                    <td>{{ $a->id }}</td>
                    <td>{{ $a->date }}</td>
                    <td>{{ $a->student->name ?? 'N/A' }}</td>
                    <td>{{ $a->subject->subject_name ?? 'N/A' }}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>

<style>
  .nav-tabs {
    border-bottom: none !important; /* removes line under tabs */
  }

  .nav-tabs .nav-link {
    transition: 0.3s;
  }

  .nav-tabs .nav-link:hover {
    opacity: 0.85;
    transform: translateY(-2px);
  }

  .nav-tabs .nav-link.active {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  }
</style>
@endsection
