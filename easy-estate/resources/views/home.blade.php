<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}" />

    @livewireStyles
    <title>Home Page</title>
</head>
<body>
    <header>
        {{-- Navbar Livewire Component --}}
        <livewire:navbar/>
        {{-- End Navbar Livewire Component --}}
    </header>
    <div class="hero_wrapper">
        <p>from the body</p>
    </div>
    @livewireScripts
</body>
</html>