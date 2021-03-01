@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 card">
                <div class="card-body">
                    <h2 class="card-title">Link Bijwerken</h2>
                    <form action="/dashboard/links/{{ $link->id }}" method="post">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="name">App Naam</label>
                                    <input type="text" id="name" name="name" class="form-control{{ $errors->first('name') ? 'is-invalid' : ' ' }}" placeholder="TikTok" value="{{ $link->name }}">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="link">Link URL </label>
                                    <input type="text" id="link" name="link" class="form-control{{ $errors->first('link') ? 'is-invalid' : ' ' }}" placeholder="https://.instagram.com/mijninsta/" value="{{ $link->link }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                @csrf
                                <button type="submit" class="btn btn-primary">Link Updaten</button>
                                <button type="button" class="btn btn-secondary"
                                        onclick="event.preventDefault(); document.getElementById('delete-form').submit();">Verwijder Link</button>
                            </div>
                        </div>
                    </form>
                    <form id="delete-form" method="post" action="/dashboard/links/{{ $link->id }}">
                        @csrf
                        @method('DELETE')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
