var writeButton = document.getElementById("write-button");
var closeButton = document.getElementById("close-button");
var menuClick = false;

writeButton.addEventListener("click", write);
closeButton.addEventListener("click", write);

function write() {
    if (menuClick == false) {
        document.body.style.overflow = 'hidden';
        document.getElementById("write-review").classList.toggle("active");
        document.getElementById("write-content").classList.toggle("active");
        menuClick = true;
    } else {
        menuClick = false;
        document.getElementById("write-review").classList.remove("active");
        document.getElementById("write-content").classList.remove("active");
        document.body.style.overflow = 'visible';
    }
}

var clickedStar = null;

var writeStar1 = document.getElementById("write-star-1");
var writeStar2 = document.getElementById("write-star-2");
var writeStar3 = document.getElementById("write-star-3");
var writeStar4 = document.getElementById("write-star-4");
var writeStar5 = document.getElementById("write-star-5");

writeStar1.addEventListener("mouseover", function () {

    if (clickedStar == null || clickedStar <= 1) {
        mouseEnter();
        writeStar1.classList.toggle("active");
    }
});

writeStar2.addEventListener("mouseover", function () {

    if (clickedStar == null || clickedStar <= 2) {
        mouseEnter();
        writeStar1.classList.toggle("active");
        writeStar2.classList.toggle("active");
    }
});

writeStar3.addEventListener("mouseover", function () {

    if (clickedStar == null || clickedStar <= 3) {
        mouseEnter();
        writeStar1.classList.toggle("active");
        writeStar2.classList.toggle("active");
        writeStar3.classList.toggle("active");
    }
});

writeStar4.addEventListener("mouseover", function () {

    if (clickedStar == null || clickedStar <= 4) {
        mouseEnter();
        writeStar1.classList.toggle("active");
        writeStar2.classList.toggle("active");
        writeStar3.classList.toggle("active");
        writeStar4.classList.toggle("active");
    }
});

writeStar5.addEventListener("mouseover", function () {

    if (clickedStar == null || clickedStar <= 5) {
        mouseEnter();
        writeStar1.classList.toggle("active");
        writeStar2.classList.toggle("active");
        writeStar3.classList.toggle("active");
        writeStar4.classList.toggle("active");
        writeStar5.classList.toggle("active");
    }
});

writeStar1.addEventListener("mouseout", mouseClick);

writeStar2.addEventListener("mouseout", mouseClick);

writeStar3.addEventListener("mouseout", mouseClick);

writeStar4.addEventListener("mouseout", mouseClick);

writeStar5.addEventListener("mouseout", mouseClick);


writeStar1.addEventListener("click", function () {
    clickedStar = 1;
    mouseClick();
});

writeStar2.addEventListener("click", function () {
    clickedStar = 2;
    mouseClick();
});

writeStar3.addEventListener("click", function () {
    clickedStar = 3;
    mouseClick();
});

writeStar4.addEventListener("click", function () {
    clickedStar = 4;
    mouseClick();
});

writeStar5.addEventListener("click", function () {
    clickedStar = 5;
    mouseClick();
});

function mouseEnter() {
    writeStar1.classList.remove("active");
    writeStar2.classList.remove("active");
    writeStar3.classList.remove("active");
    writeStar4.classList.remove("active");
    writeStar5.classList.remove("active");
}

var writeStart = document.getElementById("write-start");

function mouseClick() {

    writeStar1.classList.remove("active");
    writeStar2.classList.remove("active");
    writeStar3.classList.remove("active");
    writeStar4.classList.remove("active");
    writeStar5.classList.remove("active");

    if (clickedStar == 1) {
        writeStar1.classList.toggle("active");
        
    } else if (clickedStar == 2) {
        writeStar1.classList.toggle("active");
        writeStar2.classList.toggle("active");
    } else if (clickedStar == 3) {
        writeStar1.classList.toggle("active");
        writeStar2.classList.toggle("active");
        writeStar3.classList.toggle("active");
    } else if (clickedStar == 4) {
        writeStar1.classList.toggle("active");
        writeStar2.classList.toggle("active");
        writeStar3.classList.toggle("active");
        writeStar4.classList.toggle("active");
    } else if (clickedStar == 5) {
        writeStar1.classList.toggle("active");
        writeStar2.classList.toggle("active");
        writeStar3.classList.toggle("active");
        writeStar4.classList.toggle("active");
        writeStar5.classList.toggle("active");
    }

    writeStart.value = clickedStar;

}

var fileImg = document.getElementById("fileImg");
var fileInput = document.getElementById("fileInput");

fileImg.addEventListener("click", function () {
    fileInput.click();
});

var previewImage = document.getElementById("previewImage");


fileInput.addEventListener("change", function () {
    var selectedFile = fileInput.files[0];
    if (selectedFile) {
        var reader = new FileReader();

        reader.onload = function (event) {
            previewImage.src = event.target.result;
            previewImage.style.visibility="visible";
        };

        reader.readAsDataURL(selectedFile);
    }
});






