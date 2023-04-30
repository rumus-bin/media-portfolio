<script setup>

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
})


</script>

<template>
    <div class="wrapper">
        <div class="content">
            <header class="hero-section">
                <img data-lag=".9" data-speed=".6" class="hero-image" src="img/hero.png" alt="hero-image">
                <div class="container">
                    <div data-speed=".75" class="main-header">
                        <h1 class="main-title">Daria Komlykova</h1>
                    </div>
                </div>
            </header>
            <div class="portfolio">
                <div class="container">
                    <div class="gallery">
                        <div data-speed=".9" class="gallery__left">


                            <img class="gallery__item" src="img/work/1.jpg" alt="work 1">
                            <img class="gallery__item" src="img/work/2.jpg" alt="work 2">
                            <div class="text-block gallery__item">
                                <h2 class="text-block__h">First work of daria Komlykova portfolio section</h2>
                                <p class="text-block__p">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit repellendus soluta,
                                    blanditiis minima a quisquam eveniet iusto, vitae animi repellat illum voluptatem,
                                    impedit doloremque fugiat modi mollitia itaque. Itaque, amet!
                                    Nostrum sequi explicabo porro possimus at distinctio provident temporibus
                                    consectetur corporis labore! Ducimus nostrum praesentium tempore, sit necessitatibus
                                    laboriosam hic possimus nihil voluptatibus voluptatem enim ex aliquid a illo ab.
                                </p>
                            </div>
                            <img class="gallery__item" src="img/work/6.jpg" alt="work 6">


                        </div>
                        <div data-speed="1.1" class="gallery__right">
                            <div class="text-block gallery__item">
                                <h2 class="text-block__h">First work of Daria Komlykova portfolio section</h2>
                                <p class="text-block__p">
                                    This is description fro the forst work in portfolio
                                </p>
                            </div>

                            <img class="gallery__item" src="img/work/3.jpg" alt="work 3">
                            <img class="gallery__item" src="img/work/4.jpg" alt="work 4">
                            <img class="gallery__item" src="img/work/5.jpg" alt="work 5">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
