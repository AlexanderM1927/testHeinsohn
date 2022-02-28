
jQuery(function () {
    const btnAdd = $('.agregar')

    btnAdd.on('click', addItem)
    

    const addDeleteActions = () => {
        const btnsDelete = $('.borrar')
        btnsDelete.on('click', function () {
            $(this).parent().remove()
        })
    }

    addDeleteActions()

    const newElementInList = (item) => {
        console.log(item)
        const html = `
        <li>${item.name}<button type="button" class="borrar">Borrar</button></li>
        `
        return html
    }

    function addItem (event) {
        console.log('ESTÁ ENTRANDO ACÁ')
        const listadoFrutasDOM = $('#listado_frutas ul')
        listadoFrutasDOM.append(newElementInList({
            name: $('#nombre_fruta').val()
        }))
        $('#nombre_fruta').val('')
        addDeleteActions()
    }
})