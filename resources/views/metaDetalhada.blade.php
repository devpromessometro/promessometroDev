@extends ('navbar-logged')

<!DOCTYPE html>
<html>
<head>
    <title>Meta Detalhada</title>

</head>
<body>        
    <section style="margin-top: 100px; ">
        <div class="middlecenter-cadastra text-center middlecenter-metaDetail">
         <div style="padding-bottom: 20px;">
            <div class="row">
                <div  class="col-md-5">
                    <h1 class="h1seguidas" style="font-family:arial black">Meta</h1><br><br>
                    <h3>Nome da Meta</h3>
                    <img src="img/mapa.png" style="padding-left:50px ; width:550px ; height:200px"><br><br>
                    <p style="padding-left:50px ; text-align:justify ; text-style:itallic"><i>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vehicula augue ac egestas ornare. 
                        Nulla sollicitudin porttitor tempus. Integer bibendum dolor et justo finibus, ut condimentum nunc pharetra. 
                        Nulla in maximus urna. Etiam quis orci lacus. Suspendisse vitae quam orci. Phasellus aliquam, tortor sodales 
                        mattis pretium, dui nisl vestibulum ex, eget ornare arcu elit mattis mi."</i>
                    </p>
                    <p style="margin-left: 50px; text-align: left; font-size:20px; color:#B0C4DE"><i>"Tema"</i></p>
                    <p style="margin-left: 50px; text-align: left; font-size:20px; color:#B0C4DE"><i>"Responsavel"</i></p>
                </div>
                <div class="col-md-7">
                    <div style="background-color: rgba(8, 150, 230, 1); margin-left:55px; margin-top:20px; height:40px; border-radius: 10px;">
                        <a style="font-family:times new roman; font-size:15px; color: white">Selecione o tema desejado:</a>
                        <input type="text" name="option" list="exampleList" style="margin-left: 100px; margin-top: 6px;"> 
                        <datalist id="exampleList">
                            <option>Educação</option>
                            <option value="Saúde">Saúde</option>
                            <option value="Segurança">Segurança</option>
                            <option value="Transporte">Transporte</option>
                        </datalist>
                    </div>
                    <div class="col-md-4">
                        <img src="img/circulo4.png" style="padding-top:75px; padding-left:75px">
                    </div class="col-md-12">
                    <h4 style="padding-top:150px; padding-left:275px; font-family:arial black; font-size:20px; color: rgba(0, 150, 230, 1);">Progresso de conclusao da Meta</h4>
                    <h6 style="padding-top:5px; padding-left:325px; font-family:arial; font-size:20px; color: rgba(0, 150, 230, 1);">2 de 4 acoes concluidas</h6>
                    <ul style="padding-top:5px; padding-left:380px; font-family:arial; font-size:20px; ">
                        <li style="list-style-image: url(img/lupa-green.png);">Acao A</li>
                        <li style="list-style-image: url(img/lupa-yellow.png)">Acao B</li>
                        <li style="list-style-image: url(img/lupa-yellow.png)">Acao C</li>
                        <li style="list-style-image: url(img/lupa-red.png)">Acao D</li>
                    </ul>
                    <button class="btn btn-info btn-lg" style="margin-top:100px; margin-left:250px; font-family:arial black; width:200px; height:75px ">Seguir Meta</button>
                </div>
            </div>
            <hr style="border: 0;height: 1px;background: #333;background-image: linear-gradient(to right, #ccc,rgba(0, 100,230 , 1) , #ccc );">

            <div class="row">
                <div class="col-md-6">
                    <h3 style="font-family:arial; border-left-style:solid; color:rgba(0, 150, 230, 1)">Ações da Meta:</h3>
                    <div class="accordions" style="text-align: left;">
                        <div class="accordion-item">
                            <input type="checkbox" name="accordion" checked="checked" id="accordion-1" />
                                <label for= "accordion-1"><P style="font-family:arial black; font-size:20px; color:rgba(8,150,230,1);">Acao A</P></label>
                                    <P>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vehicula augue ac egestas ornare. 
                                Nulla sollicitudin porttitor tempus. Integer bibendum dolor et justo finibus, ut condimentum nunc pharetra.</P>
                                    <div class="accordion-content">* DETALHES DA ACAO A*</div>
                        </div>
                                         
                        <div class="accordion-item">
                            <input type="checkbox" name="accordion" id="accordion-2" />
                                <label for= "accordion-2"><P style="font-family:arial black; font-size:20px;color:rgba(8,150,230,1);">Acao B</P></label>
                                    <P>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vehicula augue ac egestas ornare. 
                                Nulla sollicitudin porttitor tempus. Integer bibendum dolor et justo finibus, ut condimentum nunc pharetra.</P>
                                    <div class="accordion-content">* DETALHES DA ACAO B*</div>
                        </div>
                                         
                        <div class="accordion-item">
                            <input type="checkbox" name="accordion" id="accordion-3" />
                                <label for= "accordion-3"><P style="font-family:arial black; font-size:20px;color:rgba(8,150,230,1);">Acao C</P></label>
                                        <P>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vehicula augue ac egestas ornare. 
                                Nulla sollicitudin porttitor tempus. Integer bibendum dolor et justo finibus, ut condimentum nunc pharetra.</P>
                                        <div class="accordion-content">* DETALHES DA ACAO C*</div>
                        </div>

                        <div class="accordion-item">
                            <input type="checkbox" name="accordion" id="accordion-4" />
                                <label for= "accordion-4"><P style="font-family:arial black; font-size:20px;color:rgba(8,150,230,1);">Acao D</P></label>
                                    <P>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vehicula augue ac egestas ornare. 
                                Nulla sollicitudin porttitor tempus. Integer bibendum dolor et justo finibus, ut condimentum nunc pharetra.</P>
                                    <div class="accordion-content">* DETALHES DA ACAO D*</div>
                        </div>
                    </div>
                </div>
            </div>
            <hr style="border: 0;height: 1px;background: #333;background-image: linear-gradient(to right, #ccc,rgba(0, 100,230 , 1) , #ccc );">

            <div class="row">
                <div class="col-md-12">
                    <h3 style="border-left-style:solid; color:rgba(0, 150, 230, 1); font-family:arial">De olho no Promessometro</h3>
                    <P style="font-family:arial; font-size:20px; text-align: left;">Registre aqui seu comentario, critica e sugestao para melhorar a gestao municipal</P>
                </div>

                <div class="col-md-6">
                    <hr style="border: 0;height: 1px;background: #333;background-image: linear-gradient(to right, #ccc,rgba(0, 100,230 , 1) , #ccc );">
                    <h4 style="font-family:arial; color:rgba(0, 150, 230, 1); padding-left:50px">Comentarios:</h4>
                    <hr style="border: 0;height: 1px;background: #333;background-image: linear-gradient(to right, #ccc,rgba(0, 100,230 , 1) , #ccc ); ">
                    <div style="background-color:#ADD8E6">
                        <P style="padding-left:30px">Nenhum comentario encontrado</P>
                    </div>
                    <hr style="border: 0;height: 1px;background: #333;background-image: linear-gradient(to right, #ccc,rgba(0, 100,230 , 1) , #ccc ); ">
                    
                    <img src="img/comment.png" style="padding:0px;">
                    <input style="height:150px; width:480px" placeholder="Escreva aqui seu comentario">
                </div>
            </div>
        </div>    
    </div>
</section>
</body>
</html>