// Construção de uma função para consultar e JSON com PHP

function loadData(){
    fetch('../private/api/api.php')
    .then(response => response.json())
    .then(data => {
        const dataDiv = document.getElementById('dados-api');
        //Limpa os dados 
        dataDiv.innerHTML = '';
        data.forEach(item => {
            const div = document.createElement('div');

            div.textContent = `id: ${item.id} | Nome: ${item.name}`;
            dataDiv.appendChild(div); 
        })
    })
    .catch(error => console.error('ERRO:', error));
    
}
//setInterval(loadData, 5000);
loadData();