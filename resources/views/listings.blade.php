<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @extends('layout')
    @section('content')
    <h1>{{$heading}}</h1>
    @unless(count($listings) == 0)
    @foreach ($listings as $listing)
    <h2>
        <a href="/listings/{{$listing['id']}}">{{$listing['title']}}</a>
    </h2>
    <p>
        {{$listing['description']}}
    </p>
    @endforeach
    @else 
    <p>No listings found</p>
    @endunless
    @endsection
</body>
</html>