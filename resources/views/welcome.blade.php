<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>


<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">

                <div class="card-header">
                    <h1 class="text-center">Users</h1>
                    <a href="#" class="btn btn-success btn-lg float-right mb-2" data-toggle="modal"
                       data-target="#myModal">
                        +Add New User</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">FirstName</th>
                            <th scope="col">LastName</th>
                            <th scope="col">Age</th>
                            <th scope="col">Cnic</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @include('partial')
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

@include('create')
@include('confirmation')



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
<script>
    $("#create-form").submit(function (event) {
        event.preventDefault();
        var that = $(this),
            url = that.attr('action'),
            method = that.attr('method'),
            data = $("#create-form").serialize();

        $.ajax({
            url: url,
            type: method,
            data: data,
            success: function (response) {
                $('tbody').html(response);
                $('#myModal').modal('hide');
                $('#myModal').on('hidden', function () {
                    $(this).removeData('modal');
                });
                alert("User Added");
            }
        });
    });

</script>
<script>
    function fetchuser(id) {
        var user_id = id;
        $.ajax({
            url: '/api/users/' + id,
            type: 'Get',
            success: function (data) {
                var data=data;
                console.log(data);
                // $('#editModal').modal('show');
            }
        });

    }

    // $(".edit-btn").on('click', function (e) {
    //     $("#editModal").modal('show');
    //     $(".edit-form").submit(function (event) {
    //         event.preventDefault();
    //         var that = $(this);
    //
    //         $.ajax({
    //             url: that.attr('action'),
    //             type: 'PATCH',
    //             data: $("#edit-form").serialize(),
    //             success: function (response) {
    //                 that.closest('tr').val(response);
    //             }
    //         });
    //     });
    // });


</script>
<script>


    $(".delete-btn").on('click', function (event) {
        event.preventDefault();
        var that = $(this);
        $.ajax({
            url: that.attr('href'),
            type: 'DELETE',
            success: function (response) {
                that.closest('tr').remove();
                alert("User Deleted");
            }
        });
    });

</script>


</body>

</html>
