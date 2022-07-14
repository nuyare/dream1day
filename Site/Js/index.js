function chooseAnimation(){
    let animationSelected = animationList.options[animationList.selectedIndex].innerHTML;
    animation.src = 'Image/' + animationSelected;
}

const animation = document.querySelector('#animation');

const animationList = document.querySelector('#characterSelectionList');
animationList.addEventListener('click', chooseAnimation);

chooseAnimation();