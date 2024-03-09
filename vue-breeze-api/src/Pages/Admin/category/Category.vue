<template>
    <div>
        <section class="category-carousel container">
      <h2 class="section-title fw-normal fs-30 text-center mb-2">Shop By Category</h2>
      <p class="font-special fs-13 mb-3 pb-2 text-secondary text-center">The World's Premium Brands In One Destination.</p>

      <div class="position-relative">
        <div class="swiper-container js-swiper-slider"
          data-settings='{
            "autoplay": {
              "delay": 5000
            },
            "slidesPerView": 6,
            "slidesPerGroup": 1,
            "effect": "none",
            "loop": true,
            "navigation": false,
            "breakpoints": {
              "320": {
                "slidesPerView": 2,
                "slidesPerGroup": 2,
                "spaceBetween": 18
              },
              "768": {
                "slidesPerView": 3,
                "slidesPerGroup": 4,
                "spaceBetween": 22
              },
              "992": {
                "slidesPerView": 4,
                "slidesPerGroup": 1,
                "spaceBetween": 26,
                "pagination": false
              },
              "1200": {
                "slidesPerView": 6,
                "slidesPerGroup": 1,
                "spaceBetween": 30,
                "pagination": false
              }
            }
          }'>
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img loading="lazy" class="w-100 h-auto mb-3 border-1" src="../images/home/demo20/category-1.jpg" width="210" height="170" alt="">
              <h3 class="text-center m-0">
                <a href="./shop1.html" class="menu-link fw-normal text-uppercase fs-15">Bracelets</a>
              </h3>
            </div>
            <div class="swiper-slide">
              <img loading="lazy" class="w-100 h-auto mb-3 border-1" src="../images/home/demo20/category-2.jpg" width="210" height="170" alt="">
              <h3 class="text-center m-0">
                <a href="./shop1.html" class="menu-link fw-normal text-uppercase fs-15">Earrings</a>
              </h3>
            </div>
            <div class="swiper-slide">
              <img loading="lazy" class="w-100 h-auto mb-3 border-1" src="../images/home/demo20/category-3.jpg" width="210" height="170" alt="">
              <h3 class="text-center m-0">
                <a href="./shop1.html" class="menu-link fw-normal text-uppercase fs-15">Rings</a>
              </h3>
            </div>
            <div class="swiper-slide">
              <img loading="lazy" class="w-100 h-auto mb-3 border-1" src="../images/home/demo20/category-4.jpg" width="210" height="170" alt="">
              <h3 class="text-center m-0">
                <a href="./shop1.html" class="menu-link fw-normal text-uppercase fs-15">Charms</a>
              </h3>
            </div>
            <div class="swiper-slide">
              <img loading="lazy" class="w-100 h-auto mb-3 border-1" src="../images/home/demo20/category-5.jpg" width="210" height="170" alt="">
              <h3 class="text-center m-0">
                <a href="./shop1.html" class="menu-link fw-normal text-uppercase fs-15">Necklaces</a>
              </h3>
            </div>
            <div class="swiper-slide">
              <img loading="lazy" class="w-100 h-auto mb-3 border-1" src="../images/home/demo20/category-6.jpg" width="210" height="170" alt="">
              <h3 class="text-center m-0">
                <a href="./shop1.html" class="menu-link fw-normal text-uppercase fs-15">Brooches</a>
              </h3>
            </div>
          </div><!-- /.swiper-wrapper -->
        </div><!-- /.swiper-container js-swiper-slider -->
      </div><!-- /.position-relative -->
    </section>

    </div>
</template>

<script setup>

</script>

<style lang="scss" scoped>

</style>