document.addEventListener("DOMContentLoaded", function() {
    const sections = document.querySelectorAll('.section');

    function changeColor() {
      sections.forEach(section => {
        const rect = section.getBoundingClientRect();
        const offsetY = window.innerHeight / 2;

        if (rect.top < offsetY && rect.bottom > offsetY) {
          section.classList.add('active');
        } else {
          section.classList.remove('active');
        }
      });
    }

    changeColor();

    window.addEventListener('scroll', changeColor);
  });
