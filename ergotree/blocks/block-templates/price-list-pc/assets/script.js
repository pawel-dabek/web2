document.addEventListener("DOMContentLoaded", function(){
init_price_list_pc();
});

/* -- Admin JS START -- */
if(window.acf){
window.acf.addAction("render_block_preview/type=price-list-pc", (el) => {
if(!!el[0].querySelector(".price-list-pc") && !el[0].querySelector(".price-list-pc").classList.contains("block-js-added")){
init_price_list_pc(el[0]);
el[0].querySelector(".price-list-pc").classList.add("block-js-added");
}
});
window.acf.addAction("remount", (el) => {
if(!!el[0].querySelector(".price-list-pc") && !el[0].querySelector(".price-list-pc").classList.contains("block-js-added")){
init_price_list_pc(el[0]);
el[0].querySelector(".price-list-pc").classList.add("block-js-added");
}
});
window.acf.addAction("unmount", (el) => {

});
}
/* -- END -- */

function init_price_list_pc(element = document) {

};
