function fetching() {
    return fetch("fetching.php").then(resp => resp.json()).then(resp => resp.data).catch(err => err)
}

async function fetchs(fetching) {
    try {
        let data = await fetching();
        postMessage(data)
    } catch(err) {
        postMessage(err)
    }
}

setInterval(() => {
    fetchs()
}, 10000);

fetchs(fetching)