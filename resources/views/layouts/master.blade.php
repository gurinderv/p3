<!doctype html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to "Hacker's Best Friend" --}}
        @yield('title', "Hacker's Best Friend Toolkit")
    </title>

    <meta charset='utf-8'>
    <link href="/css/view.css" type='text/css' rel='stylesheet'>

    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')
    
    <style>
    body 
        {
        background-color: black;
        color: #1E90FF;
        }
    </style>

</head>
<body>

    <header>
        <img class="logoImg" src='http://2.bp.blogspot.com/-sr-vjmy9uUc/UacqykvBfaI/AAAAAAAAAEE/m242AGAe9FA/s1600/Logo-6-hacker.jpg'
        alt='Hacker Logo'>
        
        <h1>The Hacker's Best Friend Toolkit</h1>
        
        {{-- Variable subheading for each page --}}
        <h2>@yield('subheadline')</h2>
    </header>

    <section>
        {{-- Main page content will be yielded here --}}
        <p>
        @yield('content')
    </section>

    <footer>
        &copy; {{ date('Y') }} Gurinder Virdi  |  Note: This site is for entertainment purposes only, all names and information is fictitious. 
    </footer>

    
    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')
    
    
   {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>  --}}


</body>
</html>