<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Mail</title>
</head>

<body>
    <h3>Здравствуйте {{$messages_models->name}} {{$messages_models->surname}}</h3>
    <h3>Ваш email {{$messages_models->email}}</h3>
    
    <img src="{{ $message->embed(public_path('storage/images/'.$messages_models->image))}}">
</body>

</html>