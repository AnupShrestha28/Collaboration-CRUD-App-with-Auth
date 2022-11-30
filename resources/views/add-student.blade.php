<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Student</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-md-12">
                <h2>Add Student</h2>
            </div>

            <form action="{{url('save-student')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter name" value="{{old('name')}}">
                    @error('name')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter email" value="{{old('email')}}">
                    @error('email')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Phone</label>
                    <input type="phone" name="phone" class="form-control" placeholder="Enter phone" value="{{old('phone')}}">
                    @error('phone')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <textarea name="address" class="form-control" placeholder="Enter Address">{{old('address')}}</textarea>
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