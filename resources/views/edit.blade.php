<!-- Modal -->
<div class="modal fade" id="editModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit New User</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="{{ route('users.update',['user'=>$user->id]) }}" method="POST" class="edit-form">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <label for="fname">FirstName</label>
                        <input name="fname" type="text" class="form-control" value="{{$user->fname}}" id="fname">
                    </div>
                    <div class="form-group">
                        <label for="lname">LastName</label>
                        <input name="lname" type="text" class="form-control" value="{{$user->lname}}" id="lname">
                    </div>
                    <div class="form-group">
                        <label for="age">Age</label>
                        <input name="age" type="text" class="form-control" value="{{$user->age}}" id="age">
                    </div>
                    <div class="form-group">
                        <label for="cnic">Cnic</label>
                        <input name="cnic" type="text" class="form-control" value="{{$user->cnic}}" id="cnic">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input name="email" type="text" class="form-control" value="{{$user->email}}"
                               id="exampleInputEmail1"
                               aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input name="password" type="password" class="form-control" value="{{$user->password}}"
                               id="exampleInputPassword1">
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
            <div class="modal-footer">
                <button id="close-btn" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
