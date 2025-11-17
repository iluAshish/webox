const header = document.querySelector(".main-nav");
            const toggleClass = "is-sticky";

            window.addEventListener("scroll", () => {
            const currentScroll = window.pageYOffset;
            if (currentScroll > 150) {
                header.classList.add(toggleClass);
            } else {
                header.classList.remove(toggleClass);
            }
            });

// active menu
    const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            if (link.href === window.location.href) {
                link.classList.add('active');
            } else {
                link.classList.remove('active');
              }
        });
// for rating
const starEls = document.querySelectorAll(".star.rating");
starEls.forEach((star) => {
    star.addEventListener("click", function (e) {
        let starEl = e.currentTarget;
        console.log(starEl.parentNode.dataset.stars + ", " + starEl.dataset.rating);
        starEl.parentNode.setAttribute("data-stars", starEl.dataset.rating);
    });
}); 
// form validation
