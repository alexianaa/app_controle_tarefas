@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Falta pouco agora, precisamos apenas que você valide o seu email.</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            Reenviamos para você um email com o link de validação.
                        </div>
                    @endif

                    Antes de usar os recursos da aplicação, por favor valide o seu email por meio do link de validação que enviamos para o seu email.
                    Caso você não tenha recebido o email de verificação clique no link a seguir para receber um novo email,
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">Clique aqui para reenviar o link</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
