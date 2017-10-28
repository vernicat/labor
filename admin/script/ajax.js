$(document).ready(function(){

$('button').click(function(e){
    e.preventDefault();

    button_name = $(this).attr('name');
    console.log('button_name: '+ button_name);
    button_val = $(this).val();
    console.log('button_val: '+ button_val);

    var main = $(this).closest('main').attr('id');
    console.log('main_id: '+main);

    if (!main) {
        // dialog = $('div#dialog').find($('div').hasClass('main')).
        var main_c = $(this).closest('div.open').attr('class');
        alert(main_c);
        console.log('main_class: '+main_c);
    }
    if (main_c == 'msg') {
        main = main_c;
        form = $('#'+button_name+' form');
        var isForm = form.is('form');
        console.log(form);
        console.log(isForm);
    } else {

        var form = $(this).closest('form');
        isForm = form.is('form'); // В ближайшей форме проверяет наличипе формы, лол
        console.log(isForm);
    }

    if (isForm) {
        //alert('dsfsdf');
        console.log(main);
        if (main == 'msg') {
            var data = form.serialize();
            main = main_c+'Controller';
            if (main_c) {
                if (button_name == 'createDialog') {
                    var toId = $(this).val();
                    data = data +'&toId='+toId; 
                } else {
                    if (data) {
                         data = data +'&hash='+button_val;                  
                     } else {
                         data = data +'hash='+button_val;             
                     }
                                   
                }

            } else {
                data = data +'&hash='+button_val;                
            }
        } else {

            main = main+'Controller';
            var data = form.serialize();


            // if (form = 'news') {
            //     var file = $("input[name=newsFile]").val();
            //     console.log(file);
            //     // data = data+'&file='+file;
            //     // console.log(data);
            //     // ФАААААААЙЛ
            // }

        }

        // var method = form.attr('method');
        var action = form.attr('action');
        var method = 'post';

        console.log('method: '+ method);
        console.log('data: '+ data);

        console.log(main+"?act="+action);

        $.ajax({
            type: method,
            url: main+"?act="+action,
            data: data,
            success: function(result){
                // $('#dialog .dialog-main form').html(result);
                // $('form')[0].reset();

                if (main == 'msgController') {
                    $('#dialog .open').hide();
                    $('#dialog .callback').show();
                    $('#dialog').fadeOut(2000, function(){
                        $('#dialog .callback').hide();
                        $('#dialog').css('opacity : 1');
                    });
                }
                // location.reload();
            }
        });

    } else {

        if (button_name != 'deleteFromChat') {
        if (main_c == 'msg') {
            main = main_c+'Controller';  
            data = 'hash='+button_val;
        } else if (main == 'msg') {
            main = main+'Controller';  
            data = 'hash='+button_val;
        } else {
            data = '';
            main = main+'Controller';
        }

            

        var button_val = $(this).val();
        var button_name = $(this).attr('name');
        // console.log(button_val);
        // console.log(button_name);

        action = button_name;
        console.log('data: '+data);
        console.log(main+"?act="+action);
        // window.location.href = 'news_page';


        $.ajax({
            type: method,
            url: main+"?act="+action,
            data: data,
            success: function(result){
                // $('#dialog .dialog-main form').html(result);
                // $('form')[0].reset();
                // location.reload();
            }
        });

    }
    }




    // name=$(this).attr(name);
    // console.log(name);



    // e.preventDefault();

    // var emptyElement = $('form').attr('post');
    // var f_id = $(this).parent().attr('id');


    // console.log(emptyElement);
    // wqe = $(this).parent('.dialog-main').find('input').getElementsByName('abutton_name[]');
    // var q = validateForm(wqe);
    // console.log(q);
    // if ( validateForm() ) { // если есть ошибки возвращает true
      
    // }


    // e.preventDefault();
    // var emptyElement = $(this).parent();
    // console.log(emptyElement);
    // .find('input:empty')
    // var name= $('input:empty').attr('name');
    // console.log(name);
    // if (emptyElement == true) {
    //     alert('Элемент '+ name +' пустой!');
    // }
})


// Отправка данных диалога на сервер
// $('#dialog #sendMsg .dialog-main button').click(function(e){
//     e.preventDefault(); // отмена дефолтных действий

//     var f_action=$('#dialog #sendMsg .dialog-main form').attr('action');
//     var f_data=$('#dialog #sendMsg .dialog-main form').serialize();
//     var f_dataId=$('#dialog #sendMsg .dialog-main button').attr('name');

//     console.log(f_action);
//     console.log(f_data+'&toId='+f_dataId);

//     $.ajax({

//         url: f_action+'?act=createDialog',
//         data: f_data+'&toId='+f_dataId,
//         success: function(result){
//             $('#dialog #sendMsg').hide();
//             $('#dialog .callback').show();
//             $('#dialog').fadeOut(2000, function(){
//                 $('#dialog .callback').hide();
//                 $('#dialog').css('opacity : 1');
//                 // $('#dialog #sendMsg').show();
//             });
            
//             //$('#dialog .dialog-main form').html(result);
//         }
//     });
// });



})