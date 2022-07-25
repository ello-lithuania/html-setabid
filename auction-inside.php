<?php include('./header.php'); ?>

<section class="auction-single finished-auction">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="auction-thumbnail-main">
                    <img class="w-100" src="./images/auction-image.png"/>
                    <p>Privatus aukcionas</p>
                </div>

                <ul class="nav nav-pills" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="informacija-tab" data-bs-toggle="tab" data-bs-target="#informacija" type="button" role="tab" aria-controls="home" aria-selected="true">Informacija</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="taisykles-tab" data-bs-toggle="tab" data-bs-target="#taisykles" type="button" role="tab" aria-controls="profile" aria-selected="false">Taisyklės</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="failai-tab" data-bs-toggle="tab" data-bs-target="#failai" type="button" role="tab" aria-controls="contact" aria-selected="false">Failai</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="dalyviai-tab" data-bs-toggle="tab" data-bs-target="#dalyviai" type="button" role="tab" aria-controls="contact" aria-selected="false">Dalyviai</button>
                </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="informacija" role="tabpanel" aria-labelledby="home-tab">
                    <div class="auction-description-main">
                        <p>Aukciono objekto aprašymas</p>
                    </div>
                    <p class="more-info-link">Daugiau informacijos: <a href="">www.aruodas.lt/skelbimai123</a></p>
                </div>
                <div class="tab-pane fade" id="taisykles" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="auction-description-main">
                        <p>Taisyklių aprašymas</p>
                    </div>
                </div>
                <div class="tab-pane fade" id="failai" role="tabpanel" aria-labelledby="contact-tab">
                    <a href="" class="file-download-main"><img class="first-upload-image" src="./images/pdf-icon.svg"/>NT israsas.pdf<img src="./images/download-file-icon.svg" class="second-img"/></a>
                    <a href="" class="file-download-main"><img class="first-upload-image" src="./images/pdf-icon.svg"/>NT israsas.pdf<img src="./images/download-file-icon.svg" class="second-img"/></a>
                    <a href="" class="file-download-main"><img class="first-upload-image" src="./images/pdf-icon.svg"/>NT israsas.pdf<img src="./images/download-file-icon.svg" class="second-img"/></a>
                </div>
                <div class="tab-pane fade" id="dalyviai" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="row">
                        <div class="col-md-4 text-center"><img src="https://png.pngtree.com/thumb_back/fh260/background/20210207/pngtree-gray-simple-gradient-background-image_557031.jpg" class="img-thumbnail rounded-circle" alt="..."><h4>Ignas</h4></div>
                        <div class="col-md-4 text-center"><img src="https://png.pngtree.com/thumb_back/fh260/background/20210207/pngtree-gray-simple-gradient-background-image_557031.jpg" class="img-thumbnail rounded-circle" alt="..."><h4>Ignas</h4></div>
                        <div class="col-md-4 text-center"><img src="https://png.pngtree.com/thumb_back/fh260/background/20210207/pngtree-gray-simple-gradient-background-image_557031.jpg" class="img-thumbnail rounded-circle" alt="..."><h4>Ignas</h4></div>
                        <div class="col-md-4 text-center"><img src="https://png.pngtree.com/thumb_back/fh260/background/20210207/pngtree-gray-simple-gradient-background-image_557031.jpg" class="img-thumbnail rounded-circle" alt="..."><h4>Ignas</h4></div>
                    </div>
                </div>
                
                </div>

            </div>
            <div class="col-md-6 col-12">
                <div class="d-flex heading-top">
                    <h1>Objekto pavadinimas</h1> 
                    <p><span>Vykstantis</span><span class="hidden">pasibaigęs</span></p>
                </div>   
                <p class="object-address"><img src="./images/single-address-icon.svg"/>Objekto adresas</p>
                <p class="object-price">Pradinė objekto kaina: <b>10 000 000  Eur</b></p>

                <div class="row">
                    <div class="auction-top-price d-flex">
                    <div class="col-6">
                        <p class="auction-top-price-heading">Didžiausia siūloma suma</p>
                        <p class="auction-top-price-total">15 000 000 Eur</p>
                    </div>
                    <div class="col-6">
                        <p class="auction-top-price-heading">Iki aukciono pabaigos liko</p>
                        <p class="auction-top-price-time">12 d. 5 val. 45 min.</p>
                    </div>
                    </div>
                </div>

                <div class="row auction-submit-form">
                    <div class="col-6">
                        <input class="form-control" placeholder="Įveskite siūlomą sumą"/>
                    </div>
                    <div class="col-6">
                        <button class="btn btn-primary"><img src="./images/siulyti-icon.svg"/>Siūlyti</button>
                    </div>
                    <div class="col-12 hidden">
                        <button class="btn btn-primary"><img src="./images/download-icon.svg"/>Atsisiųsti aukciono protokolą</button>
                    </div>
                </div>

                <p class="minimum-interval"><img src="./images/danger-icon.svg"/>Minimalus sumos kėlimo intervalas: <b>500 Eur</b></p>

                <h2 class="text-heading">Siūlymų istorija</h2>

                <div class="row auction-history">
                    <div class="col-8">
                        <p>2022 12 21 14:43:32 vs****@g***.com</p>
                    </div>
                    <div class="col-4">
                        <b>15 000 000 Eur</b>
                    </div>
                    <div class="col-8">
                        <p>2022 12 21 14:43:32 vs****@g***.com</p>
                    </div>
                    <div class="col-4">
                        <b>15 000 000 Eur</b>
                    </div>
                    <div class="col-8">
                        <p>2022 12 21 14:43:32 vs****@g***.com</p>
                    </div>
                    <div class="col-4">
                        <b>15 000 000 Eur</b>
                    </div>
                    <div class="col-8">
                        <p>2022 12 21 14:43:32 vs****@g***.com</p>
                    </div>
                    <div class="col-4">
                        <b>15 000 000 Eur</b>
                    </div>
                </div>

                <h2 class="text-heading">Aukciono organizatorius</h2>

                <div class="row auction-organization">
                    <div class="col-2">
                        <img src="./images/auction-thumbnail.png"/>
                    </div>
                    <div class="col-10">
                        <h3>Ignas Zabarauskas</h3>
                        <p class="organisation-phone">+37063603556</p>
                        <p class="organisation-email">ignas.zabarauskas@capitalrealty.com</p>
                        <p class="organisation-name">Capital</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?php include('./footer.php'); ?>