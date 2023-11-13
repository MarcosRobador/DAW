document.getElementById('toggleTheme').addEventListener('click', function() {
    document.body.classList.toggle('dark-mode');
    this.textContent = document.body.classList.contains('dark-mode') 
                        ? 'Cambiar a Modo Claro' 
                        : 'Cambiar a Modo Oscuro';
  });