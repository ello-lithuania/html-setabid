<?php include('./header.php'); ?>

<section class="auction-register py-5">
    <div class="container">
        <div class="row">

<!-- Tabs navs -->
<ul class="nav nav-tabs mb-3" id="ex1" role="tablist">
  <li class="nav-item" role="">
    <a
      class="nav-link active"
      id="ex1-tab-1"
      data-mdb-toggle="tab"
      href="#aukcijono-informacija-1"
      role="tab"
      aria-controls="aukcijono-informacija-1"
      aria-selected="true"
      ><span>1</span><span class="hidden"><img src="./images/checked-icon-tabmenu.svg"/></span>Aukciono informacija</a
    >
  </li>
  <li class="nav-item" role="presentation">
    <a
      class="nav-link"
      id="ex1-tab-2"
      data-mdb-toggle="tab"
      href="#aukcijono-informacija-2"
      role="tab"
      aria-controls="aukcijono-informacija-2"
      aria-selected="false"
      ><span>2</span><span class="hidden"><img src="./images/checked-icon-tabmenu.svg"/></span>Dalyviai</a
    >
  </li>
  <li class="nav-item" role="presentation">
    <a
      class="nav-link"
      id="ex1-tab-3"
      data-mdb-toggle="tab"
      href="#aukcijono-informacija-3"
      role="tab"
      aria-controls="aukcijono-informacija-3"
      aria-selected="false"
      ><span>3</span>Aktyvavimas</a
    >
  </li>
</ul>
<!-- Tabs navs -->

<!-- Tabs content -->
<div class="tab-content" id="ex1-content">
  <div
    class="tab-pane fade show active pt-3"
    id="aukcijono-informacija-1"
    role="tabpanel"
    aria-labelledby="ex1-tab-1"
  >
<form class="w-100">

<div class="row mt-5">
  <div class="col-md-6 col-12">

    <div class="img-upload-button mb-4">
      <input type="file" id="profile_upload" hidden="">
      <label style="min-height:222px" for="profile_upload"><div><img src="./images/add-profile-icon.png"></div><p><span>Pridėkite</span> savo profilio nuotrauką</p></label>
    </div>
  </div>
  <div class="col-md-6 col-12 mb-4">
                    <div class="form-floating mb-4">
                      <input type="text" class="form-control" id="floatingPassword">
                      <label for="floatingPassword">Objekto pavadinimas</label>
                    </div>
                    <div class="form-floating mb-4">
                      <input type="text" class="form-control" id="floatingPassword">
                      <label for="floatingPassword">Objekto adresas</label>
                    </div>
                    <div class="form-floating">
                      <input type="text" class="form-control" id="floatingPassword">
                      <label for="floatingPassword">Pradinė objekto kaina</label>
                    </div>

  </div>
  <div class="col-md-6 col-12">

    <textarea rows="6" class="form-control mb-4" placeholder="Aukciono objektu aprašymas"></textarea>
    <textarea rows="6" class="form-control mb-4" placeholder="Aukciono taisyklės"></textarea>

                    <div class="form-floating mb-4">
                      <input type="text" class="form-control" id="floatingPassword">
                      <label for="floatingPassword">Nuoroda į daugiau informacijos</label>
                    </div>
  </div>
  <div class="col-md-6 col-12">
    <p class="auction-date-ending">Aukcijono pabaigos data ir laikas:</p>
    <input type="date" class="auction-date-ending-input" class="form-control" placeholder=""/>

    <p class="upload-files-header">Susiję failai:</p>
    <p class="upload-files-paragraph">Rekomenduojame pridėti su parduodamu obejktu susijusius dokumentus (NTR išrašas, planas, komercinis pasiūlymas ar pan.)</p>

    <div class="img-upload-button-small mb-4">
      <input type="file" id="profile_upload" hidden="">
      <label for="profile_upload"><img class="first-img-upload" src="./images/file-icon-icon.svg">Pridėti failą<span><img class="second-img-upload" src="./images/plus-circle-icon.svg"/>Pridėti</span></label>
    </div>

    <a href="" style="padding: 0.8rem 1.15rem;" class="file-download-main"><img class="first-upload-image" src="./images/pdf-icon.svg">NT israsas.pdf<img src="./images/download-file-icon.svg" class="second-img"></a>

  </div>
</div>

<hr class="my-5"/>
<h2 class="auction-type-heading mb-5">Aukciono tipas</h2>

<div class="row">
  <div class="col-md-6 col-12">
    <div class="auction-type-main active-type-selection">

      <div class="row">
        <div class="col-3">
          <img src="./images/auction-type.svg" class="w-100"/>
        </div>
        <div class="col-9 px-4 pr-0">
          <div class="d-flex">
            <h3>Aukcijono tipas</h3>
            <input type="checkbox" class="form-check-input" id="exampleCheck1" checked="true">
          </div>

          <p>Rekomenduojame pridėti su parduodamu obejktu susijusius dokumentus (NTR išrašas, planas, komercinis pasiūlymas ar pan.)</p>
        </div>
      </div>

    </div>
  </div>
  <div class="col-md-6 col-12">

  <div class="auction-type-main">

    <div class="row">
      <div class="col-3">
        <img src="./images/auction-type.svg" class="w-100"/>
      </div>
      <div class="col-9 px-4 pr-0">
        <div class="d-flex">
          <h3>Aukcijono tipas</h3>
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
        </div>

        <p>Rekomenduojame pridėti su parduodamu obejktu susijusius dokumentus (NTR išrašas, planas, komercinis pasiūlymas ar pan.)</p>
      </div>
    </div>

  </div>

</div>

</div>

                <div class="row profile-submit-btns">
                    <div class="col-md-8 col-12">
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="row">
                            <div class="col-md-6 col-6">
                                <a href="#ex1-tab-2" class="btn btn-outline btn-primary d-block w-100 skip-btn-auction-create">Praleisti</a>
                            </div>
                            <div class="col-md-6 col-6">
                                <button type="submit" class="btn btn-danger w-100">Toliau<img src="./images/next-icon.png"></button>
                            </div>
                        </div>
                    </div>
                </div>

</form>

  </div>
  <!-- Tabs content -->
  <div class="add-people-main tab-pane fade" id="aukcijono-informacija-2" role="tabpanel" aria-labelledby="ex1-tab-2">
    
<h2 class="">Pakvieskite aukciono dalyvius</h2>
<div class="row">
  <div class="col-md-6 col-12">

  <textarea id="editor"></textarea>

  </div>
  <div class="col-md-6 col-12 mt-sm-3">
    <div class="row">
      <div class="col-md-6 col-6">
                    <div class="form-floating mb-4">
                      <input type="text" class="form-control" id="floatingPassword">
                      <label for="floatingPassword">Dalyvio vardas</label>
                    </div>
      </div>
      <div class="col-md-6 col-6">
                    <div class="form-floating mb-4">
                      <input type="text" class="form-control" id="floatingPassword">
                      <label for="floatingPassword">Dalyvio el.paštas</label>
                    </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-6">
                    <div class="form-floating mb-4">
                      <input type="text" class="form-control" id="floatingPassword">
                      <label for="floatingPassword">Dalyvio vardas</label>
                    </div>
      </div>
      <div class="col-md-6 col-6">
                    <div class="form-floating mb-4">
                      <input type="text" class="form-control" id="floatingPassword">
                      <label for="floatingPassword">Dalyvio el.paštas</label>
                    </div>
      </div>
    </div>
    <button class="add-button">
      <img class="first-add-img" src="./images/add-more-icon.svg"/>Pridėti daugiau dalyvių<span><img src="./images/add-button-icon.svg"/>Pridėti</span>
    </button>
  </div>
</div>

<div class="row mt-4 profile-submit-btns">
                    <div class="col-md-8 col-12">
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="row">
                            <div class="col-md-6 col-6">
                                <a href="#ex1-tab-3" class="btn btn-outline btn-primary d-block w-100 skip-btn-auction-create">Praleisti</a>
                            </div>
                            <div class="col-md-6 col-6">
                                <button type="submit" class="btn btn-danger w-100">Toliau<img src="./images/next-icon.png"></button>
                            </div>
                        </div>
                    </div>
                </div>

  </div>
<!-- Tabs content -->
  <div class="tab-pane fade" id="aukcijono-informacija-3" role="tabpanel" aria-labelledby="ex1-tab-3">
    
  <div class="congratulations-message">
    <img src="./images/confirmation-icon.svg"/>
    <h3>Aukcionas sėkmingai sukurtas!</h3>
    <p>Jūsų aukcionas bus aktyvuotas ir kvietimai dalyviam išsiųsti apmokėjuss aktyvacijos mokestį</p>
  </div>
  <p class="confirm-pricing">Aukciono platformos mokestis: <span>49.00 Eur</span></p>
  <hr/>
  <p class="confirm-details">Aukciono mokesčio sąskaita faktūra bus išrašyta šiais rekvizitais. Jei mokės kita įmonė ar asmuo, pakoreguokite rekvizitus dabar.</p>
  <div class="row">
      <div class="col-md-6 col-6">
        <div class="form-floating mb-4">
                      <input type="text" class="form-control" id="floatingPassword">
                      <label for="floatingPassword">Įmonės pavadinimas</label>
                    </div>
      </div>
      <div class="col-md-6 col-6">
        <div class="form-floating mb-4">
                      <input type="text" class="form-control" id="floatingPassword">
                      <label for="floatingPassword">Adresas</label>
                    </div>
      </div>
      <div class="col-md-6 col-6">
        <div class="form-floating mb-4">
                      <input type="text" class="form-control" id="floatingPassword">
                      <label for="floatingPassword">Įmonės/asmens kodas*</label>
                    </div>
      </div>
      <div class="col-md-6 col-6">
        <div class="form-floating mb-4">
                      <input type="text" class="form-control" id="floatingPassword">
                      <label for="floatingPassword">El. paštas*</label>
                    </div>
      </div>
      <div class="col-md-6 col-6">
        <div class="form-floating mb-4">
                      <input type="text" class="form-control" id="floatingPassword">
                      <label for="floatingPassword">PVM kodas</label>
                    </div>
      </div>
  </div>

  <button class="confirm-submit">Mokėti dabar</button>
  <p class="confirm-after-submit-text">arba</p>

  <div class="row confirm-copy-details">
    <div class="col-md-6 col-12">
      <p>Apmokės kitas asmuo. <button class="copy-text-confirm">Kopijuoti mokėjimo nuorodą</button></p>
    </div>
    <div class="col-md-6 col-12">
                          <div class="input-group mb-4">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">
                                <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g filter="url(#filter0_d_140_6)">
                                <rect width="36" height="36" rx="10" transform="matrix(1 0 0 -1 4 36)" fill="#9A41FC" fill-opacity="0.2"/>
                                <path d="M20.5797 21.7302L19.2909 23.0171C19.0186 23.2893 18.6493 23.4423 18.2642 23.4423C17.8791 23.4423 17.5098 23.2893 17.2375 23.0171L16.3799 22.1595C16.2448 22.0248 16.1377 21.8648 16.0646 21.6886C15.9915 21.5124 15.9538 21.3235 15.9538 21.1328C15.9538 20.942 15.9915 20.7532 16.0646 20.577C16.1377 20.4008 16.2448 20.2408 16.3799 20.1061L20.0595 16.4256C20.1622 16.3228 20.2841 16.2413 20.4183 16.1856C20.5525 16.13 20.6964 16.1014 20.8417 16.1014C20.987 16.1014 21.1309 16.13 21.2651 16.1856C21.3993 16.2413 21.5213 16.3228 21.624 16.4256L22.2987 17.1003C22.4844 17.271 22.729 17.3633 22.9813 17.3579C23.2336 17.3525 23.474 17.2498 23.6523 17.0713C23.8306 16.8927 23.9329 16.6522 23.938 16.3999C23.943 16.1476 23.8504 15.9031 23.6794 15.7176L23.0047 15.0429C22.4223 14.4856 21.6473 14.1745 20.8412 14.1745C20.0351 14.1745 19.2602 14.4856 18.6778 15.0429L14.9982 18.7234C14.6818 19.0398 14.4307 19.4154 14.2594 19.8288C14.0882 20.2422 14 20.6853 14 21.1328C14 21.5803 14.0882 22.0234 14.2594 22.4368C14.4307 22.8502 14.6818 23.2258 14.9982 23.5421L15.8558 24.4007C16.4953 25.0383 17.3616 25.3964 18.2647 25.3964C19.1678 25.3964 20.034 25.0383 20.6735 24.4007L21.9623 23.1139C22.1404 22.9294 22.239 22.6824 22.2367 22.4261C22.2345 22.1697 22.1317 21.9244 21.9504 21.7431C21.7691 21.5618 21.5238 21.459 21.2675 21.4568C21.0111 21.4545 20.7641 21.5531 20.5797 21.7312V21.7302Z" fill="#9A41FC"/>
                                <path d="M27.5433 10.9957C26.9038 10.3581 26.0375 10 25.1344 10C24.2313 10 23.3651 10.3581 22.7256 10.9957L21.4378 12.2835C21.2642 12.4689 21.1695 12.7145 21.1738 12.9685C21.1781 13.2224 21.2811 13.4647 21.4608 13.6441C21.6406 13.8234 21.8831 13.9258 22.137 13.9296C22.391 13.9334 22.6364 13.8382 22.8214 13.6642L24.1092 12.3774C24.3815 12.1051 24.7508 11.9521 25.1359 11.9521C25.521 11.9521 25.8903 12.1051 26.1626 12.3774L27.0212 13.2359C27.1563 13.3706 27.2636 13.5306 27.3368 13.7068C27.4099 13.8829 27.4476 14.0719 27.4476 14.2626C27.4476 14.4534 27.4099 14.6423 27.3368 14.8185C27.2636 14.9947 27.1563 15.1547 27.0212 15.2894L23.3387 18.9699C23.236 19.0728 23.1141 19.1544 22.9799 19.2101C22.8456 19.2658 22.7017 19.2945 22.5564 19.2945C22.4111 19.2945 22.2672 19.2658 22.133 19.2101C21.9987 19.1544 21.8768 19.0728 21.7742 18.9699L21.0995 18.2952C21.0107 18.1961 20.9026 18.1163 20.7819 18.0604C20.6612 18.0046 20.5303 17.9739 20.3973 17.9704C20.2644 17.9669 20.1321 17.9905 20.0086 18.0399C19.885 18.0892 19.7729 18.1633 19.679 18.2575C19.5851 18.3516 19.5113 18.464 19.4623 18.5877C19.4133 18.7113 19.3901 18.8437 19.394 18.9766C19.3979 19.1096 19.4289 19.2403 19.4851 19.3609C19.5412 19.4815 19.6214 19.5893 19.7207 19.6778L20.3954 20.3525C20.9692 20.926 21.7472 21.2481 22.5584 21.2481C23.3696 21.2481 24.1476 20.926 24.7213 20.3525L28.4018 16.672C28.7183 16.3557 28.9693 15.9802 29.1406 15.5669C29.3118 15.1535 29.4 14.7105 29.4 14.2631C29.4 13.8157 29.3118 13.3727 29.1406 12.9594C28.9693 12.5461 28.7183 12.1705 28.4018 11.8543L27.5433 10.9957Z" fill="#9A41FC"/>
                                </g>
                                <defs>
                                <filter id="filter0_d_140_6" x="0" y="0" width="44" height="44" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                <feOffset dy="4"/>
                                <feGaussianBlur stdDeviation="2"/>
                                <feComposite in2="hardAlpha" operator="out"/>
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_140_6"/>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_140_6" result="shape"/>
                                </filter>
                                </defs>
                                </svg>


                                </span>
                            </div>
                            <input type="text" class="form-control" value="http:/www.randomnuoroda.lt/aukcionas123" aria-label="Recipient's username" aria-describedby="basic-addon2">

                        </div>
    </div>
  </div>

  <p class="confirm-last-text">Nukopijavę nuorodą persiųskite ją kitam asmeniui ar įmonei, kurie atliks mokėjimą. Paspaudus ant nuorodos jie bus nukreipti į mokėjimo puslapį. Gavus mokėjimą aukcionas aktyvuosis</p>

  </div>
<!-- Tabs content -->
</div>
<!-- Tabs content -->

        </div>
    </div>
</section>

<script src="https://cdn.tiny.cloud/1/8o6nii2o78ke17vshzkivcnpiagzvtzttti6dy5tx5uk1d4f/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
        <script>
             tinymce.init({
               selector: 'textarea#editor',
               menubar: false, 
               statusbar: false,
               placeholder : "Kvietimo tekstas",
               height : "255",
               toolbar: [
    { name: 'formatting', items: [ 'bold', 'italic','underline' ] },
    { name: 'indentation', items: [ 'outdent', 'indent' ] },
    { name: 'alignment', items: [ 'alignleft', 'aligncenter', 'alignright', 'alignjustify' ] },
    
  ],content_css: "css/editor.css",
              });
        </script>
<style>
.custom-editor-wrapper {
  border: 1px solid #DEDEDE !important;
  border-radius: 15px !important;
  padding: 0.5rem !important;

}
.tox-editor-header {
    background: transparent !important;
    box-shadow: none !important;
    border-bottom: none !important;
}
.tox-tbtn {
  background: #F5F5F5 !important;
border-radius: 10px !important;
padding: 1rem !important;
margin-left: 0.5rem !important;
margin-top: 0.5rem !important;
margin-bottom: 0.5rem !important;
}
.tox-tbtn--enabled svg {
  color: #9A41FC !important;
  fill: #9A41FC !important;
  height: 26px !important;
}
.tox-toolbar__group:first-of-type {
  border-right: 1px solid #DEDEDE !important;
}
.tox-toolbar__primary {
  background-image: none !important;
}
</style>

<?php include('./footer.php'); ?>
