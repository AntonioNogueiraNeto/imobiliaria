    <!-- ======= Contact Section ======= -->

    <style>
        .overlay-contact {

            background-image: url("./assets/img/bg/pampulha.jpg");
            z-index: 1;
            background-repeat: no-repeat;
            background-size: cover;
        }



        .contact-container-div {
            padding-top: 45px;
            color: white;
            padding-bottom: 30px;
            z-index: 99;
        }

        .social-links i {
            font-size: 16px;
            padding: 5px;
        }
    </style>
    <section id="contact" class="contact">

        <div class="background" >
            <div class="overlay-contact">
                <div class="contact-container-div">
                    <div class="container">



                        <div class="row">

                            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                                <div class="contact-about">
                                    <h3>Entre em contato</h3>
                                    <p>Se você precisar entrar em contato conosco, pode usar o formulário de
                                        contato em
                                        nosso
                                        site
                                        ou enviar um e-mail para o endereço que está disponível na seção de
                                        contato. Teremos
                                        prazer
                                        em responder às suas perguntas e ajudá-lo da melhor maneira possível.
                                        Nos encontre
                                        tambem
                                        nas redes sociais.</p>
                                    <div class="social-links">
                                        <a href="" class="twitter"><i class="bi bi-twitter"></i></a>
                                        <a href="" class="facebook"><i class="bi bi-facebook"></i></a>
                                        <a href="" class="instagram"><i class="bi bi-instagram"></i></a>
                                        <a href="" class="linkedin"><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                                <div class="info">
                                    <div>
                                        <i class="ri-map-pin-line"></i>
                                        <p>
                                        Ibirité – MG
                                        </p>
                                    </div>

                                    <div>
                                        <i class="ri-mail-send-line"></i>
                                        <p>
                                            teste@teste.com.br
                                        </p>
                                    </div>

                                    <div>
                                        <i class="ri-phone-line"></i>
                                        <p>
                                            (31)9999999999
                                        </p>
                                    </div>

                                </div>
                            </div>


                            <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">
                                <form action="./enviar-email.php" method="post" name="enviar-email" role="form" class="php-email-form">
                                    <div class="form-group">
                                        <input type="text" name="nome" class="form-control" id="name" placeholder="Seu nome" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Seu e-mail" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="assunto" id="subject" placeholder="Assunto" required>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" rows="5" placeholder="Mensagem" required></textarea>
                                    </div>

                                    <div class="text-center"><button class="btn-primary" style="border-radius: 40px; padding: 10px; " type="submit" name="submit">Enviar
                                            Mensagem</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section><!-- End Contact Section -->