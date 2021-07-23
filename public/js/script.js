document.querySelectorAll('.task').forEach(task => {
    task.addEventListener('change', () => {
        let data = {id: task.value, completed: task.checked}
        fetch ('/complete-task', {
            method: 'POST',
            body: JSON.stringify(data),
            headers: {
                'Content-Type': 'application/json'
            }
        })
    })
})


