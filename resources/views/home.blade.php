<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container" >
        <h1 class="text-center p-2">Phonebook</h1>
        <div class="table-container">
            <table class="table table-striped vertical-align: middle">
                <thead>
                    <tr class="align-middle">
                        <th>#</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>
                            <a href="/edit" class="btn btn-success">Add new</a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                @foreach($datas as $data)
                    <tr class="align-middle"> 
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->phone }}</td>
                        <td>{{ $data->email }}</td>
                        <td>
                            <a href="/edit?action=update&id={{ $data->id }}" class="btn btn-warning">update</a>
                            <a href="/edit?action=delete&id={{ $data->id }}" class="btn btn-danger">delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>