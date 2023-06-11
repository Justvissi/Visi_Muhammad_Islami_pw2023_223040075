const keyword = document.getElementById('keyword');
const searchContainer = document.getElementById('search-table');

keyword.addEventListener('keyup', function() {
    var ajax = new XMLHttpRequest();

    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4 && ajax.status == 200) {
            searchContainer.innerHTML = ajax.responseText;
        }
    }
    ajax.open('GET', '../ajax/search.php?keyword=' + keyword.value, true);
    ajax.send();
});



// keyword.onkeyup = function() {
//     fetch('ajax/search.php?keyword=' + keyword.value)
//         .then((response) => response.text())
//         .then((text) => (searchContainer.innerHTML = text));
// }       .then((text) => (searchContainer.innerHTML = text));
// }