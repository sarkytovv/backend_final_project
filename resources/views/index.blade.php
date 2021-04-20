<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
@foreach($clients_models as  $clients_modelss)
    <tr class="active">
    <td>{{ $clients_modelss->name}}</td>
    <td>{{ $clients_modelss->surname}}</td>
    <td>{{ $clients_modelss->email}}</td>
    <td>{{ $clients_modelss->password}}</td>
    </tr>
@endforeach
</body>
</html>