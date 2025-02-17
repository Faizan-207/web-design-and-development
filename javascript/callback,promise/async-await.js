function fetchData() {
    return new Promise((resolve) => {
        setTimeout(() => {
            resolve("Data fetched!");
        }, 2000);
    });
}

async function processData() {
    console.log("Fetching data...");
    let data = await fetchData(); // Waits for the Promise to resolve
    console.log(data);
    console.log("Processing completed!");
}

processData();
