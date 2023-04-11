<x-layout title="Cliente '{!! $cliente->nome !!}'">
    <form action="{{ route('clientes.update', $cliente->id) }}" method="post">
        @csrf

        @method('PUT')
        <div class="alert alert-secondary text-center mt-3" role="alert">
            Atualização de Cliente
        </div>
        
        <div class="row mb-3">
            <div class="col-3">
                <label for="nomeCliente" class="form-label">Nome:</label>
                <input type="text"
                       autofocus
                       id="nomeCliente"
                       name="nome"
                       class="form-control"
                       value="{{ $cliente->nome }}">
            </div>

            <div class="col-3">
                <label for="cpfCliente" class="form-label">CPF:</label>
                <input type="text"
                       id="cpfCliente"
                       name="cpf"
                       class="form-control cpf"
                       value="{{ $cliente->cpf }}">
            </div>

            <div class="form-group col-3">
                <label for="dtNascimentoCliente" class="form-label">Data de nascimento:</label>
                <input 
                    id="dtNascimentoCliente" 
                    name="dt_nascimento" 
                    class="form-control" 
                    value="{{ $cliente->dt_nascimento }}"
                    type="date">
            </div>

            <div class="form-group col-3">
                <div class="row">
                    <label for="" class="form-label col">Sexo:</legend>
                    <div class="col mt-3">
                        <div class="form-check form-check-inline">
                            <input type="radio" name="sexo" id="sexoMasculino" value="M" class="form-check-input"
                                @if ($cliente->sexo === 'M') checked @endif
                            >
                            <label for="sexoMasculino" class="form-check-label">Masculino</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="sexo" id="sexoFeminino" value="F" class="form-check-input"
                            @if ($cliente->sexo === 'F') checked @endif
                            >
                            <label for="sexoFeminino" class="form-check-label">Feminino</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="form-group  col-3">
                <label for="endereco" class="form-label">Endereço:</label>
                <input type="text"
                       id="enderecoCliente"
                       name="endereco"
                       class="form-control"
                       value="{{ $cliente->endereco }}">
            </div>

            <div class="form-group  col-3">
                <label for="estadoCliente" class="form-label">Estado:</label>
                <input type="text"
                       id="estadoCliente"
                       name="estado"
                       class="form-control"
                       value="{{ $cliente->estado }}">
            </div>

            <div class="form-group  col-3">
                <label for="cidadeCliente" class="form-label">Cidade:</label>
                <input type="text"
                       id="cidadeCliente"
                       name="cidade"
                       class="form-control"
                       value="{{ $cliente->cidade }}">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</x-layout>
