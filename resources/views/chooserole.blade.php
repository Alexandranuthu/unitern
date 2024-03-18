<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/role.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d498033423.js" crossorigin="anonymous"></script>
    <title>Choose Role</title>
</head>
<body>
    <style>
        .grayscale{
            filter: grayscale(100%) brightness(10);
            width: 100%;
        }
        a{
            text-decoration: none;
        }
    </style>
    <h1>CHOOSE ROLE</h1>
    <div class="container">
        <a href="{{ route('alumniprofile.create') }}">
            <div class="card" style="width: 20rem;">
                <img src="{{ asset('icons/alumni-icon.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                <h3>ALUMNI</h3>
                  <p class="card-text">Create an alumni profile showcasing your significant contributions in your fields. Point out your success stories, achievements, and experiences.</p>
                </div>
              </div>
        </a>

          <div class="card" style="width: 20rem;">
            <img src="{{ asset('icons/recruiter-icon.png') }}" class="card-img-top grayscale" alt="...">
            <div class="card-body">
            <h3>EMPLOYER</h3>
              <p class="card-text">Explore opportunities to connect with top talent and grow your team. Our platform offers innovative solutions for recruitment, networking, and professional development.</p>
            </div>
          </div>
    </div>
</body>
</html>
