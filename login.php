<?php include('./header.php'); ?>

<section class="login-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-12 loginLeftSide">
                <a class="navbar-brand" href="./"><img src="./images/setabid-logo.png"/></a>
                <div class="login-form">
                    <h1>Sveiki atvyke į SetaBid</h1>
                    <p>Įveskite savo prisijungimo duomenis ir pradėkite naudotis privačių aukcionų platforma</p>
                    <form class="w-100">
                    <div class="form-floating mb-4">
                    <input type="text" class="form-control" id="floatingPassword">
                    <label for="floatingPassword">El. paštas</label>
                    </div>
                    <div class="form-floating mb-4">
                    <input type="password" class="form-control" id="floatingPassword">
                    <label for="floatingPassword">Slaptažodis</label>
                    </div>
                    <div class="d-inline-flex w-100">
                        <div class="mb-3 form-check w-50">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Prisiminti mane</label>
                        </div>
                        <div class="text-right w-50">
                            <a href="">Pamiršau slaptažodį</a>
                        </div>
                    </div>
                        <button type="submit">Prisijungti</button>
                    </form>
                    <div class="text-center rememberBtn">
                        <a href="">Neturite paskytos? <b>Prisijunkite</b></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12 loginBackgroundSide hidden-sm">
                
            </div>
        </div>
    </div>
</section>

<?php include('./footer.php'); ?>
