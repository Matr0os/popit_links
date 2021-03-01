@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class=".col-12.card">
                <div class="card-body">
                    <h2 class="card-title">Jouw Links</h2>
                    <table class="table table-scriped">
                        <thead>
                        <tr>
                            <th>Naam</th>
                            <th>Url</th>
                            <th>Bezoekers</th>
                            <th>Laatste Bezoeker</th>
                            <th>Acties</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($links as $link)
                                <tr>
                                    <td>{{ $link->name }}</td>
                                    <td><a href="{{ $link->link }}">{{$link->link}}</a></td>
                                    <td>{{ $link->visits_count }}</td>
                                    <td>{{ $link->latest_visit ? $link->latest_visit->created_at->format('j M Y') : 'N/A'}}</td>
                                    <td><a href="/dashboard/links/{{ $link->id }}">bijwerken</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="/dashboard/links/new" class="btn btn-primary">Voeg link toe</a>
                </div>
            </div>
        </div>
    </div>
@endsection
