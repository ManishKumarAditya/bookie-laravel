<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>homepage</title>
<link href="{{asset('bootstrap.css')}}" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3">
                <form action="" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">contact</label>
                        <input type="text" name="contact" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">city</label>
                        <input type="text" name="city" class="form-control">
                    </div>
                    <div class="form-group">
                        
                        <input type="submit" name="send" class="btn btn-danger btn-block">
                    </div>
                </form>
            </div>
            <div class="col-lg-9">
                <table class="table">
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>contact</th>
                    <th>city</th>
                </tr>
                @foreach ($data as $d)
                <tr>
                <td>{{$d->id}}</td>
                <td>{{$d->name}}</td>
                <td>{{$d->contact}}</td>
                <td>{{$d->city}}</td>
                <td><a href="{{route('delete',['id'=>$d->id])}}" class="btn btn-danger">Delete</a></td>
                </tr>
                    
                @endforeach
                </table>

            </div>
        </div>
    </div>
</body>
</html>