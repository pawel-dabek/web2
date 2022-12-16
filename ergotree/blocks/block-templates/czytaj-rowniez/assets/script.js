function init_czytaj_rowniez(element = document) {

};

document.addEventListener("DOMContentLoaded", function(){
init_czytaj_rowniez();
});

/* -- Admin JS START -- */
if(window.acf){
window.acf.addAction("render_block_preview/type=czytaj-rowniez", (el) => {
if(!!el[0].querySelector(".czytaj-rowniez") && !el[0].querySelector(".czytaj-rowniez").classList.contains("block-js-added")){
init_czytaj_rowniez(el[0]);
el[0].querySelector(".czytaj-rowniez").classList.add("block-js-added");
}
});
}
/* -- Admin JS END -- */
