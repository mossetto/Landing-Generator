var links = document.querySelectorAll('.wp-block-page-list li');
for (var i = 0; i < links.length; i++) {
  var text = links[i].querySelector('a').innerText;
  if (text !== 'Shop' && text !== 'My account' && text !== 'Checkout' && text !== 'Cart' && text !== 'Inicio') {
    links[i].remove();
  }
}
