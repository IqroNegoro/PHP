function fetching() {
    return fetch("fetching.php").then(resp => resp.json()).then(resp => resp.data).catch(err => err)
}

async function fetchs() {
    try {
        let data = await fetching();
        postMessage(data)
    } catch(err) {
        postMessage(err)
    }
}

setInterval(() => {
    fetchs()
}, 10);

fetchs();