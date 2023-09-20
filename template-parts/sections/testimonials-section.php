<?php

/**
 * testimonials-section.php
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */

defined('ABSPATH') || exit;
?>

<section id="testi" class="section">
    <div class="container">
        <div id="testi-wr">
            <div id="testi-top" class="w100">
                <h2 class="section-head text-center">Testimonials</h2>
                <span class="lw75-mw100 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus totam impedit illo ad, incidunt maiores perferendis? Dolores amet doloribus dolore ipsam nam maiores aliquam, error maxime quisquam ullam! Repudiandae, quidem.</span>
            </div>
            <div id="testi-card-wr" class="w100">

                <div class="testi-card">
                    <span>Logo Testi</span>
                    <span class="testi-name">Bujang</span>
                    <blockquote class="testi-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus.</blockquote>
                </div>

                <div class="testi-card">
                    <span>Logo Testi</span>
                    <span class="testi-name">Bujang</span>
                    <blockquote class="testi-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus.</blockquote>
                </div>

                <div class="testi-card">
                    <span>Logo Testi</span>
                    <span class="testi-name">Bujang</span>
                    <blockquote class="testi-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus.</blockquote>
                </div>

                <div class="testi-card">
                    <span>Logo Testi</span>
                    <span class="testi-name">Bujang</span>
                    <blockquote class="testi-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus.</blockquote>
                </div>
            </div>
        </div>

    </div>
</section>

<?php
/**
 * Function mm_testimonials_scripts
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */
add_action('wp_footer', function () {
?>
    <style>
        /**
=========================
* Testimonial
*=========================
*/
        #testi {
            padding-top: 5rem;
            padding-bottom: 5rem;
        }

        #testi-wr {
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 3rem;
            align-items: center;
        }

        #testi-card-wr {
            width: 100%;
            display: block;
            /* display: grid; */
            /* grid-template-columns: repeat(4, 1fr); */
            /* gap: 1rem; */
        }

        .testi-card {
            width: calc(100% / 3 - 1rem);
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 1rem;
            gap: 1rem;
            margin: 0 1rem;
            text-align: center;
        }

        .testi-content {
            padding: 0;
            margin: 0;
            background-color: #eee;
            font-size: 90%;
            padding: 1rem;
            border-radius: 36px 45px 36px 45px;
        }

        @media (max-width: 767px) {
            .testi-card {
                width: 100%;
            }
        }

        @media (max-width: 480px) {
            .testi-card {
                width: 100%;
            }
        }
    </style>
<?php
});
