@props(["user" => null])
<!DOCTYPE html>
<html lang="en" class="html-{{ $user ? $user->setting->font_size : '3' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- TODO adjust CSP after hosting  --}}
    <meta http-equiv="Content-Security-Policy" content="script-src 'self'; script-src-elem 'self';">
    <title>Dear Journal...</title>
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Caveat&family=Patrick+Hand&
    family=Dancing+Script&family=Gloria+Hallelujah&family=EB+Garamond&family=Work+Sans&family=Quicksand
    &family=Poppins&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
    <body class="bc-body-color">
        {{ $slot }}
    </body>
</html>