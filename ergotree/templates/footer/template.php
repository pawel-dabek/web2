<div class="footer-main">
    <div class="my-container">
        <div class="wrapper">
            <div class="mobile-wrapper mobile-only">
                <h2 class="w-600 c-white"><?php pll_e('Pytania?'); ?></h2>
                <div class="contact">
                    <div class="single-contact">
                        <p class="w-700 s-16-14 c-white"><?php pll_e('Telefon'); ?></p>
                        <a href="tel:<?php the_field('phone', 'options'); ?>" class="c-white s-16-14"><?php the_field('phone', 'options'); ?></a>
                    </div>
                    <div class="single-contact">
                        <p class="w-700 s-16-14 c-white"><?php pll_e('E-mail'); ?></p>
                        <a href="tel:<?php the_field('email', 'options'); ?>" class="c-white s-16-14"><?php the_field('email', 'options'); ?></a>
                    </div>
                </div>
            </div>
            <div class="logo"><?php et_the_logo('229px', '43px', 'footer'); ?></div>
            <div class="menu-wrapper dcg-wrapper">
                <h4 class="w-600 c-white title s-18-14"><?php pll_e('DCG'); ?></h4>
                <?php if (has_nav_menu('footer_1')) : ?>
                    <?php
                    wp_nav_menu([
                        'menu'            => 'footer_1',
                        'theme_location'  => 'footer_1',
                        'container'       => 'nav',
                        'container_id'    => 'footer-nav',
                        'container_class' => 'footer-nav',
                        'menu_id'         => 'footer-nav-menu',
                        'menu_class'      => 'footer-nav-menu'
                    ]);
                    ?>
                <?php endif; ?>
            </div>
            <div class="menu-wrapper social-wrapper">
                <h4 class="w-600 c-white mobile-only title s-18-14"><?php pll_e('Social media'); ?></h4>
                <h4 class="w-600 c-white mobile-hidden title s-18-14">Follow</h4>
                <div class="link-wrapper">
                    <a href="<?php the_field('facebook', 'options'); ?>" class="social-link">
                        <div class="c-white text mobile-hidden">Facebook</div>
                        <div class="icon mobile-only"><?= et_svg('wp-content/themes/ergotree/assets/img/facebook.svg'); ?></div>
                    </a>
                    <a href="<?php the_field('instagram', 'options'); ?>" class="social-link">
                        <div class="c-white text mobile-hidden">Instagram</div>
                        <div class="icon mobile-only"><?= et_svg('wp-content/themes/ergotree/assets/img/instagram.svg'); ?></div>
                    </a>
                    <a href="<?php the_field('linkedin', 'options'); ?>" class="social-link">
                        <div class="c-white text mobile-hidden">LinkedIn</div>
                        <div class="icon mobile-only"><?= et_svg('wp-content/themes/ergotree/assets/img/linkedin.svg'); ?></div>
                    </a>
                    <a href="<?php the_field('youtube', 'options'); ?>" class="social-link">
                        <div class="c-white text mobile-hidden">Youtube</div>
                        <div class="icon mobile-only"><?= et_svg('wp-content/themes/ergotree/assets/img/youtube.svg'); ?></div>
                    </a>
                    <a href="/blog/" class="social-link mobile-hidden">
                        <div class="c-white text mobile-hidden">Blog</div>
                    </a>
                </div>
            </div>
            <div class="menu-wrapper more-wrapper">
                <h4 class="w-600 c-white title s-18-14"><?php pll_e('Więcej'); ?></h4>
                <?php if (has_nav_menu('footer_3')) : ?>
                    <?php
                    wp_nav_menu([
                        'menu'            => 'footer_3',
                        'theme_location'  => 'footer_3',
                        'container'       => 'nav',
                        'container_id'    => 'footer-nav',
                        'container_class' => 'footer-nav',
                        'menu_id'         => 'footer-nav-menu',
                        'menu_class'      => 'footer-nav-menu'
                    ]);
                    ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<div class="footer-copyright">
    <div class="my-container">
        <p class="text-small c-gray"><?php pll_e('©2022 DCG Centrum Medyczne'); ?></p>
    </div>
</div>