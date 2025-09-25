<x-layouts.app :title="__('Página Web Tienda')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
    
        <!-- primary Button -->
        <button type="button" class="whitespace-nowrap rounded-radius bg-primary border border-primary px-4 py-2 text-sm font-medium tracking-wide text-on-primary transition hover:opacity-75 text-center focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-primary-dark dark:border-primary-dark dark:text-on-primary-dark dark:focus-visible:outline-primary-dark">Primario</button>
        
        <!-- table -->
        <div class="overflow-hidden w-full overflow-x-auto rounded-radius border border-outline dark:border-outline-dark">
        <table class="w-full text-left text-sm text-on-surface dark:text-on-surface-dark">
            <thead class="border-b border-outline bg-surface-alt text-sm text-on-surface-strong dark:border-outline-dark dark:bg-surface-dark-alt dark:text-on-surface-dark-strong">
                <tr>
                    <th scope="col" class="p-4">IDUsuario</th>
                    <th scope="col" class="p-4">Nombre</th>
                    <th scope="col" class="p-4">Correo Electrónico</th>
                    <th scope="col" class="p-4">Membresía</th>
                </tr>
            </thead>
        <tbody class="divide-y divide-outline dark:divide-outline-dark">
                <tr>
                    <td class="p-4">2335</td>
                    <td class="p-4">Kevin Mory</td>
                    <td class="p-4">mory@gmail.com</td>
                    <td class="p-4">Silver</td>
                </tr>
                <tr>
                    <td class="p-4">2338</td>
                    <td class="p-4">Serge Lopez</td>
                    <td class="p-4">serge2@gmail.com</td>
                    <td class="p-4">Gold</td>
                </tr>
                <tr>
                    <td class="p-4">2342</td>
                    <td class="p-4">Ebert Ruiz</td>
                    <td class="p-4">ebertruiz@gmail.com</td>
                    <td class="p-4">Gold</td>
                </tr>
        </tbody>
    </table>
</div>

        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
        </div>
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
        </div>
    </div>
</x-layouts.app>
