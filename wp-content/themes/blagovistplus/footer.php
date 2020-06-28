<!-- *****Form***** -->
<section>
<div class="medilife-book-an-appoinment-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="appointment-form-content">
                    <div class="row no-gutters">
                        <div class="col-12">
                            <div class="medilife-appointment-form">
                                <form class="contact-form" id="st_form">
                                    <div><h3 id="transition">Записатися на прийом:</h3></div>

                                    <!-- Hidden Required Fields -->
                                    <input type="hidden" name="project_name" value="blagovistplus">
                                    <input type="hidden" name="admin_email" value="v.meleshko90@gmail.com">
                                    <input type="hidden" name="form_subject" value="index form">
                                    <!-- END Hidden Required Fields -->

                                    <div class="row align-items-end">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <select class="form-control" id="doctors" name="doctor">
                                                    <option> Глушок Віталій Степанович</option>
                                                    <option> Глушок Оксана Кирилівна</option>
                                                    <option> Зінько Оксана Олегівна</option>
                                                    <option> Глушок Вікторія Олександрівна</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="data" class="form-control tcal" id="data" onfocus="this.value=''" value=" Дата" placeholder=" Дата">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <!-- min="09:00" max="18:00"-->
                                                <input type="time" name="time" class="form-control" id="time" value="09:00" placeholder=" Час">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control border-top-0 border-right-0 border-left-0"
                                                       name="name" id="name" required onfocus="this.value=''" value=" Ім'я" placeholder=" Ім'я">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="form-group">
                                                <input type="phone" class="form-control border-top-0 border-right-0 border-left-0"
                                                       name="phone" id="number" required onfocus="this.value=''" value=" Телефон" placeholder=" Телефон">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="form-group">
                                                <input type="email" class="form-control border-top-0 border-right-0 border-left-0"
                                                       name="email" id="email" required onfocus="this.value=''" value=" E-mail" placeholder=" E-mail">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea name="повідомлення" class="form-control mb-0 border-top-0 border-right-0 border-left-0"
                                                          id="message" cols="" rows="" onfocus="this.value=''" value=" Повідомлення" placeholder=" Повідомлення">
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" id="send" class="btn medilife-btn">Подати заявку на прийом</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<!-- ***** contact-us ***** -->

<section class="footer1" id="contact-us">
<footer class="page-footer font-small blue pt-4">
    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">
        <div class="row">
            <!-- Grid column -->
            <div class="col-md-2 mt-md-0 mt-3">
                <div class="emergency-content">
                    <i class="icon-smartphone"></i>
                </div>
            </div>
            <div class="col-md-4 mt-md-0 mt-3">
                <!-- Content -->
                <h5 class="text-uppercase">Медичний центр «Благовіст-плюс»</h5>
                <p class="white">Завжди готові Вам допомогти!</p>
                <!--Facebook-->
                <a class="btn-floating btn-lg btn-fb" type="button" role="button" href="<?php the_field('facebook') ?>"><i class="fab fa-facebook-square"></i></a>
                <!--Instagram-->
                <a class="btn-floating btn-lg btn-ins" type="button" role="button" href="<?php the_field('instagram') ?>"><i class="fab fa-instagram"></i></a>
            </div>
            <!-- Grid column -->
            <hr class="clearfix w-100 d-md-none pb-3">
            <!-- Grid column -->
            <div class="col-md-2 mb-md-0 mb-3">
                <!-- Links -->
                <h5 class="text-uppercase"><i class="far fa-clock"></i> <?php the_field('h_footer1') ?></h5>
                <ul class="list-unstyled">
                <?php the_field('schedule') ?>
                </ul>
            </div>
            <!-- Grid column -->
            <div class="col-md-2 mb-md-0 mb-3 padding-0">
                <!-- Links -->
                <h5 class="text-uppercase"><i class="far fa-address-book"></i> <?php the_field('text-uppercase') ?></h5>
                <ul class="list-unstyled">
                <?php the_field('list-unstyled') ?>
                </ul>
            </div>
            <!-- Grid column -->
            <div class="col-md-2 mb-md-0 mb-3">
                <!-- Links -->
                <h5 class="text-uppercase"><img src="<?php echo get_template_directory_uri()?>/assets/img/icons/map-pin.png" alt=""> <?php the_field('text-uppercase1') ?></h5>
                <ul class="list-unstyled">
                <?php the_field('list-unstyled1') ?>
                </ul>
            </div>
        </div>
    </div>
</footer>
</section>

<!-- Map -->

<section>
<div class="map">
    <iframe class="size" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2588.7070943018152!2d25.59652791569894!3d49.546680079361025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473036ae054b8c5d%3A0x3bbaeddb43ff3aec!2z0LLRg9C70LjRhtGPINCa0L3Rj9C30Y8g0J7RgdGC0YDQvtC30YzQutC-0LPQviwgMzAsINCi0LXRgNC90L7Qv9GW0LvRjCwg0KLQtdGA0L3QvtC_0ZbQu9GM0YHRjNC60LAg0L7QsdC70LDRgdGC0YwsIDQ2MDAw!5e0!3m2!1suk!2sua!4v1578330903245!5m2!1suk!2sua"></iframe>
</div>
</section>

<!-- ***** footer ***** -->
<section class="copyright">
<div class="footer-ride">
    <div class="container">
        <div class="row footer-content">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 footer-left">
                <a class="navbar-brand faq-link" href="index.html"><img class="logo" src="<?php echo get_template_directory_uri()?>/assets/img/core-img/logo.png" width="35" height="25" alt="Logo"> Благовіст Плюс</a>
                <a href="services.html#scolarship-tab" rel="nofollow" class="faq-page-link faq-link">FAQ</a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 footer-right">
                <p class="copyright-footer">COPYRIGHT © 2020. BLAGOVISTPLUS.</p>
            </div>
        </div>
    </div>
</div>
</section>

<?php wp_footer(); ?>

<!--jquery/bootstrap-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

</body>

</html>