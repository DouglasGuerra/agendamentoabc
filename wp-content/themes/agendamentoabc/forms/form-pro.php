<!-- formulario paciente -->
<div class="container border rounded shadow p-4 p-5 mt-5">
     <h1 class="text-dark fs-3">Cadastro de profissinal</h1>
        <form class="row g-3">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Nome Completo</label>
            <input type="email" class="form-control" id="inputEmail4" required="required" name="name_pro">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputPassword4" required="required" name="email_pro">
        </div>
  
        <div class="col-4">
            <label for="inputAddress2" class="form-label">CRP</label>
            <input type="tel" class="form-control" id="inputAddress2" required="required"  name="crp_pro">
        </div>
        <div class="col-4">
            <label for="inputAddress" class="form-label">Especialização</label>
            <select class="form-select" aria-label="Default select example" name="specialization_pro" required="required">
            <option disabled>Especialização</option>
            <option value="1">Adulto</option>
            <option value="2">Juvenil</option>
            <option value="3">Casal</option>
            </select>       
        </div>
        <div class="col-4">
            <label for="inputAddress" class="form-label">Demanda de preferência</label>
            <select class="form-select" aria-label="Default select example" name="specialization_pro" required="required">   
            <option value="4">Autoestima</option>
            <option value="5">Ansiedade</option>
            <option value="6">Depressão</option>
            <option value="7">Fobias e Medos</option>
            <option value="8">Relacionamentos</option>    
            <option value="9">Terapia de Casal</option>
            <option value="10">Terapia para Adolescente</option>
            <option value="11">Transtorno alimentar</option>
            </select>       
        </div>

        <div class="col-12 mt-3 ">
            <button type="submit" class="btn btn-success">Enviar meu cadastro</button>
        </div>

        <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Concordo com os termos de uso <a href="#"> Termos e politica de uso</a>
                    </label>
        </div>

        </div>

        </form>

</div>

