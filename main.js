document.querySelector('input').
  addEventListener('input', e => {
    fetch('/rates.php?dollars='+e.target.value)
    .then(x => x.text)
    .then(x => document.querySelector('h5').textContent = x)
    .catch(() => document.querySelector('h5').textContent = 'ERR');
});