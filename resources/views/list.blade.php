<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div style="text-align: right; margin-top:50px">
            <a style="display-inline:block; float: left;" href="{{ url('user/create') }}"class="btn btn-success">User Create</a>
            <a style="display:inline; text-align:right" href="{{ url('logout') }}" class="btn btn-primary" style=" margin-top:100px"> Logout </a >

        </div>



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
            <tbody>
                @foreach ($users as $user)
                    <tr class="@if ($user->id == Auth::user()->id) {{ 'table-warning' }} @endif">
                        <td>{{ $user->first_name }}</td>
                        <td>{{ $user->last_name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->password }}</td>
                        <td>{{ $user->mobile }}</td>
                        <td>{{ $user->gender }}</td>
                        <td>
                            <div style="display: flex; gap: 5px;">
                                <a href="{{ url('user/edit/'. $user->id) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ url('user/delete/'. $user->id) }}" class="btn btn-danger">Delete</a>
                            </div>
                        </td>



                        <td><a href="{{ url('user/'.$user->id ) }}">View</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>

