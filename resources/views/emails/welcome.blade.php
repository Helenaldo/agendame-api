@extends('emails.layouts.default')

@section('content')

<p>Olá, {{ $user->first_name }}</p>
<p>Seja bem vindo ao {{ config('app.name') }}!</p>
<p>Por favor, clique no botão abaixo para verificar a sua conta.</p>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="btn btn-primary">
  <tbody>
    <tr>
      <td align="left">
        <table role="presentation" border="0" cellpadding="0" cellspacing="0">
          <tbody>
            <tr>
              <td> <a href="http://www.gconte.com.br" target="_blank">Verificar</a> </td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
  </tbody>
</table>
<p>Boa Sorte! Bom trabalho.</p>

@endsection
