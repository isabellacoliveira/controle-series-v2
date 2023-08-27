<x-layout title="Séries">
    <a href="{{ route('series.create') }}" class="btn btn-dark mb-2">Adicionar</a>

    <!-- verificar se a mensagem existe -->
    @isset($mensagemSucesso)
    <div class="alert alert-success">
        {{ $mensagemSucesso }}
    </div>
    @endisset

    <ul class="list-group">
        @foreach ($series as $serie)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{ $serie->nome }}

            <span class="d-flex">
                <a href="{{ route('series.edit', $serie->id) }}" class="btn btn-primary btn-sm">
                    E
                </a>
                <!-- passar parâmetros para uma rota -->
                <form action="{{ route('series.destroy', $serie->id) }}" method="post" class="ms-2">
                    @csrf
                    <!-- informar qual é o método por baixo dos panos -->
                    @method('DELETE')
                    <!-- envia um outro campo que trata a requisição como se fosse de delete  -->
                    <button class="btn btn-danger btn-sn">
                        X
                    </button>
                </form>
            </span>
        </li>
        @endforeach
    </ul>
</x-layout>
