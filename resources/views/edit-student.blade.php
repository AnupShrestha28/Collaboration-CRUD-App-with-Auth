<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Student</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-md-12">
                <h2>Edit Student</h2>
            </div>

            <form action="{{url('update-student')}}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$data->id}}">
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter name" value="{{$data->name}}">
                    @error('name')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter email" value="{{$data->email}}">
                    @error('email')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Phone</label>
                    <input type="phone" name="phone" class="form-control" placeholder="Enter phone" value="{{$data->phone}}">
                    @error('phone')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <textarea name="address" class="form-control" placeholder="Enter Address">{{$data->address}}</textarea>
                    @error('address')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                @enderror
                </div>

                <br>

                <button type="submit" class="btn btn-primary">Submit</button>

                <a href="{{url('dashboard')}}" class="btn btn-danger">Go Back</a>
            </form>
        </div>
    </div>
</body>
</html>