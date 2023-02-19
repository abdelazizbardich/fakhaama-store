<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} - Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body class="bg-dark">
    <main>
        <div class="container">
            <div class="row vh-100">
                <div class="col-md-6 m-auto border p-3 px-5 bg-white rounded shadow">
                    <h1 class="display-3 fw-bold text-center mb-5">Login</h1>
                    @if ($errors->any())
                                <div class="col-12">
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li class="mb-0">{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @endif
                    <form action="{{url('login')}}" method="POST">
                        @csrf
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example1">Email address:</label>
                            <input type="email" name="email" placeholder="Email address..." value="{{old('email')}}" id="form2Example1" class="form-control form-control-lg" />
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example2">Password:</label>
                            <input name="password" type="password" placeholder="Password..." id="form2Example2" class="form-control form-control-lg" />
                        </div>

                        <!-- 2 column grid layout for inline styling -->
                        <div class="row mb-4">
                            <div class="col d-flex justify-content-start">
                                <!-- Checkbox -->
                                <div class="form-check">
                                    <input class="form-check-input" name="remember_me" type="checkbox" id="form2Example31" @if(old('remember_me') == "on") checked @endif />
                                    <label class="form-check-label" for="form2Example31"> Remember me </label>
                                </div>
                            </div>

                            <div class="col-auto">
                                <!-- Simple link -->
                                <a href="{{ url('forgot-password') }}">Forgot password?</a>
                            </div>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary  w-100 btn-lg rounded d-block mb-4">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
</body>

</html>
