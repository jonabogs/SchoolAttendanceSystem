<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="{{ route('home') }}">SchoolAttendance</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navmenu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('students.index') }}">Students</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('subjects.index') }}">Subjects</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('attendances.index') }}">Attendances</a></li>
      </ul>
    </div>
  </div>
</nav>
