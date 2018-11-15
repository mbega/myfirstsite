<!doctype html>
<html>
    <head>
        <title>@yield('page_title',"JCSCM")</title>
    </head>
    <body>
        @yield('upcontent')

        <ul>
        	<li><a href="/about">About</a> us</li>
        	<li><a href="/contact">Contact</a> us here</li>
            <li>Go <a href="/">Home</a></li>
        </ul>
        
        @yield('downcontent')
    </body>
</html>