'use client'

import React from 'react';
import { useState } from 'react'
import { Dialog, DialogPanel, Popover, PopoverButton, PopoverGroup, PopoverPanel } from '@headlessui/react'
import {
    ArrowPathIcon,
    Bars3Icon,
    ChartPieIcon,
    CursorArrowRaysIcon,
    FingerPrintIcon,
    SquaresPlusIcon,
    XMarkIcon,
} from '@heroicons/react/24/outline'
import { ChevronDownIcon, PhoneIcon, PlayCircleIcon } from '@heroicons/react/20/solid'

const products = [
    { name: 'Nos assurances', description: 'Get a better understanding of your traffic', href: '#', icon: ChartPieIcon },
    { name: 'Assistance', description: 'Speak directly to your customers', href: '#', icon: CursorArrowRaysIcon },
    { name: 'Notre entreprise', description: 'Your customers’ data will be safe and secure', href: '#', icon: FingerPrintIcon },
]
const callsToAction = [
    { name: 'Watch demo', href: '#', icon: PlayCircleIcon },
    { name: 'Contact sales', href: '#', icon: PhoneIcon },
]
const company = [
    { name: 'About us', href: '#', description: 'Learn more about our company values and mission to empower others' },
    { name: 'Careers', href: '#', description: 'Looking for you next career opportunity? See all of our open positions' },
    {
        name: 'Support',
        href: '#',
        description: 'Get in touch with our dedicated support team or reach out on our community forums',
    },
    { name: 'Blog', href: '#', description: 'Read our latest announcements and get perspectives from our team' },
]

export default function Header() {
    const [mobileMenuOpen, setMobileMenuOpen] = useState(false)

    return (
        <div className="inset-x-0 bg-white">
            <nav aria-label="Global" className="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8">
                <div className="flex">
                    <div className="flex">
                        <a href="/" className="-m-1.5 p-1.5">
                            <span className="sr-only">Assurance Genevoise</span>
                        <img alt="Logo de Assurance Genevoise" src="/media/logo/logo.png" className="h-6 w-auto"/>
                        </a>
                    </div>
                    <PopoverGroup className="hidden lg:flex lg:gap-x-8 ml-8">
                        <Popover className="relative">
                            <PopoverButton
                                className="flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900">
                                Nos assurances
                                <ChevronDownIcon aria-hidden="true" className="h-5 w-5 flex-none text-gray-400"/>
                            </PopoverButton>

                            <PopoverPanel
                                transition
                                className="absolute -left-8 top-full z-10 mt-3 w-screen max-w-md overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5 transition data-[closed]:translate-y-1 data-[closed]:opacity-0 data-[enter]:duration-200 data-[leave]:duration-150 data-[enter]:ease-out data-[leave]:ease-in"
                            >
                                <div className="p-4">
                                    {products.map((item) => (
                                        <div
                                            key={item.name}
                                            className="group relative flex gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50"
                                        >
                                            <div
                                                className="mt-1 flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                                <item.icon aria-hidden="true"
                                                           className="h-6 w-6 text-gray-600 group-hover:text-indigo-600"/>
                                            </div>
                                            <div className="flex-auto">
                                                <a href={item.href} className="block font-semibold text-gray-900">
                                                    {item.name}
                                                    <span className="absolute inset-0"/>
                                                </a>
                                                <p className="mt-1 text-gray-600">{item.description}</p>
                                            </div>
                                        </div>
                                    ))}
                                </div>
                                <div className="grid grid-cols-2 divide-x divide-gray-900/5 bg-gray-50">
                                    {callsToAction.map((item) => (
                                        <a
                                            key={item.name}
                                            href={item.href}
                                            className="flex items-center justify-center gap-x-2.5 p-3 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-100"
                                        >
                                            <item.icon aria-hidden="true" className="h-5 w-5 flex-none text-gray-400"/>
                                            {item.name}
                                        </a>
                                    ))}
                                </div>
                            </PopoverPanel>
                        </Popover>
                        <Popover className="relative">
                            <PopoverButton
                                className="flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900">
                                Assistance
                                <ChevronDownIcon aria-hidden="true" className="h-5 w-5 flex-none text-gray-400"/>
                            </PopoverButton>

                            <PopoverPanel
                                transition
                                className="absolute -left-8 top-full z-10 mt-3 w-96 rounded-3xl bg-white p-4 shadow-lg ring-1 ring-gray-900/5 transition data-[closed]:translate-y-1 data-[closed]:opacity-0 data-[enter]:duration-200 data-[leave]:duration-150 data-[enter]:ease-out data-[leave]:ease-in"
                            >
                                {company.map((item) => (
                                    <div key={item.name} className="relative rounded-lg p-4 hover:bg-gray-50">
                                        <a href={item.href}
                                           className="block text-sm font-semibold leading-6 text-gray-900">
                                            {item.name}
                                            <span className="absolute inset-0"/>
                                        </a>
                                        <p className="mt-1 text-sm leading-6 text-gray-600">{item.description}</p>
                                    </div>
                                ))}
                            </PopoverPanel>
                        </Popover>
                        <a href="#" className="text-sm font-semibold leading-6 text-gray-900">
                            Notre entreprise
                        </a>
                    </PopoverGroup>
                </div>
                <div className="flex gap-x-6">
                    <div className="flex flex-1 justify-end gap-x-6 items-center">
                        <div className="flex items-center gap-x-4">
                            <span className="relative flex h-3 w-3">
                                <span
                                    className="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                                <span className="relative inline-flex rounded-full h-3 w-3 bg-primary"></span>
                            </span>
                            <div className="text-sm flex flex-col">
                                <a href="tel:0225624239">
                                    <p className="text-xs">Conseil sur mesure</p>
                                    <p className="text-xs lg:text-sm font-semibold tracking-wider">022 562 42 39</p>
                                </a>
                            </div>
                        </div>
                        <a href="/contact"
                           className="hidden lg:block text-sm font-semibold leading-6 text-white bg-primary px-4 py-3 rounded-full hover:bg-primary-light transition duration-100">
                            Contactez-nous
                            <span aria-hidden="true" className="ml-2">→</span>
                        </a>
                    </div>
                    <div className="flex lg:hidden">
                        <button
                            type="button"
                            onClick={() => setMobileMenuOpen(true)}
                            className="-m-2.5 inline-flex items-center justify-center p-2.5 text-gray-700 bg-gray-50 rounded-full hover:bg-gray-100 transition duration-100"
                        >
                            <span className="sr-only">Open main menu</span>
                            <Bars3Icon aria-hidden="true" className="h-7 w-auto"/>
                        </button>
                    </div>
                </div>
            </nav>
            <Dialog open={mobileMenuOpen} onClose={setMobileMenuOpen} className="lg:hidden">
                <div className="fixed inset-0 z-10"/>
                <DialogPanel
                    className="fixed inset-y-0 right-0 z-10 flex w-full flex-col justify-between overflow-y-auto bg-white sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                    <div className="p-6">
                        <div className="flex items-center justify-between">
                            <a href="#" className="-m-1.5 p-1.5">
                                <span className="sr-only">Assurance Genevoise</span>
                                <img
                                    alt="Logo de Assurance Genevoise mobile"
                                    src="/media/logo/logo.png"
                                    className="h-6 w-auto"
                                />
                            </a>
                            <div className="flex gap-x-6">
                                <div className="flex items-center gap-x-4">
                                    <span className="relative flex h-3 w-3">
                                        <span
                                            className="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                                        <span className="relative inline-flex rounded-full h-3 w-3 bg-primary"></span>
                                    </span>
                                    <div className="text-sm flex flex-col">
                                        <a href="tel:0225624239">
                                            <p className="text-xs">Conseil sur mesure</p>
                                            <p className="text-xs lg:text-sm font-semibold tracking-wider">022 562 42 39</p>
                                        </a>
                                    </div>
                                </div>
                                <button
                                    type="button"
                                    onClick={() => setMobileMenuOpen(false)}
                                    className="-m-2.5 p-2.5 text-gray-700 bg-gray-50 rounded-full hover:bg-gray-100 transition duration-100"
                                >
                                    <span className="sr-only">Close menu</span>
                                    <XMarkIcon aria-hidden="true" className="h-7 w-auto"/>
                                </button>
                            </div>
                        </div>
                        <div className="mt-6 flow-root">
                            <div className="-my-6 divide-y divide-gray-500/10">
                                <div className="space-y-2 py-6">
                                    {products.map((item) => (
                                        <a
                                            key={item.name}
                                            href={item.href}
                                            className="group -mx-3 flex items-center gap-x-6 rounded-lg p-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
                                        >
                                            <div
                                                className="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                                <item.icon aria-hidden="true" className="h-6 w-6 text-gray-600 group-hover:text-primary" />
                                            </div>
                                            {item.name}
                                        </a>
                                    ))}
                                </div>
                                <div className="space-y-2 py-6">
                                    {company.map((item) => (
                                        <a
                                            key={item.name}
                                            href={item.href}
                                            className="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
                                        >
                                            {item.name}
                                        </a>
                                    ))}
                                </div>
                                <div className="space-y-2 py-6">
                                    <a href="/contact"
                                       className="-mx-4 block w-full text-center text-sm font-semibold leading-6 text-white bg-primary px-4 py-3 rounded-full hover:bg-primary-light transition duration-100">
                                        Contactez-nous
                                        <span aria-hidden="true" className="ml-2">→</span>
                                    </a>
                                    <a href="#"
                                       className="-mx-3 w-full flex gap-x-1.5 text-sm font-semibold leading-6 text-gray-900 bg-gray-50 px-4 py-3 rounded-full items-center justify-center hover:bg-gray-100 transition duration-100">
                                        <img src="/media/site/2.jpg" alt=""
                                             className="w-7 h-7 rounded-full"/>
                                        <span className="text-sm">On vous rappelle</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </DialogPanel>
            </Dialog>
        </div>
    )
}
