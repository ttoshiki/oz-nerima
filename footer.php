<footer class="site-footer">
    <hr class="line">
    <!-- <div class="sns">
        <a href="https://www.facebook.com/oz.badcircle/"><img src="<?php echo content_url() ?>/themes/oz/assets/img/fb.svg" alt="" class="fb"></a>
        <a href="https://www.instagram.com/ozbadteam/?utm_source=ig_profile_share&igshid=ehd4f7pak6la&fbclid=IwAR1emSDd7KUzpulGtHNSrPsQ8LPE0jK1U0P5PP4Ky5-0A9j6iyQBIjiO-9s
"><img src="<?php echo content_url() ?>/themes/oz/assets/img/instagram.svg" alt=""></a>
    </div> -->
    <div class="cp-wrapper">
        <small class="cp">COPYRIGHT © NERIMA OZ ALL RIGHTS RESERVED.</small>
    </div>

</footer>

<?php wp_footer(); ?>

<?php
if ( is_page() || is_single() ) {
  echo post_custom('測定用タグ');
}
?>
</body>
</html>