document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('welcome-modal');
    const closeButton = document.getElementById('close-welcome');
  
    modal.style.display = 'block';
  
    closeButton.addEventListener('click', function () {
      modal.style.display = 'none';
    });
  });