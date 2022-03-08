<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Happy Book Store}</title>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="title">
      <h1>HAPPY BOOK STORE</h1>
    </div>

    <div class="d-flex flex-row justify-content-center">
      <a class="home" href="/">Home</a>
      <div class="dropdown show">
        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Category
        </a>
      
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            @foreach ($categories as $category)
                <a class="dropdown-item" href="/category/{{ $category->id }}">{{ $category->category }}</a>
            @endforeach
        </div>
      </div>
      <a class="category" href="/contact">Contact</a>
    </div>
   
    <div class="d-flex flex-row justify-content-lg-between mt-3">
      <div class="main-content">
          @yield('content')
      </div>
      
      <div class="category d-flex flex-column">
          <h3>Category</h3>
            @foreach ($categories as $category)
              <a href="/category/{{ $category->id }}">{{ $category->category }}</a>
            @endforeach
      </div>
    </div>

    <footer class="d-flex flex-column align-items-center">
      &copy; Happy Book Store 2021
    </footer>
</body>
</html>