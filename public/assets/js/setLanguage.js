function highlightLanguage() {
    const cookies = document.cookie.split('; ');
    // if no language cookie is set, set it to en
    if (!cookies.find(row => row.startsWith('language='))) {
        document.cookie = `language=en; path=/`;
    }
    else {
        const currentLanguage = document.cookie.split('; ').find(row => row.startsWith('language=')).split('=')[1];
        const languageButton = document.querySelector(`.lang-btn[data-lang=${currentLanguage}]`);
        languageButton.classList.add('current-language');
    }
}

highlightLanguage();

function changeLanguage(language) {
    document.cookie = `language=${language}; path=/`;
    document.location.reload();
}

document.querySelectorAll('.lang-btn').forEach(button => {
    button.addEventListener('click', () => {
        changeLanguage(button.dataset.lang);
    });
});
