<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ToDo App</title>

        <!-- Fonts -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" >
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.min.css" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    </head>
<body>
    <section class="section">
    	<div class="container">
            <div class="content">

                @if ($flash = session('message'))
                    <div class="animated fadeOut delay-3sec">
                        <div class="notification is-success">
                          {{-- <button class="delete"></button> --}}
                            {{ $flash }}
                        </div>
                    </div>
                @endif

    			@yield("content")
    		</div>
    	</div>
    </section>
</body>
</html>
