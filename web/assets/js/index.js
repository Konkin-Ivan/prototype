let main_menu_filter = document.querySelector('.main_menu_filter');
let main_menu_filter_img = document.querySelector('.main_menu_filter_img')
main_menu_filter_img.addEventListener('click', function() {
    main_menu_filter.scrollBy({
        top: 0,
        left: 200,
        behavior: 'smooth'
    });
})

let main_menu_smal = document.querySelector('.main_menu_smal');
let popup_background = document.querySelector('.popup_background');
main_menu_smal.addEventListener('click', function() {
    popup_background.classList.remove('hidden');
})

let popup_close_block = document.querySelector('.popup_close_block');
popup_close_block.addEventListener('click', function() {
    popup_background.classList.add('hidden');
})

let popup_specifications_block_text = document.querySelectorAll('.popup_specifications_block_text');
let popup_specifications_block_input = document.querySelectorAll('.popup_specifications_block_input');
for(let i = 0; i < popup_specifications_block_text.length; i++) {
    popup_specifications_block_text[i].addEventListener('click', function() {
        if(popup_specifications_block_input[i].classList.contains('hidden')) {
            popup_specifications_block_input[i].classList.remove('hidden');
            popup_specifications_block_text[i].classList.add('popup_specifications_block_text_click');
        } else {
            popup_specifications_block_input[i].classList.add('hidden');
            popup_specifications_block_text[i].classList.remove('popup_specifications_block_text_click');
        }
    })
}

let header_head_right_button = document.querySelector('.header_head_right_button');
let header_head_right_add = document.querySelector('.header_head_right_add');
header_head_right_button.addEventListener('click', function() {
    if(header_head_right_add.classList.contains('hidden')) {
        header_head_right_add.classList.remove('hidden');
    } else {
        header_head_right_add.classList.add('hidden');
    }
})