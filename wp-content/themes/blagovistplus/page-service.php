<?php
/*
Template Name: Послуги
*/
?>
<?php get_header(); ?>

<!-- ***** Breadcumb Area Start ***** -->
<section class="breadcumb-area bg-img gradient-background-overlay" style="background-image: url(<?php the_field('background-overlay') ?>);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcumb-content">
                    <h3 class="breadcumb-title"><?php the_field('breadcumb-title') ?></h3>
                    <p></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Breadcumb Area End ***** -->

<!-- ***** Services Area Start ***** -->
<div class="medilife-services-area section-padding-100-20">
    <div class="container">
        <div class="row">
            <!-- Single Service Area -->
            <?php the_field('service-content') ?>
        </div>
    </div>
</div>
<!-- ***** Services Area End ***** -->

<!-- ***** Tabs Area Start ***** -->
<section class="medilife-tabs-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="medilife-tabs-content">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" id="institution-tab" data-toggle="tab" href="#institution" role="tab"
                               aria-controls="institution" aria-selected="false">Що таке IPL?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="faq-tab" data-toggle="tab" href="#faq" role="tab"
                               aria-controls="faq" aria-selected="false">Карбокситерапія</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" id="specialities-tab" data-toggle="tab" href="#specialities"
                               role="tab" aria-controls="specialities" aria-selected="true">Плазмотерапія</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="laboratory-tab" data-toggle="tab" href="#laboratory" role="tab"
                               aria-controls="laboratory" aria-selected="false">Фототерапія</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="emergencies-tab" data-toggle="tab" href="#emergencies" role="tab"
                               aria-controls="emergencies" aria-selected="false">Дерматоскопія</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade" id="institution" role="tabpanel" aria-labelledby="institution-tab">
                            <div class="medilife-tab-content">
                                <!-- Medilife Tab Text  -->
                                <div class="medilife-tab-text">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                        <p class="medilife-text" style="text-indent: 20px;"><b>IPL (intense pulsed light)</b> -
                                            технологія, що використовується у медичній та косметичній
                                            практиці для проведення різних видів лікування шкіри з естетичною та
                                            терапевтичною метою, включаючи видалення
                                            волосся та фотоомолодження.</p>
                                        <p class="medilife-text" style="text-indent: 20px;"><b>Також застосовується для:</b></p>
                                        <ul class="medilife-text">
                                            <li>- лікування пігментації шкіри, сонячних уражень та видалення «судинних
                                                сіточок»;
                                            </li>
                                            <li>- лікування постакне і «розтяжок» на шкірі;</li>
                                        </ul>
                                        <p class="medilife-text" style="text-indent: 20px;"><b>Чи є IPL лазером?</b></p>
                                        <p class="medilife-text" style="text-indent: 20px;">І так, і ні.
                                            Основна відмінність між ними - у типі світла, що випромінюється. Лазер
                                            утворює одиничний пучок слабозабарвленого (монохромного) світла, що
                                            спрямоване на певну обмежену зону.
                                            IPL дає широкий спектр світла (поліхроматичне), що охоплює ширшу ділянку і
                                            має різні довжини хвиль.
                                            Іншими словами, лазер має більш вузькоспецифічну дію.</p>
                                        <p class="medilife-text" style="text-indent: 20px;">Обидва методи є
                                            високоефективними, проте IPL є більш контрольованим і тому зазвичай менш
                                            болючим, ніж лазер.
                                            Процедура IPL не вимагає анестезії чи навіть седації, пацієнтами
                                            переноситься комфортно.
                                            Промінь проникає у глибші шари шкіри без пошкодження поверхневих шарів і
                                            епідермісу. І, оскільки довжина хвилі може бути відфільтрована, IPL не
                                            спричиняє жодного шкідливого впливу на розташовані поряд із зоною впливу
                                            тканини.</p>
                                        <p class="medilife-text" style="text-indent: 20px;"><b>Показання до проведення
                                            IPL:</b></p>
                                        <ul class="medilife-text">
                                            <li>- судинні «зірочки», телеангіектазії на шкірі;</li>
                                            <li>- пігментація та зморшки як результат фотопошкодження шкіри;</li>
                                            <li>- мелазма;</li>
                                            <li>- акне та постакне;</li>
                                            <li>- розтяжки;</li>
                                            <li>- видалення небажаного волосся;</li>
                                        </ul>
                                        <p class="medilife-text" style="text-indent: 20px;">Зазвичай потрібно щонайменше
                                            три процедури для досягнення бажаного ефекту. Процедура виконується в
                                            середньому раз на місяць.</p>
                                        <p class="medilife-text" style="text-indent: 20px;">Як і інші лазерні втручання,
                                            процедура IPL формально може виконуватися будь-ким, хто пройшов
                                            відповідне навчання для роботи з апаратом. Проте для Вашої безпеки та
                                            найкращого результату важливо, аби процедуру
                                            виконувала людина, котра знає будову та функції шкіри і має медичну освіту.
                                            У нашому центрі таку процедуру виконує
                                            лікар-дерматолог. Оскільки процедура швидка і сприймається пацієнтами
                                            переважно комфортно і без больових відчуттів,
                                            за кордоном IPL часто називають ланчтайм-процедурою.</p>
                                        <p class="medilife-text" style="text-indent: 20px;">Запрошуємо і Вас - у зручний для Вас час - потурбуватися про своє здоров‘я та
                                            красу!</p>
                                    </div>
                                </div>
                                <!-- Medilife Tab Img  -->
                                <div class="medilife-tab-img">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                        <img src="<?php echo get_template_directory_uri()?>/assets/img/img-9.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="faq" role="tabpanel" aria-labelledby="faq-tab">
                            <div class="medilife-tab-content d-md-flex">
                                <!-- Medilife Tab Text  -->
                                <div class="medilife-tab-text">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                        <p class="medilife-text" style="text-indent: 20px;">Карбокситерапія:
                                            процедура, за допомогою якої посилюють циркуляцію крові у певній ділянці
                                            тіла,
                                            шляхом ін’єкційного введення діоксиду вуглецю.Це відновлює еластичність
                                            шкіри,
                                            а також надає їй сяючого і здорового вигляду.</p>
                                        <p class="medilife-text" style="text-indent: 20px;"><b>Покази для проведення
                                            карбокситерапії:</b></p>
                                        <ul class="medilife-text">
                                            <li>- розтяжки</li>
                                            <li>- целюліт</li>
                                            <li>- темні кола під очима</li>
                                            <li>- алопеція, спричинена порушенням мікроциркуляції</li>
                                            <li>- омолодження шкіри</li>
                                            <li>- зменшення жирових відкладень у певних ділянках тіла</li>
                                        </ul>
                                        <p class="medilife-text" style="text-indent: 20px;">Процедура швидка, до
                                            15-30хв, безболісна, не має побічних ефектів.
                                            Пацієнтам, що застосовували її для лікування целюліту або жирових
                                            відкладень, рекомендовано утриматись від водних
                                            процедур на 24 год. В усіх інших випадках пацієнт одразу повертається до
                                            звичного ритму життя.</p>
                                        <p class="medilife-text" style="text-indent: 20px;">Зазвичай для досягнення
                                            ефекту потрібно 7-10 процедур, які виконуються 1 раз на тиждень.
                                            Процедура може виконуватися на обличчі, повіках, шиї, животі, руках, ногах.
                                            Для боротьби з ожирінням та целюлітом є більш безпечною, ніж ліпосакція і
                                            схвалена Американською FDA.</p>
                                        <p class="medilife-text" style="text-indent: 20px;">У нашому центрі
                                            карбокситерапію виконує лікар-дерматолог.</p>
                                    </div>
                                </div>
                                <!-- Medilife Tab Img  -->
                                <div class="medilife-tab-img">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                        <img src="<?php echo get_template_directory_uri()?>/assets/img/img-9.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show active" id="specialities" role="tabpanel"
                             aria-labelledby="specialities-tab">
                            <div class="medilife-tab-content d-md-flex">
                                <!-- Medilife Tab Text  -->
                                <div class="medilife-tab-text">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                        <p class="medilife-text" style="text-indent: 20px;">Плазмотерапія на даний час є
                                            однією з найбільш популярних природніх анти-ейдж методик.
                                            Це єдиний вид лікування у естетичній медицині, при якому використовується
                                            повністю натуральний продукт, отриманий з тіла людини.</p>
                                        <p class="medilife-text" style="text-indent: 20px;">Аутоплазма стимулює синтез
                                            колагену, та ангіогенез (формування нових кровоносних судин у шкірі),
                                            викликає регенерацію старих та формування нових тканин,
                                            надає сяючого вигляду шкірі, зменшує набряки та темні кола під очима, робить
                                            шкіру більш еластичною та пружною.</p>
                                        <p class="medilife-text" style="text-indent: 20px;"><b>Плазмотерапія застосовується
                                            для:</b></p>
                                        <ul class="medilife-text">
                                            <li>- корекції зморшок на обличчі, шиї, зоні декольте, руках;</li>
                                            <li>- формування контуру обличчя (зменшення провисання шкіри);</li>
                                            <li>- омолодження та підвищення пружності шкіри;</li>
                                            <li>- покращення тону та текстури шкіри;</li>
                                            <li>- зменшення темних кіл навколо очей;</li>
                                            <li>- освітлення шкіри та боротьба з пігментацією;</li>
                                            <li>- лікування шкіри волосистої частини голови та окремих форм випадіння
                                                волосся.
                                            </li>
                                        </ul>
                                        <p class="medilife-text" style="text-indent: 20px;"><b>Як проводиться
                                            процедура?</b></p>
                                        <p class="medilife-text" style="text-indent: 20px;">Забір крові (8 мл)
                                            проводиться з допомогою спеціальної вакуумної системи, після чого кров
                                            потрапляє у центрифугу.
                                            Плазма, що утворюється в результаті, готується для ін'єкції і може на цьому
                                            етапі бути додатково збагаченою вітамінами, мінералами, амінокислотами,
                                            коензимами, гіалуроновою кислотою та іншими середниками для кращого
                                            ефекту.</p>
                                        <p class="medilife-text" style="text-indent: 20px;">Власне ін'єкції подібні до
                                            мезотерапії - тоненька голочка
                                            проникає у поверхневі шари шкіри; виконується багато таких мікроін''єкцій.
                                            Перед проведенням процедури на шкіру можна нанести крем-анестетик для
                                            більшого комфорту пацієнта.
                                            Тривалість процедури плазмотерапії 30-40 хв.</p>
                                        <p class="medilife-text" style="text-indent: 20px;"><b>Переваги методу:</b></p>
                                        <ul class="medilife-text">
                                            <li>- аутологічний;</li>
                                            <li>- продукт, який вводиться у тіло, є його частиною;</li>
                                            <li>- немає ризику алергії;</li>
                                            <li>- немає ризику відторгнення;</li>
                                            <li>- немає відтермінованих побічних ефектів;</li>
                                            <li>- тривалий результат.</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Medilife Tab Img  -->
                                <div class="medilife-tab-img">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                        <img src="<?php echo get_template_directory_uri()?>/assets/img/img-9.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="laboratory" role="tabpanel" aria-labelledby="laboratory-tab">
                            <div class="medilife-tab-content d-md-flex">
                                <!-- Medilife Tab Text  -->
                                <div class="medilife-tab-text">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                        <p class="medilife-text" style="text-indent: 20px;">Під час фототерапії на шкіру
                                            пацієнта діє ультрафіолетове світло, що випромінюється спеціальною лампою.
                                            Хвилі світла запускають біологічні процеси, що допомагають позбутися шкірних
                                            захворювань.</p>
                                        <p class="medilife-text" style="text-indent: 20px;">Це може здаватися подібним
                                            до засмаги, проте різниця ось у чому: під час засмагання на сонці або у
                                            солярії вплив на усе тіло чинять промені UVA,
                                            що можуть викликати пошкодження шкіри. Багато шкірних проблем не
                                            відповідають на дію таких променів, тому ви не отримаєте бажаного
                                            покращення.</p>
                                        <p class="medilife-text" style="text-indent: 20px;">Фототерапія використовує
                                            інші типи ультрафіолетового світла (одночасно UVA та ультрафіолет B) і дія
                                            їх при цьому фокусована та триває точно
                                            визначений час. Такий підхід допомагає отримати покращення без ризику
                                            пошкодження неураженої шкіри.</p>
                                        <p class="medilife-text" style="text-indent: 20px;"><b>Захворювання шкіри, при яких
                                            показана фототерапія:</b></p>
                                        <ul class="medilife-text">
                                            <li>- контактний дерматит</li>
                                            <li>- екзема</li>
                                            <li>- псоріаз</li>
                                            <li>- виражений свербіж</li>
                                            <li>- вітиліго та інші стани.</li>
                                        </ul>
                                        <p class="medilife-text" style="text-indent: 20px;">Процедура проводиться 2-3
                                            рази на тиждень протягом декількох тижнів. На початку лікування може
                                            відмічатися загострення симптоматики,
                                            проте частина пацієнтів помічає позитивні зміни уже через 2-4 тижні.
                                        </p>
                                    </div>
                                </div>

                                <!-- Medilife Tab Img  -->
                                <div class="medilife-tab-img">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                        <img src="<?php echo get_template_directory_uri()?>/assets/img/img-9.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="emergencies" role="tabpanel" aria-labelledby="emergencies-tab">
                            <div class="medilife-tab-content d-md-flex">
                                <!-- Medilife Tab Text  -->
                                <div class="medilife-tab-text">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                        <p class="medilife-text" style="text-indent: 20px;">Дерматоскопія шкіри -
                                            сучасний інструментальний неінвазивний (без пошкодження цілісності шкіри)
                                            метод обстеження новоутворів шкіри.</p>
                                        <p class="medilife-text" style="text-indent: 20px;"><b>Цей вид обстеження
                                            дозволяє:</b></p>
                                        <ul class="medilife-text">
                                            <li>- вчасно виявити ознаки злоякісних процесів та оцінити їх динаміку;</li>
                                            <li>- оцінити стан існуючих невусів та інших новоутворів шкіри;</li>
                                            <li>- обрати метод видалення новоутвору за наявності показів до цього;</li>
                                            <li>- здійснювати динамічне спостереження за станом шкіри і оцінювати
                                                ефективність терапії;
                                            </li>
                                            <li>- діагностувати захворювання на пошкодження нігтьових пластин.</li>
                                        </ul>
                                        <p class="medilife-text" style="text-indent: 20px;">Проводити дерматоскопію
                                            можна особам будь-якого віку та вагітним жінкам, процедура не створює
                                            жодного дискомфорту і
                                            не потребує попередньої підготовки пацієнта.</p>
                                    </div>
                                </div>
                                <!-- Medilife Tab Img  -->
                                <div class="medilife-tab-img">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                        <img src="<?php echo get_template_directory_uri()?>/assets/img/img-9.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Tabs Area End ***** -->


<?php get_footer(); ?>