const toggleButton1 = document.getElementById('toggleButton1');
const toggleButton2 = document.getElementById('toggleButton2');
const display1 = document.getElementById('display1');
const display2 = document.getElementById('display2');


toggleButton1.addEventListener('click', () => {
    if (display1.style.display === 'block' || display1.style.display === '') {
        display1.style.display = 'none';
        display2.style.display = 'block';
    } else {
        display1.style.display = 'block';
        display2.style.display = 'none';
    }
})

toggleButton2.addEventListener('click', () => {
    if (display1.style.display === 'block' || display1.style.display === '') {
        display1.style.display = 'none';
        display2.style.display = 'block';
    } else {
        display1.style.display = 'block';
        display2.style.display = 'none';
    }
});
