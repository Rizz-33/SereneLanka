var menuIcon = document.getElementById("menu-icon");
var menuClick = false;

menuIcon.addEventListener("click", function () {

    if (menuClick == false) {
        document.body.style.overflow = 'hidden';
        document.getElementById("menu-icon").classList.toggle("active");
        document.getElementById("menu").classList.toggle("active");
        menuClick = true;
    } else {
        menuClick = false;
        document.getElementById("menu-icon").classList.remove("active");
        document.getElementById("menu").classList.remove("active");
        document.body.style.overflow = 'visible';
    }

});

window.addEventListener('resize', function () {
    var viewportWidth = window.innerWidth;

    if (viewportWidth >= 768) {
        document.getElementById("menu-icon").classList.remove("active");
        document.getElementById("menu").classList.remove("active");
        document.body.style.overflow = 'visible';
    }
});


var blogLink = document.getElementById("blog-link");
var blog = document.getElementById("blog");
var blogMouseOn = false;

function toggleActiveClass() {
    blog.classList.toggle("active");
    blogLink.classList.toggle("active");
}

blogLink.addEventListener("mouseenter", function () {
    toggleActiveClass();
    blogMouseOn = true;
    console.log(blogMouseOn);
});

blog.addEventListener("mouseenter", function () {
    blogMouseOn = true;
    blog.classList.remove("active");
    blog.classList.toggle("active");
    blogLink.classList.remove("active");
    blogLink.classList.toggle("active");
    console.log(blogMouseOn);
});

blog.addEventListener("mouseleave", function () {
    blogMouseOn = false;
    blog.classList.remove("active");
    blogLink.classList.remove("active");
    console.log(blogMouseOn);
});

blogLink.addEventListener("mouseleave", function () {
    // if (!blogMouseOn) {
        blog.classList.remove("active");
        blogLink.classList.remove("active");
        console.log(blogMouseOn);
    // }
});


var menuBlog = document.getElementById("menu-blog");

menuBlog.addEventListener("click", function () {

    document.getElementById("menu-blog-content").classList.toggle("active");

});