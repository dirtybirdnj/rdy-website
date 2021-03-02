@extends('_layouts.master')

@section('title', 'Colophon')

@section('content')
    <h1>Colophon</h1>

    <p>The <a href="https://en.wikipedia.org/wiki/Colophon_(publishing)">Wikipedia</a>
    article for Colophon describes it as a relic of the printing industry used for
    attribution of materials, sources and manufacturing. I've decided instead of cramming
    too much crap in my footer, I'll just list it all out here, in no particular order.</p>
    <ul>
    <li>Template by Ranie Santos &nbsp;&bull;&nbsp;
                <a href="https://github.com/raniesantos/artisan-static">GitHub repo</a></li>

        <li><a href="https://twitter.com/{{ $page->owner->twitter }}" target="_blank">Twitter</a></li>
        <li><a href="https://github.com/{{ $page->owner->github }}" target="_blank">GitHub</a></li>
    </ul>
@endsection
