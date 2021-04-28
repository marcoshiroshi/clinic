@include('layout-components.header')


    <div class="row">

        <div class="col-10">
            <h2>Consultas</h2>
        </div>

        <div class="col-2" align="end">
            <button type="button" class="btn btn-primary">
                <a href="{{ url('/appointment/new') }}" style="text-decoration:none; color:white">Cadastrar</a>
            </button>
        </div>

    </div>

    <br>

    @foreach ($appointments as $appointment)

        <table class="table table-hover table-bordered">
            <tr>
                <td colspan="4">> {{ $appointment->status->description }}</td>
            </tr>
            <tr>
                <th scope="col">Paciente</th>
                <th scope="col">{{ $appointment->patient->name }}</th>
                <th scope="col">Médico</th>
                <th scope="col">{{ $appointment->doctor->name }}</th>
            </tr>
            <tr>
                <th scope="col">Descrição</th>
                <td colspan="4">{{ $appointment->comments }}</td>
            </tr>
            <br>
        </table>
    @endforeach

@include('layout-components.footer')