const slider = document.querySelector('.slider');
const experienceValue = document.getElementById('experienceValue');

// Update the displayed value when the slider value changes
slider.addEventListener('input', function() {
    experienceValue.textContent = this.value + " years";
});
