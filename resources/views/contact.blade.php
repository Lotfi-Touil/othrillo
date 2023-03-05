@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Contactez-nous</h1>

        <form>
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" class="form-control" id="name" name="name" required value="{{ old('name') }}">
            </div>

            <div class="form-group">
                <label for="email">Adresse e-mail</label>
                <input type="email" class="form-control" id="email" name="email" required value="{{ old('email') }}">
            </div>

            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" name="message" required>{{ old('message') }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Envoyer</button>
        </form>
        {{-- développement de ce Issue : Bug : Le formulaire de contact ne renvoie pas de message de confirmation#25 --}}
    </div>
@endsection
