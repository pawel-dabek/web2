document.addEventListener("DOMContentLoaded", function(){
init_job_offer();
});

/* -- Admin JS START -- */
if(window.acf){
window.acf.addAction("render_block_preview/type=job-offer", (el) => {
if(!!el[0].querySelector(".job-offer") && !el[0].querySelector(".job-offer").classList.contains("block-js-added")){
init_job_offer(el[0]);
el[0].querySelector(".job-offer").classList.add("block-js-added");
}
});
window.acf.addAction("remount", (el) => {
if(!!el[0].querySelector(".job-offer") && !el[0].querySelector(".job-offer").classList.contains("block-js-added")){
init_job_offer(el[0]);
el[0].querySelector(".job-offer").classList.add("block-js-added");
}
});
window.acf.addAction("unmount", (el) => {

});
}
/* -- END -- */

function init_job_offer(element = document) {

};
