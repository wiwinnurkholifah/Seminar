// Event Handling
// const close = document.querySelector('.close');
// const cardd = document.querySelector('.cardd');

// close.addEventListener('click', function() {
//     cardd.style.display = 'none';
// });


// Event Handling
const close = document.querySelectorAll('.close');
console.log(close);

for( let i = 0; i < close.length; i++ ) {
    close[i].addEventListener('click', function(e) {
            alert('tombol ke-' + i)
        close[i].parentElement.style.display = 'none';
        console.log(e.target);
        e.target.parentElement.style.display = 'none';
    });
}

// close.forEach(function(el) {
//     el.addEventListener('click', function(e) {
//         e.target.parentElement.style.display = 'none';
//     });
// });

// const nama = document.querySelectorAll('.nama');
// console.log(nama.parentElement.parentElement);
// console.log(nama.parentNode);
// console.log(nama.nextSibling);
// console.log(nama.nextElementSibling);
// console.log(nama.nextElementSibling.nextElementSibling);
// console.log(nama.previousElementSibling);
// console.log(nama.previousElementSibling.previousElementSibling);