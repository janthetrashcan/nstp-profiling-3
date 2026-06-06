import type { Component } from 'vue';

export interface NavLink {
    text: string;
    href: string;
    icon?: Component;
}

export interface NavSection {
    showHeader?: boolean;
    header: string;
    links: NavLink[];
}
