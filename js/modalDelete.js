document.querySelector('#delete-producto').addEventListener('click', (e) => {
    e.preventDefault();
    const response = confirm("¿Esta seguro de eliminar este producto?");
    if (response) {
        const parameterName = getParameterByName('id_producto');
        console.log(parameterName);
    }
});

/**
 * @param String name
 * @return String
 */
function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}