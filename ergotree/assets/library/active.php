<?php

//dostępne funkcje do aktywacji bibliotek. Każda przyjmuje parametr "true" przy aktywacji biblioteki, nieważne w którym miejscu w kodzie zostana dodana. Preferowane miejsce dla tej funkcji jest "block.php" w konkretnym bloku

et_lib_accordion(false);
if (!is_admin()) {
	et_lib_aos(true);
}
et_lib_grid(true);
et_lib_halka(false);
et_lib_lottie(false);
et_lib_masonary(false);
et_lib_mix_it_up(false);
et_lib_normalize(true);
if (!is_admin()) {
	et_lib_reset(false);
}
et_lib_splide(false);
et_lib_virtual(false);
