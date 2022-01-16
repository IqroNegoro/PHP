// ambil dom html
const table = document.querySelector(".container table tbody")

if (window.Worker) {
    let w = new Worker("worker.js");

if (!localStorage.getItem("count")) {
    localStorage.setItem("count", "0")
}

function addData(data) {
    let item = "";
    let obj = data;
    obj.forEach(el => item += `
        <tr> 
            <td> ${el.id} </td>
            <td> ${el.nama} </td>
            <td> ${el.tanggal} </td>
        </tr>
    `)
    return item;
}

w.addEventListener("message", e => {
    let data = e.data;
    let length = data.length
    let count = JSON.parse(localStorage.getItem("count"))
    if (count < length || count === length) {
        table.innerHTML = addData(data)
        count = length;
    } else {
        if (length === 0) {
            table.innerHTML = "";
            count = length;
        }
    }
    localStorage.setItem("count", JSON.stringify(count))
    
})
} else {
    alert("Worker Tidak support")
}

const submitting = document.getElementById("submit");
const nama = document.getElementById("nama");
submitting.addEventListener("click", async () => {
    let values = nama.value;
    console.log(values)
    return await fetch("sending.php", {
        method : "POST",
        headers: {
            "Content-type" : "application/json"
        },
        body : JSON.stringify({
            nama : values
        })
    }).then(resp => resp.json()).then(resp => console.log("Success :" + resp))
})
