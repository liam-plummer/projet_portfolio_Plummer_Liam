<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">iPortfolio</a>
    </nav> 
    <table class="table w-75 mx-auto my-5">
        <thead>
            <tr>
                <th scope="col">DoB</th>
                <th scope="col">Website</th>
                <th scope="col">Phone</th>
                <th scope="col">City</th>
                <th scope="col">Age</th>
                <th scope="col">Degree</th>
                <th scope="col">Email</th>
                <th scope="col">Freelance</th>
                <th scope="col">Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $e)
            <tr>
                <td>{{$e->birthday}}</td>
                <td>{{$e->website}}</td>
                <td>{{$e->phone}}</td>
                <td>{{$e->city}}</td>
                <td>{{$e->age}}</td>
                <td>{{$e->degree}}</td>
                <td>{{$e->email}}</td>
                <td>{{$e->freelance}}</td>
                <td><a href="{}/edit" class="btn btn-success">Edit</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <table class="table w-75 mx-auto my-5">
        <thead>
            <tr>
                <th scope="col">Language</th>
                <th scope="col">Percentage</th>
                <th scope="col">Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach($skills as $e)
            <tr>
                <td>{{$e->language}}</td>
                <td>{{$e->percentage}}</td>
                <td>filler</td>

            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
