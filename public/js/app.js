gsap.registerPlugin(ScrollTrigger, ScrollSmoother);

if (ScrollTrigger.isTouch !== 1) {
    ScrollSmoother.create(
        {
            wrapper: '.wrapper',
            content: '.content',
            smooth: 1.5,
            effects: true
        }
    );

    gsap.fromTo(
        '.hero-section',
        {opacity: 1},
        {
            opacity: 0,
            scrollTrigger: {
                trigger: '.hero-section',
                start: 'center',
                end: 820,
                scrub: true
            }
        }
    );

    let items_left = gsap.utils.toArray('.gallery__left .gallery__item');

    items_left.forEach(
        item => {
            gsap.fromTo(
                item,
                {
                    x: -150,
                    opacity: 0
                },
                {
                    x: 0,
                    opacity: 1,
                    scrollTrigger: {
                        trigger: item,
                        start: '-800',
                        end: '-100',
                        scrub: true
                    }
                },
                
            );
        }
    );

    let items_right = gsap.utils.toArray('.gallery__right .gallery__item');

    items_right.forEach(
        item => {
            gsap.fromTo(
                item,
                {
                    x: 150,
                    opacity: 0
                },
                {
                    x: 0,
                    opacity: 1,
                    scrollTrigger: {
                        trigger: item,
                        start: '-800',
                        end: '-100',
                        scrub: true
                    }
                },
                
            );
        }
    );
}