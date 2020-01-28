@foreach($users as $user)
<tr>
    <td>{{$user->fname}}</td>
    <td>{{$user->lname}}</td>
    <td>{{$user->age}}</td>
    <td>{{$user->cnic}}</td>
    <td><a href="#" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editModal">
            Edit</a>
    </td>
    <td><a href="#" class="btn btn-danger btn-sm">Delete</a></td>
</tr>
@endforeach