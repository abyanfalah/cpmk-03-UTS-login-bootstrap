<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">

    <!-- bootstrap cihuy -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous"> -->
    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL"
        crossorigin="anonymous"></script>

    <!-- Bootstrap 6, bundled in assets/vendor/bootstrap6 (version in the JS bundle header). To load it from jsDelivr instead, replace both paths below with https://cdn.jsdelivr.net/npm/bootstrap@VERSION/dist/... -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap6/css/bootstrap.min.css') }}">

    <script type="importmap">
{
    "imports": {
        "bootstrap": "{{ asset('assets/vendor/bootstrap6/js/bootstrap.bundle.min.js') }}"
    }
}
</script>

    <link rel="stylesheet" href="{{ asset('assets/css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    @auth
        @include('components.navbar')
    @endauth