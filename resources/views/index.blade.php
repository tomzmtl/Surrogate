<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='https://fonts.googleapis.com/css?family=Raleway:300,700' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="{{ url('css') }}/styles.css">

    </head>
    <body>

        <header>
            <div class="header-logo">
                <h1>Surrogate</h1>
            </div>
            <nav id="header-nav">
                <ul>
                    <li>
                        <a href="api/img/src" data-method="GET" data-type="text">img/src</a>
                    </li>
                    <li>
                        <a href="api/img/tag" data-method="GET" data-type="html">img/tag</a>
                    </li>
                    <li>
                        <a href="api/lorem" data-method="GET" data-type="html">lorem</a>
                    </li>
                    <li>
                        <a href="api/lorem/3" data-method="GET" data-type="html">lorem/3</a>
                    </li>
                </ul>
            </nav>
        </header>

        <main>
            <p class="tagline">
                Surrogate is an API that delivers dummy content.
            </p>
            <p>
                <a href="https://github.com/tomzmtl/Surrogate">See Project on Github</a>
            </p>
            <div id="response"></div>
        </main>

        {{--
        <footer>
            <small>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC BY 3.0</a>.</small>
        </footer>
        --}}

        <script src="{{ url('js') }}/scripts.js"></script>

    </body>
</html>