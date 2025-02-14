
document.addEventListener("DOMContentLoaded", () => {
    const balloon = document.querySelector(".balloon");
    const skyContainer = document.querySelector(".sky-container");

    function updateBalloonPosition() {
        const containerRect = skyContainer.getBoundingClientRect();
        const windowHeight = window.innerHeight;

        if (containerRect.top <= windowHeight && containerRect.bottom >= 0) {
            // Progression plus rapide en réduisant la hauteur totale considérée
            const sectionProgress = (windowHeight - containerRect.top) / (windowHeight + containerRect.height * 0.5);
            const progress = Math.min(Math.max(sectionProgress, 0), 1);

            const x = progress * 150 + 160;
            balloon.style.transform = `translateX(${x}%)`;
        }
    }

    balloon.style.transform = 'translateX(10%)';

    updateBalloonPosition();
    window.addEventListener("scroll", updateBalloonPosition);
});