OptionsButton = document.getElementById('publication-option-button');
OptionsButton.addEventListener('click', ClickOptions);

let Options = document.getElementById('publication-options');

function ClickOptions() {
    if(Options.style.display === '') {
        Options.style.display = 'block';
    } 
    else if(Options.style.display === 'none') {
        Options.style.display = 'block';
    } else {
        Options.style.display = 'none';
    }
}