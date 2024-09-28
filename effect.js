window.onload = function() {
    // get all containers
    const containers = document.querySelectorAll('.qoute-container, .cert-container, .container, .accordion');

    // iterate over each container and apply the effect
    containers.forEach(container => {
        setTimeout(() => {
            container.style.opacity = "1";
        }, 100);
    });
};
