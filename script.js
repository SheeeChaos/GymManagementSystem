document.getElementById('openModalBtn').addEventListener('click', function() {
    document.getElementById('quantityModal').style.display = 'block';
  });
  
  document.querySelector('.close').addEventListener('click', function() {
    document.getElementById('quantityModal').style.display = 'none';
  });
  
  window.addEventListener('click', function(event) {
    if (event.target == document.getElementById('quantityModal')) {
      document.getElementById('quantityModal').style.display = 'none';
    }
  });
  