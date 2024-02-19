const activePage = window.location.pathname;
const navlinks = document.querySelectorAll('nav a').forEach(link =>{
    // console.log(link.href);
    if(link.href.includes(`${activePage}`)){
        // console.log(`${activePage}`);
        link.classList.add('active');
    }
}) 