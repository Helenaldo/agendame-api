@extends('emails.layouts.default')

@section('content')

<p>Olá, {{ $user->first_name }}</p>
<p>O seu token para resetar a senha é {{ $token }}!</p>
<br>
<p>Cuidado ao compartilhar dados sensíveis como senhas e tokens.</p>

@endsection
