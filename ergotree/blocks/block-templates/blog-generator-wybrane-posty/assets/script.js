function init_blog_generator_wybrane_posty(element = document) {

};

document.addEventListener("DOMContentLoaded", function(){
init_blog_generator_wybrane_posty();
});

/* -- Admin JS START -- */
if(window.acf){
window.acf.addAction("render_block_preview/type=blog-generator-wybrane-posty", (el) => {
if(!!el[0].querySelector(".blog-generator-wybrane-posty") && !el[0].querySelector(".blog-generator-wybrane-posty").classList.contains("block-js-added")){
init_blog_generator_wybrane_posty(el[0]);
el[0].querySelector(".blog-generator-wybrane-posty").classList.add("block-js-added");
}
});
}
/* -- Admin JS END -- */
