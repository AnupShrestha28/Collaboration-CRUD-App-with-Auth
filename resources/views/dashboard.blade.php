<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Page</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-md-12">
                <h2>This is dashboard page</h2>
                <h3>Welcome</h3>
            </div>

            <div>
                <a href="" class="btn btn-primary">Login</a>
                <a href="" class="btn btn-secondary">Register</a>
            </div>

            <form action="" method="get"><br>
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>

            <div class="container" style="margin-top: 50px;">
                <div class="row">
                    <div class="col-md-12">
                        <h2 style="text-align: center">Student List</h2>
                    </div>

                    <div>
                        <a href="{{url('add-student')}}" class="btn btn-primary">Add Student</a>
                    </div>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Anoop Shrestha</td>
                                <td>anoop@gmail.com</td>
                                <td>9817173790</td>
                                <td>Naxal</td>
                                <td><a href="" class="btn btn-primary">Edit</a> <a href="" class="btn btn-danger">Delete</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>