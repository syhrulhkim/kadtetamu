declare global {
    function route(name?: string, params?: any, absolute?: boolean): string;
    namespace route {
        function current(name?: string): boolean;
    }
    
    interface Window {
        _: any;
        axios: any;
    }
}

/// <reference types="vite/client" />

// Extend the existing ImportMetaEnv interface
interface ImportMetaEnv {
    readonly VITE_APP_NAME: string;
    readonly VITE_APP_ENV: string;
    readonly VITE_APP_DEBUG: string;
    readonly VITE_APP_URL: string;
    // Add more environment variables as needed
}

// Module declarations for component imports
declare module '@/Components/ApplicationLogo' {
    import { ComponentType } from 'react';
    const ApplicationLogo: ComponentType<any>;
    export default ApplicationLogo;
}

declare module '@/Components/Dropdown' {
    import { ComponentType } from 'react';
    interface DropdownComponent extends ComponentType<any> {
        Trigger: ComponentType<any>;
        Content: ComponentType<any>;
        Link: ComponentType<any>;
    }
    const Dropdown: DropdownComponent;
    export default Dropdown;
}

declare module '@/Components/NavLink' {
    import { ComponentType } from 'react';
    const NavLink: ComponentType<any>;
    export default NavLink;
}

declare module '@/Components/ResponsiveNavLink' {
    import { ComponentType } from 'react';
    const ResponsiveNavLink: ComponentType<any>;
    export default ResponsiveNavLink;
}

declare module '@/Components/PrimaryButton' {
    import { ComponentType } from 'react';
    const PrimaryButton: ComponentType<any>;
    export default PrimaryButton;
}

declare module '@/Components/SecondaryButton' {
    import { ComponentType } from 'react';
    const SecondaryButton: ComponentType<any>;
    export default SecondaryButton;
}

declare module '@/Components/DangerButton' {
    import { ComponentType } from 'react';
    const DangerButton: ComponentType<any>;
    export default DangerButton;
}

declare module '@/Components/InputError' {
    import { ComponentType } from 'react';
    const InputError: ComponentType<any>;
    export default InputError;
}

declare module '@/Components/InputLabel' {
    import { ComponentType } from 'react';
    const InputLabel: ComponentType<any>;
    export default InputLabel;
}

declare module '@/Components/Modal' {
    import { ComponentType } from 'react';
    const Modal: ComponentType<any>;
    export default Modal;
}

declare module '@/Components/TextInput' {
    import { ComponentType } from 'react';
    const TextInput: ComponentType<any>;
    export default TextInput;
}

declare module '@/Components/Checkbox' {
    import { ComponentType } from 'react';
    const Checkbox: ComponentType<any>;
    export default Checkbox;
}

declare module '@/Layouts/GuestLayout' {
    import { ComponentType } from 'react';
    const GuestLayout: ComponentType<any>;
    export default GuestLayout;
}

export {};
