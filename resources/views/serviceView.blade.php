<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags for SEO -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>UrbanClap Clone</title>

    <!-- Linking Favicon, Apple Touch Icon, Font Awesome, AOS, Bootstrap & CSS -->
    <link rel="icon" href="{{asset('assets/img/favicon.png')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/index.css')}}">

    <!-- No Script -->
    <noscript>Please enable JavaScript to open this page.</noscript>
    
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>

</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background: black">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#"><img src="https://res.cloudinary.com/urbanclap/image/upload/q_auto,f_auto,fl_progressive:steep/t_high_res_template,q_auto:low,f_auto/categories/category_v2/category_425cd8c0.png" alt="UrbanClap" style="width: 200px"></a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Dashboard <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#experience">Experience</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#appliances">Appliances</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#reviews">Reviews</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#cleaning">Cleaning</a>
                </li>
            </ul>
        </div>
    </nav>

    
    <div class="py-3">
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <h1 class="my-4 mx-2" style="font-size: 24px; font-weight: 500">Top servic man for {{ $categoryName }}</h1>
            <div class="bg-white overflow-hidden shadw-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Contact No</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($services as $key => $s)
                            <tr>
                                    <th scope="row">{{ $key +1 }}</th>
                                    <td>{{ $s->name }}</td>
                                    <td>{{ $s->contact_no }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>