function sendString(text) {
    console.log("Sending text: ", text); // Debug log
    fetch('/file-viewer', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'text=' + encodeURIComponent(text)
    })
    .then(response => response.text())
    .then(data => {
        console.log("Response received"); // Debug log
        document.open();
        document.write(data);
        setTimeout(() => {
            document.getElementById("FileDisplay").innerHTML = "<iframe src="+text+" width='100%' height='800px' frameborder='0'></iframe>"
        }, 150);
        document.close();
    })
    .catch(error => console.error('Error:', error));
}