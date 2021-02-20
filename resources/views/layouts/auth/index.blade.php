<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    {{-- @yield('seo') --}}
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@400;700&family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="/assets/css/frontend/main.css">

    @yield('page-styles')
</head>

<body>
    <div class="wrapper">
        <main class="content">
            @yield('content')
        </main>
    </div>
</body>

</html>