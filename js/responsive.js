

        function myFunction() {
            var x = document.getElementById("navMenu");
            if (x.className === "mainMenu") {
                x.className += " responsive";
            } else {
                x.className = "mainMenu";
            }
        }