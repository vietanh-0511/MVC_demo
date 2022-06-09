<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <div class="card">
        <div class="card-header">
            <h3 class="text-center"> List Products </h3>
            <a href="{{ url('/add')}}">Add Item</a>
        </div>
        <div class="card-body">
            <div class="container">
                @isset($msg)
                    <h1>Có tất cả {{ $msg }} kết quả tìm kiếm</h1>
                @endisset

                @foreach ($products->chunk(3) as $chunk)
                    <div class="row">
                        @foreach ($chunk as $item)
                            <div class="col text-center">
                                <b>{{ $item->product_name }}</b> <br>
                                <img src="{{ asset('images/'.$item->image) }}" width="200px" height="200px"> <br>
                                <i>{{ $item->price }} đ</i>
                            </div>
                            <div>
                                <a type="button" href="{{ url('update/'.$item->id) }}">Update</a>
                                <a type="button" href="{{ url('delete/'.$item->id) }}">Delete</a>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</body>

</html>
