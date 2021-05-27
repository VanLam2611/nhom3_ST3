const drop = document.querySelector('#drop');
const item = document.querySelectorAll('#item');

item.forEach(e => {
    e.addEventListener('click',() => {
        drop.textContent = e.textContent;
        alert("sadsa");
    })
})