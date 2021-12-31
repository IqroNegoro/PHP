const table = document.querySelector(".container table tbody")
let ids = 0;


function fetching() {
    return fetch("fetching.php").then(resp => resp.json()).then(resp => resp.data).catch(err => err)
}

async function fetchs(idData) {
    try {
        let data = await fetching();
        if (data.length > ids) {
            data.forEach(data => {
                idData++
                table.innerHTML += `
                <tr> 
                <td> ${data.id} </td>
                <td> ${data.nama} </td>
                <td> ${data.tanggal} </td>
                </tr>
                `
            })
            ids++
        }
        console.log(data)
    } catch(err) {

    }
}

fetchs(ids);
console.log(ids)