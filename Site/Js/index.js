// Liste des personnages 
const characterSelectionList = document.querySelector('#characterSelectionList');
characterSelectionList.addEventListener('click', DisplayCharacter);

// Personnage 
const character = document.querySelector('#character');


function DisplayCharacter(){
    const characterSelected = characterSelectionList.options[characterSelectionList.selectedIndex].id;
    character.src = characterSelected;
}


function GetCharacters(){
    // Requête pour récupérer les images
    // Avec l'autorisation 
    fetch('https://api.github.com/repos/nuyare/dream1day/contents/Site/Image',{
        headers: {
            'Authorization' : 'token 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'
        }
    })
    // Recevoir que le contenu JSON 
    .then(response => {
        return response.json();
    })
    // Récupérer que le contenu JSON 
    .then(json => {
        const characters = json;
        if (characterSelectionList != null) {
            characters.forEach(character => 
                {   
                    // Option 
                    const characterOption = document.createElement('option');
                    characterOption.id = character.download_url;
                    characterOption.innerHTML = character.name;

                    // On ajoute l'option à la liste
                    characterSelectionList.appendChild(characterOption);

                });
        }
    });

}


GetCharacters();
