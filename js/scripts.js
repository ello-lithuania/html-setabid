$( document ).ready(function() {
    $( ".profile-page input" ).focus(function() {
        $(this).closest('.input-group').addClass('inputFocus');
    });
    $( ".profile-page input" ).focusout(function() {
        $(this).closest('.input-group').removeClass('inputFocus');
    });
    $('#ex1 .nav-link').click(function() {
        let attr = $(this).attr('href');
        $('#ex1 .nav-link.active').removeClass('active');
        $(this).addClass('active');
        $('.tab-content .tab-pane.active').removeClass('active');
        $(attr).addClass('active').addClass('show');
    });
    $('.copy-text-confirm').click(function() {
        let attr = $('.confirm-copy-details input').attr('value');
        copyToClipboard(attr);
        alert('Nukopijuota');
    });
    function copyToClipboard(text) {
        var sampleTextarea = document.createElement("textarea");
        document.body.appendChild(sampleTextarea);
        sampleTextarea.value = text; //save main text in it
        sampleTextarea.select(); //select textarea contenrs
        document.execCommand("copy");
        document.body.removeChild(sampleTextarea);
    }
    $('.auction-type-main').click(function() {
        $('.active-type-selection input').prop('checked',false);
        $('.active-type-selection').removeClass('active-type-selection');
        $(this).addClass('active-type-selection');
        $('.active-type-selection input').prop('checked',true);
    });
    $('.skip-btn-auction-create').click(function(event) {
        event.preventDefault();
        const nextTabLinkEl = $('.nav-tabs .active').closest('li').next('li').find('a')[0];
        const nextTab = new bootstrap.Tab(nextTabLinkEl);
        nextTab.show();

        let attr = $(this).attr('href');
        console.log(typeof (attr));
        if(attr == '#ex1-tab-2') {
            $('#ex1-tab-1').addClass('auction-create-tab-menu-active');
        }
        if(attr == '#ex1-tab-3') {
            $('#ex1-tab-1').addClass('auction-create-tab-menu-active');
            $('#ex1-tab-2').addClass('auction-create-tab-menu-active');
        }
    });  
});