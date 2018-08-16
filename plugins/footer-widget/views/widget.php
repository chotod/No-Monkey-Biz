<!-- This file is used to markup the public-facing widget. -->
<?php if ( strlen( trim( $telephone_title ) ) > 0 ): ?>
    <div>
        <p class="footer-heading"><span><i class="fas fa-phone"></i></span><?php echo $telephone_title;?></p>
        <p class="footer-info">telephone: <a href="tel:+1<?php echo $telephone_input;?>" class="footer-phone"><?php echo $telephone_input;?></a></p>
    </div>
<?php endif; ?>

<?php if ( strlen( trim( $email_title ) ) > 0 ): ?>
    <div class="footer-border"></div>
    <div>
        <p class="footer-heading"><span><i class="far fa-envelope"></i></span><?php echo $email_title;?></p>
        <a class="footer-info" href="mailto:<?php echo $email_input;?>" class="footer-email"><?php echo $email_input;?></a>
    </div>
    <div class="footer-border"></div>
<?php endif; ?>


<?php if ( strlen( trim( $hours_title ) ) > 0 ): ?>
    <div>
        <p class="footer-heading"><span><i class="far fa-clock"></i></span><?php echo $hours_title;?></p>
        <p class="footer-info"><?php echo $hours_input;?></p>
    </div>
<?php endif; ?>
