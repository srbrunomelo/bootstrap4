<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /> 
    <title>Bootstrap 4</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">  
    <link rel="stylesheet" href="css/desktop.css">  
    <link rel="stylesheet" href="css/mobile.css">  

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0672143d1d.js"></script>

    <script src="js/jquery-1.9.0.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body>

 

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Solicitar Orçamento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="">
                        <div class="form-group">
                            <label for="nome" class="col-form-label">Nome:</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nome" class="col-form-label">Email:</label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nome" class="col-form-label">Telefone:</label>
                            <input type="tel" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nome" class="col-form-label">Mensagem:</label>
                            <textarea class="form-control"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary">Enviar </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

 
 
    <header class="container-fluid">
        <div class="container container-header">
            <div class="row container-header d-flex align-items-center">

                <div class="col action-mobi">
                    <a href="#"><i class="fas fa-bars"></i></a>
                </div>
                
                <div class="col-xl-3  col-lg-3 col-md-6 logo">
                    <a href="#"><img src="img/aluplan.png" alt="Aluplan Esquadrias de Alumínio e Vidraçaria na SERRA - ES" title="Aluplan Esquadrias de Alumínio e Vidraçaria na SERRA - ES"></a>
                </div>
                <div class="col-xl-3 col-lg-2  col-md-6 dropdown d-flex">
                    <a href="#" class="active-drop">PRODUTOS E SERVIÇOS  <i class="fas fa-angle-down"></i> </a>
                </div>
                <nav class="col-xl-6 col-lg-7 menu-header">
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a href="#" class="nav-link">Ultimos Trabalhos</a>
                        </li> 
                        <li class="nav-item">
                            <a target="_blank" href="https://api.whatsapp.com/send?phone=5527997549599&text=Ola%2C%20Preciso%20de%20um%20or%C3%A7amento" class="nav-link tel-header"><i class="fab fa-whatsapp-square"></i> 27 9 9754-9599</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link btn-header" data-toggle="modal" data-target=".bd-example-modal-lg">Solicitar Orçamento</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header> 

    <div class="container-fluid submenu">
        <div class="container">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-9">
                    <div class="row">
                        <div class="col-4">
                            <h4>Vidraçaria</h4>
                            <ul>
                                <li>Vidros Temperados</li>
                                <li>Vidros Comum</li>
                                <li>Vidros Laminados</li>
                                <li>Espelhos</li>
                            </ul>
                        </div>
                        <div class="col-4">
                            <h4>Esquadrias de Alumínio</h4>
                            <ul>
                                <li>Portas</li>
                                <li>Portinholas</li>
                                <li>Portões</li>
                                <li>Grades</li>
                                <li>Janelas</li>
                                <li>Gradil</li>
                                <li>Fachadas Pele de Vidro</li>
                            </ul>
                        </div>
                        <div class="col-4">
                            <h4>Manutenções</h4>
                            <ul>
                                <li>Manutenções em fachadas</li>
                                <li>Manutenção em Portas de vidro temperado</li>
                                <li>Manutenção em portões de alumínio</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <section class="container-fluid banner"> 
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> 
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li> 
            </ol> 
            <div class="carousel-inner"> 
                <div class="carousel-item active">
                    <img src="http://www.aluplan.com.br/wp-content/uploads/2017/09/ban01.jpg" class="d-block w-100" alt="...">
                </div>  
                <div class="carousel-item">
                    <img src="http://www.aluplan.com.br/wp-content/uploads/2017/09/ban01.jpg" class="d-block w-100" alt="...">
                </div> 
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div> 
    </section> 

    <section class="container-fluid mt-5 mb-5"> 
        <div class="container">
            <div class="row ">
                <div class="col-12"> 
                    <h1 class="text-center">Alto padrão em Vidros</h1>
                    <p class="text-center">Produtos de alta qualidade em vidros temperados</p>
                </div>
            </div>
        </div>  
    </section>
 
    <section class="container-fluid mt-5 mb-5">
        <div class="container">
            <div class="row produtos-home">
                <div class="col-4">
                    <h3 class="mb-3">Vidros Temperados</h3>
                    <div class="cover-image">
                        <img class="img-fluid" src="img/produtos/janela.jpg" alt="">
                    </div>
                </div>
                <div class="col-4">
                    <h3 class="mb-3">Esquadrias de Alumínio</h3>
                    <div class="cover-image">
                        <img class="img-fluid" src="img/produtos/porta.jpg" alt="">
                    </div>
                </div>
                <div class="col-4">
                    <h3 class="mb-3">Portão de Garagem</h3>
                    <div class="cover-image">
                        <img class="img-fluid" src="img/produtos/portao.jpg" alt="">
                    </div>
                </div>
            </div>  
        </div> 
    </section> 


    <section class="container-fluid prop-box d-flex  mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Box de Vidro Temperado</h1>
                    <P>Fácil de limpar, capaz de economizar espaço e muito bonito</P> 
                    <a href="#">Solicitar Orçamento</a>
                </div>
            </div> 
        </div>
    </section>






    <section class="container-fluid d-flex mt-5 mb-5 sobre-nos">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <h3>Sobre nós</h3>
                    <p>
                    A Aluplan é uma empresa que projeta, fabrica e instala esquadrias e fachadas de alumínio para aplicação em diferentes projetos, sejam residenciais, comerciais, corporativos ou especiais.
                    <br><br>
                    Para a Aluplan, a realização esta em transformar projetos em realidade, e assim contribuir para a total satisfação de nossos clientes.
                    <br><br>
                    As esquadrias de alumínio da Aluplan utilizam acessórios e acabamentos de última geração.
                    <br><br>
                    Possuindo como meta empresarial sempre desenvolver suas atividades com a melhor qualidade e melhor profissionalismo.
                    <br><br>
                    A empresa coloca a disposição de seus clientes a produção de esquadrias, portões, portas, janelas, fachadas, pele de vidro, grades, basculantes, entre outros produtos.
                    </p>
                </div>
                <div class="col-4">
                    <h3>Atendimento</h3>

                    <div class="list-opc d-flex">
                        <div class="img-title"><i class="fas fa-phone-square"></i></div>
                        <div class="txt-infor">
                            <span>Telefone</span>
                            <p>27 9 9754-9599 (VIVO)</p>
                        </div>
                    </div>

                    <div class="list-opc d-flex">
                        <div class="img-title"><i class="far fa-envelope"></i></div>
                        <div class="txt-infor">
                            <span>E-mail</span> 
                            <p>contato<i class="fas fa-at"></i>aluplan.com.br</p>
                        </div>
                    </div> 

                    <div class="list-opc d-flex">
                        <div class="img-title"><i class="fas fa-map-marker-alt" style="padding-left:5px;"></i></div>
                        <div class="txt-infor">
                            <span>Onde Atuamos</span>
                            <p>
                            - Serra <br>
                            - Vitória <br>
                            - Vila Velha <br>
                            - Cariacica <br>
                            </p>
                        </div>
                    </div>
 
                    
                </div>
            </div>
        </div>
    </section> 




    <section class="container-fluid pele-vidro d-flex  mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>fachada Pele de vidro</h1>
                    <P>fachada fica totalmente envidraçada, adquirindo visual leve e limpo</P> 
                    <a href="#">Solicitar Orçamento</a>
                </div>
            </div> 
        </div>
    </section>




    <section class="container-fluid mt-5 mb-5"> 
        <div class="container">
            <div class="row mb-5">
                <div class="col-12"> 
                    <h1 class="text-center">fornecedores</h1>
                    <p class="text-center">Trabalhamos com as melhores marcas do mercado</p>
                </div>
            </div>
            <div class="row fornecedores d-flex">
                <div class="col-4">
                    <img src="img/marcas/al.png" alt=""  title="">
                </div>
                <div class="col-4">
                    <img src="img/marcas/viminas.png" alt=""  title="">
                </div>
                <div class="col-4">
                    <img src="img/marcas/perfil.png" alt=""  title="">
                </div>
            </div>
        </div>  
    </section>



    <footer class="container-fluid d-flex">
        <div class="container">
            <div class="row container-footer d-flex">
                <div class="col-6">
                   <p>Todos Direitos Reservados</p>
                </div>
                <div class="col-6 text-right">
                    <p>Desenvolvido por: <a target="_blank" href="https://www.behance.net/srbrunomelo">Bruno Melo</a></p>
                </div>
            </div>
        </div>
    </footer>

   
    
</body>
</html>