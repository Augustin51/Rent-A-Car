document.addEventListener('DOMContentLoaded', function () {
    const thumbnails = document.querySelectorAll('img[data-image-src]');

    thumbnails.forEach(thumb => {
        thumb.addEventListener('click', function () {
            const group = thumb.getAttribute('data-group');
            const mainImage = document.querySelector(`img[data-main-image][data-group="${group}"]`);

            if (mainImage) {
                const newSrc = thumb.getAttribute('data-image-src');
                mainImage.setAttribute('src', newSrc);
            }
        });
    });
});
