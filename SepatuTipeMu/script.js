document.getElementById('healthForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const weight = document.getElementById('weight').value;
    const height = document.getElementById('height').value;

    // Kirim data ke PHP menggunakan fetch API
    fetch('process.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `weight=${weight}&height=${height}`
    })
    .then(response => response.json())
    .then(data => {
        // Tampilkan rekomendasi sepatu
        const recommendations = data.recommendations.map(shoe =>
            shoe.image ? `<div><img src="${shoe.image}" alt="${shoe.name}" style="width:100px;height:auto;"><p>${shoe.name}</p></div>` : ''
        ).join('');

        document.getElementById('shoeRecommendations').innerHTML = `<h2>Rekomendasi Sepatu:</h2>${recommendations}`;

        // Jika tidak ada rekomendasi, tampilkan pesan
        if (recommendations.length === 0) {
            document.getElementById('result').innerHTML = "Tidak ada rekomendasi untuk ukuran ini.";
        }
    })
    .catch(error => console.error('Error:', error));
});
