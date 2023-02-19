<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} - Forgot password</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body class="bg-dark">
    <main>
        <div class="container">
            <div class="row vh-100">
                <div class="col-md-6 m-auto border p-3 px-5 bg-white rounded shadow">
                    <h1 class="display-3 fw-bold text-center mb-5">Forgot password</h1>
                    <form>
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example1">Email address:</label>
                            <input type="email" name="email" placeholder="Email address..." id="form2Example1" class="form-control form-control-lg" />
                        </div>
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary  w-100 btn-lg rounded d-block mb-4">Send verification</button>
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
