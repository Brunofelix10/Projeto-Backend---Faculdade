document.addEventListener('DOMContentLoaded', () => {
    function increaseFontSize() {
      const body = document.body;
      const currentSize = window.getComputedStyle(body).fontSize;
      const newSize = parseFloat(currentSize) + 1;
      body.style.fontSize = newSize + 'px';
    }
    function decreaseFontSize() {
      const body = document.body;
      const currentSize = window.getComputedStyle(body).fontSize;
      const newSize = parseFloat(currentSize) - 1;
      body.style.fontSize = newSize + 'px';
    }
  document.getElementById('increaseFontSize').addEventListener('click', increaseFontSize);
  document.getElementById('decreaseFontSize').addEventListener('click', decreaseFontSize);
  });
  