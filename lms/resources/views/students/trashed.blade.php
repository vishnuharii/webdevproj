@extends('layouts/admin')
@section('content')

<div class="row">
    <div class="col">
        <h1 class="display-2">
            Deleted Students
        </h1>
    </div>
</div>
<div class="row">
    @foreach ($students as $student)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        {{ $student -> fname}} {{ $student -> lname }}
                    </h5>
                    <a href="{{ route('students.restore', $student -> id) }}" class="card-link">Restore</a>
                    <form action="{{ route('students.destroy', [$student -> id]) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit">Delete</button>
                    </form>


                </div>

            </div>
        </div>
    @endforeach
</div>
@endsection
