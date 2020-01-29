@foreach($users as $user)
    <tr>
        <td>{{$user->fname}}</td>
        <td>{{$user->lname}}</td>
        <td>{{$user->age}}</td>
        <td>{{$user->cnic}}</td>
        <td><a onclick="fetchuser({{$user->id}})" class="edit-btn btn btn-warning btn-sm">Edit</a>
            @include('edit')
        </td>
        <td>
            <a class="delete-btn btn btn-danger btn-sm" href="{{route('users.destroy',['user'=>$user->id])}}"
               class="btn btn-danger btn-sm">Delete</a></td>
    </tr>
@endforeach
