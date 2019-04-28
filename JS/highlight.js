url = window.location.pathname.split('/')[window.location.pathname.split('/').length-1];
document.querySelector('a[href="'+url+'"]').classList.add('selected');
