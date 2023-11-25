document.addEventListener('DOMContentLoaded', function () {
  const toggleBtn = document.getElementById('toggleBtn');
  const sidebar = document.getElementById('sidebar');
  const closeBtn = document.getElementById('closeBtn');

  // Defina a largura inicial da barra lateral como 0 ao carregar a página
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

document.getElementById("menuSelect").addEventListener("change", function() {
  var selectedOption = this.options[this.selectedIndex].value;

  console.log("Selected Option: ", selectedOption);

  if (selectedOption) {
      window.location.href = selectedOption;
  }
});
