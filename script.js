document.addEventListener('DOMContentLoaded', function() {
    const colorblindToggle = document.getElementById('colorblind-toggle');
    const elementsToToggle = document.querySelectorAll('.color-change');
  
    colorblindToggle.addEventListener('click', function() {
      document.body.classList.toggle('colorblind');
    });
  });
  