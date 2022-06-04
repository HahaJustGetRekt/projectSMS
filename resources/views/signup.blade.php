<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Sign Up</title>
    <style>
        .form .form-error {
            font-size: .75rem;
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
<section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form method="post" action="{{route('signup.store')}}" class="form">
                @csrf
                <div class="form-outline mb-4">
                  <input type="text" name="name" id="form3Example1cg" class="form-control form-control-lg" value="{{ old('name') }}" />
                  <label class="form-label" for="form3Example1cg">Username</label>
                    @error('name')
                        <div class="form-error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-outline mb-4">
                  <input type="email" name="email" id="form3Example3cg" class="form-control form-control-lg" value="{{ old('email') }}" />
                  <label class="form-label" for="form3Example3cg">Email</label>
                     @error('email')
                        <div class="form-error">
                            {{ $message }}
                        </div>
                     @enderror
                </div>

                <div class="form-outline mb-4">
                  <input type="password" name="password" id="form3Example4cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cg">Password</label>
                    @error('password')
                        <div class="form-error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-outline mb-4">
                  <input type="password" name="password" id="form3Example4cdg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                    @error('password')
                        <div class="form-error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="d-flex justify-content-center">
                  <input type="submit" value="Register"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">
                </div>

                <p class="text-center text-muted mt-5 mb-0">Already have an account? <a href="/login-view"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>