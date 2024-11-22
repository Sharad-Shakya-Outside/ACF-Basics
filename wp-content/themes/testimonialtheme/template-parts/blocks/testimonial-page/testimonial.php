<?php
$testimonials = get_field('testimonials');
$heading = get_field('heading');
?>
<main class="main-container">
    <h1 class="heading"><?php echo $heading; ?></h1>

    <div class="swiper-container">
        <?php if (!empty($testimonials)) : ?>
            <div class="swiper">
                <div class="swiper-wrapper">
                    <?php foreach ($testimonials['testimonial'] as $testimonial) :
                        $name = htmlspecialchars($testimonial['name']);
                        $position = htmlspecialchars($testimonial['position']);
                        $content = htmlspecialchars($testimonial['testimonial_content']);
                        $image_url = htmlspecialchars($testimonial['image']['url']);
                        $ratings = round($testimonial['ratings']);
                    ?>
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="testimonial">
                                <?php if (!empty($image_url)) { ?>
                                    <div class="testimonial__image-container">
                                        <img class="testimonial__image" src="<?php echo $image_url; ?>" alt="<?php echo $image_url; ?>">
                                    </div>
                                <?php } ?>

                                <?php if (!empty($content)) : ?>
                                    <i class="testimonial__content"><?php echo $content; ?></i>
                                <?php endif; ?>
                                <div class="testimonial__details">
                                    <div class="testimonial__info">
                                        <?php if (!empty($name)) : ?>
                                            <p class="testimonial__name"><?php echo $name; ?></p>
                                        <?php endif; ?>

                                        <?php if (!empty($name)) : ?>
                                            <p class="testimonial__position"><?php echo $position; ?></p>
                                        <?php endif; ?>

                                    </div>

                                    <div class="testimonial__ratings">
                                        <?php for ($i = 1; $i <= $ratings; $i++) : ?>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                        <?php endfor; ?>
                                        <?php for ($j = 1; $j <= 5 - $ratings; $j++) : ?>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.56.56 0 0 0-.163-.505L1.71 6.745l4.052-.576a.53.53 0 0 0 .393-.288L8 2.223l1.847 3.658a.53.53 0 0 0 .393.288l4.052.575-2.906 2.77a.56.56 0 0 0-.163.506l.694 3.957-3.686-1.894a.5.5 0 0 0-.461 0z" />
                                            </svg>
                                        <?php endfor; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        <?php endif; ?>
    </div>
</main>