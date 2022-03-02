let addCitation = document.querySelector('#addACitation');
let inputText = document.querySelector('#modalText');
let container = document.querySelector('#container');


function loadContent() {
    let values = [];
    let keys = Object.keys(sessionStorage);
    let i = keys.length;
    while (i--) {
        values.push(sessionStorage.getItem(keys[i]));
    }
    keys.reverse()

    for (i = 0; i < keys.length; i++) {
        createCard(values[i])
    }
}
loadContent()

function createCard(value) {
    let card = document.createElement('div');
    let title = document.createElement('h4');
    let para = document.createElement('p');
    let btn = document.createElement('input');
    container.appendChild(card);
    card.setAttribute('class', 'card col-4 col');
    card.appendChild(title);
    card.appendChild(para);
    card.appendChild(btn);
    title.setAttribute('class', 'title');
    title.textContent = 'Citation';
    para.textContent = value;
    btn.setAttribute('type', 'button');
    btn.setAttribute('class', 'del');
    btn.setAttribute('value', 'supprimer');
    btn.addEventListener('click', function(){
        card.remove();
    });
}

addCitation.addEventListener('click', function(){
    sessionStorage.setItem(inputText.value, inputText.value);
    createCard(inputText.value);
});


let delButton = document.querySelector('.del');

delButton.addEventListener('click', function() {
    delButton.remove();
});
