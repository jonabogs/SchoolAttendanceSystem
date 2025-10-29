@extends('layouts.app')

@section('content')
<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="content-box p-5 shadow-lg">

        <h1 class="welcome">
          Welcome to <span style="color: rgb(222, 18, 137);">Pink University!</span>
        </h1>

        <h4 class="miss">Mission</h4>
        <p class="p text-justify">
          We aim to support teachers in tracking students’ performance with ease while fostering accountability
          and discipline among learners. By integrating technology into daily operations, we strive to enhance
          the educational experience for both educators and students. We are committed
          to providing a user-friendly and reliable system that encourages responsibility and continuous improvement
          within the school community.
        </p>

        <h4 class="miss">Vision</h4>
        <p class="p text-justify">
          - We envision a modern learning environment where technology empowers schools to achieve excellence in management and education.<br>
          - We aspire to become a leading model of innovation that bridges learning and digital transformation.<br>
          - We see a future where every student’s attendance reflects a commitment to growth, discipline, and success.
        </p>

        <div class="mt-4 d-flex justify-content-center">
          <a href="{{ route('attendances.index') }}" class="btn btn-danger me-3">View Attendances</a>
          <a href="{{ route('students.index') }}" class="btn btn-light text-danger border-danger">View Students</a>
        </div>

      </div>
    </div>
  </div>
</div>

<style>
  .content-box {
    background-color: #FFEAEA; /* semi-transparent white */
    border-radius: 20px;
    backdrop-filter: blur(8px);
  }

  .welcome {
    font-family: 'Times New Roman', Times, serif;
    font-weight: bold;
    font-size: 50px;
    text-align: center;
    margin-bottom: 30px;
  }

  .miss {
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size: 35px;
    font-weight: bold;
    text-align: center;
    margin-bottom: 20px;
  }

  .p {
    font-family: Arial, sans-serif;
    font-size: 20px;
    margin-bottom: 25px;
  }
</style>
@endsection
