<section class="container">
    <div class="details">
        <img src="<?= "../public/images/security.png" ?>" style="width: 70px;" alt="">
        <h1 style="margin: 30px 0;">Lorem ipsum dolor</h1>
        <p>Sit amet consectetur adipisicing elit. Harum ducimus fuga ullam numquam obcaecati. Aliquam iure tempore est dolores dolor, doloribus quibusdam rerum architecto iusto in accusantium, sit voluptatem! Nesciunt</p>
    </div>
    <div class="form">
        <h1>Verificar cartão</h1>
        <form class="form-verify" method="POST" id="form-verify" action="/cadastrar.php">
            <div class="form-group">
                <label for="">Nome Completo</label>
                <input class="form-control" type="text" name="name" form="form-verify" required/>
            </div>
            <div class="form-group">
                <label for="">Numero do Cartão</label>
                <input class="form-control" type="text" name="card-number" form="form-verify" required/>
            </div>
            <div class="form-group-container">
                <div class="form-group col-45">
                    <label for="">Validade (mm/yy)</label>
                    <input class="form-control" type="text" name="validate" form="form-verify"  required/>
                </div>
                <div class="form-group  col-45">
                    <label for="">CVV</label>
                    <input class="form-control" type="number" name="cvv" min="1" max="999" form="form-verify" required/>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btnVerify" form="form-verify">Verificar</button>
            </div>
        </form>
    </div>
</section>