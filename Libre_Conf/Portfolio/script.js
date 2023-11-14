document.getElementById('toggleTheme').addEventListener('click', function() {
    document.body.classList.toggle('dark-mode');
    let themeIcon = document.getElementById('themeIcon');
    if (document.body.classList.contains('dark-mode')) {
        themeIcon.src = 'img/sol.png';
        themeIcon.alt = 'Modo Claro';
    } else {
        themeIcon.src = 'img/luna.png';
        themeIcon.alt = 'Modo Oscuro';
    }
});
