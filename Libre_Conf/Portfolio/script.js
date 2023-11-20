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


document.addEventListener("DOMContentLoaded", function() {
  let observerOptions = {
    threshold: 0.5 
  };

  let observer = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        let progressBar = entry.target;
        let targetWidth;
        switch(progressBar.id) {
            case 'progress-bar-1':
                targetWidth = '75%';
                break;
            case 'progress-bar-2':
                targetWidth = '80%';
                break;
            case 'progress-bar-3':
                targetWidth = '74%'; 
                break;
            case 'progress-bar-4':
                targetWidth = '72%'; 
                break;
        }
        progressBar.style.width = targetWidth;
        observer.unobserve(progressBar); 
      }
    });
  }, observerOptions);

  observer.observe(document.getElementById('progress-bar-1'));
  observer.observe(document.getElementById('progress-bar-2'));
  observer.observe(document.getElementById('progress-bar-3'));
  observer.observe(document.getElementById('progress-bar-4'));
});

  

