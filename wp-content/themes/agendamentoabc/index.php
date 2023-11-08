<?php get_header(); ?>

<?php require(get_template_directory(). '/nav-menu.php'); ?>

<div class="container align-items-center">
  <div class="row align-items-center ">
    <div class="col-5  shadow p-2 rounded">
        
<!-- //chart JS-----------------------------   -->
        <div>
            <h1>R$ 48,000 </h1>
        <canvas id="myChart"></canvas>
        </div>

        <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'bar',
            data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                borderWidth: 1,
                backgroundColor:['#676E7F']
            }]
            },
            options: {
            scales: {
                y: {
                beginAtZero: true
                }
            }
            }
        });
        </script>


            </div>
        

    <div class="col-5 shadow p-3 rounded ms-2  "> 

        <div>
        <h1>16 consultas </h1>
        <canvas id="myChart1"></canvas>
        </div>

        <script>
        const ctx1 = document.getElementById('myChart1');

        new Chart(ctx1, {
            type: 'line',
            data: {
            labels: ['green', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: 'Consultas',
                data: [12, 19, 3, 5, 2, 3],
                borderWidth: 1,
                backgroundColor: ['#676E7F']
            }]
            },
            options: {
            scales: {
                y: {
                beginAtZero: true
                }
            }
            }
        });
        </script>


    </div>
 
<!-- !-- //End chart JS-----------------------------   --> 

    <div class="col ms-2 shadow p-3 rounded "> 
        <h4 class="text-dark mb-5">Atalhos</h4>

        <div class="col mb-4">
           <a href="https://api.whatsapp.com/send?phone=(21) 9 7491-0679&text=Olá, preciso de ajuda! " target="_blank" class="text-light text-decoration-none"><button class="btn btn-success w-100"><i class="bi bi-whatsapp"></i> Whatsapp</button></a>
        </div>
        <div class="col mb-4">
            <a href="#" class="text-light text-decoration-none" target="_blank"><button class="btn btn-warning text-light w-100">Suporte <i class="bi bi-headset"></i></button></a>
        </div>
         <div class="col mb-4">
            <a href="#" class="text-light text-decoration-none"><button class="btn btn-danger w-100" >Reporte <i class="bi bi-exclamation-triangle"></i></button></a>
        </div>
        <div class="col mb-3">
            <a href="https://mail.hostinger.com/?_task=logout&_token=7rj1ZQld1elVDa0095xkmmEtTues4Hwy" target="_blank" class=""><button class="btn btn-primary w-100" >Email <i class="bi bi-envelope"></i> </button></a>
        </div>
        </div>

    </div> 

  </div>
</div>


<div class="container text-center mt-4">
  <div class="row align-items-start shadow p-3 rounded">
    <div class="col">
        <h4>Paciente registrados recentemente</h4>
        <table class="table">
    <thead>
        <tr>
        <th scope="col">Nº</th>
        <th scope="col">Nome</th>
        <th scope="col">Sobrenome</th>
        <th scope="col">Psicólogo</th>
        <th scope="col">Data do atendimento</th>
        <th scope="col">Estado</th>
        <th scope="col">Resumo</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row"><span class="bg-primary text-light rounded p-2">1</span></th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>Mark</td>
        <td>Mark</td>
        <td><button class="btn btn-primary">Ver resumo</button></td>
        
        </tr>
        <tr>
        <th scope="row" ><span class="bg-primary text-light rounded p-2">2</span></th>
                <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>Mark</td>
        <td>Mark</td>
        <td><button class="btn btn-primary">Ver resumo</button></td>
        </tr>
        <tr>
        <th scope="row"><span class="bg-primary text-light rounded p-2">3</span></th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>Mark</td>
        <td>Mark</td>
        <td><button class="btn btn-primary">Ver resumo</button></td>
        </tr>
        <tr>
        <th scope="row"><span class="bg-primary text-light rounded p-2">4</span></th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>Mark</td>
        <td>Mark</td>
        <td><button class="btn btn-primary">Ver resumo</button></td>
        </tr>
        <tr>
        <th scope="row"><span class="bg-primary text-light rounded p-2">5</span></th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>Mark</td>
        <td>Mark</td>
        <td><button class="btn btn-primary">Ver resumo</button></td>
        </tr>
        <tr>
        
    </tbody>
               
    </table>
    <button class="btn btn-primary">Ver todos os registros</button>
    </div>
 
  </div>
</div>

<!-- //-------------------------------SESSION THREE------------------------------------ -->

<div class="container text-center shadow p-3 rounded mt-3">
        
  <div class="row align-items-start">
    <div class="col">
            <h4 class="text-start">Consultas concluidas</h4>
     
        <div class="card w-100 mt-1" style="width: 18rem;">
            <div class="card-body ">
                <h5 class="card-title">Nome do paciente</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Psicólogo responsavel</h6>
                <p class="card-text">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet </p>
                <a href="#" class="card-link"><button class="btn btn-success">Card link</button></a>
                <a href="#" class="card-link"><button class="btn btn-success">Ficha do paciente</button></a>
            </div>
        </div>

        
        <div class="card w-100 mt-1" style="width: 18rem;">
            <div class="card-body ">
                <h5 class="card-title">Nome do paciente</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Psicólogo responsavel</h6>
                <p class="card-text">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet </p>
                <a href="#" class="card-link"><button class="btn btn-success">Card link</button></a>
                <a href="#" class="card-link"><button class="btn btn-success">Ficha do paciente</button></a>
            </div>
        </div>


        
        <div class="card w-100 mt-1" style="width: 18rem;">
            <div class="card-body ">
                <h5 class="card-title">Nome do paciente</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Psicólogo responsavel</h6>
                <p class="card-text">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet </p>
                <a href="#" class="card-link"><button class="btn btn-success">Card link</button></a>
                <a href="#" class="card-link"><button class="btn btn-success">Ficha do paciente</button></a>
            </div>
        </div>
        

        

    </div>
    <div class="col">

    <h4 class="text-start">Consultas em andamento</h4>
           
    <div class="card w-100 mt-1" style="width: 18rem;">
            <div class="card-body ">
                <h5 class="card-title">Nome do paciente</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Psicólogo responsavel</h6>
                <p class="card-text">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet </p>
                <a href="#" class="text-light"><button class="btn btn-warning text-light">Card link</button></a>
                <a href="#" class="text-light"><button class="btn btn-warning text-light">Ficha do paciente</button></a>
            </div>
        </div> 

        <div class="card w-100 mt-1" style="width: 18rem;">
            <div class="card-body ">
                <h5 class="card-title">Nome do paciente</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Psicólogo responsavel</h6>
                <p class="card-text">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet </p>
                <a href="#" class="text-light"><button class="btn btn-warning text-light">Card link</button></a>
                <a href="#" class="text-light"><button class="btn btn-warning text-light">Ficha do paciente</button></a>
            </div>
        </div> 

        <div class="card w-100 mt-1" style="width: 18rem;">
            <div class="card-body ">
                <h5 class="card-title">Nome do paciente</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Psicólogo responsavel</h6>
                <p class="card-text">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet </p>
                <a href="#" class="text-light"><button class="btn btn-warning text-light">Card link</button></a>
                <a href="#" class="text-light"><button class="btn btn-warning text-light">Ficha do paciente</button></a>
            </div>
        </div> 

    </div>

    <div class="col">
     
    <h4 class="text-start">Consultas em canceladas</h4>
           
           <div class="card w-100 mt-1" style="width: 18rem;">
                   <div class="card-body ">
                       <h5 class="card-title">Nome do paciente</h5>
                       <h6 class="card-subtitle mb-2 text-body-secondary">Psicólogo responsavel</h6>
                       <p class="card-text">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet </p>
                       <a href="#" class="text-light"><button class="btn btn-danger text-light">Card link</button></a>
                       <a href="#" class="text-light"><button class="btn btn-danger text-light">Ficha do paciente</button></a>
                   </div>
               </div> 
       
               <div class="card w-100 mt-1" style="width: 18rem;">
                   <div class="card-body ">
                       <h5 class="card-title">Nome do paciente</h5>
                       <h6 class="card-subtitle mb-2 text-body-secondary">Psicólogo responsavel</h6>
                       <p class="card-text">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet </p>
                       <a href="#" class="text-light"><button class="btn btn-danger text-light">Card link</button></a>
                       <a href="#" class="text-light"><button class="btn btn-danger text-light">Ficha do paciente</button></a>
                   </div>
               </div> 
       
               <div class="card w-100 mt-1" style="width: 18rem;">
                   <div class="card-body ">
                       <h5 class="card-title">Nome do paciente</h5>
                       <h6 class="card-subtitle mb-2 text-body-secondary">Psicólogo responsavel</h6>
                       <p class="card-text">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet </p>
                       <a href="#" class="text-light"><button class="btn btn-danger text-light">Card link</button></a>
                       <a href="#" class="text-light"><button class="btn btn-danger text-light">Ficha do paciente</button></a>
                   </div>
               </div>             


    </div>

  </div>
</div>

<div class="container mt-3 shadow p-3 rounded">
    <div class="col">
        <h4>Quantidade de consulta por psicologos</h4>
            <ol class="list-group list-group-numbered">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold">Douglas Guerra</div>
                        <p>Programador NODEJS</p>
                        </div>
                        <span class="badge bg-primary rounded-pill">14</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold">Wesley Cardoso</div>
                        <p>Programador PHP</p>
                        </div>
                        <span class="badge bg-primary rounded-pill">14</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold">Fulaninho</div>
                        <p>Psicólogo especialista em terapia de casal</p>
                        </div>
                        <span class="badge bg-primary rounded-pill">14</span>
                    </li>
            </ol>
    </div>
</div>





<?php get_footer(); ?>