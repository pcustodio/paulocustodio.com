<?php include 'header.php'; ?>
        <main>
            <div>
                <div class="row" id="section1">
                    <div class="col l3 s2">
                        <div>
                            <h1>contacto<span class="borderTop goRight medium"></span></h1>
                        </div>
                    </div>
                    <div class="form-container">
                        <form id="ajax-contact" method="post" action="mailer.php" class="col l6 s10 adjust">
                            <div class="preloader-background"></div>
                            <div class="row">
                                <div class="col l3 s12">
                                    <h2>fale comigo<span class="borderTop goRight long"></span></h2>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col l4 s10">
                                    <label class="active" for="name">O seu nome</label>
                                    <input type="text" id="name" name="name" required>
                                </div>
                                <div class="input-field col l4 s10">
                                    <label for="email">O seu email</label>
                                    <input type="email" id="email" name="email" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col l8 s10">
                                    <label for="message">A sua mensagem</label>
                                    <textarea class="materialize-textarea" id="message" name="message" required></textarea>
                                </div>
                            </div>
                            <div class="row">
                                    <div class="input-field col l4 s10">
                                        <button class="waves-effect waves-light btn" type="submit">Enviar Mensagem</button>
                                    </div>
                                    <div class="input-field col l4 s10">
                                        <div id="form-messages" class="formGo superlong"></div>
                                    </div>
                            </div>
                        </form>
                    </div>
                    <div class="col l1"></div>
                    <div class="col l2">
                        <div class="rightBar">
                            <ul class="fadeIn short delayS">
                                <li>
                                    +351  91 24 396 24
                                </li>
                                <li>
                                    info@paulocustodio.com
                                </li>
                            </ul>
                            <span class="goBottom short"></span>
                        </div>
                    </div>
                </div>                              
        </main>
    
        <?php include 'footer.php'; ?>