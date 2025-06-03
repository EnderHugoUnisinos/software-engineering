// public/js/spa.js
document.addEventListener('DOMContentLoaded', () => {
    const contentContainer = document.querySelector('main');
    const navLinks = document.querySelectorAll('header a[data-page]');
    let currentSection = null;

    // Improved section loading with loading state and history management
    const loadSection = async (section) => {
        if (section === currentSection) return;
        
        currentSection = section;
        contentContainer.innerHTML = '<div class="loading">Carregando...</div>';
        
        try {
            const response = await fetch(`/pages/usuario/section/${section}.php`);
            if (!response.ok) throw new Error(`HTTP error! status: ${response.status}`);
            contentContainer.innerHTML = await response.text();
            history.pushState({ section }, '', `#${section}`);
            highlightActiveLink(section);
        } catch (error) {
            console.error('Fetch error:', error);
            contentContainer.innerHTML = `
                <div class="error">
                    <p>Erro ao carregar o conteúdo.</p>
                    <button onclick="location.reload()">Recarregar</button>
                </div>
            `;
        }
    };

    // Update active link styling
    const highlightActiveLink = (section) => {
        navLinks.forEach(link => {
            link.classList.toggle('active', link.dataset.page === section);
        });
    };

    const updatePageTitle = (section) => {
        const titleMap = {
            'home': 'Dashboard',
            'calendario': 'Calendario de eventos',
            'atendimento': 'Consulta de atendimentos',
            'localizacoes': 'Consulta de localizações',
            'perfil': 'Perfil de usuario'
        };
        
        const title = titleMap[section] || 'Usuario';
        document.getElementById('page-title').textContent = title;
        document.title = `${title} | Usuario`;
    };

    navLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            loadSection(e.target.closest('a').dataset.page);
        });
    });

    // Handle browser history navigation
    window.addEventListener('popstate', (e) => {
        const section = e.state?.section || 'home';
        loadSection(section);
    });

    // Initial load logic:
    const initialSection = window.location.hash.slice(1) || 'home';
    loadSection(initialSection);
});