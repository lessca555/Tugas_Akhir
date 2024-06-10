@role('admin')
<div class="hidden relative lg:flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 h-[calc(100vh-2rem)] w-full max-w-[20rem] p-4 shadow-xl shadow-blue-gray-900/5">
    <nav class="flex flex-col gap-1 min-w-[240px] p-2 font-sans text-base font-normal text-gray-700">
        <x-nav-link :href="route('dash')" :active="request()->routeIs('dash')" wire:navigate>
            <div class="w-[40px] flex justify-center">
                <i class="fa-solid fa-house"></i>
            </div>
            Dashboard
        </x-nav-link>
        <x-nav-link :href="route('sales')" :active="request()->routeIs('sales')" wire:navigate>
            <div class="w-[40px] flex justify-center">
                <i class="fa-solid fa-s"></i>
            </div>
            Sales
        </x-nav-link>
        <x-nav-link :href="route('inventory')" :active="request()->routeIs('inventory')" wire:navigate>
            <div class="w-[40px] flex justify-center">
                <i class="fa-solid fa-warehouse pr-3"></i>
            </div>
            Inventory
        </x-nav-link>
        <x-nav-link :href="route('procurement')" :active="request()->routeIs('procurement')" wire:navigate>
            <div class="w-[40px] flex justify-center">
                <i class="fa-solid fa-user-tie"></i>
            </div>
            Procurement
        </x-nav-link>
        <x-nav-link :href="route('stats')" :active="request()->routeIs('stats')" wire:navigate>
            <div class="w-[40px] flex justify-center">
                <i class="fa-solid fa-chart-line"></i>
            </div>
            Stats Analisa
        </x-nav-link>
        <x-nav-link :href="route('create_admin')" :active="request()->routeIs('create_admin')" wire:navigate>
            <div class="w-[40px] flex justify-center">
                <i class="fa-solid fa-user-plus"></i>
            </div>
            Create Admin
        </x-nav-link>
    </nav>
</div>
@elserole('user')
    <div class="hidden relative lg:flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 h-[calc(100vh-2rem)] w-full max-w-[20rem] p-4 shadow-xl shadow-blue-gray-900/5">
        <nav class="flex flex-col gap-1 min-w-[240px] p-2 font-sans text-base font-normal text-gray-700">
            <x-nav-link :href="route('dash')" :active="request()->routeIs('dash')" wire:navigate>
                <div class="w-[40px] flex justify-center">
                    <i class="fa-solid fa-house"></i>
                </div>
                Dashboard
            </x-nav-link>
            <x-nav-link :href="route('sales')" :active="request()->routeIs('sales')" wire:navigate>
                <div class="w-[40px] flex justify-center">
                    <i class="fa-solid fa-s"></i>
                </div>
                Sales
            </x-nav-link>
            <x-nav-link :href="route('inventory')" :active="request()->routeIs('inventory')" wire:navigate>
                <div class="w-[40px] flex justify-center">
                    <i class="fa-solid fa-warehouse pr-3"></i>
                </div>
                Inventory
            </x-nav-link>
            <x-nav-link :href="route('procurement')" :active="request()->routeIs('procurement')" wire:navigate>
                <div class="w-[40px] flex justify-center">
                    <i class="fa-solid fa-user-tie"></i>
                </div>
                Procurement
            </x-nav-link>
            <x-nav-link :href="route('stats')" :active="request()->routeIs('stats')" wire:navigate>
                <div class="w-[40px] flex justify-center">
                    <i class="fa-solid fa-chart-line"></i>
                </div>
                Stats Analisa
            </x-nav-link>
        </nav>
    </div>

@endrole
