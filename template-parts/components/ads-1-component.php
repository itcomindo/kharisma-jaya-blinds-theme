<?php

/**
 * ads-1-component
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */

defined('ABSPATH') || exit;

function mm_show_ads_1($class)
{
    if (carbon_get_theme_option('global_discount_status')) {
        $discount = '<span class="tebal uppercase"> + discount up to ' . carbon_get_theme_option('global_discount') . '</span>';
    } else {
        $discount = '';
    }
?>
    <div id="ads-1" class="the-ads <?php echo $class; ?>">
        <div class="ads-inner">
            <!-- <h3 class="ads-head">Order Produk Vertical Blinds</h3> -->
            <h3 class="ads-head">Order Produk <span id="rotating-text">Vertical Blinds</span></h3>
            <span class="ads-content">Free Pengukuran, pengiriman, pemasangan, garansi <?php echo $discount; ?></span>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const words = ["Horizontal Blinds", "Vertical Blinds", "Roller Blinds", "Wooden Blinds", "Zebra Blinds"];
                let wordIndex = 0;
                let charIndex = 0;
                let currentWord = words[0];
                let isDeleting = false;

                function showText() {
                    const spanElement = document.getElementById("rotating-text");

                    if (charIndex === 0 && isDeleting) {
                        isDeleting = false;
                        wordIndex = (wordIndex + 1) % words.length;
                        currentWord = words[wordIndex];
                    }

                    if (charIndex === currentWord.length) {
                        isDeleting = true;
                    }

                    if (isDeleting) {
                        spanElement.innerHTML = currentWord.substr(0, charIndex);
                        charIndex--;
                    } else {
                        spanElement.innerHTML = currentWord.substr(0, charIndex + 1);
                        charIndex++;
                    }

                    let speed = isDeleting ? 100 : 200;

                    if (charIndex === 0 && !isDeleting) {
                        speed += 3000; // Delay 3 detik setelah menghapus dan sebelum mengetik kata baru
                    }

                    setTimeout(showText, speed);
                }

                showText();
            });
        </script>
    </div>

<?php
}
