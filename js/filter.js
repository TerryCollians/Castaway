const list = document.querySelector('.episodes__filter')
        items = document.querySelectorAll('.episodes__item')
        listItems = document.querySelectorAll('.episodes__filter-btn')

function filter() {
    list.addEventListener('click', event => {
        const targetId = event.target.dataset.id
        const target = event.target

        if(target.classList.contains('episodes__filter-btn')){
            listItems.forEach(listItems => listItems.classList.remove('active'))
            target.classList.add('active')
        }

        switch(targetId){
            case 'all':
                getItems('episodes__item')
                break
            case 'gear':
                getItems(targetId)
                break
            case 'tips':
                getItems(targetId)
                break
        }
            
    } )
}
filter()

function getItems(className) {
    items.forEach(item => {
        if(item.classList.contains(className)){
            item.style.display='block'
        } else {
            item.style.display='none'
        }
    });
}