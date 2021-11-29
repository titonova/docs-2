document.addEventListener('DOMContentLoad', () => {
    const browserDark = window.matchMedia('(prefers-color-scheme: dark)').matches
    const preferDark = JSON.parse(window.localStorage.getItem('dark'))

    if ((preferDark !== null && browserDark) || preferDark) {
        document.body.classList.add('dark')
    }
})
