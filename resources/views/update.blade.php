<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update record</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <form id="update_form" method="POST">
            @csrf
            Name: <input type="text" id="name" name="name" required="required" placeholder="Ivan Ivanov" value="{{$data->name}}" class="form-control"> <br />
            Email: <input type="text" id="email" name="email" value="{{$data->email}}"  required="required" placeholder="ivan@gmail.com" class="form-control"> <br />
            Level: <input type="text" id="level" name="level" value="{{$data->level}}"  required="required" placeholder="senior" class="form-control"> <br />
            Experience: <input type="text" id="experience" value="{{$data->experience}}"  required="required" name="experience" placeholder="7" class="form-control"> <br />
            <div class="d-grid gap-2 col-6 mx-auto">
                <button type="submit" class="btn btn-success" name="btn">UPDATE RECORD</button>
                <a href="{{route('welcome')}}" class="btn btn-warning">BACK TO MAIN PAGE</a>
            </div>
        </form>
    </div>
</body>
</html>