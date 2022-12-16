document.addEventListener("DOMContentLoaded", function(){
init_how_it_works_cpt();
});

/* -- Admin JS START -- */
if(window.acf){
window.acf.addAction("render_block_preview/type=how-it-works-cpt", (el) => {
if(!!el[0].querySelector(".how-it-works-cpt") && !el[0].querySelector(".how-it-works-cpt").classList.contains("block-js-added")){
init_how_it_works_cpt(el[0]);
el[0].querySelector(".how-it-works-cpt").classList.add("block-js-added");
}
});
window.acf.addAction("remount", (el) => {
if(!!el[0].querySelector(".how-it-works-cpt") && !el[0].querySelector(".how-it-works-cpt").classList.contains("block-js-added")){
init_how_it_works_cpt(el[0]);
el[0].querySelector(".how-it-works-cpt").classList.add("block-js-added");
}
});
window.acf.addAction("unmount", (el) => {

});
}
/* -- END -- */

function init_how_it_works_cpt(element = document) {

};
