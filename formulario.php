<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="robots" content="index, follow" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />

  <title>CardMais</title>
  <meta name="title" property="og:title" content="CardMais" />
  <meta name="description" property="og:description" content="Page Description" />
  <meta name="image" property="og:image" itemprop="image" content="./cardMaisLogo.png" />
  <meta name="type" property="og:type" content="website" />
  <meta name="url" property="og:url" content="https://url.page" />
  <meta name="site_name" property="og:site_name" content="CardMais" />
  <meta name="locale" property="og:locale" content="pt_BR" />

  <link rel="icon" type="image/jpg" href="./imgs/cardMaisLogo.png" />

  <link rel="stylesheet" href="./css/bootstrap.css">
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <!-- <script src="./js/bootstrap.bundle.min.js"></script> -->
  <script src="./js/bootstrap.js"></script>

</head>

<body>
  <header>
    <div class="container d-flex flex-row align-items-center justify-content-end py-3" style="color: #b5221b;">
      <div class="px-2"><i class="bi bi-geo-alt-fill"></i><a class="text-reset" target="_blank"
          rel="noopener noreferrer"
          href="https://www.google.com/maps/place/Cardiol%C3%B3gica+Medicina+Diagn%C3%B3stica/@-23.5017891,-46.6296408,17z/data=!3m1!5s0x94cef62912572b05:0xe31bc360c7afa97c!4m10!1m2!2m1!1scardiol%C3%B3gica+medicina+diagn%C3%B3stica+endere%C3%A7o!3m6!1s0x94cef62c1d7c945d:0x8e11d34a3ab45fd9!8m2!3d-23.5020952!4d-46.6271096!15sCi1jYXJkaW9sw7NnaWNhIG1lZGljaW5hIGRpYWduw7NzdGljYSBlbmRlcmXDp28iAkgBkgERZGlhZ25vc3RpY19jZW50ZXLgAQA!16s%2Fg%2F1tsyqx_6?entry=ttu">
          <b>Rua Salete, 200, Cj. 92</b></a></div>
      <div class="px-2"><i class="bi bi-envelope-fill"><a class="text-reset" target="_blank" rel="noopener noreferrer"
            href="mailto: agenda@cardiologica.net"><b>email@cardiologica.net</b></a> </i></div>
      <div class="px-2"><i class="bi bi-telephone-fill"><a class="text-reset" target="_blank" rel="noopener noreferrer"
            href="tel:+551121396900"><b>(11) 2139-6900</b></a> </i></div>
    </div>
  </header>

  <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top" id="nav1">
    <div class="container-fluid ms-3 rounded">
      <a class="navbar-brand flutuante-text" href="index.html">
        <img src="./imgs/cardMaisLogo.png" alt="Logo CardMais" width="70px" height="35px">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navCollapse"
        aria-controls="navCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link flutuante-text" href="./saibaMais.html">Sobre Card+</a>
          </li>
          <li class="nav-item">
            <a class="nav-link flutuante-text" href="./parceiros.html">Parceiros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link flutuante-text" href="./contato.html">Fale Conosco</a>
          </li>
        </ul>
        <!-- <a class="btn btn-card-contra text-end flutuante-text" href="#">Adquira já o seu</a> -->
      </div>
    </div>
  </nav>


  <div class="d-grid gap-2 pt-3 mb-3 container">
    <a class="btn btn-lg btn-card-contra shadow" data-bs-toggle="collapse" href="#collIndividual" role="button"
      aria-expanded="false" aria-controls="collIndividual">Card+ Individual</a>

      <!-- Individual -->
  <div class="container py-5 col-8 collapse" id="collIndividual">
    <h2 class="text-center">Preencha os campos - Individual</h2>
    <br>
    <fieldset class="p-4 rounded-3 field">
      <form action="<?php echo htmlspecialchars('cadPacienteInd.php');?>" method="POST" id="frmIndividual">

        <div class="mb-3 col">
          <label class="form-label" for="nomePacInd">Nome Completo:</label>
          <input type="text" class="form-control" maxlength="200" placeholder="Digite seu nome completo"
            id="nomePacInd" name="nomePacInd" required>
        </div>

        <div class="row mb-3">
          <div class="col">
            <label class="form-label" for="cpfPacInd">CPF:</label>
            <input type="text" class="form-control" maxlength="11" placeholder="CPF" id="cpfPacInd" name="cpfPacInd" required>
          </div>
          <div class="col">
            <label class="form-label" for="dtNascPacInd">Data de Nascimento:</label>
            <input type="date" class="form-control" placeholder="Digite sua data de nascimento" id="dtNascPacInd" name="dtNascPacInd" required>
          </div>
        </div>

        <div class="mb-3 col">
          <label class="form-label" for="emailPacInd">Email:</label>
          <input type="email" class="form-control" maxlength="200" placeholder="Digite seu Email" id="emailPacInd" name="emailPacInd" required>
        </div>

        <div class="row mb-3">
          <div class="col">
            <label class="form-label" for="telPacInd">Telefone:</label>
            <input type="text" class="form-control" maxlength="11" placeholder="(11)91111-1111" id="telPacInd" name="telPacInd" required>
          </div>
          <div class="col">
            <label class="form-label" for="telOpcPacInd">Telefone Opcional</label>
            <input type="text" class="form-control" maxlength="11" placeholder="(11)91111-1111" id="telOpcPacInd" name="telOpcPacInd">
          </div>
        </div>

        <div class="form-floating">
            <select class="form-select" id="generoPacInd" aria-label="" name="generoPacInd">
              <option selected>Gênero Paciente</option>
              <option value="F">Feminino</option>
              <option value="M">Masculino</option>
              <option value="O">Outro</option>
            </select>
            <label for="generoPacInd">Selecione: </label>
          </div>

          <div class="mb-3 col">
            <span id="message" style="color: #b5221b;" class="fw-bold"></span><br>
            <label class="form-label" for="cepPac">CEP</label>
            <input type="text" class="form-control" maxlength="8" placeholder="Digite seu CEP" id="cepPac" name="cepPac" required>
          </div>

          <div class="row mb-3">
            <div class="col">
              <label class="form-label" for="ruaPac">Rua</label>
              <input type="text" class="form-control disabled" maxlength="200" placeholder="Rua" id="ruaPac" name="ruaPac" required>
            </div>
            <div class="col">
              <label class="form-label" for="bairroPac">Bairro</label>
              <input type="text" class="form-control" maxlength="200" placeholder="Bairro" id="bairroPac" name="bairroPac" required>
            </div>
          </div>

          <div class="row mb-3">
            <div class="col">
              <label class="form-label" for="cidadePac">Cidade</label>
              <input type="text" class="form-control" maxlength="200" placeholder="Cidade" id="cidadePac" name="cidadePac" required>
            </div>
            <div class="col">
              <label class="form-label" for="estadoPac">Estado</label>
              <input type="text" class="form-control" maxlength="200" placeholder="Estado" id="estadoPac" name="estadoPac" required>
            </div>
          </div>

          <div class="row mb-3">
            <div class="col">
              <label class="form-label" for="numPac">Número</label>
              <input type="text" class="form-control" maxlength="5" placeholder="Número" id="numPac" name="numPac" required>
            </div>
            <div class="col">
              <label class="form-label" for="complPac">Complemento</label>
              <input type="text" class="form-control" maxlength="100" placeholder="Complemento" id="complPac" name="complPac">
            </div>
          </div>

        <div class="d-grid gap-2 pt-3 mb-3 container">
          <button class="btn btn-lg btn-card-contra shadow" id="btnCadInd" type="submit">Fazer Cadastro</button>
        </div>

      </form>
    </fieldset>
  </div>
  <!-- Fim Individual -->

    <a class="btn btn-lg btn-card-contra shadow" data-bs-toggle="collapse" href="#collFamiliar" role="button"
      aria-expanded="false" aria-controls="collFamiliar">Card+ Familiar</a>

        <!-- Familiar -->
  <div class="container py-5 col-8 collapse" id="collFamiliar">
    <h2 class="text-center">Preencha os campos - Familiar</h2>
    <br>
    <fieldset class="p-4 rounded-3 field">
      <form action="" id="frmFamiliar">

        <div class="mb-3 col">
          <label for="formGroupExampleInput" class="form-label" for="nomePacFam">Nome Completo:</label>
          <input type="text" class="form-control" maxlength="200" placeholder="Digite seu nome completo"
            id="nomePacFam" required>
        </div>

        <div class="row mb-3">
          <div class="col">
            <label for="formGroupExampleInput" class="form-label" for="cpdPacFam">CPF:</label>
            <input type="text" class="form-control" maxlength="11" placeholder="CPF" id="cpdPacFam" required>
          </div>
          <div class="col">
            <label for="formGroupExampleInput" class="form-label" for="dtNascPacFam">Data de Nascimento:</label>
            <input type="date" class="form-control" placeholder="Digite sua data de nascimento" id="dtNascPacFam" required>
          </div>
        </div>

        <div class="mb-3 col">
          <label for="formGroupExampleInput" class="form-label" for="emailPacFam">Email:</label>
          <input type="email" class="form-control" maxlength="200" id="emailPacFam" placeholder="Digite seu Email" required>
        </div>

        <div class="row mb-3">
          <div class="col">
            <label for="formGroupExampleInput" class="form-label" for="telPacFam">Telefone:</label>
            <input type="text" class="form-control" maxlength="11" placeholder="(11)91111-1111" id="telPacFam" required>
          </div>
          <div class="col">
            <label for="formGroupExampleInput" class="form-label" for="telOpcPacFam">Telefone Opcional</label>
            <input type="text" class="form-control" placeholder="(11)91111-1111" id="telOpcPacFam">
          </div>
        </div>

        <div class="form-floating col mb-3">
            <select class="form-select" id="generoPacInd" aria-label="" name="generoPacInd">
              <option selected>Gênero Paciente</option>
              <option value="F">Feminino</option>
              <option value="M">Masculino</option>
              <option value="O">Outro</option>
            </select>
            <label for="generoPacInd">Selecione: </label>
          </div>

        <fieldset class="p-4 border">
          <div class="mb-3 col">
            <span id="messageFam" style="color: #b5221b;" class="fw-bold"></span><br>
            <label class="form-label" for="cepPacFam">CEP</label>
            <input type="text" class="form-control" maxlength="8" placeholder="Digite seu CEP" id="cepPacFam" required>
          </div>

          <div class="row mb-3">
            <div class="col">
              <label class="form-label" for="ruaPacFam">Rua</label>
              <input type="text" class="form-control" maxlength="200" placeholder="Rua" id="ruaPacFam" required>
            </div>
            <div class="col">
              <label class="form-label" for="bairroPacFam">Bairro</label>
              <input type="text" class="form-control" maxlength="200" placeholder="Bairro" id="bairroPacFam" required>
            </div>
          </div>

          <div class="row mb-3">
            <div class="col">
              <label class="form-label" for="cidadePacFam">Cidade</label>
              <input type="text" class="form-control" maxlength="200" placeholder="Cidade" id="cidadePacFam" required>
            </div>
            <div class="col">
              <label class="form-label" for="estadoPacFam">Estado</label>
              <input type="text" class="form-control" maxlength="200" placeholder="Estado" id="estadoPacFam" required>
            </div>
          </div>

          <div class="row mb-3">
            <div class="col">
              <label class="form-label" for="numPacFam">Número</label>
              <input type="text" class="form-control" maxlength="5" placeholder="Número" id="numPacFam" required>
            </div>
            <div class="col">
              <label class="form-label" for="complPacFam">Complemento</label>
              <input type="text" class="form-control" maxlength="100" placeholder="Complemento" id="complPacFam">
            </div>
          </div>

        </fieldset>

        <fieldset class="p-4 border">
          <div class="mb-3 col">
            <label class="form-label">1º Dependente</label>
            <input type="text" class="form-control" maxlength="200" id="nomeDep1" placeholder="Nome completo Dependente 1">
          </div> 
          <div class="row">
            <div class="mb-3 col-4">
              <input type="text" class="form-control" maxlength="11" id="cpfDep1" placeholder="CPF do Dependente 1">
            </div>
            <div class="mb-3 col-4">
              <input type="date" class="form-control" id="dtNascDep1" placeholder="Data de Nascimento do Dependente 1">
            </div>
            <div class="form-floating mb-3 col-4">
            <select class="form-select" id="generoPacInd" aria-label="" name="generoPacInd">
              <option selected>Gênero Paciente</option>
              <option value="F">Feminino</option>
              <option value="M">Masculino</option>
              <option value="O">Outro</option>
            </select>
            <label for="generoPacInd">Selecione: </label>
          </div>
          </div>
          


          <div class="mb-3 col">
            <label class="form-label">2º Dependente</label>
            <input type="text" class="form-control" maxlength="200" id="nomeDep2" placeholder="Nome completo Dependente 2">
          </div> 
          <div class="row">
            <div class="mb-3 col-4">
              <input type="text" class="form-control" maxlength="11" id="cpfDep2" placeholder="CPF do Dependente 2">
            </div>
            <div class="mb-3 col-4">
              <input type="date" class="form-control" id="dtNascDep2" placeholder="Data de Nascimento do Dependente 2">
            </div>
            <div class="form-floating mb-3 col-4">
            <select class="form-select" id="generoPacInd" aria-label="" name="generoPacInd">
              <option selected>Gênero Paciente</option>
              <option value="F">Feminino</option>
              <option value="M">Masculino</option>
              <option value="O">Outro</option>
            </select>
            <label for="generoPacInd">Selecione: </label>
          </div>
          </div>

          <div class="mb-3 col">
            <label class="form-label">3º Dependente</label>
            <input type="text" class="form-control" maxlength="200" id="nomeDep3" placeholder="Nome completo Dependente 3">
          </div> 
          <div class="row">
            <div class="mb-3 col-4">
              <input type="text" class="form-control" maxlength="11" id="cpfDep3" placeholder="CPF do Dependente 3">
            </div>
            <div class="mb-3 col-4">
              <input type="date" class="form-control" id="dtNascDep3" placeholder="Data de Nascimento do Dependente 3">
            </div>
            <div class="form-floating mb-3 col-4">
            <select class="form-select" id="generoPacInd" aria-label="" name="generoPacInd">
              <option selected>Gênero Paciente</option>
              <option value="F">Feminino</option>
              <option value="M">Masculino</option>
              <option value="O">Outro</option>
            </select>
            <label for="generoPacInd">Selecione: </label>
          </div>
          </div>

          <div class="mb-3 col">
            <label class="form-label">4º Dependente</label>
            <input type="text" class="form-control" maxlength="200" id="nomeDep4" placeholder="Nome completo Dependente 4">
          </div> 
          <div class="row">
            <div class="mb-3 col-4">
              <input type="text" class="form-control" maxlength="11" id="cpfDep4" placeholder="CPF do Dependente 4">
            </div>
            <div class="mb-3 col-4">
              <input type="date" class="form-control" id="dtNascDep4" placeholder="Data de Nascimento do Dependente 4">
            </div>
            <div class="form-floating mb-3 col-4">
            <select class="form-select" id="generoPacInd" aria-label="" name="generoPacInd">
              <option selected>Gênero Paciente</option>
              <option value="F">Feminino</option>
              <option value="M">Masculino</option>
              <option value="O">Outro</option>
            </select>
            <label for="generoPacInd">Selecione: </label>
          </div>
          </div>
        </fieldset>

        <div class="d-grid gap-2 pt-3 mb-3 container">
          <button class="btn btn-lg btn-card-contra shadow" type="submit" id="btnCadFam">Fazer Cadastro</button>
        </div>

      </form>
    </fieldset>
  </div>
  <!-- Fim Familiar -->

    <a class="btn btn-lg btn-card-contra shadow" data-bs-toggle="collapse" href="#collCorporativo" role="button"
      aria-expanded="false" aria-controls="collCorporativo">Card+ Corporativo</a>
  </div>

  <!-- Corporativo -->
  <div class="container py-5 col-8 collapse text-center" id="collCorporativo">
    <fieldset class="p-4 rounded-3 field">
      <p>Para saber mais sobre o Card+ Corporativo por favor, entre em contato conosco!</p>
    </fieldset>
  </div>
  <!-- Fim Corporativo -->




  




  <a data-bs-toggle="tooltip" data-bs-title="Tooltip on left"
    href="https://wa.me/55(aqui seu numero com ddd | tudo junto)?text=Adorei%20seu%20artigo" class="wpp flutuante"
    target="_blank">
    <i style="margin-top:16px" class="fa fa-whatsapp"></i>
  </a>


  <footer class="text-center text-lg-start bg-light text-muted">

    <section class="d-flex justify-content-center justify-content-lg-between p-4">

      <div class="me-5 d-none d-lg-block">
        <span><b>Siga-nos nas Redes Sociais</b></span>
      </div>



      <div>
        <a href="" class="me-4 text-reset">
          <i class="bi bi-facebook flutuante-text" style="color: #b5221b;"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="bi bi-twitter flutuante-text" style="color: #b5221b;"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="bi bi-google flutuante-text" style="color: #b5221b;"></i>
        </a>
        <a href="" class="me-4 text-reset">
          </b><i class="bi bi-instagram flutuante-text" style="color: #b5221b;"></i>
        </a>
      </div>



    </section>

    <hr class="featurette-divider" style="color: red;">

    <section>
      <div class="container text-center text-md-start mt-5 ">

        <div class="row mt-3">

          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 text-center">
            <img src="./imgs/cardMaisLogo.png" class="img-fluid">
            <p>
              Seu cartão de benefícios.
            </p>
          </div>

          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-1">

            <h6 class="text-uppercase fw-bold mb-4">Contatos</h6>
            <p><i class="bi bi-geo-alt-fill me-2"></i>Rua Salete, 200, Santana, SP - SP</p>
            <p><i class="bi bi-envelope-fill me-2"></i>info@example.com</p>
            <p><i class="bi bi-telephone-fill me-2"></i>(11) 2139-6900</p>
            <p><i class="bi bi-phone-fill me-2"></i>(11) 91111-1111 Whats</p>
          </div>

        </div>

      </div>
    </section>

    <div class="text-center p-4 mt-5" style="background-color: #b5221b;">
      © 2023 Copyright:
      <a class="text-reset fw-bold" href="cardiologica.net">Cardiológica Medicina Diagnóstica</a>
    </div>

  </footer>

  <script src="./cep.js"></script>
</body>


</html>