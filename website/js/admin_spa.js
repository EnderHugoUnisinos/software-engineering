document.addEventListener('DOMContentLoaded', () => {
    const contentContainer = document.querySelector('main');
    const navLinks = document.querySelectorAll('aside a[data-page]');
    let currentSection = null;

    const loadSection = async (section) => {
        if (section === currentSection) return;
        
        currentSection = section;
        contentContainer.innerHTML = '<div class="loading">Carregando...</div>';
        
        try {
            const response = await fetch(`/pages/administrador/section/${section}.php`);
            if (!response.ok) throw new Error(`HTTP error! status: ${response.status}`);
            const html = await response.text();
            contentContainer.innerHTML = html;

            contentContainer.querySelectorAll('script').forEach(script => {
                const newScript = document.createElement('script');
                newScript.text = script.text;
                script.parentNode.replaceChild(newScript, script);
            });

            history.pushState({ section }, '', `#${section}`);
            highlightActiveLink(section);
        } catch (error) {
            console.error('Fetch error:', error);
            contentContainer.innerHTML = `
                <div class="error">
                    <div>
                        <p>Ocorreu um erro</p>
                        <button type="button" onclick="location.reload()">Recarregar</button>
                    </div>
                </div>
            `;
        }
    };

    const highlightActiveLink = (section) => {
        navLinks.forEach(link => {
            link.classList.toggle('active', link.dataset.page === section);
        });
    };

    const updatePageTitle = (section) => {
        const titleMap = {
            'default/home': 'Dashboard',
            'atendimentos/cadastro': 'Cadastro de Atendimentos',
            'estoque/consulta': 'Consulta de Estoque'
        };
        
        const title = titleMap[section] || 'Administrador';
        document.getElementById('page-title').textContent = title;
        document.title = `${title} | Administrador`;
    };

    navLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            loadSection(e.target.closest('a').dataset.page);
        });
    });

    // Handle browser history navigation
    window.addEventListener('popstate', (e) => {
        const section = e.state?.section || 'default/home';
        loadSection(section);
    });

    // Initial load logic:
    const initialSection = window.location.hash.slice(1) || 'default/home';
    loadSection(initialSection);
});