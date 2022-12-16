document.addEventListener("DOMContentLoaded", function(){
init_doctor();
});

/* -- Admin JS START -- */
if(window.acf){
window.acf.addAction("render_block_preview/type=doctor", (el) => {
if(!!el[0].querySelector(".doctor") && !el[0].querySelector(".doctor").classList.contains("block-js-added")){
init_doctor(el[0]);
el[0].querySelector(".doctor").classList.add("block-js-added");
}
});
window.acf.addAction("remount", (el) => {
if(!!el[0].querySelector(".doctor") && !el[0].querySelector(".doctor").classList.contains("block-js-added")){
init_doctor(el[0]);
el[0].querySelector(".doctor").classList.add("block-js-added");
}
});
window.acf.addAction("unmount", (el) => {

});
}
/* -- END -- */

function init_doctor(element = document) {

};
