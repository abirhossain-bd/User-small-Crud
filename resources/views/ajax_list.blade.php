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
                <a href="{{ url('user/edit/' . $user->id) }}" class="btn btn-primary">Edit</a>
                <a href="{{ url('user/delete/' . $user->id) }}" class="btn btn-danger">Delete</a>
                <a href="#" class="btn btn-danger user_delete" data-id="{{ $user->id }}">Destroy by Ajax</a>
            </div>
        </td>



        <td><a href="{{ url('user/' . $user->id) }}">View</a></td>
    </tr>
@endforeach
