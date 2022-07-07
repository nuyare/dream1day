const charactersAnimations = []; 
const characterSelectionList = document.querySelector('#characterSelectionList');
characterSelectionList.addEventListener('click', changeCharacter);

function fillImages(){
    charactersAnimations.push("https://live2d-dcg.github.io/viewerK.html?mN=c486_10&size=1150&mS=1.5&mX=0&mY=0.3");
    charactersAnimations.push("https://live2d-dcg.github.io/viewerK.html?mN=c525_02&size=1150&mS=1.5&mX=0&mY=0.5");
}

fillImages();

function changeCharacter(){
    const character = document.querySelector('#ca');
    character.src = characterSelectionList.options[characterSelectionList.selectedIndex].value;
}

if (charactersAnimations != null) {
    let index = 0;
    charactersAnimations.forEach(character => 
        {   
            const animation = document.createElement('option');
            animation.id = "character" + index;
            animation.innerHTML = character;
            characterSelectionList.appendChild(animation);
            index++;
        });
}
