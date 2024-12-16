@extends('layout.admin')
@section('content')
    <div class="row">
        <div class="col">
            <h2 class="display-2">
                Add a student profile
            </h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="{{ route('students.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="mb-3">
                    <label for="fname" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="fname" name="fname">
                </div>
                <div class="mb-3">
                    <label for="lname" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lname" name="lname">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="text" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3">
                    <label for="course_name" class="form-label">Select Course</label>
                    <div id="course_name">
                        @foreach ($courses as $course)
                            <div>
                                <input type="checkbox" name="course_name[]" value="{{ $course->id }}" id="course_{{ $course->id }}">
                                <label for="course_{{ $course->id }}">{{ $course->course_name }}</label>
                            </div>
                        @endforeach
                    </div>
                <button type="submit" class="btn btn-primary">Add Student</button>
            </form>
        </div>
    </div>
@endsection