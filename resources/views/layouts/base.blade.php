<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- TODO adjust CSP after hosting  --}}
    <meta http-equiv="Content-Security-Policy" content="script-src 'self' https://journaling-website.test:5173; script-src-elem 'self' https://journaling-website.test:5173;">
    <title>MEGUSTO</title>
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet"> --}}
    {{-- <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script> --}}
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
    <body class="bc-body-color">
    {{ $slot }}
    </body>
</html>
