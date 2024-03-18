<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Alumni Registration</title>
</head>
<body>
    <div class="container ">
        <form class="form" action="{{ route('alumni.store') }}" method="POST" enctype="multipart/form-data">
            {{-- FIRST NAME --}}
            <div class="mb-2">
                <input type="text" placeholder="enter first name" name="firstname" id="firstname">
            </div>

            {{-- LAST NAME --}}
            <div class="mb-2">
                <input type="text" name="lastname" id="lastname" placeholder="enter last name">
            </div>

            {{-- GENDER --}}
            <div class="mb-2">
                <input type="text" name="gender" id="gender" placeholder="enter gender">
            </div>

            {{-- GRADUATION YEAR --}}
            <div class="mb-2">
                <input type="number" name="graduation_year" id="graduation_year" placeholder="enter graduation year">
            </div>

            {{-- MAJOR --}}
            <div class="mb-2">
                <input type="text" name="major" id="major" placeholder="enter your major">
            </div>

            {{-- BIO --}}
            <div class="mb-2">
                <textarea type="text" name="bio" id="bio" placeholder="enter bio"></textarea>
            </div>

            {{-- PROFILE PICTURE --}}
            <div class="mb-2">
                <input type="file" name="profile_picture" id="profile_picture" >
            </div>

            {{-- WEBSITE/PORTFOLIO URL --}}
            <div class="mb-2">
                <input type="url" name="website_portfolio_url" id="website_portfolio_url" placeholder="Website/Portfolio Link (optional)">
            </div>

            {{-- LINKEDIN URL --}}
            <div class="mb-2">
                <input type="url" name="linkedin_url" id="linkedin_url" placeholder="LinkedIn Profile (optional)">
            </div>

            {{-- SOCIAL MEDIA LINKS --}}
            <div class="mb-2">
                <input type="text" name="socialmedia_link" id="socialmedia_link" placeholder="Social media Profile (optional)">
            </div>

            {{-- PHONE NUMBER --}}
            <div class="mb-2">
                <input type="tel" name="phonenumber" id="phonenumber" placeholder="Phone number (optional)">
            </div>

            {{-- SUBMIT BUTTON --}}
            <div class="mb-4">
                <button type="submit" class="py-2 px-4 bg-blue-500 hover:bg-blue-600 text-white rounded-md">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
