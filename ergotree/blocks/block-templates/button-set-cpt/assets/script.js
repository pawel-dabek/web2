document.addEventListener("DOMContentLoaded", function(){
init_button_set_cpt();
});

/* -- Admin JS START -- */
if(window.acf){
window.acf.addAction("render_block_preview/type=button-set-cpt", (el) => {
if(!!el[0].querySelector(".button-set-cpt") && !el[0].querySelector(".button-set-cpt").classList.contains("block-js-added")){
init_button_set_cpt(el[0]);
el[0].querySelector(".button-set-cpt").classList.add("block-js-added");
}
});
window.acf.addAction("remount", (el) => {
if(!!el[0].querySelector(".button-set-cpt") && !el[0].querySelector(".button-set-cpt").classList.contains("block-js-added")){
init_button_set_cpt(el[0]);
el[0].querySelector(".button-set-cpt").classList.add("block-js-added");
}
});
window.acf.addAction("unmount", (el) => {

});
}
/* -- END -- */

function init_button_set_cpt(element = document) {

};
