let main_mid_right_top_right_setting = document.querySelector('.main_mid_right_top_right_setting');
let main_mid_right_top_right_setting_open = document.querySelector('.main_mid_right_top_right_setting_open');
main_mid_right_top_right_setting.addEventListener('click', function() {
    if(main_mid_right_top_right_setting_open.classList.contains('hidden')) {
        main_mid_right_top_right_setting_open.classList.remove('hidden');
    } else {
        main_mid_right_top_right_setting_open.classList.add('hidden');
    }
})

let main_mid_left_block_chat = document.querySelectorAll('.main_mid_left_block_chat');
for(let i = 0; i < main_mid_left_block_chat.length; i++) {
    main_mid_left_block_chat[i].addEventListener('click', function() {
        for(let j = 0; j < main_mid_left_block_chat.length; j++) {
            main_mid_left_block_chat[j].classList.remove('main_mid_left_block_chat_active');
        }
        main_mid_left_block_chat[i].classList.add('main_mid_left_block_chat_active');
    })
}