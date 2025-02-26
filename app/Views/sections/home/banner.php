<style>
    .carousel-item {
        min-width: 100%;
        box-sizing: border-box;
    }
</style>
<div class="relative w-full overflow-hidden">
    <div class="carousel flex transition-transform duration-500 ease-in-out">

        <?php foreach ($carrouselItems as $index => $item): ?>
            <?php
            $file = $item->img;
            $pathInfo = pathinfo($file);
            $filename = $pathInfo['filename'];
            $extension = $pathInfo['extension'];
            $webp = $filename . '.webp';
            $original = $filename . '.' . $extension;
            ?>
            <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                <img
                    src="https://massivehome.com.mx/images/carouselbanner/<?= $webp ?>"
                    onerror="this.onerror=null; this.src='https://massivehome.com.mx/images/carouselbanner/<?= $original ?>';"
                    class="d-block w-100"
                    alt="<?= $item->img ?>">
            </div>
        <?php endforeach; ?>


    </div>
    <button class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-gray-800/50 text-white p-2" onclick="prevSlide()" aria-label="Previous slide">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 16.811c0 .864-.933 1.406-1.683.977l-7.108-4.061a1.125 1.125 0 0 1 0-1.954l7.108-4.061A1.125 1.125 0 0 1 21 8.689v8.122ZM11.25 16.811c0 .864-.933 1.406-1.683.977l-7.108-4.061a1.125 1.125 0 0 1 0-1.954l7.108-4.061a1.125 1.125 0 0 1 1.683.977v8.122Z" />
        </svg>
    </button>
    <button class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-gray-800/50 text-white p-2" onclick="nextSlide()" aria-label="Next slide">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8.689c0-.864.933-1.406 1.683-.977l7.108 4.061a1.125 1.125 0 0 1 0 1.954l-7.108 4.061A1.125 1.125 0 0 1 3 16.811V8.69ZM12.75 8.689c0-.864.933-1.406 1.683-.977l7.108 4.061a1.125 1.125 0 0 1 0 1.954l-7.108 4.061a1.125 1.125 0 0 1-1.683-.977V8.69Z" />
        </svg>

    </button>
</div>

<script>
    let currentIndex = 0;

    function showSlide(index) {
        const slides = document.querySelectorAll('.carousel-item');
        const carousel = document.querySelector('.carousel');
        if (index >= slides.length) {
            currentIndex = 0;
        } else if (index < 0) {
            currentIndex = slides.length - 1;
        } else {
            currentIndex = index;
        }
        carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
    }

    function nextSlide() {
        showSlide(currentIndex + 1);
    }

    function prevSlide() {
        showSlide(currentIndex - 1);
    }

    document.addEventListener('DOMContentLoaded', () => {
        showSlide(currentIndex);
    });
    setInterval(() => {
        nextSlide();
    }, 3000); // Change slide every 3 seconds
</script>