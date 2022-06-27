const closeIcon = document.querySelector('#close')
const postForm = document.querySelector('#postForm')
const formCandidature = document.querySelector('#formCandidature')

// ----------------- Events ---------------------------
closeIcon.addEventListener('click', () =>{
    postForm.classList.toggle('d-none')
    postForm.classList.toggle('d-flex')
})



//-------- Functions ------------------
const postuler = (id) => {
    formCandidature.elements['idPost'].value = id
    postForm.classList.toggle('d-none')
    postForm.classList.toggle('d-flex')
    postForm.style.backdropFilter = 'blur(2px)'
}