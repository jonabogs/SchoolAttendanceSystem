@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-8 offset-md-2">
   <h1 class="welcome">
    Welcome to <span style="color: rgb(222, 18, 137);">Pink University!</span>
</h1>

    <h4 class="miss"">Mission</h4>
    <p class="p">We aim to support teachers in tracking students’ performance with ease while fostering accountability
        and discipline among learners. By integrating technology into daily operations, we strive to enhance
        the educational experience for both educators and students. We are committed
        to providing a user-friendly and reliable system that encourages responsibility and continuous improvement
        within the school community.</p>

    <h4 class = "miss">Vision</h4>
    <p class="p">- We envision a modern learning environment where technology empowers schools to achieve excellence in management and education.<br>
- We aspire to become a leading model of innovation that bridges learning and digital transformation.<br>
- We see a future where every student’s attendance reflects a commitment to growth, discipline, and success.</p>

<style>
  .miss {
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size: 35px;
    font-weight: bold;
      text-align: center;
    margin: 0 auto 20px 0;"

  }
  .welcome{
     font-family: 'Times New Roman', Times, serif;
     font-weight: bold;
     font-size: 50px;
     text-align: center;"

  }
  .p{
    font-family: 'arial';
    font-size: 20px;
  }
  .btn btn-danger{
      align-content: center;
  }
</style>

    <div class ="mt-3 d-flex justify-content-center">
      <!-- Dark pink (Bootstrap danger) -->
      <a href="{{ route('attendances.index') }}" class="btn btn-danger me-3">View Attendances</a>

      <!-- Light pink (Bootstrap light) -->
      <a href="{{ route('students.index') }}" class="btn btn-light text-danger border-danger">View Students</a>
    </div>
  </div>
</div>
@endsection
