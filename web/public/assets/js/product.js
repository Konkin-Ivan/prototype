    //Слайдер
    let main_left_gallery_slider_item = document.querySelectorAll('.main_left_gallery_slider_item');
    let main_left_gallery_dot = document.querySelectorAll('.main_left_gallery_dot');
    let main_left_gallery_dots = document.querySelector('.main_left_gallery_dots');

    let i = 0;

    for(let n = 0; n < main_left_gallery_dot.length; n++){
        main_left_gallery_dot[n].addEventListener('click', function(){
            main_left_gallery_slider_item[i].classList.remove('main_left_gallery_slider_item_active');
            main_left_gallery_slider_item[n].classList.add('main_left_gallery_slider_item_active');
            i = n
        })
    }