const sections = document.querySelectorAll('section');
let currentSectionIndex = 0;

/**
 * Scroll to section
 * @param int index 
 */
function scrollToSection(index) {
    if (index >= 0 && index < sections.length) {
        sections[index].scrollIntoView({ behavior: 'smooth' });
        currentSectionIndex = index;
    }
}

// Function to handle mouse wheel events
function handleMouseWheel(event) {
    if (event.deltaY > 0) {
        // Scrolling down, go to the next section
        scrollToSection(currentSectionIndex + 1);
    } else if (event.deltaY < 0) {
        // Scrolling up, go to the previous section
        scrollToSection(currentSectionIndex - 1);
    }
}

// Add an event listener for the mouse wheel
window.addEventListener('wheel', handleMouseWheel);