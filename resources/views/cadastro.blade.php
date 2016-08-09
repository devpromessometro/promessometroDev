@extends ('navbar')

<!DOCTYPE html>
<html>
<head>
    <title>Cadastro Usuário</title>
</head>

<body>        
    <section>
        <div class="cadastra-stepline">
            <div class="formatacao-telas-cadastro">
                <div style="height: 120px; background-color: #ffffff; margin-bottom: 50px;">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-8" style="background-color: #deebf6; height: 120px;">
                        <div class="col-md-1">
                        </div>
                        <div>
                            <a href="cadastrousuario"><img src="img/1-sel-am.png"></a>
                            <a href="cadastrocidade"><img src="img/2-vm.png"></a>
                            <a href="cadastrogestao"><img src="img/3-vm.png"></a>
                            <a href="cadastrometaacao"><img src="img/4-vm.png"></a>
                        </div>
                    </div>
                </div>
                <h1 class="titulo promeblue">Cadastro de Usuários</h1><br><br>
                <form action = "cadastrar" method="post">
                    <div class="container">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                        <div class="col-md-6 rightline">    
                            <label class="promeblue subtitulo3">Nome:</label>
                            <input type="text" name="ID_TEMA" class="inputnormal input"></input>
                            <label class="promeblue subtitulo3">Email:</label>
                            <input type="text" name="ID_TEMA" class="inputnormal input"></input>
                            <label class="promeblue subtitulo3">Senha:</label>
                            <input type="password" name="ID_TEMA" class="s-inputnormal input"></input>
                            <label class="promeblue subtitulo3">Confirmação de senha:</label>
                            <input type="password" name="ID_TEMA" class="s-inputnormal input"></input>
                            <label class="promeblue subtitulo3">Organização:</label>
                            <input type="text" name="option" list="exampleList" class="inputlist input">
                            <datalist id="exampleList">
                                <option>ONG</option>
                                <option >Prefeitura</option>
                             </datalist>
                        </div>
                        <div class="col-md-6 p-fifty">    
                            <label class="promeblue subtitulo3">Cargo:</label>
                            <input type="text" name="option" list="exampleList1" class="inputlist input">
                            <datalist id="exampleList1">
                                <option>Cargo 1</option>
                                <option >Outro</option>
                            </datalist>   
                            <label class="promeblue subtitulo3">Estado:</label>
                            <input type="text" name="option" list="exampleList2" class="inputlist input">
                            <datalist id="exampleList2">
                                <option>Bahia</option>
                                <option >São Paulo</option>
                            </datalist>
                            <label class="promeblue subtitulo3">Cidade:</label>
                            <input type="text" name="option" list="exampleList3" class="inputlist input">
                            <datalist id="exampleList3">
                                <option>Campinas</option>
                                <option >São Paulo</option>
                            </datalist>
                        </div>
                    </div>
                </form>
                <div style="height: 120px; background-color: #ffffff; margin-bottom: 50px;">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-8" style="background-color: #deebf6; height: 120px;">
                        <div class="col-md-1">
                        </div>
                        <div>
                            <a href="cadastrousuario"><img src="img/1-sel-am.png"></a>
                            <a href="cadastrocidade"><img src="img/2-vm.png"></a>
                            <a href="cadastrogestao"><img src="img/3-vm.png"></a>
                            <a href="cadastrometaacao"><img src="img/4-vm.png"></a>
                        </div>
                    </div>
                </div>
                <h1 class="titulo promeblue">Cadastro de Cidades</h1><br><br>
                <form action = "cadastrar" method="post">
                    <div class="container">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                        <div class="col-md-6 rightline">    
                            <label class="promeblue subtitulo3">Portal da Cidade:</label>
                            <input type="text" name="ID_TEMA" class="inputnormal input"></input>
                            <label class="promeblue subtitulo3">Área (km²):</label>
                            <input type="text" name="ID_TEMA" class="inputnormal input"></input>
                        </div>
                        <div class="col-md-6 p-fifty">    
                            <label class="promeblue subtitulo3">Número de Habitantes:</label>
                            <input type="text" name="ID_TEMA" class="inputnormal input"></input>
                        </div>
                    </div>
                </form>
                <div style="height: 120px; background-color: #ffffff; margin-bottom: 50px;">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-8" style="background-color: #deebf6; height: 120px;">
                        <div class="col-md-1">
                        </div>
                        <div>
                            <a href="cadastrousuario"><img src="img/1-sel-am.png"></a>
                            <a href="cadastrocidade"><img src="img/2-vm.png"></a>
                            <a href="cadastrogestao"><img src="img/3-vm.png"></a>
                            <a href="cadastrometaacao"><img src="img/4-vm.png"></a>
                        </div>
                    </div>
                </div>
                <h1 class="titulo promeblue">Cadastro de Gestão</h1><br><br>
                <form action = "cadastrar" method="post">
                    <div class="container">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                        <div class="col-md-6 rightline">    
                            <label class="promeblue subtitulo3">Nome do Prefeito:</label>
                            <input type="text" name="ID_TEMA" class="inputnormal input"></input>
                            <label class="promeblue subtitulo3">Nome do Vice Prefeito:</label>
                            <input type="text" name="ID_TEMA" class="inputnormal input"></input>
                            <label class="promeblue subtitulo3">Coligação:</label>
                            <input type="text" name="ID_TEMA" class="inputnormal input"></input>
                            <div class="col-md-12 p-m-null">
                                <div class="col-md-8 p-m-null">
                                    <label class="promeblue subtitulo3">Nome do Vereador:</label>
                                    <input type="text" name="ID_TEMA" class="smallinput input"></input>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">Adicionar mais vereadores</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <label class="promeblue subtitulo3">Partido:</label>
                                    <input type="text" name="option" list="exampleList" class="verysmallinput input">
                                    <datalist id="exampleList">
                                        <option>PT</option>
                                        <option >PSol</option>
                                    </datalist>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 p-fifty">    
                            <label class="promeblue subtitulo3">Link da Promessa Campanha:</label>
                            <input type="text" name="ID_TEMA" class="inputnormal input"></input>
                            <div class="col-md-6 p-m-null">
                                <label class="promeblue subtitulo3">Data Início:</label>
                                <form action="action_page.php">
                                    <input type="date" name="DATA_INICIO" class="smallinputlist input">
                                </form>
                            </div>
                            <div class="col-md-6 p-m-null">
                                <label class="promeblue subtitulo3">Data Final:</label>
                                <form action="action_page.php">
                                    <input type="date" name="DATA_FIM" class="smallinputlist input">
                                </form>
                            </div>
                        </div>
                    </div>
                </form>
                <div style="height: 120px; background-color: #ffffff; margin-bottom: 50px;">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-8" style="background-color: #deebf6; height: 120px;">
                        <div class="col-md-1">
                        </div>
                        <div>
                            <a href="cadastrousuario"><img src="img/1-sel-am.png"></a>
                            <a href="cadastrocidade"><img src="img/2-vm.png"></a>
                            <a href="cadastrogestao"><img src="img/3-vm.png"></a>
                            <a href="cadastrometaacao"><img src="img/4-vm.png"></a>
                        </div>
                    </div>
                </div>
                <h1 class="titulo promeblue">Cadastro de Metas</h1><br><br>
                <form action = "cadastrar" method="post">
                    <div class="container">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                        <div class="col-md-6 rightline">    
                            <label class="promeblue subtitulo3">Tema:</label>
                            <input type="text" name="option" list="exampleList1" class="inputlist input">
                            <datalist id="exampleList1">
                                <option>Tema A</option>
                                <option >Tema B</option>
                            </datalist>
                            <label class="promeblue subtitulo3">Título:</label>
                            <input type="text" name="ID_TEMA" class="inputnormal input"></input>
                            <label class="promeblue subtitulo3">Resumo:</label>
                            <input type="text" name="ID_TEMA" class="inputtext input"></input>
                            <div class="checkbox">
                                <label><input type="checkbox" value="">Adicionar mais Metas</label>
                            </div>
                        </div>
                        <div class="col-md-6 p-fifty">
                            <label class="promeblue subtitulo3">Descrição:</label>
                            <input type="text" name="ID_TEMA" class="inputtext input"></input>
                            <label class="promeblue subtitulo3">População Beneficiada:</label>
                            <input type="text" name="option" list="exampleList" class="inputlist input">
                            <datalist id="exampleList">
                                <option>Pop A</option>
                                <option >Pop B</option>
                            </datalist>
                            <div>
                                <div class="col-md-6 p-m-null">
                                    <label class="promeblue subtitulo3">Data Início:</label>
                                    <form action="action_page.php">
                                        <input type="date" name="DATA_INICIO" class="smallinputlist input">
                                    </form>
                                </div>
                                <div class="col-md-6 p-m-null">
                                    <label class="promeblue subtitulo3">Data Final:</label>
                                    <form action="action_page.php">
                                        <input type="date" name="DATA_FIM" class="smallinputlist input">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="gradient-line">
                </form>
                <h1 class="subtitulo promeblue">Cadastro de Temas</h1><br><br>
                <form action = "cadastrar" method="post">
                    <div class="container">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                        <div class="col-md-6 rightline">
                            <label class="promeblue subtitulo3">Nome:</label>
                            <input type="text" name="ID_TEMA" class="inputnormal input"></input>
                            <label class="promeblue subtitulo3">Descrição:</label>
                            <input type="text" name="ID_TEMA" class="inputtext input"></input>
                            <div class="checkbox">
                                <label><input type="checkbox" value="">Adicionar mais Ações para essa meta</label>
                            </div>
                        </div>
                        <div class="col-md-6 p-fifty">
                            <label class="promeblue subtitulo3">Investimento Previsto:</label>
                            <input type="text" placeholder="R$ 0,00" name="ID_TEMA" class="inputnormal input"></input>
                            <label class="promeblue subtitulo3">Investimento Efetuado:</label>
                            <input type="text" placeholder="R$ 0,00" name="ID_TEMA" class="inputnormal input"></input>
                            <div>
                                <div class="col-md-6 p-m-null">
                                    <label class="promeblue subtitulo3">Data Início:</label>
                                    <form action="action_page.php">
                                        <input type="date" name="DATA_INICIO" class="smallinputlist input">
                                    </form>
                                </div>
                                <div class="col-md-6 p-m-null">
                                    <label class="promeblue subtitulo3">Data Final:</label>
                                    <form action="action_page.php">
                                        <input type="date" name="DATA_FIM" class="smallinputlist input">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <input type="submit" value="Cadastrar" class="btn-primary btn-pad"></input>
            <input type="submit" value="Voltar" class="btn-primary btn-pad" onclick="location.href= '/promessometro/public/meta'"> 
        </div>
    </section>
</body>
</html>