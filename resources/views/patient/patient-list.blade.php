
@include('layout-components.header')


    <div class="row">

        <div class="col-10">
            <h2>Pacientes</h2>
        </div>

        <div class="col-2" align="end">
            <button type="button" class="btn btn-primary">
                <a href="{{ url('/patient/new') }}" style="text-decoration:none; color:white">Cadastrar</a>
            </button>
        </div>

    </div>

    <br>

    @foreach ($patients as $patient)
        <table class="table table-hover table-bordered">
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">{{ $patient->name }}</th>
                <th scope="col">Data de nascimento</th>
                <th scope="col">{{ $patient->birth }}</th>
            </tr>
            <tr>
                <th scope="col">email</th>
                <th scope="col">{{ $patient->email }}</td>
                <th scope="col">Telefone</th>    
                <th scope="col">{{ $patient->telephone }}</td>
            </tr>
            <br>
        </table>
    @endforeach

@include('layout-components.footer')