$(document).ready(function(){


$('#content .content-left .content-top img, #qwe').hover(
    function(){
        $('#qwe').show();
    }, function(){
        $('#qwe').hide();
    }
);

$('.circle a').click(function(){
  $('.circle input').click();
});

$('.circle input').change(function(){
    $('.circle button').click();
})

/* Открытие меню */
 
$('.openMenu').click(function() {
    $('#content .content-left').animate({ 
        left: '0px'
    }, 200);
    $('#content .content-right').animate({
        left: '285px'
    }, 200);
    $('body').css('overflow: hidden');
});
 
 
/* Закрытие меню */
 
$('.closeMenu').click(function() {
        $('#content .content-left').animate({ 
            left: '-285px'
        }, 200);         
    $('body').animate({
        left: '0px'
    }, 200);
});

    // var chatResult = $('#block');
    // chatResult.scrollTop(chatResult.prop('scrollHeight'));

    var block = $('#block');
     block.scrollTop(block.height());

// Активные кнопки
$('.dialog_with_button, .entry').hover(function(){
    var index = $(this).index();
    var display = $('main .buttonAction button').eq(index).css('display');
    $('main .buttonAction button').hide();
    if (display === 'none') {
        $('main .buttonAction button').eq(index).show();
        $('main .info-top p').eq(index).hide();
    } else
        $('main .info-top p').eq(index).show();
});


// Появление блоков при персонализации
$('#person form div button').click(function(){
    var f_id = $(this).parent().attr('id');
    var f_class = '.'+ $('#person form #'+f_id+' select').parent().attr('class');
    console.log(f_class);

    if (f_class == '.teacher-classGroup-select') {
        $('#person form '+f_class+':last').after($(f_class+":first").clone());
        var length = $(f_class).length;
        if (length == 2)
            $('#'+f_id+' button').hide();
    } else
        $('#person form #'+f_id+' select:last').after($("#"+f_id+" select:first").clone());
});




// Диалоговое окно
$('main#search .table button, main#msg #right menu.buttonAction li, #content .content-right .content-top #info button, main#search .table button, main#msg #right .info button').click(function(){
    var id = $(this).val();
    console.log('value_button_li: ' + id);
    $('#dialog').show();
    var name = $(this).attr('name');
    console.log('name_button_li: ' + name);

    $('#dialog #'+name).addClass('open');
    $('#dialog #'+name).show();
    $('#dialog #'+name+' .dialog-main button').attr('name',name);
    $('#dialog #'+name+' .dialog-main button').val(id);

    if (name == 'openInfo') {
        $('#dialog #openInfo').addClass('open');
        $('#dialog #openInfo').show();
        $('#dialog #openInfo .dialog-main button').attr('name',name);
        $('#dialog #openInfo .dialog-main button').val(id);
    }
});

$('#dialog .closeDialog, #dialog .dialog-overlay, #dialog .closeDialog, #dialog .dialog-overlay').click(function(){
    $('#dialog .display').hide();
    $('#dialog').hide();
    $('#dialog div').removeClass('open');
    $('#dialog form')[0].reset();
});


// Главная
$('main#index .button').click(function(){
    var display = $('main#index .login').css('display');

    if (display == 'block') {
        $('main#index .login').hide();
        $('main#index .registration').show();
        $('main#index .button').text('Войти');
    } else {
        $('main#index .login').show();
        $('main#index .registration').hide();
        $('main#index .button').text('Зарегистрироваться');
    }
});


// Активная ссылка
var cur_url = location.pathname.split('/')[1];

$('#content .content-right .content-top menu li').each(function () {
    var href = $(this).find('a').attr('href');

    if (cur_url == href) {
        if (cur_url == 'stock' || 'event') {
            $('#header-right .menu-left li').each(function () {
                href = $(this).find('a').attr('href');
                // console.log(href);
                if (href == 'news') {
                    $(this).addClass('current');
                };
            });
        };
        $(this).addClass('current');
    };
});


// Стикеры
$('#smile').click(function(){
    $('#sticker').toggle();
});
// Ниспадающее меню
$('main#msg #right .dialog-top-right .allButtonAction').click(function(){
    $('main#msg #right .dialog-top-right .allButtonAction .buttonAction').toggle();
});


// Название загружаемого файла в разделе "Новости"
$(document).ready( function() {
    $(".file-upload input[type=file]").change(function(){
         var filename = $(this).val().replace(/.*\\/, "");
         $("#filename").val(filename);
    });
});


});

// Выбор позиции
function changePosition(pos){
    $("#user-student, #user-teacher, #user-other").hide();
    switch(parseInt(pos)){
        case 1:
            $("#user-student").css("display","flex");
            break;
        case 2:   
            $("#user-teacher").show();
            break;
        case 3:
             $("#user-other").show();
            break;
    }
    return;
}