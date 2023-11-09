<!-- Formulário paciente -->
<div class="container border rounded shadow p-4 p-5 mt-5">
    <h1 class="text-dark fs-3">Agende sua consulta</h1>
    <marquee>Seja muito bem vindo meu amado paciente, como podemos te ajudar?</marquee>
    <form class="row g-3" action="" method="post">
        <!-- Campo oculto para o ID -->
        <input type="hidden" name="id" value="0">

        <div class="col-md-6">
            <label for="nome_completo" class="form-label">Nome Completo</label>
            <input type="text" class="form-control" required="required" name="nome_completo">
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" required="required" name="email">
        </div>
        <div class="col-6">
            <label for="horario_consulta" class="form-label">Horário da consulta</label>
            <select class="form-select" aria-label="Default select example" name="horario_consulta" required="required">
                <option disabled selected>Escolha um horário para atendimento</option>
                <option value="1">8:00 - 8:50</option>
                <option value="2">9:00 - 9:50</option>
                <option value="3">10:00 - 10:50</option>
                <option value="4">11:00 - 11:50</option>
                <option value="5">12:00 - 12:50</option>
                <option value="6">13:00 - 13:50</option>
                <option value="7">14:00 - 14:50</option>
                <option value="8">15:00 - 15:50</option>
                <option value="9">16:00 - 16:50</option>
                <option value="10">17:00 - 17:50</option>
            </select>
        </div>
        <div class="col-6">
            <label for="whatsapp" class="form-label">Whatsapp</label>
            <input type="tel" class="form-control" required="required" placeholder="Digite seu número" name="whatsapp">
        </div>
        <div class="col-6">
            <label for="profissional" class="form-label">Profissional</label>
            <select class="form-select" aria-label="Default select example" name="profissional">
                <option disabled selected>Profissional</option>
                <option value="Douglas">Douglas</option>
                <option value="Wesley">Wesley</option>
                <option value="Karol">Karol</option>
                <option value="Erika">Erika</option>
            </select>
        </div>
        <div class="col-6">
            <label for="estado" class="form-label">Qual o seu estado?</label>
            <select class="form-select" aria-label="Default select example" name="estado" required="required">
                <option disabled selected>Qual o seu estado?</option>
                <option value="RJ">RJ</option>
                <option value="SP">SP</option>
                <option value="ES">ES</option>
                <option value="DF">DF</option>
                <option value="MG">MG</option>
                <option value="PR">PR</option>
                <option value="Outros   ">Outros</option>
            </select>
        </div>
        <div class="col-12 mt-3">
            <button type="submit" class="btn btn-primary">Agendar consulta</button>
        </div>
    </form>
</div>


