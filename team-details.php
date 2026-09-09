<?php include ("header.php"); ?>

        <section class="page-header">
            <div class="page-header__bg"></div>
            <!-- /.page-header__bg -->
            <div class="page-header__shape"></div>
            <!-- /.page-header__shape -->
            <div class="container">
                <h2 class="page-header__title bw-split-in-right">Team Details</h2>
                <ul class="careold-breadcrumb list-unstyled">
                    <li><a href="index.php">Home</a></li>
                    <li><span>Team Details</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <section class="team-details">
            <div class="container">
                <div class="row gutter-y-60">
                    <div class="col-lg-5">
                        <div class="team-details__image wow fadeInLeft" data-wow-delay="100ms">
                            <img src="assets/images/team/team-d-1.jpg" alt="careold">
                        </div><!-- /.team-details__image -->
                    </div><!-- /.col-lg-5 -->
                    <div class="col-lg-7">
                        <div class="team-details__content wow fadeInUp" data-wow-delay="200ms">
                            <h3 class="team-details__title">NurseDoc Connect Care Team</h3><!-- /.team-details__title -->
                            <div class="team-details__designation">Licensed healthcare professional</div>
                            <p class="team-details__text">
                                Our licensed healthcare professionals help patients and families find practical care options across Nigeria.
                                Our care team supports patients and families with clear, compassionate guidance across Nigeria.
                            </p><!-- /.team-details__text -->
                            <!-- /.team-details__designation -->
                            <ul class="list-unstyled team-details__list">
                                <li>
                                    <div class="team-details__list__icon">
                                        <i class="fas fa-envelope"></i>
                                        <div class="team-details__list__icon__zoom"><i class="fas fa-envelope"></i></div>
                                    </div>
                                    <h4 class="team-details__list__title">Email Me</h4>
                                    <p class="team-details__list__text">
                                        <a href="mailto:Help@gmail.com">Help@gmail.com</a>
                                        <a href="mailto:Garden@gmail.com">Garden@gmail.com</a>
                                    </p>
                                </li>
                                <li>
                                    <div class="team-details__list__icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <div class="team-details__list__icon__zoom"><i class="fas fa-map-marker-alt"></i></div>
                                    </div>
                                    <h4 class="team-details__list__title">Address</h4>
                                    <p class="team-details__list__text">
                                        21 King Street 5th <br>Floor, Ontario Canada
                                    </p>
                                </li>
                            </ul><!-- /.list-unstyled team-details__list -->
                            <div class="team-details__social">
                                <h5 class="team-details__social__title">Social</h5>

                                <a href="https://facebook.com/">
                                    <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                    <span class="sr-only">Facebook</span>
                                </a>
                                <a href="https://twitter.com/">
                                    <i class="fab fa-twitter" aria-hidden="true"></i>
                                    <span class="sr-only">Twitter</span>
                                </a>
                                <a href="https://linkedin.com/">
                                    <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                                    <span class="sr-only">Linkedin</span>
                                </a>
                                <a href="https://instagram.com/">
                                    <i class="fab fa-instagram" aria-hidden="true"></i>
                                    <span class="sr-only">Instagram</span>
                                </a>
                            </div><!-- /.team-details__social -->
                            <div class="team-details__highlight">
                                Do you have an emergency
                                <p class="team-details__highlight__phone"><i class="fas fa-phone-square-alt"></i><a href="tel:08894309151">Contact NurseDoc Connect</a></p>
                            </div>
                            <!-- /.team-details__highlight -->
                        </div><!-- /.team-details__content -->
                    </div><!-- /.col-lg-7 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.team-details -->

        <section class="team-form-one">
            <div class="team-form-one__bg" style="background-image: url(assets/images/shapes/team-one-form-bg.jpg);"></div>
            <!-- /.team-form-one__bg -->
            <div class="container">
                <h3 class="sec-title__title bw-split-in-up">Find The Help You <br>Need Today</h3>
                <form class="form-one team-form-one__form contact-form-validated " action="https://bracketweb.com/careold-html/inc/sendemail.php">
                    <div class="form-one__group">
                        <div class="form-one__control ">
                            <input type="text" name="name" placeholder="Your Name">
                        </div><!-- /.form-one__control  -->
                        <div class="form-one__control">
                            <input type="email" name="email" placeholder="Email Address">
                        </div><!-- /.form-one__control -->
                        <div class="form-one__control ">
                            <input type="text" name="phone" placeholder="Phone">
                        </div><!-- /.form-one__control  -->
                        <div class="form-one__control ">
                            <input type="text" name="subject" placeholder="Subject">
                        </div><!-- /.form-one__control  -->
                        <div class="form-one__control form-one__control--full">
                            <textarea name="message" placeholder="Your Message Here"></textarea><!-- /# -->
                        </div><!-- /.form-one__control -->
                        <div class="form-one__control form-one__control--full text-center">
                            <button type="submit" class="careold-btn"><i>Send A Message</i><span>Send A Message</span></button>
                        </div><!-- /.form-one__control -->
                    </div><!-- /.form-one__group -->
                </form>
                <div class="result"></div><!-- /.result -->
            </div><!-- /.container -->
        </section><!-- /.team-form-one -->

        <?php include ("footer.php"); ?>