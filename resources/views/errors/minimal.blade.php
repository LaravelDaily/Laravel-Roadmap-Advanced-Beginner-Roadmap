<!DOCTYPE html>

<html lang="en">
<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('code') - {{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <!-- CoreUI CSS -->
    <link href="https://unpkg.com/@coreui/coreui@3.4/dist/css/coreui.min.css" rel="stylesheet"/>
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet"/>
</head>
<body class="c-app flex-row align-items-center">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="clearfix">
                <h1 class="float-left display-3 mr-4">@yield('code')</h1>
                <h4 class="pt-3 text-muted">@yield('message')</h4>
                <a href="{{ route('home') }}" class="btn btn-outline-info">
                    <i class="fas fa-arrow-left"></i> Return to home
                </a>
            </div>

        </div>
    </div>
</div>

</body>
</html>
