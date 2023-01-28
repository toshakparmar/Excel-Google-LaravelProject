<!doctype html>
<html lang="en">
<head>
    <title>Show-Records</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body{
            margin: 5px;
        }
        .heading{
            font-family: serif;
            color: blue;
            background-color: whitesmoke;
            font-weight: bolder;
        }
        table thead tr th{
            color: red;
            font-family: serif;
        }
        table thead tr td{
            color: black;
            font-family: serif;
        }
    </style>
</head>
<body>
    <div class="container text-center heading">
        <h1 class="card-title m-b-0">Show Import File Records</h1>
    </div>
    <table class="table table-striped table-inverse table-responsive">
        <thead class="thead-inverse">
            <tr>
            <th scope="col">ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Job Title</th>
                <th scope="col">Email</th>
                <th scope="col">Birthdate</th>
                <th scope="col">Phone</th>
                <th scope="col">Domain</th>
                <th scope="col">Comments</th>
            </tr>
            </thead>
            <tbody>
                @foreach($data as $row)
                <tr>
                <td>{{$row['id']}}</td>
                <td>{{$row['FirstName']}}</td>
                <td>{{$row['LastName']}}</td>
                <td>{{$row['JobTitle']}}</td>
                <td>{{$row['Email']}}</td>
                <td>{{$row['Birthdate']}}</td>
                <td>{{$row['Phone']}}</td>
                <td>{{$row['Domain']}}</td>
                <td>{{$row['Comments']}}</td>
                </tr>
                @endforeach
            </tbody>
    </table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>
</html>