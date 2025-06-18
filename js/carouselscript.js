$(document).ready(function() {
    // Fonction pour faire tourner le carousel verticalement
    function rotate() {
        var lastChild = $('.slider div:last-child').clone();
        $('.slider div').removeClass('firstSlide');
        $('.slider div:last-child').remove();
        $('.slider').prepend(lastChild);
        $(lastChild).addClass('firstSlide');
    }

    // Rotation automatique toutes les 4 secondes
    let interval = setInterval(rotate, 4000);

    // Ajout des contrôles de navigation
    $('.container').append(`
        <div class="carousel-controls">
            <button class="prev-btn">↑</button>
            <button class="next-btn">↓</button>
        </div>
    `);

    // Gestion des boutons de navigation
    $('.prev-btn').click(function() {
        clearInterval(interval);
        rotate();
        interval = setInterval(rotate, 4000);
    });

    $('.next-btn').click(function() {
        clearInterval(interval);
        var firstChild = $('.slider div:first-child').clone();
        $('.slider div:first-child').remove();
        $('.slider').append(firstChild);
        interval = setInterval(rotate, 4000);
    });

    // Pause au survol
    $('.container').hover(
        function() { clearInterval(interval); },
        function() { interval = setInterval(rotate, 4000); }
    );
}); 
