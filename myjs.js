var tomb = document.querySelectorAll(".movie_card");
  var arrow1 = document.getElementById('down');
  var arrow2 = document.getElementById('up');

  arrow1.addEventListener('click', function() {
    tomb.forEach(function(card) {
      // Get the current translateY value and convert it to an integer
      var currentTranslateY = parseInt((card.style.transform.match(/-?\d+/g) || [0])[0]);
      // Increment the translateY value by 500 pixels
      var newTranslateY = currentTranslateY + 510;
      // Apply the new translateY value using transform
      card.style.transform = 'translateY(' + newTranslateY + 'px)';
    });
  });

  arrow2.addEventListener('click', function() {
    tomb.forEach(function(card) {
      // Get the current translateY value and convert it to an integer
      var currentTranslateY = parseInt((card.style.transform.match(/-?\d+/g) || [0])[0]);
      // Decrement the translateY value by 500 pixels
      var newTranslateY = currentTranslateY - 510;
      // Apply the new translateY value using transform
      card.style.transform = 'translateY(' + newTranslateY + 'px)';
    });
  });


  
  var t = document.getElementById('container');
  var a1 = document.getElementById('c1');
  var a2 = document.getElementById('c2');
  var animationTimeout;
  
  // Map keyframe percentages to their corresponding translateX values
  const positions = [
    { percent: 0, translateX: 0 },
    { percent: 15, translateX: -80 },
    { percent: 25, translateX: -173 },
    { percent: 35, translateX: -263 },
    { percent: 45, translateX: -350 },
    { percent: 55, translateX: -445 },
    { percent: 65, translateX: -540 },
    { percent: 75, translateX: -630 },
    { percent: 85, translateX: -720 },
    { percent: 95, translateX: -810 },

  ];

  // Disable the animation on manual control
  function disableAnimation() {
    t.style.animation = 'none';
    if (animationTimeout) {
      clearTimeout(animationTimeout);
    }
  }

  // Enable the animation
  function enableAnimation() {
    t.style.animation = 'slide 25s linear infinite';
  }

  function getCurrentPosition() {
    var currentTranslateX = parseFloat((t.style.transform.match(/-?\d+(\.\d+)?/g) || [0])[0]);
    return positions.reduce((closest, pos) => {
      return Math.abs(pos.translateX - currentTranslateX) < Math.abs(closest.translateX - currentTranslateX) ? pos : closest;
    }, positions[0]);
  }

  function handleClick(direction) {
    disableAnimation();
    var currentPosition = getCurrentPosition();
    var currentIndex = positions.indexOf(currentPosition);
    var newIndex = (currentIndex + direction + positions.length) % positions.length;
    var newTranslateX = positions[newIndex].translateX;
    t.style.transform = 'translateX(' + newTranslateX + '%)';
    // Enable the animation after 7 seconds
    animationTimeout = setTimeout(enableAnimation, 7000);
  }

  a1.addEventListener('click', function() {
    handleClick(-1); // Move to the previous position (left)
  });

  a2.addEventListener('click', function() {
    handleClick(1); // Move to the next position (right)
  });




  
  // Select all elements with the class 'trailer'
  var youtubeElements = document.getElementsByClassName('trailer');
  var link = document.getElementById('link').innerHTML;

  // Convert the HTMLCollection to an array and add event listener to each element
  Array.prototype.forEach.call(youtubeElements, function(element) {
    element.addEventListener('click', function() {
      window.location.href = link;
    console.log(link);
    });
  });
