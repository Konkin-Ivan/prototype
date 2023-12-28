let main_left_register = document.querySelectorAll('.main_left_register');
let main_left_for_button = document.querySelectorAll('.main_left_for_button');
let main_right = document.querySelector('.main_right');
for(let i = 0; i < main_left_for_button.length; i++) {
    main_left_for_button[i].addEventListener('click', function() {
        for(let j = 0; j < main_left_for_button.length; j++) {
            if(main_left_for_button[j].classList.contains('main_left_for_button_active')) {
                main_left_for_button[j].classList.remove('main_left_for_button_active');
                main_left_register[j].classList.add('hidden');
            }
        }
        main_left_for_button[i].classList.add('main_left_for_button_active');
        main_left_register[i].classList.remove('hidden');
        if(i == 1) {
            main_right.classList.add('main_right_ul');
        } else {
            main_right.classList.remove('main_right_ul');
        }
    })
}