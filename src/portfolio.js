// GITHUB BUTTON
let github_button = document.getElementById("github_button");

github_button.addEventListener("click", () => {
	window.open("https://github.com/sphyxi4");
});
// END GITHUB BUTTON

// GALLERY CLICK FUNCTIOn
const panels = document.querySelectorAll('.panel')

panels.forEach(panel => {
    panel.addEventListener('click', () => {
        removeActiveClasses()
        panel.classList.add('active')
    })
})

function removeActiveClasses() {
    panels.forEach(panel => {
        panel.classList.remove('active')
    })
}
