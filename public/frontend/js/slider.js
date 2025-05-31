document.addEventListener('DOMContentLoaded', function() {
  const partners = [
    'partner1.png', 'partner2.png', 'partner3.png', 
    'partner4.png', 'partner5.png', 'partner6.png',
    'partner7.png', 'partner8.png'
  ];
  
  const track = document.querySelector('.slider-track');
  const nextBtn = document.querySelector('.next-btn');
  const prevBtn = document.querySelector('.prev-btn');
  
  // Create partner logos
  partners.forEach(partner => {
    const img = document.createElement('img');
    img.src = `img/partners/${partner}`;
    img.alt = 'Partner Logo';
    track.appendChild(img.cloneNode(true));
  });
  
  // Clone first few items to create infinite loop effect
  partners.slice(0, 4).forEach(partner => {
    const img = document.createElement('img');
    img.src = `img/partners/${partner}`;
    img.alt = 'Partner Logo';
    track.appendChild(img.cloneNode(true));
  });
  
  let currentIndex = 0;
  const itemWidth = 160; // width + margin of each logo
  
  function moveToIndex(index) {
    track.style.transform = `translateX(-${index * itemWidth}px)`;
  }
  
  nextBtn.addEventListener('click', () => {
    currentIndex++;
    if (currentIndex > partners.length) {
      currentIndex = 0;
      track.style.transition = 'none';
      moveToIndex(currentIndex);
      // Force reflow
      track.offsetHeight;
      track.style.transition = 'transform 0.5s ease';
    }
    moveToIndex(currentIndex);
  });
  
  prevBtn.addEventListener('click', () => {
    currentIndex--;
    if (currentIndex < 0) {
      currentIndex = partners.length;
      track.style.transition = 'none';
      moveToIndex(currentIndex);
      // Force reflow
      track.offsetHeight;
      track.style.transition = 'transform 0.5s ease';
    }
    moveToIndex(currentIndex);
  });
  
  // Auto-slide
  setInterval(() => {
    nextBtn.click();
  }, 3000);
});