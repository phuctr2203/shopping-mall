/* Problem 3 */
// Opening the modal
let modalOpener = document.querySelectorAll(".teams");
// When the user click on each modal box, each member's information will be display
modalOpener.forEach((open) => {
    open.onclick = () => {
        let modal = open.getAttribute("data-modal");

        document.getElementById(modal).style.display = "block";
    };
});

// Closing the modal
let closeModal = document.querySelectorAll(".close-icon")
// Clicking the close icon will close the modal box immediately
closeModal.forEach((close) => {
    close.onclick = () => {
        close.closest(".modal-wrap").style.display = ("none");
    };
});

// Closing the modal if clicking on the area outside the modal
window.onclick = (event) => {
    if (event.target.className === "modal-wrap") {
        event.target.style.display = "none";
    };
};