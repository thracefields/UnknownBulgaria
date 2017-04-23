let ourmap = document.getElementById('ourmap');

ourmap.addEventListener('click', (e) => {
    console.log(`x: ${e.clientX}, y: ${e.clientY}`);
});