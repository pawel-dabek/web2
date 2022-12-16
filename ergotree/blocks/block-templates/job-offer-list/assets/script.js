document.addEventListener("DOMContentLoaded", function(){
init_job_offer_list();
});

/* -- Admin JS START -- */
if(window.acf){
window.acf.addAction("render_block_preview/type=job-offer-list", (el) => {
if(!!el[0].querySelector(".job-offer-list") && !el[0].querySelector(".job-offer-list").classList.contains("block-js-added")){
init_job_offer_list(el[0]);
el[0].querySelector(".job-offer-list").classList.add("block-js-added");
}
});
window.acf.addAction("remount", (el) => {
if(!!el[0].querySelector(".job-offer-list") && !el[0].querySelector(".job-offer-list").classList.contains("block-js-added")){
init_job_offer_list(el[0]);
el[0].querySelector(".job-offer-list").classList.add("block-js-added");
}
});
window.acf.addAction("unmount", (el) => {

});
}
/* -- END -- */

function init_job_offer_list(element = document) {

};
