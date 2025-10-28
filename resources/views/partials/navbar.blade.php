<nav class="navbar navbar-expand-lg navbar-dark" position="fixed" style="background-color: #ff69b4;">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center fw-bold text-white" href="{{ route('home') }}">
      <img src="{{ asset('image/logo.png') }}"
           alt="Logo"
           width="60"
           height="60"
           class="me-2 rounded-circle"
           style="opacity: 0.9;">
      Pink University
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navmenu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link text-white {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ request()->routeIs('students.*') ? 'active' : '' }}" href="{{ route('students.index') }}">Students</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ request()->routeIs('subjects.*') ? 'active' : '' }}" href="{{ route('subjects.index') }}">Subjects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ request()->routeIs('attendances.*') ? 'active' : '' }}" href="{{ route('attendances.index') }}">Attendances</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<style>
.navbar-nav .nav-link {
  position: relative;
  color: white;
  font-weight: 500;
  transition: all 0.3s ease;
}

/* Animated underline */
.navbar-nav .nav-link::after {
  content: '';
  position: absolute;
  left: 50%;
  bottom: 0;
  width: 0;
  height: 2px;
  background-color: white;
  transition: all 0.3s ease;
  transform: translateX(-50%);
}

/* Hover animation */
.navbar-nav .nav-link:hover::after {
  width: 100%;
}

/* Active (clicked) link stays underlined and bold */
.navbar-nav .nav-link.active {
  font-weight: 700;
}

.navbar-nav .nav-link.active::after {
  width: 100%;
}
</style>
