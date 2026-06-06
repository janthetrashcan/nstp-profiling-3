import {
    IconHome,
    IconUser,
    IconChalkboardTeacher,
    IconLayoutList,
    IconBook2,
    IconArticle,
} from '@tabler/icons-vue';
import type { NavSection } from '../types';

export const NAV_STRUCTURE: NavSection[] = [
    {
        showHeader: false,
        header: 'Dashboard',
        links: [
            {
                text: 'Dashboard',
                href: '/dashboard',
                icon: IconHome,
            },
        ],
    },
    {
        showHeader: true,
        header: 'Registries',
        links: [
            {
                text: 'Students',
                href: '/students',
                icon: IconUser,
            },
            {
                text: 'Formators',
                href: '/formators',
                icon: IconChalkboardTeacher,
            },
        ],
    },
    {
        showHeader: true,
        header: 'Management',
        links: [
            {
                text: 'Components',
                href: '/components',
                icon: IconLayoutList,
            },
            {
                text: 'Classes',
                href: '/classes',
                icon: IconBook2,
            },
            {
                text: 'Programs',
                href: '/programs',
                icon: IconArticle,
            },
        ],
    },
];
