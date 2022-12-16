<div class="temp-container">
    <div class="zespol">
        <div class="image"><?php et_image('image_1', 'full', false); ?></div>
        <div class="text">
            <h3 class="title c-gray"><?php pll_e('Najlepsi specjaliści we XXX'); ?></h3>
            <p class="desc c-gray"><?php pll_e('Zadzwoń i dowiedz') ?></p>
        </div>
    </div>
    <div class="kariera">
        <div class="image"><?php et_image('image_2', 'full', false); ?></div>
        <div class="text">
            <h3 class="title c-gray"><?php pll_e('Zostań częścią zespołu!'); ?></h3>
            <p class="desc c-gray"><?php pll_e('Wyslij CV albo zadzwoń'); ?></p>
        </div>
    </div>
    <div class="firma">
        <div class="image"><?php et_image('image_3', 'full', false); ?></div>
        <div class="text">
            <h3 class="title c-gray"><?php pll_e('Firma tytuł'); ?></h3>
            <p class="desc c-gray"><?php pll_e('Firma podtytuł'); ?></p>
        </div>
    </div>
</div>
<div class="my-container">
    <a class="logo" href="<?= pll_home_url(); ?>"><?php et_the_logo('150px', '27px'); ?></a>
    <?php if (has_nav_menu('header')) : ?>
        <?php
        wp_nav_menu([
            'menu'            => 'header',
            'theme_location'  => 'header',
            'container'       => 'nav',
            'container_id'    => 'header-nav',
            'container_class' => 'header-nav',
            'menu_id'         => 'header-nav-menu',
            'menu_class'      => 'header-nav-menu'
        ]);
        ?>
    <?php endif; ?>
    <div class="btn-wrapper">
        <div class="search-form-wrapper">
            <div class="search-form"><?php get_search_form(); ?></div>
            <div class="icon"><?php echo et_svg('wp-content/themes/ergotree/assets/img/search.svg'); ?></div>
        </div>
        <ul class="polylang-wrapper">
            <?php pll_the_languages(array('show_flags' => 1, 'show_names' => 0)); ?>
        </ul>
        <?php et_link('e_register', 'btn-red-border button-register'); ?>
        <button class="btn-red-full button-search"><?php pll_e('Szukaj'); ?></button>
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </div>
</div>