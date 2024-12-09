$(document).ready(function () {
    let autoCloseTimeout;

    /**
     * Opens a modal window with a message and styles it according to the success status.
     *
     * @param {string} message
     * @param {boolean} isSuccess
     * @return {void}
     */
    function openModal(message, isSuccess) {
        const $modal = $("#confirmationModal");
        const $modalMessage = $("#modalMessage");

        $modalMessage.text(message);
        $modalMessage.css({ color : isSuccess ? "green" : "red" });

        $modal.addClass("active");
        setTimeout(() => $modal.find(".modal-content").addClass("active"), 10);

        autoCloseTimeout = setTimeout(() => {
            closeModal();
        }, 5000);
    }

    /**
     * Closes the modal dialog
     *
     * @return {void}
     */
    function closeModal() {
        const $modal = $("#confirmationModal");

        $modal.find(".modal-content").removeClass("active");
        setTimeout(() => $modal.removeClass("active"), 300);

        clearTimeout(autoCloseTimeout);
    }

    $(window).on("click", function (event) {
        const $modal = $("#confirmationModal");
        if (event.target === $modal[0]) {
            closeModal();
        }
    });

    const urlParams = new URLSearchParams(window.location.search);
    const status = urlParams.get("status");

    if (status) {
        const message = status === "success"
            ? "Votre message a été envoyé avec succès."
            : "Une erreur s'est produite lors de l'envoi de votre message.";

        openModal(message, status === "success");

        window.history.replaceState({}, document.title, window.location.pathname);
    }
});
