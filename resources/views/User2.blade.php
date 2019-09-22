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
<h1>Bang Select</h1>

<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">Search</th>
    </tr>
    </thead>
    <tbody>
    @foreach($arr as $item)
        <tr>
            <td>{{$item}}</td>
            @endforeach
        </tr>



    </tbody>
</table>
</body>
</html>
