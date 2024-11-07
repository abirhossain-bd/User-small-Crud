<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>
    <div class="row">
        <section class="vh-100" style="background-color: #4f4040;">
            <div class="container h-100" >
              <div class="row d-flex justify-content-center align-items-center h-100" >
                <div class="col-lg-12 col-xl-11" >
                  <div class="card text-black" ">
                    <div class="card-body p-md-5" style="background-color: rgb(158, 134, 134) ; border-radius:25px;">
                      <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                          <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Login</p>

                          <form action="{{ url('login') }}" method="POST" class="mx-1 mx-md-4">
                            @csrf

                            <div class="d-flex flex-row align-items-center mb-4">
                              <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                              <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                <input name="email" type="text" id="form3Example3c" class="form-control" />
                                <label class="form-label" for="form3Example3c">Your Email</label>
                              </div>
                            </div>

                            <div class="d-flex flex-row align-items-center mb-4">
                              <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                              <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                <input name="password" type="password" id="form3Example4c" class="form-control" />
                                <label class="form-label" for="form3Example4c">Password</label>
                              </div>
                            </div>


                            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                              <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg">Login</button>
                            </div>

                            <div>
                                <p>Haven't any account? <a href="{{ url('register') }}">click here</a> to register</p>
                            </div>

                          </form>

                        </div>
                        <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                            class="img-fluid" alt="Sample image">

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>