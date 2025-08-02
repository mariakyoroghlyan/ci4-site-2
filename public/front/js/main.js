// USER AGENT
let platform;
if (navigator.userAgentData) {
    platform = navigator.userAgentData.platform;
} else {
    platform = navigator.userAgent;
}

let device_size = $(window).width();

// Check for macOS
if (platform === "macOS" && device_size >= 2000) {
    $(".btn-version").addClass("macos");
}
// USER AGENT

// HEADER
$(window).scroll(function(){
    
    if($(this).scrollTop() > 80){
        $("header").addClass("active");
    }
    else{
        $("header").removeClass("active");
    }
});
// HEADER

// FORM
$(".contacts__item-form").submit(function (event) {
    event.preventDefault();

    $(this).find("input").removeClass("error");
    $(this).find("textarea").removeClass("error");

    let name = $(this).find("input[name='name']");
        phone = $(this).find("input[name='phone']");
        message = $(this).find("textarea[name='message']");
        service = $(this).find("input[name='radio']:checked");
        error = false;

    if(name.val() == ""){
        name.addClass("error");
        error = true;
    }
    if(phone.val() == ""){
        phone.addClass("error");
        error = true;
    }
    if(message.val() == ""){
        message.addClass("error");
        error = true;
    }

    let form = new FormData($(this)[0]);

    if(error == false){
        $.ajax({
            url: 'test.php',
            type: 'post',
            cache: false,
            contentType: false,
            processData: false,
            data: form,
            success:function(response){
                //var data = $.parseJSON(response);
                            
                if(response == "success"){
                    let notificate = $(".success");
                        notificate__row = notificate.find(".success__row");
                       
                        $(".modal").fadeOut(0);
                        notificate.css("display", "flex").hide().fadeIn(60);

                        $(document).mouseup( function(e){
                            if (!notificate__row.is(e.target) && notificate__row.has(e.target).length === 0 ) {
                                notificate.fadeOut(50);
                            }
                        });

                        $("input, textarea").val("");
                }
            }
        });
    }
});

function checkFileSize(input) {
    let filename = input.files[0].name;

        if(filename.length > 35){
            filename_start = filename.substring(0, 31);
            filename_end = filename.substring(filename.length - 4, filename.length);
            filename = filename_start + filename_end;
        }

    let filesize = input.files[0].size / 1024;
        filesize = Math.round(filesize * 100) / 100;

        if(input.files[0].size < 1000000){
            filesize = Math.floor(input.files[0].size/1000) + ' kb';
        }
        else{
            filesize = Math.floor(input.files[0].size/1000000) + ' mb';
        }

    let template = `
        <div class="contacts__item__form-upload-file">
           `+filename+` (`+filesize+`) <em></em>
        </div>`;
        uploaded = $(".contacts__item__form-upload");


        if(input.files[0].size > 10 * 1024 * 1024) {
            alert('The permissible weight has been exceeded. Reduce the file size.');
            input.value = '';
        }
        else{
            $(document).find(".contacts__item__form-upload-file").remove();

            uploaded.append(template);

            setTimeout(function() {
                $(document).find(".contacts__item__form-upload-file").addClass("upload");
            }, 1000);

            setTimeout(function() {
                $(document).find(".contacts__item__form-upload-file").addClass("uploaded");
            }, 3000);
        }
}

$(document).on('click', '.contacts__item__form-upload-file em', function() {
    let file = $(this).parent(".contacts__item__form-upload-file");
        input = $(".contacts__item__form-upload input");
        
        file.remove();
        input.value = '';
});

$('input[name="phone"]').bind('keyup paste', function(){
    this.value = this.value.replace(/[^0-9, +, (),)]/g, '');
});
// FORM

// MAIN CAROUSEL
let maintxtowl = $('.main__item__content__carousel');
    maintxtowl.owlCarousel({
    loop:false,
    margin:0,
    nav:false,
    items:1,
    dots: false,
    smartSpeed: 600,
    autoplay: true,
})


let mainowl;
    mainowl = $('.main__item__carousel').owlCarousel({
    loop:false,
    margin:0,
    nav:false,
    items:1,
    dots: true,
    smartSpeed: 600,
    autoplay: true,
});

mainowl.on('changed.owl.carousel', function(e) {
    $('.main__item__content__carousel').trigger('to.owl.carousel', e.item.index, 500); 
});
maintxtowl.on('changed.owl.carousel', function(e) {
    $('.main__item__carousel').trigger('to.owl.carousel', e.item.index, 500); 
});
// MAIN CAROUSEL

// MERCH CAROUSEL
let owl = $('.merchlist__item__carousel');
    owl.owlCarousel({
        loop: false,
        margin: 20,
        nav:false,
        items: 3,
        dots: true,
        smartSpeed: 600,
        stagePadding: 100,
        responsiveClass:true,
        responsive:{
            0:{
                items: 1,
                margin: 10,
                stagePadding: 20,
            },
            740:{
                items: 2,
                margin: 10,
            },
            1200:{
                items: 3,
                margin: 20,
            }
        }
    });

$('.merchlist__item__controler button[data-type="next"]').click(function() {
    owl.trigger('prev.owl.carousel');
});

$('.merchlist__item__controler button[data-type="prev"]').click(function() {
    owl.trigger('next.owl.carousel');
});

$(".merchlist__item__carousel").on('changed.owl.carousel', function(e) {
    var current = e.item.index + 1;
        win = $(window).width();
        total = 0;

        if(win < 740){
            total = e.item.count;
        }
        else if(win < 1200){
            total = 3;
        }
        else{
            total = 2;
        }

        if(current == total){
            $(".merchlist__item__controler").removeClass("first");
            $(".merchlist__item__controler").addClass("last");
            $(".merchlist__item__carousel").addClass("last");
        }
        else if(current == 1){
            $(".merchlist__item__controler").removeClass("last");
            $(".merchlist__item__controler").addClass("first");
            $(".merchlist__item__carousel").removeClass("last");
        }
        else{
            $(".merchlist__item__controler").removeClass("last");
            $(".merchlist__item__controler").removeClass("first");
            $(".merchlist__item__carousel").removeClass("last");
        }
});
// MERCH CAROUSEL

// PROJECTS
$('.projects-navigate li').click(function() {
    let project_type = $(this);
        projects_list = $(".projects__item[data-type='"+project_type.attr("data-type")+"']");

        $('.projects-navigate li').removeClass("active");
        project_type.addClass("active");

        if(project_type.attr("data-type") == "1"){
            $('.projects__item').addClass("show");
        }
        else{
            $('.projects__item').removeClass("show");
            
            projects_list.addClass("show");
        }
});
// PROJECTS

// MODAL AND SUCCESS
$('.success button').click(function() {
    let success = $(".success");
        success.fadeOut(50);
});

$('.modal-close').click(function() {
    let modal = $(".modal");
        modal.fadeOut(50);
});

$('.header__item-contacts').click(function() {
    let modal = $(".modal");
        modal_row = modal.find(".modal__row");
        modal.css("display", "flex").hide().fadeIn(50);

        $(document).mouseup( function(e){
            if (!modal_row.is(e.target) && modal_row.has(e.target).length === 0 ) {
                modal.fadeOut(50);
            }
        });
});
// MODAL AND SUCCESS

// SHOW
$('.present__item__post__box-more').click(function() {
    let more_btn = $(this);
        content = more_btn.parent(".present__item__post__box").find(".present__item__post__box-list");

        if(more_btn.hasClass("active")){
            content.removeClass("show");
            more_btn.removeClass("active");
        }
        else{
            content.addClass("show");
            more_btn.addClass("active");
        }
});

$('.present__item__specifications__box-more').click(function() {
    let description = $(this).parent(".present__item__specifications__box").find(".present__item__specifications__box-description");

       if($(this).hasClass("active")){
           $(this).removeClass("active");
           description.removeClass("show");
       }
       else{
           $(this).addClass("active");
           description.addClass("show");
       }
});
// SHOW

// MENU
$('.header__item-bar').click(function() {
    let bar = $(this);
        header = $("header");
        body = $("body");

       if(bar.hasClass("active")){
           bar.removeClass("active");
           header.removeClass("open");
           body.removeClass("hidden");
       }
       else{
           bar.addClass("active");
           header.addClass("open");
           body.addClass("hidden");
       }
});
// MENU

// AWARDS
$('.awards__item-more').click(function() {
    let more = $(this);
        table = more.parent(".awards__item").find(".awards__table__box.hide");

       if(more.hasClass("active")){
           more.removeClass("active");
           table.fadeOut(0);
       }
       else{
           more.addClass("active");
           table.css("display", "flex").hide().fadeIn(0);
       }
});
// AWARDS

