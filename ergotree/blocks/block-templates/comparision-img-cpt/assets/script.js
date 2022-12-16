document.addEventListener("DOMContentLoaded", function(){
init_comparision_img_cpt();
});

/* -- Admin JS START -- */
if(window.acf){
window.acf.addAction("render_block_preview/type=comparision-img-cpt", (el) => {
if(!!el[0].querySelector(".comparision-img-cpt") && !el[0].querySelector(".comparision-img-cpt").classList.contains("block-js-added")){
init_comparision_img_cpt(el[0]);
el[0].querySelector(".comparision-img-cpt").classList.add("block-js-added");
}
});
window.acf.addAction("remount", (el) => {
if(!!el[0].querySelector(".comparision-img-cpt") && !el[0].querySelector(".comparision-img-cpt").classList.contains("block-js-added")){
init_comparision_img_cpt(el[0]);
el[0].querySelector(".comparision-img-cpt").classList.add("block-js-added");
}
});
window.acf.addAction("unmount", (el) => {

});
}
/* -- END -- */

function init_comparision_img_cpt(element = document) {

};
