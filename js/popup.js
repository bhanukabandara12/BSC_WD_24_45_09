
    document.addEventListener("DOMContentLoaded", function () {
      const popup = document.getElementById("imagePopup");
      const closePopup = document.getElementById("closePopup");

      // Show the pop-up when the page loads
      popup.style.display = "flex";

      // Close the pop-up when clicking the close button
      closePopup.addEventListener("click", function () {
        popup.style.display = "none";
      });
    });
