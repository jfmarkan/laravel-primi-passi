<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boolean Classe #98</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1>BOOLEAN Classe #98</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p>This is my first Laravel try. What I intended to do is to create 3 files to list a relational array in every single file wht the names of the Students, the Teachers, and all the other members of Boolean that work together to drive us through the process of becoming Professional Full-Stack web developers.</p>
            </div>
        </div>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown button
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('students') }}">Students</a></li>
                <li><a class="dropdown-item" href="{{ route('teachers') }}">Teachers</a></li>
                <li><a class="dropdown-item" href="{{ route('advisors') }}">Advisors</a></li>
            </ul>
        </div>
        <div class="row d-flex justify-content-between mb-4">
        @foreach ($advisors as $advisor)
            <div class="col-3 mt-4">
                <div class="card">
                    <img src="{{ $advisor['img'] }}" class="card-img-top" alt="{{ $advisor['name'] }}'s Picture" style="max-height:304px; object-fit:cover;">
                    <div class="card-body">
                        <h4 class="card-text text-center fw-bold">{{ $advisor['name'] }} {{ $advisor['surname'] }}</h4>
                        <p class="card-text text-center">{{ $advisor['role'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>