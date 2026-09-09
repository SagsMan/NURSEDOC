<?php include ("header.php"); ?>

        <section class="page-header">
            <div class="page-header__bg"></div>
            <!-- /.page-header__bg -->
            <div class="page-header__shape"></div>
            <!-- /.page-header__shape -->
            <div class="container">
                <h2 class="page-header__title bw-split-in-right">404 Error</h2>
                <ul class="careold-breadcrumb list-unstyled">
                    <li><a href="index.php">Home</a></li>
                    <li><span>404</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <section class="error-404">
            <div class="container">
                <div class="error-404__image wow fadeInUp" data-wow-duration="1500ms">
                    <img src="assets/images/shapes/error-404-shape.png" alt="404">
                </div><!-- /.error-404__image -->
                <h3 class="error-404__title">This NurseDoc page is unavailable</h3><!-- /.error-404__title -->
                <p class="error-404__text">The page you are looking for was never existed.</p><!-- /.error-404__text -->
                <form action="#" class="error-404__search">
                    <input type="text" id="error-search" placeholder="Search NurseDoc" />
                    <button type="submit" class="error-404__search__btn" aria-label="search submit">
                        <span><i class="icon-search1"></i></span>
                    </button>
                </form><!-- /.error-404__search -->
                <div class="error-404__btns">
                    <a href="index.php" class="careold-btn"><i>Back To Home</i><span>Back To Home</span></a>
                </div><!-- /.error-404__btns -->
            </div><!-- /.container -->
        </section><!-- /.error-404 -->

        <?php include ("footer.php"); ?>