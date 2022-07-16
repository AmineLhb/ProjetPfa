<!DOCTYPE html>
<html lang="en" dir='{{ App::getLocale() == 'ar' ? 'rtl' : 'ltr' }}'>

<head>
    <title>Modariss</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="og:title" content="{{$product->name}}"/>
{{--    <meta property="og:type" content="movie"/>--}}
{{--    <meta property="og:url" content="http://www.imdb.com/title/tt0117500/"/>--}}
    <meta property="og:image" content="{{ Storage::url($product->image) }}"/>
{{--    <meta property="og:site_name" content="IMDb"/>--}}
{{--    <meta property="fb:admins" content="USER_ID"/>--}}
    <meta property="og:description"
          content="{{$product->description}} "/>


</head>

<body id="body" data-spy="scroll" data-target=".navbar" data-offset="100">
    

</body>

</html>
