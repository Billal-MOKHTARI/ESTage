const closeIcon = document.querySelector('#close')
const postForm = document.querySelector('#postForm')
const formCandidature = document.querySelector('#formCandidature')
const mainStudent = document.querySelector('#mainStudent')
const response = document.querySelector('#response')

// ----------------- Events ---------------------------
closeIcon.addEventListener('click', () =>{
    postForm.classList.toggle('d-none')
    postForm.classList.toggle('d-flex')
    mainStudent.classList.toggle('bg-blur')
})



//-------- Functions ------------------
const postuler = (id) => {
    console.log("ok")
    formCandidature.elements['idPost'].value = id
    postForm.classList.toggle('d-none')
    postForm.classList.toggle('d-flex')
    mainStudent.classList.toggle('bg-blur')
}