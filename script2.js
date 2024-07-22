document.addEventListener('DOMContentLoaded', function() {
    const flashingText = document.getElementById('flashing-text');
    
    function toggleFlashing() {
        if (flashingText.classList.contains('flashing')) {
            flashingText.classList.remove('flashing');
        } else {
            flashingText.classList.add('flashing');
        }
    }
    

    setInterval(toggleFlashing, 1000);
});
