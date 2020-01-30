
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Create New User</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="modal-form" action="{{ route('users.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="fname">FirstName</label>
                        <input name="fname" type="text" class="form-control" id="fname">
                    </div>
                    <div class="form-group">
                        <label for="lname">LastName</label>
                        <input name="lname" type="text" class="form-control" id="lname">
                    </div>
                    <div class="form-group">
                        <label for="age">Age</label>
                        <input name="age" type="text" class="form-control" id="age">
                    </div>
                    <div class="form-group">
                        <label for="cnic">Cnic</label>
                        <input name="cnic" type="text" class="form-control" id="cnic">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input name="email" type="text" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input name="password" type="password" class="form-control" id="password">
                    </div>

                    <button id="submit"  type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
            <div class="modal-footer">
                <button  type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
