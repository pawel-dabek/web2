function init_oferty(element = document) {

};

document.addEventListener("DOMContentLoaded", function(){
init_oferty();
});

/* -- Admin JS START -- */
if(window.acf){
window.acf.addAction("render_block_preview/type=oferty", (el) => {
if(!!el[0].querySelector(".oferty") && !el[0].querySelector(".oferty").classList.contains("block-js-added")){
init_oferty(el[0]);
el[0].querySelector(".oferty").classList.add("block-js-added");
}
});
}
/* -- Admin JS END -- */
