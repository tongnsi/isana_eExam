let currentSlide = 0;
const slideSize = 4;
const imageWidth = 300;
const gap = 20;
const container = document.getElementById("watthai");

function changeSlide(index) {
    currentSlide = index;
    const translateX = -(imageWidth + gap) * slideSize * index;
    container.style.transform = `translateX(${translateX}px)`;

    document.querySelectorAll(".dot").forEach((dot, i) => {
        dot.classList.toggle("active", i === index);
    });
}

//ไม่ auto play
changeSlide(0);
