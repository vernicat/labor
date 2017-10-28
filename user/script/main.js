// Выбор позиции
function changePosition(pos){
    switch(parseInt(pos)){
        case 1:
            $("#user_student").css("display","block");
            $("#user_teacher, #user_other").css("display","none");
            break;
        case 2:   
            $("#user_teacher").css("display","block");
            $("#user_student, #user_other").css("display","none");
            break;
        case 3:
             $("#user_other").css("display","block");
             $("#user_teacher, #user_student").css("display","none");
            break;
    }
    return 1;
}



$(document).ready(function() {

// $.ajax({
//     url: "news",
//     success: function(data) {
//         console.log(data);
//         $("html").html(data);
//     }
// });



var url = location.pathname.split('/')[1];
if (url == '')
    url = 'news';
//console.log('url: '+url);

// Отображение форм
$('#dialog .dialog-content .add form, #dialog .dialog-content .edit form').each(function () {
    name = $(this).attr('name');
    //console.log('name: '+name);
    if (name == url) {
        //console.log(this);
        $(this).css({
            'display' : 'block'
        });
    };
});

// Активная ссылка
$('#header #menu-left li').each(function () {
var href = $(this).find('a').attr('href');
    //console.log(link);
    if (url == href) {
        // console.log(href);
        // if (url == 'stock' || 'event') {
        //     $('#header-right .menu-left li').each(function () {
        //         href = $(this).find('a').attr('href');
        //         // console.log(href);
        //         if (href == 'news') {
        //             $(this).addClass('current');
        //         };
        //     });
        // };
        $(this).addClass('current');
    };
});

    // $(document).click( function(event){
    //     alert(event.target);
    //     if( $(event.target).closest('main .table-top-right #find').length ) 
    //         return;
    //     $('main .table-top-right #find input').fadeOut("slow");
    //     event.stopPropagation();
    // });


// Динамическая загрузка страниц

// $('li a').click(function(){
// 	var url = $(this).attr('href');
//     // alert(url);
// 	if(url != window.location){
// 		window.history.pushState(null, null, url); // добавляет новое состояние в историю браузера
// 	}
//     console.log(url+' #table');
// 	$('#table').load(url+' #table'); // Загружает данные с сервера (html) и вставляет в указанный элемент.
//     return false;
// });



// Появление поиска
$('main .table-top-right #find').click(function(){
    $('main .table-top-right #find input').addClass('focus');
});
// $('main .table-top-right #find').blur(function(){
//     $('main .table-top-right #find input').removeClass('focus');
// });

// Анимация раскрытия и сворачивания записей
$('.details').click(function(){
    console.log(url);
    var index = $(this).index();  
    var q = $('.details-content').eq(index).css('display');

    if (q === 'none') {
        $('.details-content').hide();
        $('.details-content').eq(index).show();
    } else {
        $('.details-content').hide();
    }
});

// Появление форм
$('.openDialogAdd').click(function(){
        console.log(url);
    $('#dialog .add').show();
});
$('.openDialogEdit').click(function(){
    $('#dialog .edit').show();
});
$('.openDialogDelete').click(function(){
    $('#dialog .delete').show();
});
$('.openDialogAdd, .openDialogEdit, .openDialogDelete').click(function(){
    $('#dialog, #dialog .closeDialog').show();
});
$('#dialog .closeDialog, #dialog .dialog-overlay').click(function(){
    $('#dialog, #dialog .add, #dialog .edit, #dialog .delete').hide();
});

// Отправка данных на сервер
$('#dialog .dialog-content form').submit(function(e){
    e.preventDefault(); // отмена дефолтных действий
    var f_method=$(this).attr('method');
    var f_action=$(this).attr('action');
    var f_name=$(this).attr('name');
    var f_class=$('#dialog .dialog-content section:visible').attr('class');
    var f_data=$(this).serialize();

    // console.log(f_method);
    // console.log(f_action);
    // console.log(f_class);
    // console.log(f_name);
    // console.log(f_data);

    $.ajax({
        type: f_method,
        url: f_action+'?action='+f_class+'&form='+f_name,
        data: f_data,
        success: function(result){
            $('#dialog .dialog-content form').html(result);
        }
    });
});














});