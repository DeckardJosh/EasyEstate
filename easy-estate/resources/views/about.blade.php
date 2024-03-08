<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/about-hero.css') }}" />

    
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    @livewireStyles
    <title>Easy Estate Home</title>
</head>
<body>
    <header>
        {{-- Navbar Component --}}
        <livewire:navbar/>
        {{-- End Navbar Component --}}
    </header>
    <section>
        {{-- about-hero comp --}}
        <livewire:about-hero/>
        {{-- end about-hero comp --}}
    </section>
    <footer>
        {{-- Footer Component --}}
        <livewire:footer/>
        {{-- End Footer Component --}}
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="{{ asset('js/index.js') }}"></script>
    @livewireScripts
</body>
</html>