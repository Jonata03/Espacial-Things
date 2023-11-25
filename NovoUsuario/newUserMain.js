document.addEventListener('DOMContentLoaded', function () {
  const toggleBtn = document.getElementById('toggleBtn');
  const sidebar = document.getElementById('sidebar');
  const closeBtn = document.getElementById('closeBtn');

  sidebar.style.width = '0';

  toggleBtn.addEventListener('click', function () {
    if (sidebar.style.width === '290px') {
      sidebar.style.width = '0';
    } else {
      sidebar.style.width = '290px';
      sidebar.style.zIndex = '290';
    }
  });

  closeBtn.addEventListener('click', function () {
    sidebar.style.width = '0';
  });
});


