$("#ai-features").owlCarousel({
  loop: false,
  margin: 20,
  loop: true,
  dots: false,
  autoplay: true,
  slideTransition: "linear",
  autoplayTimeout: 4000,
  autoplaySpeed: 4000,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1.5,
    },
    600: {
      items: 3.5,
    },
    1000: {
      items: 4.5,
    },
  },
});

// Staggered reveal of features on page load
const features = document.querySelectorAll(".feature");

features.forEach((item, index) => {
  setTimeout(() => {
    item.classList.add("show");
  }, 600 * (index + 1));
});

const revealLines = document.querySelectorAll(".reveal-line");
let lastScrollTop = 0;

function revealOnScroll() {
  const windowHeight = window.innerHeight;
  const revealPoint = windowHeight * 0.6;
  const currentScrollTop =
    window.pageYOffset || document.documentElement.scrollTop;
  const scrollingDown = currentScrollTop > lastScrollTop;

  revealLines.forEach((line, index) => {
    const lineTop = line.getBoundingClientRect().top;
    const lineBottom = line.getBoundingClientRect().bottom;

    if (scrollingDown) {
      // Reveal on scroll down - once revealed, stay revealed
      if (lineTop < revealPoint) {
        line.classList.add("active");
      }
    } else {
      // Fade on scroll up
      if (lineBottom > windowHeight * 0.4) {
        line.classList.remove("active");
      }
    }
  });

  lastScrollTop = currentScrollTop <= 0 ? 0 : currentScrollTop;
}

// Throttle function to improve performance
let ticking = false;

function requestTick() {
  if (!ticking) {
    requestAnimationFrame(() => {
      revealOnScroll();
      ticking = false;
    });
    ticking = true;
  }
}

// Listen to scroll events
window.addEventListener("scroll", requestTick);

// Initial check on page load
revealOnScroll();


//faq's section
document.addEventListener("DOMContentLoaded", function () {
  const labels = document.querySelectorAll(".glass-label");
  const items = document.querySelectorAll(".accordion-item");

  // Category → ID prefix mapping
  const categoryMap = {
    General: [
      "flush-headingOne",
      "flush-headingTwo",
      "flush-headingThree",
      "flush-headingFour",
      "flush-headingFive",
      "flush-heading6",
      "flush-heading7",
      "flush-heading8",
      "flush-headingNine",
      "flush-headingTen",
      "flush-heading11",
    ],
    Predict: ["flush-headingP"],
    Sense: ["flush-headingS"],
    Select: ["flush-headingC"],
    Promise: ["flush-headingE"],
  };

  // Hide all accordion items
  function hideAll() {
    items.forEach((item) => {
      item.style.display = "none";

      // Close opened accordion
      const collapse = item.querySelector(".accordion-collapse");
      collapse.classList.remove("show");
    });
  }

  // Show by category
  function showCategory(category) {
    hideAll();

    items.forEach((item) => {
      const header = item.querySelector(".accordion-header");
      if (!header) return;

      const headerId = header.id;

      // General has exact IDs, others are prefix-based
      if (category === "General" && categoryMap.General.includes(headerId)) {
        item.style.display = "block";
      } else if (
        category !== "General" &&
        categoryMap[category].some((prefix) => headerId.startsWith(prefix))
      ) {
        item.style.display = "block";
      }
    });
  }

  // Label click handler
  labels.forEach((label) => {
    label.addEventListener("click", function () {
      labels.forEach((l) => l.classList.remove("active"));
      this.classList.add("active");

      const category = this.textContent.trim();
      showCategory(category);
    });
  });

  // Default load → General
  showCategory("General");
});

//types of ayumi products

document.addEventListener("DOMContentLoaded", function () {
  const content = document.getElementById("content");
  const imageContainer = document.getElementById("imageContainer");
  const sections = content.querySelectorAll(".content-section");

  const SLIDE_WIDTH = 500; // must match your CSS/image width

  function updateImage() {
    let activeIndex = 0;
    const contentRect = content.getBoundingClientRect();

    sections.forEach((section, index) => {
      const rect = section.getBoundingClientRect();

      // Check if section is mostly visible inside content
      if (
        rect.top <= contentRect.top + content.clientHeight / 2 &&
        rect.bottom >= contentRect.top + content.clientHeight / 2
      ) {
        activeIndex = index;
      }
    });

    // Move image container
    imageContainer.style.transform = `translateX(-${
      activeIndex * SLIDE_WIDTH
    }px)`;
  }

  content.addEventListener("scroll", updateImage);
  updateImage();
});

