document.addEventListener("DOMContentLoaded", function(){
init_text_banner();
});

/* -- Admin JS START -- */
if(window.acf){
window.acf.addAction("render_block_preview/type=text-banner", (el) => {
if(!!el[0].querySelector(".text-banner") && !el[0].querySelector(".text-banner").classList.contains("block-js-added")){
init_text_banner(el[0]);
el[0].querySelector(".text-banner").classList.add("block-js-added");
}
});
window.acf.addAction("remount", (el) => {
if(!!el[0].querySelector(".text-banner") && !el[0].querySelector(".text-banner").classList.contains("block-js-added")){
init_text_banner(el[0]);
el[0].querySelector(".text-banner").classList.add("block-js-added");
}
});
window.acf.addAction("unmount", (el) => {

});
}
/* -- END -- */

function init_text_banner(element = document) {

};
