const formPqrs = document.getElementById("pqrs__form");

if (formPqrs) {
    formPqrs.addEventListener("submit", async (e) => {
        e.preventDefault();
        const formData = new FormData(formPqrs);
        const response = await axios.post("/pqrs", formData);
        if (response.status === 200) {
            return (window.location.href = "/pqrs/gracias");
        }
    });
}
