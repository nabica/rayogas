const formPqrs = document.getElementById("pqrs__form");

formPqrs.addEventListener("submit", async (e) => {
    console.log("entro");
    e.preventDefault();
    const formData = new FormData(formPqrs);
    const response = await axios.post("/pqrs", formData);
    console.log(response.status);
    if (response.status === 200) {
        return (window.location.href = "/pqrs/gracias");
    }
});
