<div class="container">
    <h1>Lista dei Token</h1>

    <!-- Pulsante per creare un nuovo token -->
    <form action="{{ route('tokens.store') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-primary">Crea nuovo token</button>
    </form>
    <!-- Elenco dei token -->
    @foreach ($tokens as $token)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $token->id }}</h5>
                <p class="card-text">{{ $token->token }}</p>
                <form action="{{ route('tokens.destroy', $token->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Sei sicuro di voler eliminare questo token?')">Elimina token
                    </button>
                </form>
    @endforeach
</div>
