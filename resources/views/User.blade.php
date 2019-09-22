<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Table</title>
</head>
<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
<body>
<h1>Bang User</h1>
<form action="" method="post">
    @csrf
    <label>Age</label>
    <select name="age">
        <option value="20">20</option>
        <option value="20">20</option>
        <option value="20">20</option>
    </select>

    <label>Wight</label>
    <select name="weight">
        <option value="50">50</option>
        <option value="60">60</option>
        <option value="57">57</option>
    </select>
    <input type="submit" value="Seach">
</form>

<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">Name</th>
        <th scope="col">Age</th>
        <th scope="col">Weight</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
    <tr>
        <td>{{$user['name']}}</td>
        <td>{{$user['age']}}</td>
        <td>{{$user['weight']}}</td>
    @endforeach
    </tr>
        <tr>
            <th>Average Age</th>
            <th>Average Weight</th>
        </tr>
        <tr>
            <td>{{$aveAge}}</td>
            <td>{{$avgWeight}}</td>
        </tr>
    </tbody>
</table>
</body>
</html>
