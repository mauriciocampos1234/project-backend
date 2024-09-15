    <section class="banner-container">
        <div style="background-image: url('<?php echo INCLUDE_PATH; ?>images/bg-form14.jpg');" class="banner-single"></div><!--banner-single-->
        <div style="background-image: url('<?php echo INCLUDE_PATH; ?>images/bg-form13.jpg');" class="banner-single"></div><!--banner-single-->
        <div style="background-image: url('<?php echo INCLUDE_PATH; ?>images/bg-form12.jpg');" class="banner-single"></div><!--banner-single-->
        <div style="background-image: url('<?php echo INCLUDE_PATH; ?>images/bg-form11.jpg');" class="banner-single"></div><!--banner-single-->
        <div style="background-image: url('<?php echo INCLUDE_PATH; ?>images/bg-form9.jpg');" class="banner-single"></div><!--banner-single-->
        <div style="background-image: url('<?php echo INCLUDE_PATH; ?>images/bg-form8.jpg');" class="banner-single"></div><!--banner-single-->        
        
        <div class="overlay"></div><!--overlay-->
            <div class="center">
            
                <form method="post">
                    <h1>Bem-vindo(a) ao Meu Portfólio!</h1>
                    <p>Fico muito feliz em ter você aqui. Navegue pelos meus projetos e conheça um pouco mais sobre o meu trabalho e experiência profissional. Increva-se no formulário abaixo para receber ofertas exclusivas!</p>                    
                    <input type="email" name="email" placeholder="Insira seu e-mail" required />
                    <input type="hidden" name="identificador" value="form_home" />
                    <input type="submit" name="acao" value="Cadastrar!">
                </form>
            </div><!--Center-->
            <div class="bullets">
                
            </div><!--bullets-->
    </section><!--banner-container-->

    <section class="descricao-autor">
        <div class="center">
            <div class="w50 left">
                <h2>Maurício Campos</h2>
                
                <ul>
                    <li><b>Atualização Constante:</b> Um excelente profissional está sempre em busca de aprendizado, mantendo-se atualizado sobre as últimas tendências, linguagens de programação, frameworks e ferramentas. Ele entende que a tecnologia evolui rapidamente e busca constantemente novas formas de aprimorar suas habilidades.</li>
                    <li><b>Conhecimento Profundo:</b> Além de se manter atualizado, domina as tecnologias centrais da sua área, seja em desenvolvimento, infraestrutura, segurança ou dados, conhecendo a fundo as melhores práticas.</li>
                    <li><b>Versatilidade:</b> Sabe trabalhar em diferentes camadas da tecnologia (como back-end, front-end, redes ou segurança), ou é um especialista em uma área com conhecimentos cruzados em outras, o que lhe permite atuar de forma eficiente em equipes multidisciplinares.</li>
                </ul>

                
            </div><!--w50 (1 - descrição autor)-->

            <div class="w50 left">
                <img class="right" src="<?php echo INCLUDE_PATH; ?>images/eu1.jpg" alt="Foto do Autor">
            </div><!--w50 (2 - imagem autor)-->
            <div class="clear"></div><!--Resetando Flutuação-->
        </div><!--Center-->
    </section><!--descricao-autor-->

    <section class="especialidades">
        <div class="center">
            <h2 class="title">Especialidades</h2>
            <div class=" w33 left box-especialidade">
                <h3><i class="fa-solid fa-display"></i></h3>
                <h4>Front-End</h4>                
                <ul>
                    <li><b>HTML/CSS:</b> Para estruturar e estilizar as páginas.</li>
                    <li><b>JavaScript:</b> Frameworks/libraries como React, Vue.js ou Angular: Para criar interfaces interativas e dinâmicas.</li>
                    <li><b>Design Responsivo:</b> Conhecimento em técnicas para garantir que a aplicação funcione em diferentes tamanhos de tela (dispositivos móveis e desktop).</li>
                </ul>
            </div><!--box-especialidade-->

            <div class=" w33 left box-especialidade">
                <h3><i class="fa-solid fa-code"></i></h3>
                <h4>Back-end</h4>                
                <ul>
                    <li><b>Linguagens de programação:</b> Node.js, Python, Ruby, PHP, ou Java: Para gerenciar a lógica do servidor e a comunicação com o banco de dados.</li>
                    <li><b>Bancos de dados:</b> Experiência com bancos de dados relacionais (como MySQL, PostgreSQL) e não relacionais (como MongoDB).</li>
                    <li><b>APIs:</b> Desenvolvimento e consumo de APIs RESTful ou GraphQL para comunicação entre o front-end e o back-end.</li>
                </ul>
            </div><!--box-especialidade-->

            <div class="w33 left box-especialidade">
                <h3><i class="fa-brands fa-square-github"></i></h3>
                <h4>Ferramentas e Infraestrutura</h4>                
                <ul>
                    <li><b>Versionamento de código:</b> Utilização de ferramentas como Git e GitHub.</li>
                    <li><b>DevOps:</b> Conhecimento em implantação contínua e gerenciamento de servidores, usando ferramentas como Docker, Kubernetes, e serviços de nuvem como AWS, Azure ou Google Cloud.</li>
                    <li><b>Segurança:</b> Implementação de medidas de segurança em nível de aplicação e servidor, como autenticação, criptografia e controle de acesso.</li>
                </ul>
            </div><!--box-especialidade-->
            <div class="clear"></div><!--Resentando flutuação-->
        </div><!--center-->
    </section><!--especialidades-->

    <section id="depoimentos" class="extras">
        <div class="center">
            <div  class="w50 left depoimentos-container">
                <h2 class="title">Depoimentos dos nossos clientes</h2>
                <div class="depoimento-single">
                    <p class="depoimento-descricao">
                    "Trabalhar com o Mauricio foi uma experiência excepcional. Sua habilidade em resolver problemas complexos com rapidez e precisão nos ajudou a superar grandes desafios no desenvolvimento de nossos sistemas. Ele sempre traz novas soluções inovadoras para a mesa."
                    </p>
                    <p class="nome-autor">Fatima Dantas</p>
                </div><!--depoimento-single-->

                <div class="depoimento-single">
                    <p class="depoimento-descricao">
                    "Mauricio é um verdadeiro especialista em tecnologia. Sua dedicação e atenção aos detalhes fazem dele um profissional confiável em qualquer projeto. Ele sempre está disposto a ajudar e compartilhar seu vasto conhecimento com a equipe."
                    </p>
                    <p class="nome-autor">Lucia Vilela</p>
                </div><!--depoimento-single-->

                <div class="depoimento-single">
                    <p class="depoimento-descricao">
                    "A expertise de Mauricio no campo da tecnologia é evidente em tudo o que ele faz. Seu trabalho em nossos projetos foi crucial para alcançar os resultados esperados. Além disso, sua capacidade de comunicação torna o processo de desenvolvimento muito mais ágil."
                    </p>
                    <p class="nome-autor">Lucas Araújo</p>
                </div><!--depoimento-single-->

                <div class="depoimento-single">
                    <p class="depoimento-descricao">
                    "Trabalhar ao lado de Mauricio foi uma experiência de aprendizado constante. Ele combina habilidades técnicas avançadas com uma mentalidade colaborativa, sempre disposto a buscar soluções que beneficiem a todos. Um verdadeiro líder na área de TI."
                    </p>
                    <p class="nome-autor">Beatriz Amorim</p>
                </div><!--depoimento-single-->

                <div class="depoimento-single">
                    <p class="depoimento-descricao">
                    "Excelente profissional, super dedicado no que faz, com capacidade de entendimento do que realmente precisamos para nossas soluções empresariais. "
                    </p>
                    <p class="nome-autor">Peterson Augusto</p>
                </div><!--depoimento-single-->
            </div><!--w50-->

            <div id="servicos" class="w50 left servicos-container">
                <h2 class="title">Serviços</h2>
                <div class="servicos">
                    <ul>
                        <li><b>Design e Implementação de Interfaces:</b> Criação de interfaces de usuário usando HTML, CSS, JavaScript e frameworks como React, Angular, ou Vue.js.</li>
                        <li><b>Responsividade e Cross-browser:</b> Garantir que a aplicação funcione bem em diferentes dispositivos e navegadores.</li>
                        <li><b>User Experience (UX):</b> Otimização da experiência do usuário, incluindo navegação, layout e interações.</li>
                        <li><b>Integração com APIs:</b> Conectar a interface do usuário com serviços de back-end via APIs RESTful ou GraphQL.</li>
                        <li><b>Desenvolvimento de APIs:</b> Criar e manter APIs para comunicação entre o front-end e o banco de dados.</li>
                        <li><b>Gerenciamento de Bancos de Dados:</b> Projeto, implementação e manutenção de bancos de dados (SQL ou NoSQL).</li>
                        <li><b>Autenticação e Autorização:</b> Implementação de sistemas de login, registro e controle de acesso de usuários.</li>
                        <li><b>Processamento de Dados:</b> Implementar lógica de negócios complexa, manipulação e processamento de dados.</li>
                        <li><b>Configuração de Servidores:</b> Configurar e manter servidores web (como Apache ou Nginx) e de aplicação.</li>
                        <li><b>Integração Contínua/Entrega Contínua (CI/CD):</b> Automatização de testes, builds e deploys para garantir a qualidade e a agilidade no desenvolvimento.</li>
                        <li><b>Gerenciamento de Contêineres:</b> Usar tecnologias como Docker e Kubernetes para implantar e escalar aplicações.</li>
                        <li><b>Monitoramento e Manutenção:</b> Monitorar a performance da aplicação, identificar e resolver problemas em produção.</li>
                    </ul>

                    <!-- <button class="btn-portfolio"><a realtime="portfolio" href="<?php echo INCLUDE_PATH; ?>portfolio">Acesse meu portfólio!</a></button> -->
                </div><!--servicos-->
            </div><!--w50-->
            <div class="clear"></div><!--Resetando Flutuação-->
        </div><!--Center-->
    </section><!--extras-->

    <section class="especialidades">
        <div class="center">
            <h2 class="title">Meu Portfólio</h2>
            <div class=" w33 left box-especialidade designer">
                <h3><img src="images/p-01.png" alt=""></h3>
                <button class="btn-site"><a target="_blank" href="https://clone-disneyplus-xeem.vercel.app/">Visitar!</a></button>
            </div><!--box-especialidade-->

            <div class=" w33 left box-especialidade designer">
                <h3><img src="images/p-02.png" alt=""></h3>
                <button class="btn-site"><a target="_blank" href="https://mauricio-projeto-13.vercel.app/">Visitar!</a></button>
            </div><!--box-especialidade-->

            <div class="w33 left box-especialidade designer">
                <h3><img src="images/p-03.png" alt=""></h3>
                <button class="btn-site"><a target="_blank" href="https://project-10-kappa.vercel.app/">Visitar!</a></button>
            </div><!--box-especialidade-->
            <div class="clear"></div><!--Resentando flutuação-->
        </div><!--center-->
        
        <div class="center">
            <div class="w33 left box-especialidade designer">
                <h3><img src="images/p-04.png" alt=""></h3>
                <button class="btn-site"><a target="_blank" href="https://project-6-singlepage.vercel.app/">Visitar!</a></button>
            </div><!--box-especialidade-->

            <div class="w33 left box-especialidade designer">
                <h3><img src="images/p-05.png" alt=""></h3>
                <button class="btn-site"><a target="_blank" href="https://project-final-delta.vercel.app/">Visitar!</a></button>
            </div><!--box-especialidade-->

            <div class="w33 left box-especialidade designer">
                <h3><img src="images/p-06.png" alt=""></h3>
                <button class="btn-site"><a target="_blank" href="https://mauricio-evento-aniversario.vercel.app/">Visitar!</a></button>
            </div><!--box-especialidade-->
            <div class="clear"></div><!--Resentando flutuação-->
        </div><!--center-->
    </section><!--portfólio-->


    <div class="contato-container">
        <div class="center">
            <h2 class="title">Entre em Contato</h2>
            <form method="post">
                <input type="text" name="nome" placeholder="Seu nome..." required>
                <div></div>
                <input type="text" name="email" placeholder="Seu E-mail..." required>
                <div></div>
                <input type="text" name="whatsapp" id="whatsapp" placeholder="Seu Whatsapp..." required>
                <div></div>
                <textarea placeholder="Digite aqui sua mensagem..." name="mensagem" id=""></textarea>
                <div></div>
                <input type="hidden" name="identificador" value="form_contato">
                <input type="submit" name="acao" value="Enviar!">                
            </form>
        </div>        
    </div><!--Formulário do mapa-->
    <div id="map"></div><!--Map-->

    <div class="container-whatsapp">
        <div class="center">
            <a href="https://api.whatsapp.com/send?phone=+5512981827278&text=Olá,%20visitei%20seu%20portfólio%20e%20gostaria%20de%20mais%20informações:" target="_blank" class="btn-whatsapp">
                <i class="fa-brands fa-whatsapp"></i>
            </a>
        </div>
        </div><!-- container-whatsapp -->