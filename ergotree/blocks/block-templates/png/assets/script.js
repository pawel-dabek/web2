document.addEventListener("DOMContentLoaded", function(){
init_png();
});

/* -- Admin JS START -- */
if(window.acf){
window.acf.addAction("render_block_preview/type=png", (el) => {
if(!!el[0].querySelector(".png") && !el[0].querySelector(".png").classList.contains("block-js-added")){
init_png(el[0]);
el[0].querySelector(".png").classList.add("block-js-added");
}
});
window.acf.addAction("remount", (el) => {
if(!!el[0].querySelector(".png") && !el[0].querySelector(".png").classList.contains("block-js-added")){
init_png(el[0]);
el[0].querySelector(".png").classList.add("block-js-added");
}
});
window.acf.addAction("unmount", (el) => {

});
}
/* -- END -- */

function init_png(element = document) {

};
