<x-layout title="Relatório de Clientes" :mensagem-sucesso="$mensagemSucesso">

    <a href="{{ route('clientes.create') }}" class="btn btn-dark mb-3 mt-4">Adicionar</a>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Nome</th>
                <th scope="col">CPF</th>
                <th scope="col">Data de nascimento</th>
                <th scope="col">Estado</th>
                <th scope="col">Cidade</th>
                <th scope="col">Sexo</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
    
        @foreach ($clientes as $cliente)
            <tr>
                <td>
                    <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-primary btn-sm">
                        Editar
                    </a>
                </td>
                <td>{{ $cliente->nome }}</td>
                <td class="cpf">{{ $cliente->cpf }}</td>
                <td class="data-nascimento">{{ date('d/m/Y', strtotime($cliente->dt_nascimento)) }}</td>
                <td>{{ $cliente->estado }}</td>
                <td>{{ $cliente->cidade }}</td>
                <td>@if ($cliente->sexo === 'M') Masculino @else Feminino @endif</td>
                <td>
                    <form action="{{ route('clientes.destroy', $cliente->id) }}" method="post" class="ms-2">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">
                            Excluir
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
</x-layout>
