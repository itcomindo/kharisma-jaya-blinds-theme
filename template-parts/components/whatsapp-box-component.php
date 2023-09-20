<?php

/**
 * whatsapp-box
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */

defined('ABSPATH') || exit;

if (is_single()) {
    $text = get_the_title();
    $text = 'Hallo,%20surabayablinds.com%20mohon%20info%20produk%20' . str_replace(' ', '%20', $text);
} else {
    $text = 'hallo%20surabayablinds.com';
}

?>

<div id="wabox-wr">
    <div id="closewabox">X</div>
    <div id="wabox-inner">
        <div id="wabox-btn-wr" class="animate__animated animate__delay-1s">
            <div id="wa" class="wabox"><a class="wabox-link" href="<?php mm_show_url_wa(); ?>&text=<?php echo $text; ?>"><i class="fab fa-whatsapp"></i></a></div>
            <div id="call" class="wabox"><a class="wabox-link" href="<?php mm_show_url_call(); ?>"><i class="fas fa-phone"></i></a></div>
        </div>
    </div>
</div>
<div id="openwabox" class="sleep">OPEN</div>