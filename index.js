const navLinks = document.querySelectorAll("nav a");

navLinks.forEach(link=>
    {
        link.addEventListener("click", function()
        {
            navLinks.forEach(link=>
                {
                    link.classList.remove("active-link");
                });

                this.classList.add("active-link");
        });
    });