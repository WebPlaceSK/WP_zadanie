<?php get_header(); ?>
<div class="container content_area">
    <div class="row py-3 align-items-start body-callout">
        <div class="col-7">
            <div class="body-callout-text">
                <?php echo wpautop(get_theme_mod('lwp-body-callout-first-text')) ?>
            </div>

        </div>
        <div class="col-1"></div>

        <div class="col-4">
            <div class="body-callout-img">
                <img src="<?php echo wp_get_attachment_url(get_theme_mod('lwp-body-callout-image')) ?>">
            </div>
        </div>
        <div class="col-7">
            <p class="announcements">Announcements</p>
            <div class="body-callout-text">
                <?php if(have_posts()): ?>
                    <?php while(have_posts()): the_post() ?>
                        <article>
                            <?php the_title() ?><br>
                            <?php echo wp_trim_words(the_content(), 10);?> <a href="<?php the_permalink();?>" style="color: #eb924f; text-decoration: none"> Read More »</a>
                        </article>
                    <?php endwhile ?>
                <?php endif ?>
            </div>
        </div>
        <div class="col-7 row twitterBox vertical-center body-callout-text">
            <div class="col-6">
                More News on Twitter at @
            </div>
            <div class="col-5">
                <a href="https://twitter.com/TwitterDev?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-lang="en" data-dnt="true" data-show-count="true">Follow @TwitterDev</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>

            <div class="col-1">
                <i class="fab fa-twitter twiterfollow"></i>
            </div>
        </div>
    </div>
    <div class="row py-3">

        <div class="col-12 body-callout-text">
            <div class="row  bgr-f2f2f2">
                <div class="col-1 p-0 warning_img_block">
                    <img style="width: 100%" src="<?php bloginfo('template_url'); ?>/img/Screenshot_2.png" >
                </div>
                <div class="col m-3">
                    <div class="row">
                        <div class="col-5" style="color: #2b4771; font-size: 30px; font-weight: bold; bottom: 0;">Recent Work Notices   <a href="#" class="recent-link">All Areas <i class="fas fa-caret-down"></i></a> </div>
                        <div class="col-7"> <a href="#" class="recent-link">All Work notices »</a></div>
                    </div><br>
                    <div class="row">
                        <div class="col-12">

                            <div id="myGroup">
                                <?php if(get_theme_mod('lwp-recent-callout-1-text') != null){ ?>
                                    <p>
                                        <a data-toggle="collapse" onclick="iconchange(1);" data-target="#test_1" data-parent="#myGroup" class="text_button">
                                            <i class="fas fa-chevron-circle-down" id="icon_1"></i><i class="px-3"><?php echo get_theme_mod('lwp-recent-callout-1-text'); ?></i>
                                        </a>
                                    <div class="collapse" id="test_1">
                                        <div class="card_collapse">
                                            <?php echo wpautop(get_theme_mod('lwp-recent-callout-1-textarea')); ?>
                                        </div>
                                    </div>
                                    </p>
                                <?php } ?>
                                <?php if(get_theme_mod('lwp-recent-callout-2-text') != null){ ?>
                                    <p>
                                        <a data-toggle="collapse" onclick="iconchange(2);" data-target="#test_2" data-parent="#myGroup" class="text_button">
                                            <i class="fas fa-chevron-circle-down" id="icon_2"></i><i class="px-3"><?php echo get_theme_mod('lwp-recent-callout-2-text'); ?></i>
                                        </a>
                                    <div class="collapse" id="test_2">
                                        <div class="card_collapse">
                                            <?php echo wpautop(get_theme_mod('lwp-recent-callout-2-textarea')); ?>
                                        </div>
                                    </div>
                                    </p>
                                <?php } ?>
                                <?php if(get_theme_mod('lwp-recent-callout-3-text') != null){ ?>
                                    <p>
                                        <a data-toggle="collapse" onclick="iconchange(3);" data-target="#test_3" data-parent="#myGroup" class="text_button">
                                            <i class="fas fa-chevron-circle-down" id="icon_3"></i><i class="px-3"><?php echo get_theme_mod('lwp-recent-callout-3-text'); ?></i>
                                        </a>
                                    <div class="collapse" id="test_3">
                                        <div class="card_collapse">
                                            <?php echo wpautop(get_theme_mod('lwp-recent-callout-3-textarea')); ?>
                                        </div>
                                    </div>
                                    </p>
                                <?php } ?>
                                <?php if(get_theme_mod('lwp-recent-callout-4-text') != null){ ?>
                                    <p>
                                        <a data-toggle="collapse" onclick="iconchange(4);" data-target="#test_4" data-parent="#myGroup" class="text_button">
                                            <i class="fas fa-chevron-circle-down" id="icon_4"></i><i class="px-3"><?php echo get_theme_mod('lwp-recent-callout-4-text'); ?></i>
                                        </a>
                                    <div class="collapse" id="test_4">
                                        <div class="card_collapse">
                                            <?php echo wpautop(get_theme_mod('lwp-recent-callout-4-textarea')); ?>
                                        </div>
                                    </div>
                                    </p>
                                <?php } ?>
                                <?php if(get_theme_mod('lwp-recent-callout-5-text') != null){ ?>
                                    <p>
                                        <a data-toggle="collapse" onclick="iconchange(5);" data-target="#test_5" data-parent="#myGroup" class="text_button">
                                            <i class="fas fa-chevron-circle-down" id="icon_5"></i><i class="px-3"><?php echo get_theme_mod('lwp-recent-callout-5-text'); ?></i>
                                        </a>
                                    <div class="collapse" id="test_5">
                                        <div class="card_collapse">
                                            <?php echo wpautop(get_theme_mod('lwp-recent-callout-5-textarea')); ?>
                                        </div>
                                    </div>
                                    </p>
                                <?php } ?>
                                <?php if(get_theme_mod('lwp-recent-callout-6-text') != null){ ?>
                                    <p>
                                        <a data-toggle="collapse" onclick="iconchange(6);" data-target="#test_6" data-parent="#myGroup" class="text_button">
                                            <i class="fas fa-chevron-circle-down" id="icon_6"></i><i class="px-3"><?php echo get_theme_mod('lwp-recent-callout-6-text'); ?></i>
                                        </a>
                                    <div class="collapse" id="test_6">
                                        <div class="card_collapse">
                                            <?php echo wpautop(get_theme_mod('lwp-recent-callout-6-textarea')); ?>
                                        </div>
                                    </div>
                                    </p>
                                <?php } ?>
                                <?php if(get_theme_mod('lwp-recent-callout-7-text') != null){ ?>
                                    <p>
                                        <a data-toggle="collapse" onclick="iconchange(7);" data-target="#test_7" data-parent="#myGroup" class="text_button">
                                            <i class="fas fa-chevron-circle-down" id="icon_7"></i><i class="px-3"><?php echo get_theme_mod('lwp-recent-callout-7-text'); ?></i>
                                        </a>
                                    <div class="collapse" id="test_7">
                                        <div class="card_collapse">
                                            <?php echo wpautop(get_theme_mod('lwp-recent-callout-7-textarea')); ?>
                                        </div>
                                    </div>
                                    </p>
                                <?php } ?>
                                <?php if(get_theme_mod('lwp-recent-callout-8-text') != null){ ?>
                                    <p>
                                        <a data-toggle="collapse" onclick="iconchange(8);" data-target="#test_8" data-parent="#myGroup" class="text_button">
                                            <i class="fas fa-chevron-circle-down" id="icon_8"></i><i class="px-3"><?php echo get_theme_mod('lwp-recent-callout-8-text'); ?></i>
                                        </a>
                                    <div class="collapse" id="test_8">
                                        <div class="card_collapse">
                                            <?php echo wpautop(get_theme_mod('lwp-recent-callout-8-textarea')); ?>
                                        </div>
                                    </div>
                                    </p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="row py-3">
        <div class="col-6 col-lg-offset-right-1">
            <div class="comunity_event_title d-flex align-items-end justify-content-between">
                Community Events <img class="py-2" src="<?php bloginfo('template_url'); ?>/img/icon_4.png">
            </div>
            <div class="col-12">
                <div class="comunity_event_date">Friday, September 13, 2019 - 7:00PM</div>
                <div class="comunity_event_text">Forum on the New Rent Laws</div>
            </div>
            <div class="col-12">
                <div class="comunity_event_date">Saturday, October 5, 2019 - 6:30PM</div>
                <div class="comunity_event_text">CityLaw Breakfast on Measles: NYC Policy and Thoughts on Anti-Vaccine Movement</div>
            </div>
            <div class="col-12">
                <div class="comunity_event_date">Tuesday, October 14, 2019 - 7:00PM</div>
                <div class="comunity_event_text">Celebration of the Opening of the East River Parks and Promenade</div>
            </div>
            <div class="col-12">
                <a href="#" class="comunity_event_more">More Community Events »</a>
            </div>
        </div>
        <div class="col-5 p-0 col-lg-offset-left-1">
            <div class="comunity_event_title d-flex align-items-end justify-content-between">
                Upcoming Meetings <img class="py-2" src="<?php bloginfo('template_url'); ?>/img/icon_5.png">
            </div>
            <div class="col-12">
                <div class="comunity_event_date">Friday, September 13, 2019 - 7:00PM</div>
                <div class="comunity_event_text">Transportation Committee</div>
            </div>
            <div class="col-12">
                <div class="comunity_event_date">Saturday, October 5, 2019 - 6:30PM</div>
                <div class="comunity_event_text">Full Board Meeting</div>
            </div>
            <div class="col-12">
                <div class="comunity_event_date">Tuesday, October 14, 2019 - 7:00PM</div>
                <div class="comunity_event_text">Land Use & Waterfront Committee</div>
            </div>
            <div class="col-12">
                <a href="#" class="comunity_event_more">More Community Meetings »</a>
            </div>
        </div>
    </div>
    <div class="row py-3">

        <div class="col-12 body-callout-text">
            <div class="row bgr-f2f2f2">
                <div class="col m-0 p-0">
                    <div class="row">
                        <div class="col-7">
                            <p class="p_text_box">
                                District Profile
                            </p>
                            <p class="p_text_box_content">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis nisi est. Mauris varius dictum ipsum in vehicula. Nam pharetra non enim ornare interdum. Vestibulum quis nunc condimentum, bibendum mi non, pharetra nisl. Praesent sed egestas velit. In purus enim, accumsan eros.
                            </p>
                            <a href="#"><button class="btn p_text_box_button">Learn More</button></a>
                        </div>
                        <div class="col-1"></div>
                        <div class="col-4 p-0"  style="background-image: url('<?php bloginfo('template_url'); ?>/img/img1.png');"></div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-12 body-callout-text">
            <div class="row bgr-f2f2f2">
                <div class="col m-0 p-0">
                    <div class="row">
                        <div class="col-7">
                            <p class="p_text_box">
                                Get Help
                            </p>
                            <p class="p_text_box_content">
                                Consectetur adipiscing elit. Donec quis nisi est. Mauris varius dictum ipsum in vehicula. Nam pharetra non enim ornare. Vestibulum quis nunc condimentum, bibendum mi non, pharetra nisl. Praesent sed egestas velit. In purus enim, accumsan eros.
                            </p>
                            <a href="#"><button class="btn p_text_box_button">Learn More</button></a>
                        </div>
                        <div class="col-1"></div>
                        <div class="col-4 p-0"  style="background-image: url('<?php bloginfo('template_url'); ?>/img/img2.png');"></div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-12 body-callout-text">
            <div class="row bgr-f2f2f2">
                <div class="col m-0 p-0">
                    <div class="row">
                        <div class="col-7">
                            <p class="p_text_box">
                                Resources
                            </p>
                            <p class="p_text_box_content">
                                Consectetur adipiscing elit. Donec quis nisi est. Mauris varius dictum ipsum in vehicula. Nam pharetra non enim ornare. Vestibulum quis nunc condimentum, bibendum mi non, pharetra nisl. Praesent sed egestas velit. In purus enim, accumsan eros.
                            </p>
                            <a href="#"><button class="btn p_text_box_button">Learn More</button></a>
                        </div>
                        <div class="col-1"></div>
                        <div class="col-4 p-0"  style="background-image: url('<?php bloginfo('template_url'); ?>/img/img3.png');"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php get_footer(); ?>
