 window.onload = function() {
    setTimeout(function() {
        document.getElementById('headline').classList.remove('hidden');
        document.getElementById('headline').classList.add('visible');
        document.getElementById('paragraph').classList.remove('hidden');
        document.getElementById('paragraph').classList.add('visible');
    }, 2500);
}

    function changeImage(src) {
    document.getElementById('selectedImage').src = src;
}

    function changeImage(imageSrc) {
    const carouselItems = document.querySelectorAll('.carousel-item');
    carouselItems.forEach((item, index) => {
    if (item.querySelector('img').src.includes(imageSrc)) {
    $('#imageCarousel').carousel(index);
}
});
}

    $(document).ready(function() {
    function countUp(element, target) {
        let current = 1;
        let interval = setInterval(function() {
            $(element).text(current);
            if (current >= target) {
                clearInterval(interval);
            }
            current++;
        }, 90);
    }

    countUp('#activity-count', 20);
    countUp('#room-count', 250);
    countUp('#happy-customer-count', 1000000);
});

    function showImage(type) {
    let images = [];
    if (type === 'room') {
    images = [
    '{{ asset("assets/img/room1.png") }}',
    '{{ asset("assets/img/room2.png") }}',
    '{{ asset("assets/img/room3.png") }}'
    ];
} else if (type === 'spa') {
    images = [
    '{{ asset("assets/img/spa/1.png") }}',
    '{{ asset("assets/img/spa/2.png") }}',
    '{{ asset("assets/img/spa/3.png") }}'
    ];
} else if (type === 'pool') {
    images = [
    '{{ asset("assets/img/pool/1.png") }}',
    '{{ asset("assets/img/pool/2.png") }}',
    '{{ asset("assets/img/pool/3.png") }}'
    ];
} else if (type === 'restaurant') {
    images = [
    '{{ asset("assets/img/restaurant/1.png") }}',
    '{{ asset("assets/img/restaurant/2.png") }}',
    '{{ asset("assets/img/restaurant/3.png") }}'
    ];
}

    const carouselInner = document.getElementById('carouselImages');
    carouselInner.innerHTML = '';

    images.forEach((imgSrc, index) => {
    const carouselItem = document.createElement('div');
    carouselItem.classList.add('carousel-item');
    if (index === 0) carouselItem.classList.add('active');

    const img = document.createElement('img');
    img.src = imgSrc;
    img.classList.add('d-block', 'w-100');
    img.alt = type + ' image ' + (index + 1);

    carouselItem.appendChild(img);
    carouselInner.appendChild(carouselItem);
});
}

    function showCategory(category) {
    let allItems = document.querySelectorAll('.gallery-item');
    allItems.forEach(item => item.style.display = 'none');

    if (category === 'all') {
    allItems.forEach(item => item.style.display = 'block');
} else {
    let categoryItems = document.querySelectorAll('.' + category);
    categoryItems.forEach(item => item.style.display = 'block');
}
}

    document.addEventListener('DOMContentLoaded', function() {
    showCategory('all');
});

    function closeCard() {
    var card = document.getElementById('reservationCard');
    card.style.display = 'none';
}
