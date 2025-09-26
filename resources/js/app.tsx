import '../css/app.css';
import './bootstrap';

import { createRoot } from 'react-dom/client';
import { createInertiaApp } from '@inertiajs/react';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => {
        const pages = import.meta.glob('./Pages/**/*.{jsx,tsx}');
        console.log('Available pages:', Object.keys(pages));
        console.log('Looking for page:', name);

        // Try different variations
        const variations = [
            `./Pages/${name}.jsx`,
            `./Pages/${name}.tsx`,
            `./Pages/${name}`,
        ];

        for (const variation of variations) {
            if (pages[variation]) {
                console.log('Found page:', variation);
                return pages[variation]();
            }
        }

        throw new Error(`Page not found: ${name}. Available pages: ${Object.keys(pages).join(', ')}`);
    },
    setup({ el, App, props }) {
        const root = createRoot(el);

        root.render(<App {...props} />);
    },
    progress: {
        color: '#4B5563',
    },
});
