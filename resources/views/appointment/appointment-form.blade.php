@include('layout-components.header')



    <div class="row">

        <div class="col-10">
            <h2>Cadastrar consulta</h2>
        </div>

        <div class="col-2" align="end">
            <button type="button" class="btn btn-danger">
                <a href="{{ url('/appointment') }}" style="text-decoration:none; color:white">Voltar</a>
            </button>
        </div>
    </div>

    <br>   

        <form method="POST" action="/appointment">

            {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleInputEmail1">Data</label>
                <input type="text" class="form-control" id="date" name="date" aria-describedby="dateHelp" placeholder="Digite a data">
                <small id="birthHelp" class="form-text text-muted">O formato deve ser "XX-XX-XXXX"</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Descrição</label>
                <input type="text" class="form-control" id="comments" name="comments" aria-describedby="commentsHelp" placeholder="Descrição da consulta e informações importantes">
            </div>
            <div class="form-group">

                <label for="status">Status</label>
                <select class="custom-select" id="status" name="status">
                    <option selected>Escolha...</option>
                    @foreach ($statuses as $status)
                        <option value="status">{{ $status->description }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="patient_id">Patient</label>
                <select class="custom-select" id="patient_id" name="patient_id">
                    <option selected>Escolha...</option>
                    @foreach ($patients as $patient)
                        <option value="$patient.id">{{ $patient->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="doctor_id">Doctor</label>
                <select class="custom-select" id="doctor_id" name="doctor_id">
                    <option selected>Escolha...</option>
                    @foreach ($doctors as $doctor)
                        <option value="$doctor.id">{{"$doctor->crm | $doctor->name"}}</option>
                    @endforeach
                </select>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
            
        </form>

</div>


@include('layout-components.footer')
