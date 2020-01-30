@foreach($users as $user)
    <tr id="row_{{$user->id}}">
        <td>{{$user->fname}}</td>
        <td>{{$user->lname}}</td>
        <td>{{$user->age}}</td>
        <td>{{$user->cnic}}</td>
        <td>
            <button onclick="fetchuser({{$user->id}})" class="edit-btn btn btn-info btn-sm">Edit</button>
        </td>
        <td>
            <button class="delete-btn btn btn-danger btn-sm" href="{{route('users.destroy',['user'=>$user->id])}}"
                    class="btn btn-danger btn-sm">Delete
            </button>
        </td>
    </tr>
@endforeach
