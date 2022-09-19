<?php
    /**
     * Template name: Strona główna
     */
get_header(); ?>

<main class="quorum quorum--home">
    <section class="homeHeader">
        <div class="homeHeader__video">
            <?php 
                $src = get_template_directory_uri() . '/images/home/video/quorum_heading_video_v2.mp4';
                echo do_shortcode('[videojs_video url="' . $src . '" autoplay="true" loop="true" muted="true" controls="false"]')
            ?>
        </div>
        <div class="homeHeader__wrap container">
            <div class="homeHeader__form">
                <div class="wrapper">
                    <h1><?php echo get_field('homeForm_title'); ?></h1>
                    <h2><?php echo get_field('homeForm_subtitle'); ?></h2>
                    <form id="contactForm" class="contactForm" method="POST">
                        <div class="notice"></div>
                        <div class="contactForm__input">
                            <input type="text" name="contactName" placeholder="Imię"/>
                        </div>
                        <div class="contactForm__input">
                            <input type="text" name="contactSurname" placeholder="Nazwisko"/>
                        </div>
                        <div class="contactForm__input">
                            <input type="phone" name="contactPhone" placeholder="Numer telefonu"/>
                        </div>
                        <div class="contactForm__input">
                            <input type="email" name="contactMail" placeholder="Adres e-mail"/>
                        </div>
                        <div class="contactForm__input">
                            <textarea name="contactMessage" placeholder="Wiadomość"></textarea>
                        </div>
                        <p class="rodo">Informujemy, iż Administratorem Twoich danych osobowych, które zostały podane w formularzu kontaktowym są Spółki wchodzące w skład Grupy Kapitałowej Resi Capital (dalej jako „GK Resi Capital”), działające jako Współadministratorzy danych osobowych. Szczegółowe zasady ochrony danych osobowych przekazanych poprzez formularz znajdziesz w <a href="<?php echo home_url('/polityka-prywatnosci'); ?>">Polityce prywatności</a>.</p>
                        <button type="submit" class="btn"><span>Skontaktuj się</span></button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="homeContent">
        <div class="homeContent__wrap container">
            <div class="homeContent__heading">
                <h2><?php echo get_field('homeContent_sectiontitle'); ?></h2>
            </div>
            <?php 
            $count = 1;
            while(have_rows('homeContent')): the_row(); 
                $image = get_sub_field('homeContent_image');
                $icon = get_sub_field('homeContent_icon');
                $title = get_sub_field('homeContent_title');
                $desc = get_sub_field('homeContent_desc');
            ?>
            <div class="contentBox<?php if($count % 2 == 0): ?> contentBox--reverse<?php endif; ?>">
                <div class="contentBox__image">
                    <div class="image">
                        <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" />
                    </div>
                </div>
                <div class="contentBox__content">
                    <div class="icon">
                        <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
                    </div>
                    <h2><?php echo $title; ?></h2>
                    <p><?php echo $desc; ?></p>
                    <a href="https://quorumapartments.pl/wp-content/uploads/quorum.pdf" target="_blank" class="readmore"><span>Czytaj więcej</span></a>
                </div>
            </div>
            <?php $count++; endwhile; ?>
        </div>
    </section>
    <section id="numbers" class="homeNumbers">
        <div class="homeNumbers__wrap container">
            <div class="homeNumbers__heading">
                <h2>O projekcie</h2>
            </div>
            <div class="homeNumbers__list">
                <div class="box">
                    <h3>341</h3>
                    <div class="divider"></div>
                    <p>mieszkań</p>
                </div>
                <div class="box">
                    <h3>23</h3>
                    <div class="divider"></div>
                    <p>piętra</p>
                </div>
                <div class="box">
                    <h3>25-79 m²</h3>
                    <div class="divider"></div>
                    <p>wielkość mieszkań</p>
                </div>
                <div class="box">
                    <h3>1-4</h3>
                    <div class="divider"></div>
                    <p>liczba pokoi</p>
                </div>
                <div class="box">
                    <h3>od 18,300 zł/m²</h3>
                    <div class="divider"></div>
                    <p>ceny mieszkań</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>