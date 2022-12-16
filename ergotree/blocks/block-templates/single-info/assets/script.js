function init_single_info(element = document) {

};

document.addEventListener("DOMContentLoaded", function(){
init_single_info();
});

/* -- Admin JS START -- */
if(window.acf){
window.acf.addAction("render_block_preview/type=single-info", (el) => {
if(!!el[0].querySelector(".single-info") && !el[0].querySelector(".single-info").classList.contains("block-js-added")){
init_single_info(el[0]);
el[0].querySelector(".single-info").classList.add("block-js-added");
}
});
}
/* -- Admin JS END -- */
