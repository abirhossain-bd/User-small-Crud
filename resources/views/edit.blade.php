<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <style>
        .card-registration .select-input.form-control[readonly]:not([disabled]) {
        font-size: 1rem;
        line-height: 2.15;
        padding-left: .75em;
        padding-right: .75em;
        }
        .card-registration .select-arrow {
        top: 13px;
        }
    </style>

</head>

<body>
    <div class="row">
        <div class="container">
            <section class="h-100 bg-dark">
                <div class="container py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col">
                            <div class="card card-registration my-4">
                                <div class="row g-0">
                                    <div class="col-xl-4 d-done  d-xl-block">
                                        <img  style="height: 500px"  src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.webp"
                                            alt="Sample photo" class="img-fluid"
                                            style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                                    </div>
                                    <div class="col-xl-8">
                                        <div class="card-body p-md-5 text-black">
                                            <h3 class="mb-5 text-uppercase">User Edit</h3>

                                            <div>
                                                <form action="{{ url('user/update/'.$user->id) }}" method="POST">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-6 mb-4">
                                                            <div data-mdb-input-init class="form-outline">
                                                                <input name="first_name" type="text" id="form3Example1m"
                                                                    class="form-control form-control-lg" value="{{ $user->first_name }}" />
                                                                <label class="form-label" for="form3Example1m">First
                                                                    name</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-4">
                                                            <div data-mdb-input-init class="form-outline">
                                                                <input name="last_name" type="text" id="form3Example1n"
                                                                    class="form-control form-control-lg" value="{{ $user->last_name }}" />
                                                                <label class="form-label" for="form3Example1n">Last name</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6 mb-4">
                                                            <div data-mdb-input-init class="form-outline">
                                                                <input name="email" type="text" id="form3Example1m1"
                                                                    class="form-control form-control-lg" value="{{ $user->email }}" />
                                                                <label class="form-label" for="form3Example1m1">Email</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-4">
                                                            <div data-mdb-input-init class="form-outline">
                                                                <input name="mobile" type="number" id="form3Example1n1"
                                                                    class="form-control form-control-lg" value="{{ $user->mobile }}" />
                                                                <label class="form-label" for="form3Example1n1">Mobile</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                                                        <h6 class="mb-0 me-4">Gender: </h6>

                                                        <div class="form-check form-check-inline mb-0 me-4">
                                                            <input name="gender" value="female"  type="radio"
                                                                   @if ($user->gender == 'female') {{ "checked" }} @endif />
                                                            <label class="form-check-label" for="femaleGender">Female</label>
                                                        </div>

                                                        <div class="form-check form-check-inline mb-0 me-4">
                                                            <input name="gender" value="male"  type="radio"
                                                            @if ($user->gender == 'male') {{ "checked" }} @endif />
                                                            <label class="form-check-label" for="maleGender">Male</label>
                                                        </div>



                                                    </div>


                                                    <div class="d-flex justify-content-end pt-3">
                                                        <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                                            class="btn btn-warning btn-lg ms-2">Update</button>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>

</html>
