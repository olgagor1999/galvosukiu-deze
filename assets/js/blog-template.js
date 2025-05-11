document.addEventListener('DOMContentLoaded', () => {
    const images = document.querySelectorAll('.post-image');
    images.forEach(img => {
      img.loading = 'lazy';
    });
  });
