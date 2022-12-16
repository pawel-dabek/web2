document.addEventListener("DOMContentLoaded", function(){
init_quote();
});

/* -- Admin JS START -- */
if(window.acf){
window.acf.addAction("render_block_preview/type=quote", (el) => {
if(!!el[0].querySelector(".quote") && !el[0].querySelector(".quote").classList.contains("block-js-added")){
init_quote(el[0]);
el[0].querySelector(".quote").classList.add("block-js-added");
}
});
window.acf.addAction("remount", (el) => {
if(!!el[0].querySelector(".quote") && !el[0].querySelector(".quote").classList.contains("block-js-added")){
init_quote(el[0]);
el[0].querySelector(".quote").classList.add("block-js-added");
}
});
window.acf.addAction("unmount", (el) => {

});
}
/* -- END -- */

function init_quote(element = document) {

};
