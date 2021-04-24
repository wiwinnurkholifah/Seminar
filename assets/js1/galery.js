const galery = document.querySelector('.galery');
const jumbo = document.querySelector('.jumbo');
const thumbs = document.querySelectorAll('.thumb');

galery.addEventListener('click', function(e) {
    
    // Mengecek Apakah yang di klik adalah thumb
    if(e.target.className == 'thumb') {
        jumbo.src = e.target.src;
        jumbo.classList.add('fade');
        setTimeout(function() {
            jumbo.classList.remove('fade');
        }, 500);
        
        thumbs.forEach(function(thumb) {
            // Cara Pertama
            if( thumb.classList.contains('active') ){
                thumb.classList.remove('active');
            }

            // Cara Kedua
            // thumb.className = 'thumb';
            
        });

        e.target.classList.add('active');
    }

});