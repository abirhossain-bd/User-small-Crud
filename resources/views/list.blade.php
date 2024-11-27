<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf_token" content="{{ csrf_token() }}" />

    <title>User List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div style="text-align: right; margin-top:50px">


            <a style="float: left; " href="#"class="btn btn-secondary" data-toggle="modal" data-target="#user_create_modal">User Create By Ajax</a>
            <a style="float: left; margin-left:20px" href="{{ url('user/create') }}"class="btn btn-success">User
                Create</a>
            <a style="text-align:right" href="{{ url('logout') }}" class="btn btn-primary" style=" margin-top:100px">
                Logout </a>

        </div>



        <div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Mobile</th>
                        <th>Gender</th>
                        <th>Action</th>
                        <th>Show</th>
                    </tr>
                </thead>
                <tbody id="table_data">

                </tbody>
            </table>
        </div>


        <div class="row mt-5 mb-2">
            <div class="mb-2">
                <a style="display-inline:block; float: left; margin-right:20px"
                    href="#"class="btn btn-info call_ajax">Get Products</a>
                <a style="display-inline:block; float: left; margin-right:20px"
                    href="#"class="btn btn-info call_ajax_post">Ajax call post</a>
            </div>
            <div class="card ">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Brand</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Weight</th>
                            <th>Thumbnail</th>
                        </tr>
                    </thead>
                    <tbody id="products_body">

                    </tbody>
                </table>
            </div>

        </div>

    </div>

    <!-- The Modal -->
    <div class="modal" id="user_create_modal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header justify-content-between">
                    <h4 class="modal-title">Create User</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form method="POST" class="mx-1 mx-md-4" id="user_create_form">
                        @csrf

                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                          <div data-mdb-input-init class="form-outline flex-fill mb-0">
                            <input name="first_name" type="text" id="form3Example1c" class="form-control" />
                            <label class="form-label" for="form3Example1c">First Name</label>
                          </div>
                        </div>
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                          <div data-mdb-input-init class="form-outline flex-fill mb-0">
                            <input name="last_name" type="text" id="form3Example1c" class="form-control" />
                            <label class="form-label" for="form3Example1c">Last Name</label>
                          </div>
                        </div>

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
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fa-solid fa-phone me-3 fa-fw"></i>
                          <div data-mdb-input-init class="form-outline flex-fill mb-0">
                            <input name="mobile" type="number" id="form3Example4c" class="form-control" />
                            <label class="form-label" for="form3Example4c">Mobile No</label>
                          </div>
                        </div>
                        <div class="mb-4">
                            <i class="fa-solid fa-person-half-dress me-3 fa-fw"></i>
                            <label for="gender">Gender-></label>
                            <input style="font-size: 20px" type="radio" name="gender" value="male" class="" /> Male
                            <input style="font-size: 20px" type="radio" name="gender" value="female" class="" /> Female

                        </div>





                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                          <button id="user_create" type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg">Create</button>
                        </div>


                      </form>
                </div>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
            }
        });


        $(document).on('click', '#user_create', function() {
            var formData= $('#user_create_form').serialize();
            $.ajax({
                url: "{{ route('user.store') }}",
                type: "POST",
                data: formData,
                success: function(response) {
                    userList()
                    $('#user_create_modal').modal('hide');
                },
                error: function(error) {
                    console.log(error);

                }
            })
        })

        userList()
        function userList(){
            $.ajax({
                url:"{{ route('user.list') }}",
                type:"GET",
                success:function(response){
                    $('#table_data').html(response);
                },
                error:function(error){
                    console.log(error);

                }
            })
        }


        $(document).on('click','.user_delete', function(){
            var id=$(this).data('id');
            $.ajax({
                url:"{{ route('user.destroy') }}",
                type:"GET",
                data:{id},
                success:function(response){
                    userList()
                },
                error:function(error){
                    console.log(error);

                }
            })
        })







        $(document).on('click', '.call_ajax_post', function() {
            var u_id = 3;
            var url = "Testcache";
            $.ajax({

                url: "{{ route('ajax.post') }}",
                type: "POST",
                data: {
                    u_id: u_id,
                    url: url
                },
                success: function(response) {
                    console.log(response, response.message);


                },
                error: function(error) {

                }
            })
        })

        $(document).on('click', '.call_ajax', function() {
            $.ajax({
                url: "https://dummyjson.com/products",
                type: "GET",
                success: function(response) {
                    console.log(response.products[2]);
                    var products = response.products;
                    for (let x = 0; x < products.length; x++) {
                        var html = '<tr>' +
                            '<td>' + products[x].title + '</td>' +
                            '<td>' + products[x].description + '</td>' +
                            '<td>' + products[x].brand + '</td>' +
                            '<td>' + products[x].category + '</td>' +
                            '<td>' + products[x].price + '</td>' +
                            '<td>' + products[x].stock + '</td>' +
                            '<td>' + products[x].weight + '</td>' +
                            '<td><img src="' + products[x].thumbnail +
                            '" height="100" width="100"></td>' +
                            '</tr>'
                        $('#products_body').append(html);

                    }

                },
                error: function(error) {
                    console.log(error);

                }
            })
        })
    </script>
</body>

</html>
