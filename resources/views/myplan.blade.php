<x-app-layout>
    <!DOCTYPE html>
    <html>
    <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <style>
        .btn{
          background-color: rgba(203, 171, 171, 1);
        }
        .card {
          height: 100%;
        }
    
        .card-text {
          overflow-y: scroll;
          max-height: 150px; /* Ubah tinggi maksimum sesuai kebutuhan */
        }
    
        .card-body {
          display: flex;
          flex-direction: column;
          justify-content: space-between;
        }
    
        .card-footer {
          display: flex;
          justify-content: center;
        }
    
        .card-footer .btn {
          width: 100%;
        }
      </style>
    </head>
    <body>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2>Berita Terkini</h2>
          </div>
        </div>
        <div class="row d-flex" id="cardContainer">
          <!-- Konten kartu akan ditambahkan di sini -->
        </div>
      </div>
     
    
      <script>
        const endpoint = "https://newsapi.org/v2/everything?q=bitcoin&apiKey=8480b1f893d64ff78b3b06a7b8d908a6";
    
        async function hitAPI() {
          try {
            const api = await fetch(endpoint);
            const { articles } = await api.json();
    
            const cardContainer = document.getElementById('cardContainer');
            let counter = 0;
            articles.forEach(article => {
              if (counter < 4) {
                const card = createCard(article);
                cardContainer.appendChild(card);
                counter++;
              }
            });
          } catch (error) {
            console.error('Terjadi kesalahan:', error);
          }
        }
    
        function createCard(article) {
          const card = document.createElement('div');
          card.classList.add('col-md-3', 'mb-4');
    
          const cardContent = 
          
          `
            <div class="card h-100">
              <img src="${article.urlToImage}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">${article.title}</h5>
                <p class="card-text">${article.description}</p>
                <div class="card-footer">
                  <a href="${article.url}" class="btn">Baca selengkapnya</a>
                </div>
              </div>
            </div>
          `;
    
          card.innerHTML = cardContent;
          return card;
        }
    
        hitAPI();
      </script>

      


    </body>
    </html>
</x-app-layout>
