<div id="#home" class="home">
    <section class="carousel-default">
        <div id="carousel-default" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img class="img-responsive" src="<?= base_url(); ?>assets/images/banner-1.jpg" alt="Banner">
                </div>
                <div class="item">
                    <img class="img-responsive" src="<?= base_url(); ?>assets/images/banner-2.jpg" alt="Banner">
                </div>
                <div class="item">
                    <img class="img-responsive" src="<?= base_url(); ?>assets/images/banner-3.jpg" alt="Banner">
                </div>
                <div class="item">
                    <img class="img-responsive" src="<?= base_url(); ?>assets/images/banner-4.jpg" alt="Banner">
                </div>
            </div>
        </div>
    </section>
    <div class="logo">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                    <img class="img-responsive" src="<?= base_url(); ?>assets/images/logo-ma.png" alt="M.A Empreendimentos Imobiliários">
                </div>
            </div>
        </div>
    </div>
</div>

<div id="historia" class="historia">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 text-center">
                <h2>história</h2>
                <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/seta.png" alt="seta">
                <h6>Uma história de realizações. Um futuro de sucesso.</h6>
                <p>Tradição. Segurança. Qualidade. Estas são as marcas da M.A Empreendimentos Imobiliários
                    (antiga Munir Abbud Empreendimentos Imobiliários), que ao longo de mais de quatro
                    décadas vem desenvolvendo dezenas de empreendimentos consagrados, ajudando
                    escrever a história da construção civil de São Paulo. Porém, nada disso seria possível
                    sem investimentos constantes em tecnologia e capacitação profissional,
                    que transformaram a M.A. em sinônimo de pioneirismo e inovação em todos
                    os segmentos imobiliários. Uma empresa sólida, com uma história repleta de realizações,
                    um presente de muito trabalho e um futuro altamente promissor. Os próximos 40 anos
                    da M.A. estão apenas começando. Seja bem-vindo a essa nova jornada.</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 margin-top-40 text-center">
                <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/banner-historia-1.jpg" alt="História">
                <p class="pull-right">tradição.<br>
                    Segurança.<br>
                    Qualidade.</p>
            </div>
        </div>
    </div>
    <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/banner-historia-2.jpg" alt="História">
</div>













<div class="contato">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <form method="post" role="form" action="<?php echo base_url("contato") ?>">
                    <span class="tt-form text-center">
                        <p>Preencha os dados abaixo para<br /> um atendimento personalizado!</p>
                    </span>
                    <div class="group-form">
                        <div class="form-group">
                            <label for="nome">Nome*</label>
                            <input id="nome" type="text" class="nome form-control" name="nome" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">Email*</label>
                            <input id="email" type="email" class="email form-control" name="email" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input id="telefone" class="phone form-control" type="tel" name="phone" />
                        </div>
                        <div class="form-group">
                            <label for="form-mensagem">Mensagem</label>
                            <textarea id="form-mensagem" class="msg form-control" rows="3" name="mss"></textarea>
                        </div>
                        <button type="submit" class="btn_enviar enviar btn center-block" title="enviar" name="enviar_email" value="enviar">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 text-center padding-off">
                <p>COPYRIGHT © - TODOS OS DIREITOS RESERVADOS </p>
            </div>
        </div>
    </div>
</footer>
<?php
if (isset($email_enviado))
    echo $email_enviado;
?>