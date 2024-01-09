document.getElementById('btn-git').addEventListener('click', function() {
    document.getElementById('git-section').classList.toggle('hidden');
});

document.getElementById('btn-docker').addEventListener('click', function() {
    document.getElementById('docker-section').classList.toggle('hidden');
});

document.getElementById('btn-git').addEventListener('click', function() {
    document.body.style.backgroundColor = 'rgb(255, 81, 0)';
});

document.getElementById('btn-docker').addEventListener('click', function() {
    document.body.style.backgroundColor = '#0da9fd';
});

