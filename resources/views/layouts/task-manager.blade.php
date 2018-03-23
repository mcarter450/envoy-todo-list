<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <title>Task Manager</title>

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
            }

            header {
                background-color: #000;
                padding: 10px;
            }

            header .title {
                color: #fff;
            }

            header .logout {
                float: right;
            }

            header .logout > a:link,
            header .logout > a:active,
            header .logout > a:visited {
                color: #fff;
                text-decoration: none;
            }

            header .logout > a:hover {
                text-decoration: underline;
            }

            .card {
                margin-top: 1rem;
            }
        </style>
    </head>
    <body>
        @yield('content')

        {{-- include riot.js --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/riot/3.9.0/riot+compiler.min.js"></script>

        {{-- include riot tags --}}
        <script type="riot/tag" data-src="/js/tags/task-list.tag"></script>

        {{-- mount the tags --}}
        <script>riot.mount('*', {csrf_token: '{{ csrf_token() }}' })</script>
    </body>
</html>
