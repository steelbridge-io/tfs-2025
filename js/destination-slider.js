 function setScrollableHeight() {
      const col4 = document.getElementById('col4');
      const scrollableContent = document.getElementById('scrollable-content');
      if (col4 && scrollableContent) {
          if (window.innerWidth >= 768) { // Bootstrap's md breakpoint
              const col4Height = col4.offsetHeight;
              scrollableContent.style.height = `${col4Height}px`;
          } else {
              scrollableContent.style.height = 'auto'; // Reset on smaller screens
          }
      }
  }

  // Run on page load and window resize
  window.addEventListener('load', setScrollableHeight);
  window.addEventListener('resize', setScrollableHeight);



  // Select all items and display elements
  const items = document.querySelectorAll('.item');
  const displayImage = document.getElementById('display-image');
  const displayContent = document.getElementById('display-content');

  // Add click event listeners to each item
  items.forEach(item => {
      item.addEventListener('click', () => {
          // Remove active class from all items
          items.forEach(i => i.classList.remove('active'));
          // Add active class to clicked item
          item.classList.add('active');
          // Update left column with data attributes
          displayImage.src = item.getAttribute('data-image');
          //displayContent.textContent = item.getAttribute('data-content');
          displayContent.innerHTML = item.getAttribute('data-content');
      });
  });

  // Set the first item as active by default
  if (items.length > 0) {
      items[0].click();
  }