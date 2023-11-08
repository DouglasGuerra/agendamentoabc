<!-- formulario paciente -->
<div class="container border rounded shadow p-4 p-5 mt-5">
     <h1 class="text-dark fs-3">Agende sua consulta</h1>
     <marquee>Seja muito bem vindo meu amado paciente, como podemos te ajudar?</marquee>
        <form class="row g-3" action="" method="post">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Nome Completo</label>
            <input type="email" class="form-control" id="inputEmail4" required="required" name="name_patient">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputPassword4" required="required" name="email_patient">
        </div>
        <div class="col-6">
            <label for="inputAddress" class="form-label">Horário da consulta</label>
            <select class="form-select" aria-label="Default select example" name="hour_patient">
            <option disabled>Escolha uma horário para atendimento</option>
            <option value="1">8:00 - 8:50</option>
            <option value="2">9:00 = 9:50</option>
            <option value="1">10:00 - 8:50</option>
            <option value="2">11:00 = 9:50</option>
            <option value="1">12:00 - 8:50</option>
            <option value="2">13:00 = 9:50</option>
            <option value="1">14:00 - 8:50</option>
            <option value="2">15:00 = 9:50</option>
            <option value="2">16:00 = 9:50</option>
            <option value="2">17:00 = 9:50</option>
            
            </select>
        </div>
        <div class="col-6">
            <label for="inputAddress2" class="form-label">Whatsapp</label>
            <input type="tel" class="form-control" id="inputAddress2" required="required" placeholder="Digite seu numero" name="number_patient">
        </div>
            <div class="col-6">
        <select class="form-select" aria-label="Default select example">
            <option selected>Profissional</option>
            <option value="1">Douglas</option>
            <option value="2">Wesley</option>
            <option value="3">Karol</option>
            <option value="3">Erika</option>
            </select>
        </div>    

        <div class="col-6">
        
            <select class="form-select" aria-label="Default select example" name="hour_patient" required="required">
            <option disabled selected>Qual o seu estado?</option>
            <option value="1">RJ</option>
            <option value="2">SP</option>
            <option value="2">ES</option>
            <option value="2">DF</option>
            <option value="2">MG</option>
            <option value="2">PR</option>
            <option value="2">Outros</option>    
            </select>


        </div>
        <div class="col-12 mt-3 ">
            <button type="submit" class="btn btn-primary">Agendar consulta</button>
        </div>
        </form>

</div>

