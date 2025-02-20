<!DOCTYPE html>
<html>
<head>
    <title>Restaurant List</title>
</head>
<body>
    <h1>Top Restaurants</h1>
    <ul>
        @foreach ($restaurants as $restaurant)
            <li>
                <strong>{{ $restaurant['name'] }}</strong><br>
                Cuisine: {{ $restaurant['cuisine'] }}<br>
                Rating: ⭐ {{ $restaurant['rating'] }}
            </li>
        @endforeach
    </ul>
</body>
</html>
