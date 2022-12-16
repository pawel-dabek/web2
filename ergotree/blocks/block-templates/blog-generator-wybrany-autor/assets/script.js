function init_blog_generator_wybrany_autor(element = document) {

};

document.addEventListener("DOMContentLoaded", function(){
init_blog_generator_wybrany_autor();
});

/* -- Admin JS START -- */
if(window.acf){
window.acf.addAction("render_block_preview/type=blog-generator-wybrany-autor", (el) => {
if(!!el[0].querySelector(".blog-generator-wybrany-autor") && !el[0].querySelector(".blog-generator-wybrany-autor").classList.contains("block-js-added")){
init_blog_generator_wybrany_autor(el[0]);
el[0].querySelector(".blog-generator-wybrany-autor").classList.add("block-js-added");
}
});
}
/* -- Admin JS END -- */
