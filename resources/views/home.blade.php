<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trips</title>
</head>
<body>

    <h1>All our trip</h1>

    @foreach($allTrips as $trip)

        <ul>
            <li>{{$trip -> package_name}}</li>
        </ul>

    @endforeach


    <h1>All trips departing from fromRome</h1>


    @foreach($fromRome as $trip)

        <ul>
            <li>{{$trip -> package_name}}</li>
        </ul>

    @endforeach
    
</body>
</html>