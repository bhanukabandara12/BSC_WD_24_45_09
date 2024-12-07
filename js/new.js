/*client say*/
document.addEventListener('DOMContentLoaded', function() {
    var dots = document.querySelectorAll('.dot');
    dots.forEach(function(dot, index) {
        dot.addEventListener('click', function() {
            dots.forEach(d => d.classList.remove('active'));
            dot.classList.add('active');
        });
    });
});
