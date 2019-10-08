<!doctype html>
<html lang="pt-br">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="../../../../favicon.ico"> -->

    <title>Exemplo de formulário para checkout usando Bootstrap</title>

    <!-- Principal CSS do Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos customizados para esse template -->
    <link href="css/form-validation.css" rel="stylesheet">
    <!-- Não apagar Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </head>

  <body class="bg-light">
    <?php
    session_start();
    include_once("dao/conexaoBanco.php");
    // $result_pessoa =  "INSERT INTO aluno (matricula, nome, curso, campus, periodo, nomeResponsavel, cpfResponsavel, cpfAluno, semestre, status) VALUES(null, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $result_aluno = "SELECT * FROM aluno WHERE matricula = 201820000 "; // Pega o Banco
    $resultado_aluno = mysqli_query($conn, $result_aluno);


    while($row_aluno = mysqli_fetch_assoc($resultado_aluno)){
        $nome = $row_aluno['nome'];
        $matricula =  $row_aluno['matricula'];
        $rg =  $row_aluno['rg'];
        $cpfAluno = $row_aluno['cpf_aluno'];
        $comprovante = $row_aluno['comprovante'];

    }
    // $result_usuarios = "SELECT * FROM ritter";
    // $resultado_usuarios = mysqli_query($conn, $result_usuarios);

    ?>

    <div  class="container">
      <div class="py-5 text-center" >
        <img class="d-block mx-auto mb-4" src="img/logo-ritter.png" alt="" width="400" height="150">
        <h3>Check-List</h3>
        <p class="lead">Esta é a tela de Check-List, você poderá ver as suas documentações pendentes e liquidadas. <br>Abaixo está as cores para se orientar:</p>
        <div style="margin-right: 0px; margin-left: 0px;" class="row col-md-12">
          <div class="col-md-4">
            <button style="font-size:14px;" type="button" class="btn btn-success">✅ Em Atraso (Não tranca Rematricula)</button>
          </div>
          <div class="col-md-4">
            <button style="font-size:14px;" type="button" class="btn btn-warning">⚠ Em Atraso (Não tranca Rematricula)</button>
          </div>
          <div class="col-md-4">
            <button style="font-size:14px;" type="button" class="btn btn-danger">Em Atraso ( Rematricula está trancada)</button>
          </div>
        </div>
      </div>

        <div class="col-md-12 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Pendências com a Instituição</span>
            <span class="badge badge-secondary badge-pill">3</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Mensalidade</h6>
                <small class="text-muted">Clique no botão ao lado para obter mais informações sobre as mensalidades EM ATRASO</small>
              </div>
              <div>
                 <div class= "py-1">
                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalMensalidade">Detalhes</button>
                 </div>
              </div>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Taxas</h6>
                <small class="text-muted">Clique no botão ao lado para obter mais informações sobre as taxar EM ATRASO</small>
              </div>
              <div class="py-1">
                  <button type="button" class="btn btn-warning btn-sm" data-target="#modalTaxas" data-toggle="modal">Detalhes</button>
              </div>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                  <h6 class="my-0">Documentação</h6>
                  <small class="text-muted">Clique no botão ao lado para obter mais informações sobre os documentos PENDENTES</small>

                </div>
                <div class="py-1">
                      <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalDocumentacao">Detalhes</button>
                  </div>

                <!-- <span class="text-muted">R$8</span> -->
              </li>
            <br>
            <li class="list-group-item d-flex justify-content-between">
              <div>
                  <span class="py-1">Total (BRL)</span><br>
                  <small class="text-muted">Soma dos valores de R$3.600 das Mensalidades em atraso R$400 reais em taxas em aberto.</small>
              </div>
              <span class="py-1">R$ 4.000</span>
            </li><br>
                <button type="button" class="btn btn-outline-primary mx-auto btn" data-target="">Efetuar Pagamento</button>
          </div>


        </div>
        <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Large Modal</button> -->
        <div class="modal fade" id="modalMensalidade" role="dialog">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title"> Mensalidades</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12 order-md-2 mb-4">
                          <ul class="list-group mb-3">
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                  <h6 style="margin-left:30px;" class="my-0">Janeiro</h6>
                                  <small style="margin-left:30px;" class="text-muted">Essa parcela foi liquidada na data 05/01/19 no valor de R$ 1.800</small>
                                </div>
                                <div class="py-1">
                                      <button type="button" class="btn btn-success btn-sm">LIQUIDADO</button>
                                  </div>

                                <!-- <span class="text-muted">R$8</span> -->
                              </li>
                          <li class="list-group-item d-flex justify-content-between lh-condensed">
                              <div>
                                  <input style="margin-left:1px; margin-top:10px;" type="checkbox" class="form-check-input" id="exampleCheck1">
                                  <h6 style="margin-left:30px;" class="my-0">Fevereiro</h6>
                                  <small style="margin-left:30px;" class="text-muted">Essa parcela está vencida desde a data 05/02/19 no valor de R$ 1.800</small>
                                </div>
                            <div>
                               <div class= "py-1">
                                  <button type="button" class="btn btn-danger btn-sm">EM ATRASO</button>
                               </div>

                            </div>

                          </li>
                          <li class="list-group-item d-flex justify-content-between lh-condensed">
                              <div>
                                <input style="margin-left:1px; margin-top:10px;" type="checkbox" class="form-check-input" id="exampleCheck1">
                                <h6 style="margin-left:30px;" class="my-0">Março</h6>
                                <small style="margin-left:30px;" class="text-muted">Essa parcela está vencida desde a data 05/03/19 no valor de R$ 1.800</small>
                              </div>
                              <div>
                                 <div class= "py-1">
                                    <button type="button" class="btn btn-danger btn-sm">EM ATRASO</button>
                                 </div>

                              </div>

                            </li>
                          <br>
                          <li class="list-group-item d-flex justify-content-between">
                            <span class="py-1">Total (BRL)</span>
                            <span class="py-1">R$ 3.600 </span>
                          </li>
                        </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Pagar</button>
                  <button type="button" class="btn btn-light" data-dismiss="modal">Fechar</button>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade" id="modalTaxas" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title"> Taxas</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                      <div class="col-md-12 order-md-2 mb-4">
                            <ul class="list-group mb-3">
                              <li class="list-group-item d-flex justify-content-between lh-condensed">
                                  <div>
                                    <input style="margin-left:1px; margin-top:10px;" type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <h6 style="margin-left:30px;" class="my-0">Biblioteca</h6>
                                    <small style="margin-left:30px;" class="text-muted">Essa taxa está atrasada desde do dia  05/01/19 no valor de R$ 180.00</small>
                                  </div>
                                  <div class="py-1">
                                        <button type="button" class="btn btn-danger btn-sm">EM ATRASO</button>
                                    </div>

                                  <!-- <span class="text-muted">R$8</span> -->
                                </li>
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <input style="margin-left:1px; margin-top:10px;" type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <h6 style="margin-left:30px;" class="my-0">Estacionamento</h6>
                                    <small style="margin-left:30px;" class="text-muted">Essa taxa está atrasada desde do dia  05/01/19 no valor de R$ 180.00</small>
                                  </div>
                              <div>
                                 <div class= "py-1">
                                    <button type="button" class="btn btn-danger btn-sm">EM ATRASO</button>
                                 </div>

                              </div>

                            </li>
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                  <input style="margin-left:1px; margin-top:10px;" type="checkbox" class="form-check-input" id="exampleCheck1">
                                  <h6 style="margin-left:30px;" class="my-0">Taxa de Rematricula</h6>
                                  <small style="margin-left:30px;" class="text-muted">Essa taxa está atrasada desde do dia  05/01/19 no valor de R$ 180.00</small>
                                </div>
                                <div>
                                   <div class= "py-1">
                                      <button type="button" class="btn btn-danger btn-sm">EM ATRASO</button>
                                   </div>

                                </div>

                              </li>
                            <br>
                            <li class="list-group-item d-flex justify-content-between">
                              <span class="py-1">Total (BRL)</span>
                              <span class="py-1">R$ 400.00 </span>
                            </li>
                          </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Pagar</button>
                    <button type="button" class="btn btn-light" data-dismiss="modal">Fechar</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal fade" id="modalDocumentacao" role="dialog">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Documentação</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-12 order-md-1">
                            <form class="needs-validation" novalidate>
                              <div class="row">
                                  <div class="col-md-6 mb-3">
                                      <label for="primeiroNome">Nome</label>
                                      <input type="text" class="form-control" id="primeiroNome"  value="<?php echo $nome ?>" readonly>
                                      <div class="invalid-feedback">
                                        É obrigatório inserir um nome válido.
                                      </div>
                                  </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="sobrenome">Matricula</label>
                                        <input type="text" class="form-control" id="sobrenome" value="<?php echo $matricula ?>" readonly>
                                        <div class="invalid-feedback">
                                          É obrigatório inserir um sobre nome válido.
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="primeiroNome">RG</label>
                                        <input type="text" class="form-control" id="primeiroNome" value="<?php echo $rg ?>" readonly>
                                        <div class="invalid-feedback">
                                          É obrigatório inserir um nome válido.
                                        </div>
                                      </div>

                                      <div class="col-md-6 mb-3">
                                          <label for="primeiroNome">CPF</label>
                                          <input type="text" class="form-control" id="primeiroNome" value="<?php echo $cpfAluno ?>" readonly>
                                          <div class="invalid-feedback">
                                            É obrigatório inserir um nome válido.
                                          </div>
                                        </div>

                                        <div class="col-md-12 mb-3">
                                            <label for="primeiroNome">Comprovante de Ensino Médio</label>
                                            <input type="text" class="form-control" id="primeiroNome" value="<?php echo $comprovante ?>" readonly>
                                            <div class="invalid-feedback">
                                              É obrigatório inserir um nome válido.
                                            </div>
                                          </div>

                                </div>



                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-light" data-dismiss="modal">Fechar</button>
                    </div>
                  </div>
                </div>
              </div>
        </div>



    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  </body>
</html>