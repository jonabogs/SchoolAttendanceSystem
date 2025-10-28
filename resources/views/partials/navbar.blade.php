<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #ff69b4;">
  <div class="container">
    <a class="navbar-brand fw-bold text-white" href="{{ route('home') }}">Pink University</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navmenu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link text-white" href="{{ route('home') }}">Home</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="{{ route('students.index') }}">Students</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="{{ route('subjects.index') }}">Subjects</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="{{ route('attendances.index') }}">Attendances</a></li>
      </ul>
    </div>
  </div>
</nav>
