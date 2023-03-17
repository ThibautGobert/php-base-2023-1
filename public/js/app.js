/**
 * Editeur wysiwyg (What You See Is What You Get) pour manipuler/afficher du code dans une page web
 * https://ace.c9.io/
 */
document.querySelectorAll('.editor').forEach(el=> {
    ace.edit(el,{
        mode: {path:"ace/mode/php", inline:true},
        theme: 'ace/theme/tomorrow_night',
        selectionStyle: "text",
        maxLines: Infinity,
        //readOnly: true
    });
})

/*
let selectedText = "";

document.addEventListener("mouseup", ()=> {
    // On vérifie que le texte sélectionné n'est pas vide
    if (window.getSelection().toString() !== "") {
        selectedText = window.getSelection().toString();
        let prompt = document.querySelector('.chatgpt-container .prompt')
        let container = document.querySelector('.chatgpt-container')
        container.classList.add('active')
        prompt.value = selectedText
    }
});

 */
