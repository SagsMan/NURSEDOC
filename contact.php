<?php include ("header.php"); ?>

        <section class="page-header">
            <div class="page-header__bg"></div>
            <!-- /.page-header__bg -->
            <div class="page-header__shape"></div>
            <!-- /.page-header__shape -->
            <div class="container">
                <h2 class="page-header__title bw-split-in-right">Contact</h2>
                <ul class="careold-breadcrumb list-unstyled">
                    <li><a href="index.php">Home</a></li>
                    <li><span>Contact</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <section class="contact-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="contact-one__content">
                            <h3 class="contact-one__title sec-title__title bw-split-in-up">
                                Please Don't Hesitate To Contact Us With Any Inquiries
                            </h3>
                            <p class="contact-one__text">You can also reach out to us by phone or email </p><!-- /.contact-one__text -->
                            <ul class="list-unstyled contact-one__info">
                                <li class="contact-one__info__item">
                                    <div class="contact-one__info__icon">
                                        <i class="icon-location-pin"></i>
                                        <span class="contact-one__info__icon__zoom">
                                            <i class="icon-location-pin"></i>
                                        </span>
                                    </div><!-- /.contact-one__info__icon -->
                                    <div class="contact-one__info__content">
                                        <h4 class="contact-one__info__title">Our Address</h4><!-- /.contact-one__info__title -->
                                        <p class="contact-one__info__text">130 Granite Run Drive Suite <br>Hobert, CA 10010, USA.</p>
                                        <!-- /.contact-one__info__text -->
                                    </div><!-- /.contact-one__info__content -->
                                </li>
                                <li class="contact-one__info__item">
                                    <div class="contact-one__info__icon">
                                        <i class="icon-customer-support"></i>
                                        <span class="contact-one__info__icon__zoom">
                                            <i class="icon-customer-support"></i>
                                        </span>
                                    </div><!-- /.contact-one__info__icon -->
                                    <div class="contact-one__info__content">
                                        <h4 class="contact-one__info__title">Support</h4><!-- /.contact-one__info__title -->
                                        <p class="contact-one__info__text">
                                            <a href="tel:+00881745651">+00(88) 17456 51</a><br>
                                            <a href="mailto:Support24@gmail.com">Support24@gmail.com</a>
                                        </p>
                                        <!-- /.contact-one__info__text -->
                                    </div><!-- /.contact-one__info__content -->
                                </li>
                            </ul><!-- /.list-unstyled -->
                        </div><!-- /.contact-one__content -->
                    </div><!-- /.col-xl-7 -->
                    <div class="col-lg-7">
                        <div class="google-map google-map__contact">
                            <iframe title="NurseDoc Connect service map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd" class="map__contact" allowfullscreen></iframe>
                        </div>
                        <!-- /.google-map -->
                    </div><!-- /.col-xl-5 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.contact-one -->

        <section class="contact-two">
            <div class="contact-two__bg" style="background-image: url(assets/images/shapes/contact-bg.jpg);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 wow fadeInUp" data-wow-delay="100ms">
                        <div class="contact-two__content">
                            <h3 class="contact-two__title sec-title__title bw-split-in-up">
                                To Speak To Our Friendly Team, Please Contact
                            </h3>
                            <p class="contact-two__text">Drop us a line and we will ensure the appropriate team responds to your enquiry.</p><!-- /.contact-one__text -->
                            <img src="assets/images/shapes/contact-2-1.png" alt="careold">
                        </div><!-- /.contact-one__content -->
                    </div><!-- /.col-xl-7 -->
                    <div class="col-lg-7 wow fadeInUp" data-wow-delay="200ms">
                        <form class="contact-two__form contact-form-validated form-one wow fadeInUp" data-wow-duration="1500ms" action="https://bracketweb.com/careold-html/inc/sendemail.php">
                            <div class="form-one__group">
                                <div class="form-one__control form-one__control--full">
                                    <label for="first-name">First Name</label>
                                    <input id="first-name" type="text" name="name" placeholder="First Name">
                                </div><!-- /.form-one__control form-one__control--full -->
                                <div class="form-one__control form-one__control--full">
                                    <label for="last-name">Last Name</label>
                                    <input id="last-name" type="text" name="name" placeholder="Last Name">
                                </div><!-- /.form-one__control form-one__control--full -->
                                <div class="form-one__control">
                                    <label for="phone">Phone</label>
                                    <input id="phone" type="text" name="phone" placeholder="Your Phone">
                                </div><!-- /.form-one__control form-one__control--full -->
                                <div class="form-one__control">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" name="email" placeholder="Your Email">
                                </div><!-- /.form-one__control form-one__control--full -->
                                <div class="form-one__control form-one__control--full">
                                    <label for="message">Message</label>
                                    <textarea id="message" name="message" placeholder="Write Message . . . ."></textarea><!-- /# -->
                                </div><!-- /.form-one__control -->
                                <div class="form-one__control form-one__control--full">
                                    <button type="submit" class="careold-btn"><i>Send Message</i><span>Send Message</span></button>
                                </div><!-- /.form-one__control -->
                            </div><!-- /.form-one__group -->
                        </form>
                    </div><!-- /.col-xl-5 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.contact-one -->

        <?php include ("footer.php"); ?>