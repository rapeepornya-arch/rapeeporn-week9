<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Laravel Course')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/student-theme.css') }}">
</head>
<body class="bg-light" data-student-template="{{ config('student.theme_slug') }}">
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">{{ config('student.full_name_th') }}</a>
            <div class="navbar-nav">
                <a class="nav-link" href="{{ route('about') }}">About</a>
                <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                <a class="nav-link" href="{{ route('create') }}">เขียนบทความ</a>
                <a class="nav-link" href="{{ route('products.index') }}">สินค้า</a>
                <a class="nav-link" href="{{ route('books.index') }}">หนังสือ</a>
            </div>
        </div>
    </nav>
    <main class="container py-4">@yield('content')</main>
</body>
</html>
