@extends('layout.admin')
@section('content')

    <div class="row">
        <div class="col">
            <h1 class="display-2">All faculties</h1>
        </div>
    </div>
    <div class="row">
        @foreach ($faculties as $faculty)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            {{$faculty -> name}}
                        </h5>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
<style>
    /* General Styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
}

h1 {
    color: #333;
    margin-bottom: 20px;
    text-align: center;
}

.row {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
}

.col-md-4 {
    flex: 0 0 calc(33.333% - 20px);
    box-sizing: border-box;
}

/* Card Styles */
.card {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transition: transform 0.2s, box-shadow 0.2s;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
}

.card-body {
    padding: 20px;
    text-align: center;
}

.card-title {
    font-size: 1.25rem;
    color: #555;
    margin-bottom: 10px;
}

.card a {
    text-decoration: none;
    color: #007bff;
    font-weight: bold;
    margin: 0 5px;
}

.card a:hover {
    color: #0056b3;
    text-decoration: underline;
}

/* Action Links */
.col > a {
    display: inline-block;
    margin: 10px 10px 20px;
    padding: 10px 20px;
    font-size: 1rem;
    color: #fff;
    background-color: #007bff;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.2s;
}

.col > a:hover {
    background-color: #0056b3;
}

/* Responsive Design */
@media (max-width: 768px) {
    .col-md-4 {
        flex: 0 0 calc(50% - 20px);
    }
}

@media (max-width: 480px) {
    .col-md-4 {
        flex: 0 0 calc(100% - 20px);
    }
}
</style>