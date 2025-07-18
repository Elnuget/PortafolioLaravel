<!-- Scripts -->
<script>
function scrollToClasses() {
    document.querySelector('.grid').scrollIntoView({ 
        behavior: 'smooth' 
    });
}
</script>

<!-- Styles -->
<style>
@keyframes fade-in {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-fade-in {
    animation: fade-in 1s ease-out;
}

/* Hover effects */
.group:hover .transition-all {
    transform: translateY(-2px);
}
</style>
