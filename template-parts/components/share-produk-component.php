<?php

/**
 * what file is this
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */

defined('ABSPATH') || exit;

$title = get_the_title();
$permalink = get_the_permalink();

//create share post to: facebook, twitter, linkedin, whatsapp, telegram

$facebook = 'https://www.facebook.com/sharer/sharer.php?u=' . $permalink;
$twitter = 'https://twitter.com/intent/tweet?url=' . $permalink . '&text=' . $title;
$whatsapp = 'https://api.whatsapp.com/send?text=' . $title . ' ' . $permalink;
$telegram = 'https://t.me/share/url?url=' . $permalink . '&text=' . $title;
$linkedin = 'https://www.linkedin.com/shareArticle?mini=true&url=' . $permalink . '&title=' . $title;
$instagram = 'https://www.instagram.com/?url=' . $permalink . '&title=' . $title;

?>

<div class="share">
    <a class="facebook" href="<?php echo $facebook; ?>" target="_blank" rel="noopener noreferrer">
        <i class="fab fa-facebook-f"></i>
    </a>
    <a class="twitter" href="<?php echo $twitter; ?>" target="_blank" rel="noopener noreferrer">
        <i class="fab fa-twitter"></i>
    </a>
    <a class="whatsapp" href="<?php echo $whatsapp; ?>" target="_blank" rel="noopener noreferrer">
        <i class="fab fa-whatsapp"></i>
    </a>
    <a class="telegram" href="<?php echo $telegram; ?>" target="_blank" rel="noopener noreferrer">
        <i class="fab fa-telegram-plane"></i>
    </a>
    <a class="linkedin" href="<?php echo $linkedin; ?>" target="_blank" rel="noopener noreferrer">
        <i class="fab fa-linkedin-in"></i>
    </a>

    <a class="instagram" href="<?php echo $instagram; ?>" target="_blank" rel="noopener noreferrer">
        <i class="fab fa-instagram"></i>
    </a>
</div>