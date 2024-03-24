document.addEventListener("DOMContentLoaded", function () {
    var informationSidebar = document.querySelector(".information");
    var listOfInformation = document.querySelector(".list-information");
    var dropdownIcon = document.querySelector(".information-dropdown");

    var opacityZero = false;

    informationSidebar.addEventListener("click", function () {
        if (!opacityZero) {
            listOfInformation.style.position = "relative";
            listOfInformation.style.opacity = "1";
            listOfInformation.style.top = "0";
            dropdownIcon.style.transform = "rotate(180deg)";
            opacityZero = true;
        } else {
            listOfInformation.style.position = "absolute";
            listOfInformation.style.opacity = "0";
            listOfInformation.style.top = "-50px";
            dropdownIcon.style.transform = "";
            opacityZero = false;
        }
    });
});
