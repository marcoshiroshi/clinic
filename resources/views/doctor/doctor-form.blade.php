@include('layout-components.header')



    <div class="row">

        <div class="col-10">
            <h2>Cadastrar médico</h2>
        </div>

        <div class="col-2" align="end">
            <button type="button" class="btn btn-danger">
                <a href="{{ url('/doctor') }}" style="text-decoration:none; color:white">Voltar</a>
            </button>
        </div>
    </div>

    <br>

   

        <form method="POST" action="/doctor">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="exampleInputEmail1">Nome</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Digite seu nome">
               
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Digite seu email">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Telefone</label>
                <input type="text" class="form-control" id="telephone" name="telephone" aria-describedby="telHelp" placeholder="Digite seu telefone">
                <small id="telHelp" class="form-text text-muted">O formato deve ser "(XX) XXXX-XXXX"</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Data de nascimento</label>
                <input type="text" class="form-control" id="birth" name="birth" aria-describedby="birthHelp" placeholder="Digite sua data de nascimento">
                <small id="birthHelp" class="form-text text-muted">O formato deve ser "XX-XX-XXXX"</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">UF</label>
                <input type="text" class="form-control" id="uf" name="uf" aria-describedby="ufHelp" placeholder="Digite sua UF">
                <small id="ufHelp" class="form-text text-muted">O formato deve ser "XX-XX-XXXX"</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">CRM</label>
                <input type="text" class="form-control" id="crm" name="crm" aria-describedby="crmhHelp" placeholder="Digite seu CRM">
                <small id="crmHelp" class="form-text text-muted">O formato deve ser "XXXXXX/AA"</small>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
            
        </form>

    
</div>


@include('layout-components.footer')