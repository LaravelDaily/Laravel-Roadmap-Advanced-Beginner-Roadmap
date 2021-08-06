<!DOCTYPE html>

<html lang="en">
<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>CRM</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <!-- CoreUI CSS -->
    <link href="https://unpkg.com/@coreui/coreui@3.4/dist/css/coreui.min.css" rel="stylesheet"/>
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet"/>
</head>
<body class="c-app flex-row align-items-center">
    @yield('content')

</body>
</html>
