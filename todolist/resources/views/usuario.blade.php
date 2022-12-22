<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/login.css') }}" rel="stylesheet" type="text/css">
</head>

<body>

  <form class="container border border-dark w-25 p-3" action="{{route('tarea')}}">

    <div class="form-outline mb-4 w-75" id="correo"> <!-- Email input -->
      <label class="form-label" for="correo">Email address</label>
      <input type="email" class="form-control"/>
    </div>

    <div class="form-outline mb-4 w-75" id="passw"> <!-- Password input -->
      <label class="form-label" for="passw">Password</label>
      <input type="password" class="form-control"/>
    </div>

    <div class="row mb-4"> <!-- 2 column grid layout for inline styling -->

      <div class="col d-flex justify-content-center">

        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
          <label class="form-check-label" for="form2Example31"> Remember me </label>
        </div>

      </div>

      <div class="col">
        <a href="#!">Forgot password?</a>
      </div>

    </div>

    <button class="btn btn-primary mb-4 container">Sign in</button> <!-- Submit button -->

  </form>

  <script src="{{ asset('https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js') }}"></script>
  <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/login.js') }}"></script>

</body>

</html>
