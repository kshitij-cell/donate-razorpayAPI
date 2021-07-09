let scripts = document.getElementsByTagName('script');
let y = document.querySelectorAll('input');
y[2].value = parseInt(scripts[1].getAttribute('data-amount')) / 100;
