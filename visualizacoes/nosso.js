

document.addEventListener('DOMContentLoaded', function(){
    document.querySelector("#upload").addEventListener("change", function(imagem){
        const arquivo = imagem.target.files.item(0);
        const endereco = new FileReader();
        endereco.onloadend = function() {
            document.querySelector("#img").setAttribute("src", endereco.result);
        }
        endereco.readAsDataURL(arquivo);
    });
});


const links = document.querySelectorAll('.excluir');
// for( let i = 0; i < links.length; i++ ){
for(let link of links){
    link.addEventListener("click", function(event){
        event.preventDefault();
        let resposta = confirm("Deseja realmente excluir?");
        if(resposta) location.href = link.getAttribute('href');
    });
}




