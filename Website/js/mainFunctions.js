const square1 = document.getElementById("square1");
const square2 = document.getElementById("square2");
const square3 = document.getElementById("square3");
const square4 = document.getElementById("square4");



//Page Scrolled Indicator
window.addEventListener("scroll", () =>{
    // console.log("scrolling down")
    //get total possible scrollable height
    const scrollable = document.documentElement.scrollHeight - window.innerHeight;

    //get amount scrolled
    const scrolled = window.scrollY;

    //set default percentage scrolled
    let percentageScrolled = 100;

    if (scrollable > 0){
        //calculate how far a user has scrolled down
        percentageScrolled = Math.ceil(scrolled/scrollable * 100);
    }

    if(percentageScrolled >= 0){
        square1.style.backgroundColor = "#E76631";
        square2.style.backgroundColor = "var(--InactiveSquare)";
        square3.style.backgroundColor = "var(--InactiveSquare)";
        square4.style.backgroundColor = "var(--InactiveSquare)";
    }
    if(percentageScrolled >= 25){
        square1.style.backgroundColor = "var(--InactiveSquare)";
        square2.style.backgroundColor = "#E76631";
        square3.style.backgroundColor = "var(--InactiveSquare)";
        square4.style.backgroundColor = "var(--InactiveSquare)";
    }
    if(percentageScrolled >= 50){
        square1.style.backgroundColor = "var(--InactiveSquare)";
        square2.style.backgroundColor = "var(--InactiveSquare)";
        square3.style.backgroundColor = "#E76631";
        square4.style.backgroundColor = "var(--InactiveSquare)";
    }
    if(percentageScrolled >= 75){
        square1.style.backgroundColor = "var(--InactiveSquare)";
        square2.style.backgroundColor = "var(--InactiveSquare)";
        square3.style.backgroundColor = "var(--InactiveSquare)";
        square4.style.backgroundColor = "#E76631";
    }

    // console.log(scrollable);
    //
    // console.log(scrolled);
    //
    // console.log("percentage: " + percentageScrolled);
});

