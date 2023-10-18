
document.addEventListener("DOMContentLoaded", function() {
    console.log("loaded file!!!!")
    fetch("../content/components/header.html")
        .then(response => response.text())
        .then(data => {
            document.getElementById("header").innerHTML = data;
            const links = document.querySelectorAll('a[data-target]');
            for (let i = 0; i < links.length; i++) {
                const link = links[i];
                const targetId = link.getAttribute('data-target');
                const target = document.getElementById(targetId);
                const button = document.querySelector('.navbar-toggler');
                const defaultIcon = button.querySelector('.navbar-toggler-default');
                const toggledIcon = button.querySelector('.navbar-toggler-toggled');
                if (window.innerWidth <= 768) {
                    link.addEventListener('click', function (event) {
                        event.preventDefault();
                        if (window.getComputedStyle(target).display === 'none') {
                            target.style.display = 'block';
                        } else {
                            target.style.display = 'none';
                        }
                    });

                    defaultIcon.addEventListener('click', function () {
                        defaultIcon.style.display = 'none';
                        toggledIcon.style.display = 'block';
                    });
                    toggledIcon.addEventListener('click', function () {
                        toggledIcon.style.display = 'none';
                        defaultIcon.style.display = 'block';
                    });

                } else {
                    link.addEventListener('mouseover', function () {
                        target.style.display = 'block';
                    });
                    target.addEventListener('mouseover', function () {
                        target.style.display = 'block';

                    });
                    link.addEventListener('mouseout', function () {
                        target.style.display = 'none';
                    });
                    target.addEventListener('mouseout', function () {
                        target.style.display = 'none';
                    });
                }

            }

        })
        .catch(error => console.error(error));

    fetch("../forms/content/components/footer.html")
        .then(response => response.text())
        .then(data => {
            document.getElementById("footer").innerHTML = data;
        })
        .catch(error => console.error(error));
});