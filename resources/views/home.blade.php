@extends('layouts.app')

@section('title', 'About')

@section('content')
    <nav>
        <a href="#" data-key="nav.home"></a>
        <a href="#" data-key="nav.about"></a>
        <a href="#" data-key="nav.projects"></a>
        <span data-key="nav.language"></span>:
        <button onclick="changeLang('en')">EN</button> |
        <button onclick="changeLang('uz')">UZ</button>
    </nav>

    <script src="/lang.js"></script>
@endsection