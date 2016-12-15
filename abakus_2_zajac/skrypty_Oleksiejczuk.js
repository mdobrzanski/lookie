function addInfoToHead() {
    var textBox1 = document.getElementById('text-box-1');
    var textBox2 = document.getElementById('text-box-2');
    var visitorEl = document.getElementById('visitor');
    visitorEl.innerText = (textBox1.value + ' ' + textBox2.value);
}