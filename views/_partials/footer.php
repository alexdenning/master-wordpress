        <footer>

<?php
    if ( page_is( '/' ) ) {
?>

            <div class="content">

                <p>Still unsure about signing up? Become a WordPress Master is 100% free, there’s literally nothing to lose and you can unsubscribe at any time. Sign up and start the course immediately.</p>

                <?php site_include_view( '_partials/newsletter.php' ); ?>

            </div>

<?php
    }
?>

            <div class="copyright">

                &copy; <?php echo date( 'Y' ); ?> MasterWP - design by <a href="https://prothemedesign.com" rel="nofollow">Pro Theme Design</a> - <a href="<?php echo path( 'terms-and-conditions' ); ?>">Terms</a>

            </div>

            <!-- <?php echo gmdate( 'jS F o Hi' ); ?> -->

        </footer>

    </body>
</html>
