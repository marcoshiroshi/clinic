@include('layout-components.header')


    <div class="row">

        <div class="col-10">
            <h2>Médicos</h2>
        </div>

        <div class="col-2" align="end">
            <button type="button" class="btn btn-primary">
                <a href="{{ url('/doctor/new') }}" style="text-decoration:none; color:white">Cadastrar</a>
            </button>
        </div>

    </div>

    <br>

    @foreach ($doctors as $doctor)
        <table class="table table-hover table-bordered">
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">{{ $doctor->name }}</th>
                <th scope="col">Data de nascimento</th>
                <th scope="col">{{ $doctor->birth }}</th>
                <th scope="col">CRM</th>
                <th scope="col">{{ $doctor->crm }}</th>
            </tr>
            <tr>
                <th scope="col">Email</th>
                <th scope="col">{{ $doctor->email }}</td>
                <th scope="col">Telefone</th>
                <th scope="col">{{ $doctor->telephone }}</td>
                <th scope="col">UF</th>
                <th scope="col">{{ $doctor->uf }}</th>
            </tr>
            <br>
        </table>
    @endforeach

@include('layout-components.footer')