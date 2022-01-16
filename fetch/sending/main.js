const form = document.getElementById("example_form");
form.addEventListener("click", e => {
    e.preventDefault();
    const data = new FormData(form);
    postData(data);
})

async function postData(data) {
    const response = await fetch("handle.php", {
        method : "POST",
        body : data
    }).then(resp => resp.text()).then(resp => console.log(resp));
}